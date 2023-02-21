// import { hotels } from "./hotels";
// console.log(hotels);

let map,
  infoWindow,
  cluster,
  currentPosition,
  geocoder,
  markers,
  borderRegion,
  regions,
  currentHotels;

let svgMarker = {
  path: "M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z",
  fillColor: "#d52a52",
  fillOpacity: 1,
  strokeWeight: 0.15,
  rotation: 0,
  scale: 1.5,
  anchor: "",
};

// Barcelona
const barcelona = {
  lat: 41.38760307827822,
  lng: 2.168002063018127,
};

// Initiates the map with center in Barcelona
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 5,
    center: barcelona,
  });

  currentHotels = hotels;

  // Creates the marker that will be used to mark the hotels in the map
  svgMarker.anchor = new google.maps.Point(15, 30);

  // Creates a polygon for all regions in Spain
  regions = regionsSpain.map((region) => {
    return new google.maps.Polygon({
      paths: region,
      strokeColor: "#FF0000",
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: "#FF0000",
      fillOpacity: 0.1,
    });
  });

  // Creates a mark for each hotel
  markers = hotels.map((hotel) => {
    const marker = new google.maps.Marker({
      position: hotel,
      icon: svgMarker,
      map: map,
    });
    return marker;
  });

  geocoder = new google.maps.Geocoder();
  borderRegion = new google.maps.Polygon();
  infoWindow = new google.maps.InfoWindow();
  cluster = new markerClusterer.MarkerClusterer({ map, markers });

  // Dropdown for selecting any region of Spain
  const regionsSelect = document.querySelector(".regions");
  map.controls[google.maps.ControlPosition.LEFT_TOP].push(regionsSelect);
  regionsSelect.addEventListener("change", (e) => {
    getRegionBorder(borderRegion, e.target.value);
  });

  // Gets user´s current position
  const locationButton = document.querySelector(".button-location");
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener("click", () => {
    getMyPosition(map);
  });

  // Gets the distance from the user´s position to all hotels
  const matrixButton = document.querySelector(".button-matrix");
  map.controls[google.maps.ControlPosition.TOP_RIGHT].push(matrixButton);
  matrixButton.addEventListener("click", () => {
    getDistanceMatrix(currentPosition);
  });

  const findLocation = document.querySelector(".button-find-location");
  findLocation.addEventListener("click", () => {
    codeAddress(geocoder, map, hotels);
  });
}

// Collects the current location and displays it on the map
function getMyPosition(map) {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      (position) => {
        currentPosition = {
          lat: position.coords.latitude,
          lng: position.coords.longitude,
        };
        infoWindow.setPosition(currentPosition);
        infoWindow.setContent("Your current location");
        infoWindow.open(map);
        map.setCenter(currentPosition);
        map.setZoom(10);
      },
      () => {
        handleLocationError(true, infoWindow, map.getCenter());
      }
    );
  } else {
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

// Geocodes the searched location and displays it on the map
function codeAddress(geocoder, map, hotels) {
  let address = document.querySelector(".address").value;
  let service = new google.maps.DistanceMatrixService();
  let result = null;

  geocoder.geocode({ address: address }, function (results, status) {
    if (status === "OK") {
      infoWindow.setPosition(results[0].geometry.location);
      infoWindow.setContent("Address location");
      infoWindow.open(map);
      map.setCenter(results[0].geometry.location);
      map.setZoom(12);
      currentPosition = results[0].geometry.location;
    }
  });
}

// Returns the distance between the current location and the given hotels
function getDistanceMatrix(currentPosition) {
  if (currentPosition) {
    let service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix(
      {
        origins: [currentPosition],
        destinations: currentHotels,
        travelMode: "DRIVING",
      },
      printDistanceList
    );
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}

// Creates a table of the distance between the current location and existing hotels
function printDistanceList(response, status) {
  const locationList = document.querySelector(".location-list");

  const table = document.createElement("table");
  table.classList.add("location-table");
  locationList.appendChild(table);

  const thead = document.createElement("thead");
  table.appendChild(thead);

  const trTitle = document.createElement("tr");
  thead.appendChild(trTitle);

  const titles = ["Hotel Address", "Distance"];

  titles.forEach((title) => {
    const th = document.createElement("th");
    th.innerText = title;
    trTitle.appendChild(th);
  });

  const listHotels = getHotelsOrdered(response);

  listHotels.map((hotel, index) => {
    const trdata = document.createElement("tr");
    table.appendChild(trdata);

    const tdDestination = document.createElement("td");
    tdDestination.innerText = hotel.destination;
    trdata.appendChild(tdDestination);

    const tdDistance = document.createElement("td");
    tdDistance.innerText = `${Math.round(hotel.distance / 1000)} km`;
    trdata.appendChild(tdDistance);
  });
}

// Sorts the given hotels by their distance and returns them
function getHotelsOrdered(response) {
  let listHotels = [];

  response.rows[0].elements.map((item, index) => {
    const hotel = {
      destination: response.destinationAddresses[index],
      origin: response.originAddresses[0],
      distance: item.distance.value,
      duration: item.duration.text,
    };

    listHotels.push(hotel);
  });

  listHotels = listHotels.sort((a, b) => {
    return a.distance - b.distance;
  });

  return listHotels;
}

// Picks up the selected region and plots it on the map with the hotels in the area
const getRegionBorder = (borderRegion, region) => {
  regions.forEach((item) => {
    item.setMap(null);
  });

  cluster.clearMarkers();

  if (region === "Spain") {
    currentHotels = hotels;
  } else {
    currentHotels = hotels.filter(
      (hotel) => hotel.region === comunitiesSpain[region]
    );
    regions[region].setMap(map);
  }

  svgMarker.anchor = new google.maps.Point(15, 30);

  cluster.addMarkers(
    currentHotels.map((hotel) => {
      return new google.maps.Marker({
        position: hotel,
        icon: svgMarker,
        map: map,
      });
    })
  );

  if (currentHotels.length > 0) {
    map.setCenter(currentHotels[0]);
    map.setZoom(6);
  }
};

window.initMap = initMap;
