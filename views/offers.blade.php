@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    @section('head')
        @parent
    @endsection
</head>

<body>
    @section('navbar')
        @parent
    @endsection

    @section('content')
    <main>
      <!-- Subheader Section -->
      <section class="subheaderSection">
        <p class="tourSection__container--subtitleDesktop">
          We Make You Feel Comfortable
        </p>
        <p class="subheaderSection__subtitle">THE ULTIMATE LUXURY</p>
        <h1 class="subheaderSection__title">Our Offers</h1>
        <div class="subheaderSection__navigation">
          <p class="subheaderSection__navigation__page">Home</p>
          <p class="subheaderSection__navigation__page--active">Offers</p>
        </div>
      </section>
      <!-- Offer Room Section -->
      <section class="offerRoomSection">
        @foreach ($rooms as $room)
        <div class="offerRoomSection__room">
          <div class="offerRoomSection__room__priceContainer">
            <p class="offerRoomSection__room__priceContainer--gold">${{$room["room_rate"] /100}}</p>
            <p class="offerRoomSection__room__priceContainer--perNightGold">
              /Night
            </p>
            <p class="offerRoomSection__room__priceContainer--red">${{$room["room_offer"] /100}}</p>
            <p class="offerRoomSection__room__priceContainer--perNightRed">
              /Night
            </p>
          </div>
          @if (strpos($room["photo"], 'http') === false)
              <img
                class="offerRoomSection__room__img"
                src="https://mktmarketingdigital.com/wp-content/plugins/elementor/assets/images/placeholder.png"
                alt="Hotel room"
              />
              @else
              <img
                class="offerRoomSection__room__img"
                src={{$room["photo"]}}
                alt="Hotel room"
              />
              @endif
          <div class="offerRoomSection__room__bigContainer">
            <div
              class="offerRoomSection__room__bigContainer__priceContainerDesktop"
            >
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--gold"
              >
              ${{$room["room_rate"] /100}}
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--perNightGold"
              >
                /Night
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--red"
              >
              ${{$room["room_offer"] /100}}
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--perNightRed"
              >
                /Night
              </p>
            </div>
            <p class="offerRoomSection__room__bigContainer__subtitle">
            UNIQUE EXPERIENCE
            </p>
            <h1 class="offerRoomSection__room__bigContainer__title">
            {{$room["bed_type"]}}
            </h1>
            <div class="offerRoomSection__room__bigContainer__separation"></div>
            <div class="offerRoomSection__room__bigContainer__smallContainer">
              <p
                class="offerRoomSection__room__bigContainer__smallContainer__description"
              >
              {{$room["description"]}}
              </p>
              <div
                class="offerRoomSection__room__bigContainer__smallContainer__amenitiesContainer"
              >
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/1amenity-airconditioning.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Air conditioner
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/2amenity-wifi.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    High speed WiFi
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/3amenity-breakfast.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Breakfast
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/4amenity-kitchen.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Kitchen
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/5amenity-cleaning.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Cleaning
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/6amenity-shower.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Shower
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/7amenity-grocery.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Grocery
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/8amenity-bed.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Single bed
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/9amenity-shop.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Shop near
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/10amenity-towels.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Towels
                  </p>
                </div>
              </div>
              <a href="./room-details.php?id={{$room["id"]}}" class="btn">BOOK NOW</a>
            </div>
          </div>
        </div>
        @endforeach
        
        <!-- <div class="offerRoomSection__room">
          <div class="offerRoomSection__room__priceContainer">
            <p class="offerRoomSection__room__priceContainer--gold">$500</p>
            <p class="offerRoomSection__room__priceContainer--perNightGold">
              /Night
            </p>
            <p class="offerRoomSection__room__priceContainer--red">$345</p>
            <p class="offerRoomSection__room__priceContainer--perNightRed">
              /Night
            </p>
          </div>
          <img
            class="offerRoomSection__room__img"
            src="./resources/assets/images/room2.jpg"
            alt="Room image"
          />
          <div class="offerRoomSection__room__bigContainer">
            <div
              class="offerRoomSection__room__bigContainer__priceContainerDesktop"
            >
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--gold"
              >
                $500
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--perNightGold"
              >
                /Night
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--red"
              >
                $345
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--perNightRed"
              >
                /Night
              </p>
            </div>
            <p class="offerRoomSection__room__bigContainer__subtitle">
              DOUBLE BED
            </p>
            <h1 class="offerRoomSection__room__bigContainer__title">
              Luxury Double Bed
            </h1>
            <div class="offerRoomSection__room__bigContainer__separation"></div>
            <div class="offerRoomSection__room__bigContainer__smallContainer">
              <p
                class="offerRoomSection__room__bigContainer__smallContainer__description"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehend erit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.
              </p>
              <div
                class="offerRoomSection__room__bigContainer__smallContainer__amenitiesContainer"
              >
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/1amenity-airconditioning.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Air conditioner
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/2amenity-wifi.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    High speed WiFi
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/3amenity-breakfast.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Breakfast
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/4amenity-kitchen.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Kitchen
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/5amenity-cleaning.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Cleaning
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/6amenity-shower.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Shower
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/7amenity-grocery.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Grocery
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/8amenity-bed.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Single bed
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/9amenity-shop.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Shop near
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/10amenity-towels.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Towels
                  </p>
                </div>
              </div>
              <button class="btn">BOOK NOW</button>
            </div>
          </div>
        </div>
        <div class="offerRoomSection__room">
          <div class="offerRoomSection__room__priceContainer">
            <p class="offerRoomSection__room__priceContainer--gold">$500</p>
            <p class="offerRoomSection__room__priceContainer--perNightGold">
              /Night
            </p>
            <p class="offerRoomSection__room__priceContainer--red">$345</p>
            <p class="offerRoomSection__room__priceContainer--perNightRed">
              /Night
            </p>
          </div>
          <img
            class="offerRoomSection__room__img"
            src="./resources/assets/images/room3.jpg"
            alt="Room image"
          />
          <div class="offerRoomSection__room__bigContainer">
            <div
              class="offerRoomSection__room__bigContainer__priceContainerDesktop"
            >
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--gold"
              >
                $500
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--perNightGold"
              >
                /Night
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--red"
              >
                $345
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--perNightRed"
              >
                /Night
              </p>
            </div>
            <p class="offerRoomSection__room__bigContainer__subtitle">
              DOUBLE BED
            </p>
            <h1 class="offerRoomSection__room__bigContainer__title">
              Luxury Double Bed
            </h1>
            <div class="offerRoomSection__room__bigContainer__separation"></div>
            <div class="offerRoomSection__room__bigContainer__smallContainer">
              <p
                class="offerRoomSection__room__bigContainer__smallContainer__description"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehend erit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.
              </p>
              <div
                class="offerRoomSection__room__bigContainer__smallContainer__amenitiesContainer"
              >
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/1amenity-airconditioning.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Air conditioner
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/2amenity-wifi.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    High speed WiFi
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/3amenity-breakfast.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Breakfast
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/4amenity-kitchen.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Kitchen
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/5amenity-cleaning.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Cleaning
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/6amenity-shower.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Shower
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/7amenity-grocery.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Grocery
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/8amenity-bed.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Single bed
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/9amenity-shop.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Shop near
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/10amenity-towels.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Towels
                  </p>
                </div>
              </div>
              <button class="btn">BOOK NOW</button>
            </div>
          </div>
        </div>
        <div class="offerRoomSection__room">
          <div class="offerRoomSection__room__priceContainer">
            <p class="offerRoomSection__room__priceContainer--gold">$500</p>
            <p class="offerRoomSection__room__priceContainer--perNightGold">
              /Night
            </p>
            <p class="offerRoomSection__room__priceContainer--red">$345</p>
            <p class="offerRoomSection__room__priceContainer--perNightRed">
              /Night
            </p>
          </div>
          <img
            class="offerRoomSection__room__img"
            src="./resources/assets/images/room4.jpeg"
            alt="Room image"
          />
          <div class="offerRoomSection__room__bigContainer">
            <div
              class="offerRoomSection__room__bigContainer__priceContainerDesktop"
            >
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--gold"
              >
                $500
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--perNightGold"
              >
                /Night
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--red"
              >
                $345
              </p>
              <p
                class="offerRoomSection__room__bigContainer__priceContainerDesktop--perNightRed"
              >
                /Night
              </p>
            </div>
            <p class="offerRoomSection__room__bigContainer__subtitle">
              DOUBLE BED
            </p>
            <h1 class="offerRoomSection__room__bigContainer__title">
              Luxury Double Bed
            </h1>
            <div class="offerRoomSection__room__bigContainer__separation"></div>
            <div class="offerRoomSection__room__bigContainer__smallContainer">
              <p
                class="offerRoomSection__room__bigContainer__smallContainer__description"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehend erit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.
              </p>
              <div
                class="offerRoomSection__room__bigContainer__smallContainer__amenitiesContainer"
              >
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/1amenity-airconditioning.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Air conditioner
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/2amenity-wifi.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    High speed WiFi
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/3amenity-breakfast.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Breakfast
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/4amenity-kitchen.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Kitchen
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/5amenity-cleaning.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Cleaning
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/6amenity-shower.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Shower
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/7amenity-grocery.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Grocery
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/8amenity-bed.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Single bed
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/9amenity-shop.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Shop near
                  </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                  <img
                    class="amenitiesSection__container__subcontainer__img"
                    src="./resources/assets/icons/10amenity-towels.png"
                    alt="Amenity icon"
                  />
                  <p class="amenitiesSection__container__subcontainer__text">
                    Towels
                  </p>
                </div>
              </div>
              <button class="btn">BOOK NOW</button>
            </div>
          </div>
        </div> -->
      </section>
      <!-- Popular Rooms Section -->
      <section
        class="popularRoomsSection relatedRoomsSection singleRoomAvailabilitySection"
      >
        <p class="popularRoomsSection__subtitle">POPULAR LIST</p>
        <h1 class="popularRoomsSection__title">Popular Rooms</h1>
        <div class="swiper roomSlider__slides">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div style="position: relative">
                <img
                  class="roomSlider__slides--extras"
                  src="./resources/assets/images/roomExtras.png"
                  alt="Room extras"
                />
                <img
                  class="roomSlider__slides--roomImg"
                  src="./resources/assets/images/room1.jpg"
                  alt="Hotel room"
                />
                <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                <p class="roomSlider__slides--description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <div class="roomSlider__slides__container">
                  <p class="roomSlider__slides__container--price">
                    $345<span
                      class="roomSlider__slides__container--price--perNight"
                      >/Night</span
                    >
                  </p>
                  <p class="roomSlider__slides__container--bookNow">Book now</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div style="position: relative">
                <img
                  class="roomSlider__slides--extras"
                  src="./resources/assets/images/roomExtras.png"
                  alt="Room extras"
                />
                <img
                  class="roomSlider__slides--roomImg"
                  src="./resources/assets/images/room2.jpg"
                  alt="Hotel room"
                />
                <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                <p class="roomSlider__slides--description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <div class="roomSlider__slides__container">
                  <p class="roomSlider__slides__container--price">
                    $345<span
                      class="roomSlider__slides__container--price--perNight"
                      >/Night</span
                    >
                  </p>
                  <p class="roomSlider__slides__container--bookNow">Book now</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div style="position: relative">
                <img
                  class="roomSlider__slides--extras"
                  src="./resources/assets/images/roomExtras.png"
                  alt="Room extras"
                />
                <img
                  class="roomSlider__slides--roomImg"
                  src="./resources/assets/images/room3.jpg"
                  alt="Hotel room"
                />
                <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                <p class="roomSlider__slides--description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <div class="roomSlider__slides__container">
                  <p class="roomSlider__slides__container--price">
                    $345<span
                      class="roomSlider__slides__container--price--perNight"
                      >/Night</span
                    >
                  </p>
                  <p class="roomSlider__slides__container--bookNow">Book now</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div style="position: relative">
                <img
                  class="roomSlider__slides--extras"
                  src="./resources/assets/images/roomExtras.png"
                  alt="Room extras"
                />
                <img
                  class="roomSlider__slides--roomImg"
                  src="./resources/assets/images/room4.jpeg"
                  alt="Hotel room"
                />
                <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                <p class="roomSlider__slides--description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <div class="roomSlider__slides__container">
                  <p class="roomSlider__slides__container--price">
                    $345<span
                      class="roomSlider__slides__container--price--perNight"
                      >/Night</span
                    >
                  </p>
                  <p class="roomSlider__slides__container--bookNow">Book now</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!-- Related rooms for desktop view -->
        <div class="popularRoomsSection__desktopContainer">
          <div class="popularRoomsSection__swiper__slide">
            <div style="position: relative">
              <img
                class="popularRoomsSection__swiper__slide__extras"
                src="./resources/assets/images/roomExtras.png"
                alt="Room extras"
              />
              <img
                class="popularRoomsSection__swiper__slide__roomImg"
                src="./resources/assets/images/room1.jpg"
                alt="Hotel room"
              />
              <h1 class="popularRoomsSection__swiper__slide__title">
                Minimal Duplex Room
              </h1>
              <p class="popularRoomsSection__swiper__slide__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <div class="popularRoomsSection__swiper__slide__container">
                <p class="popularRoomsSection__swiper__slide__container__price">
                  $345<span
                    class="popularRoomsSection__swiper__slide__container__price--perNight"
                    >/Night</span
                  >
                </p>
                <p
                  class="popularRoomsSection__swiper__slide__container__bookNow"
                >
                  Book now
                </p>
              </div>
            </div>
          </div>
          <div class="popularRoomsSection__swiper__slide">
            <div style="position: relative">
              <img
                class="popularRoomsSection__swiper__slide__extras"
                src="./resources/assets/images/roomExtras.png"
                alt="Room extras"
              />
              <img
                class="popularRoomsSection__swiper__slide__roomImg"
                src="./resources/assets/images/room2.jpg"
                alt="Hotel room"
              />
              <h1 class="popularRoomsSection__swiper__slide__title">
                Minimal Duplex Room
              </h1>
              <p class="popularRoomsSection__swiper__slide__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <div class="popularRoomsSection__swiper__slide__container">
                <p class="popularRoomsSection__swiper__slide__container__price">
                  $345<span
                    class="popularRoomsSection__swiper__slide__container__price--perNight"
                    >/Night</span
                  >
                </p>
                <p
                  class="popularRoomsSection__swiper__slide__container__bookNow"
                >
                  Book now
                </p>
              </div>
            </div>
          </div>
          <div class="popularRoomsSection__swiper__slide">
            <div style="position: relative">
              <img
                class="popularRoomsSection__swiper__slide__extras"
                src="./resources/assets/images/roomExtras.png"
                alt="Room extras"
              />
              <img
                class="popularRoomsSection__swiper__slide__roomImg"
                src="./resources/assets/images/room3.jpg"
                alt="Hotel room"
              />
              <h1 class="popularRoomsSection__swiper__slide__title">
                Minimal Duplex Room
              </h1>
              <p class="popularRoomsSection__swiper__slide__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <div class="popularRoomsSection__swiper__slide__container">
                <p class="popularRoomsSection__swiper__slide__container__price">
                  $345<span
                    class="popularRoomsSection__swiper__slide__container__price--perNight"
                    >/Night</span
                  >
                </p>
                <p
                  class="popularRoomsSection__swiper__slide__container__bookNow"
                >
                  Book now
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    @endsection

    @section('footer')
        @parent
    @endsection

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="./resources/js/index.js"></script>
    <script type="module" src="./resources/js/mobile-menu.js"></script>
    @endsection
</body>

</html>