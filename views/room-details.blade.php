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
        <h1 class="subheaderSection__title">Ultimate Room</h1>
        <div class="subheaderSection__navigation">
          <p class="subheaderSection__navigation__page">Home</p>
          <p class="subheaderSection__navigation__page--active">Room Details</p>
        </div>
      </section>
      <!-- Room Section mobile view -->
      <section class="roomSection">
        <p class="roomSection__subtitle">Unique experience</p>
        <h1 class="roomSection__title">{{$room[12]}}</h1>
        <p class="roomSection__price">
          $345<span class="roomSection__price--perNight">/Night</span>
        </p>
        <img
          class="roomSlider__slides--roomImg"
          src="./resources/assets/images/room1.jpg"
          alt="Hotel room"
        />
      </section>
      <!-- Room Section desktop view -->
      <section class="roomSectionDesktop">
        <div class="roomSectionDesktop__container">
          <div class="roomSectionDesktop__container__subcontainer">
            <p class="roomSectionDesktop__container__subcontainer__subtitle">
              UNIQUE EXPERIENCE
            </p>
            <h1 class="roomSectionDesktop__container__subcontainer__title">
            {{$room["bed_type"]}}
            </h1>
          </div>
          <p class="roomSectionDesktop__container__price">
          ${{$room["room_rate"] /100}}<span class="roomSectionDesktop__container__price--perNight"
              >/Night</span
            >
          </p>
        </div>

        <img
          class="roomSectionDesktop__roomImg"
          src="./resources/assets/images/room1.jpg"
          alt="Hotel room"
        />
        <p class="roomSectionDesktop__text">
        {{$room["description"]}}
        </p>
      </section>
      <!-- Availability Section -->
      <section class="singleRoomAvailabilitySection">
        <p class="singleRoomAvailabilitySection__subtitle">
          Check Availability
        </p>
        <form class="singleRoomAvailabilitySection__form" action="/room-details.php?id={{ $room['id'] }}" method="POST">
          <div class="singleRoomAvailabilitySection__form__block">
            <label for="check-in-input">Check In</label>
            <input id="check-in-input" type="date" name="checkIn" />
          </div>
          <div class="singleRoomAvailabilitySection__form__block">
            <label for="check-out-input">Check Out</label>
            <input id="check-out-input" type="date" name="checkOut"/>
          </div>
          <button class="btn btn--light" type="submit">
            CHECK AVAILABILITY
          </button>
        </form>
        @if ($available !== "undefined")
          @if ($available == 1)
            <p style="margin-top: 20px" class="singleRoomAvailabilitySection__subtitle" >Room available between selected dates</p>
          @else
            <p style="margin-top: 20px" class="singleRoomAvailabilitySection__subtitle" >Room booked between selected dates</p>
          @endif
        @endif
        <p class="singleRoomAvailabilitySection__text">
        {{$room["description"]}}
        </p>
      </section>
      <!-- Amenities Section -->
      <section class="amenitiesSection">
        <h1 class="amenitiesSection__title">Amenities</h1>
        <div class="amenitiesSection__separation"></div>
        <div class="amenitiesSection__container">
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
          <div class="amenitiesSection__container__subcontainer">
            <img
              class="amenitiesSection__container__subcontainer__img"
              src="./resources/assets/icons/11amenity-support.png"
              alt="Amenity icon"
            />
            <p class="amenitiesSection__container__subcontainer__text">
              24/7 Online Support
            </p>
          </div>
          <div class="amenitiesSection__container__subcontainer">
            <img
              class="amenitiesSection__container__subcontainer__img"
              src="./resources/assets/icons/12amenity-locker.png"
              alt="Amenity icon"
            />
            <p class="amenitiesSection__container__subcontainer__text">
              Strong Locker
            </p>
          </div>
          <div class="amenitiesSection__container__subcontainer">
            <img
              class="amenitiesSection__container__subcontainer__img"
              src="./resources/assets/icons/13amenity-security.png"
              alt="Amenity icon"
            />
            <p class="amenitiesSection__container__subcontainer__text">
              Smart security
            </p>
          </div>
          <div class="amenitiesSection__container__subcontainer">
            <img
              class="amenitiesSection__container__subcontainer__img"
              src="./resources/assets/icons/14amenity-team.png"
              alt="Amenity icon"
            />
            <p class="amenitiesSection__container__subcontainer__text">
              Expert Team
            </p>
          </div>
        </div>
      </section>
      <!-- Employee Section -->
      <section class="employeeSection">
        <div class="employeeSection__container">
          <div class="employeeSection__container__imgContainer">
            <img
              class="employeeSection__container__imgContainer__portrait"
              src="./resources/assets/images/employee.jpg"
              alt="Employee image"
            />
            <div
              class="employeeSection__container__imgContainer__checkContainer"
            >
              <img
                class="employeeSection__container__imgContainer__checkContainer__check"
                src="./resources/assets/images/check-mark.png"
                alt="Check mark image"
              />
            </div>
          </div>
          <h1 class="employeeSection__container__name">Rosalina D. William</h1>
          <p class="employeeSection__container__position">FOUNDER, QUX CO.</p>
          <p class="employeeSection__container__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
        </div>
      </section>
      <!-- Cancellation Section -->
      <section
        class="cancellationSection amenitiesSection singleRoomAvailabilitySection"
      >
        <h1 class="amenitiesSection__title">Cancellation</h1>
        <div class="amenitiesSection__separation"></div>
        <p
          class="cancellationSection__text singleRoomAvailabilitySection__text"
          style="padding-top: 0"
        >
          {{$room["cancellationPolicy"]}}
        </p>
      </section>
      <!-- Related Rooms Section -->
      <section
        class="relatedRoomsSection amenitiesSection singleRoomAvailabilitySection"
      >
        <h1 class="amenitiesSection__title">Related Rooms</h1>
        <div class="amenitiesSection__separation"></div>
        <!-- Related rooms for mobile view -->
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
        <div class="relatedRoomsSection__desktopContainer">
          <div class="relatedRoomsSection__swiper__slide">
            <div style="position: relative">
              <img
                class="relatedRoomsSection__swiper__slide__extras"
                src="./resources/assets/images/roomExtras.png"
                alt="Room extras"
              />
              <img
                class="relatedRoomsSection__swiper__slide__roomImg"
                src="./resources/assets/images/room1.jpg"
                alt="Hotel room"
              />
              <h1 class="relatedRoomsSection__swiper__slide__title">
                Minimal Duplex Room
              </h1>
              <p class="relatedRoomsSection__swiper__slide__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <div class="relatedRoomsSection__swiper__slide__container">
                <p class="relatedRoomsSection__swiper__slide__container__price">
                  $345<span
                    class="relatedRoomsSection__swiper__slide__container__price--perNight"
                    >/Night</span
                  >
                </p>
                <p
                  class="relatedRoomsSection__swiper__slide__container__bookNow"
                >
                  Book now
                </p>
              </div>
            </div>
          </div>
          <div class="relatedRoomsSection__swiper__slide">
            <div style="position: relative">
              <img
                class="relatedRoomsSection__swiper__slide__extras"
                src="./resources/assets/images/roomExtras.png"
                alt="Room extras"
              />
              <img
                class="relatedRoomsSection__swiper__slide__roomImg"
                src="./resources/assets/images/room2.jpg"
                alt="Hotel room"
              />
              <h1 class="relatedRoomsSection__swiper__slide__title">
                Minimal Duplex Room
              </h1>
              <p class="relatedRoomsSection__swiper__slide__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <div class="relatedRoomsSection__swiper__slide__container">
                <p class="relatedRoomsSection__swiper__slide__container__price">
                  $345<span
                    class="relatedRoomsSection__swiper__slide__container__price--perNight"
                    >/Night</span
                  >
                </p>
                <p
                  class="relatedRoomsSection__swiper__slide__container__bookNow"
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