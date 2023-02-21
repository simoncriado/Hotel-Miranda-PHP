@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    @section('head')
        @parent
    @endsection
</head>

<body>
    @section('topbar')
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
        <h1 class="subheaderSection__title">About Us</h1>
        <div class="subheaderSection__navigation">
          <p class="subheaderSection__navigation__page">Home</p>
          <p class="subheaderSection__navigation__page--active">About</p>
        </div>
      </section>

      <!-- Video Section -->
      <section class="aboutVideoSection">
        <div class="aboutVideoSection__videoContainer">
          <iframe
            width="100%"
            height="100%"
            src="https://www.youtube-nocookie.com/embed/Bu3Doe45lcU?start=25&end=75"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <h1 class="aboutVideoSection__title">
          Hello. Our hotel has been present for over 20 years. We make the best
          for all our customers.
        </h1>
        <div class="aboutVideoSection__container">
          <div class="aboutVideoSection__container__service">
            <img
              class="aboutVideoSection__container__service__icon"
              src="./resources/assets/icons/breakfast.svg"
              alt="Service icon"
            />
            <h1 class="aboutVideoSection__container__service__title">
              BREAKFAST
            </h1>
          </div>
          <div class="aboutVideoSection__container__service">
            <img
              class="aboutVideoSection__container__service__icon"
              src="./resources/assets/icons/airport.png"
              alt="Service icon"
            />
            <h1 class="aboutVideoSection__container__service__title">
              AIRPORT PICKUP
            </h1>
          </div>
          <div class="aboutVideoSection__container__service">
            <img
              class="aboutVideoSection__container__service__icon"
              src="./resources/assets/icons/city.svg"
              alt="Service icon"
            />
            <h1 class="aboutVideoSection__container__service__title">
              CITY GUIDE
            </h1>
          </div>
          <div class="aboutVideoSection__container__service--hide">
            <img
              class="aboutVideoSection__container__service__icon"
              src="./resources/assets/icons/bbq.svg"
              alt="Service icon"
            />
            <h1 class="aboutVideoSection__container__service__title">
              BBQ PARTY
            </h1>
          </div>
          <div class="aboutVideoSection__container__service">
            <img
              class="aboutVideoSection__container__service__icon"
              src="./resources/assets/icons/room.svg"
              alt="Service icon"
            />
            <h1 class="aboutVideoSection__container__service__title">
              LUXURY ROOM
            </h1>
          </div>
        </div>
      </section>

      <!-- Restaurant Section -->
      <section class="restaurantSection">
        <img
          src="./resources/assets/images/restaurant.jpg"
          alt="Restaurant picture"
          class="restaurantSection__img"
        />
        <div class="restaurantSection__container">
          <p class="restaurantSection__container__subtitle">RESTAURANT</p>
          <h1 class="restaurantSection__container__title">
            Get Restaurant Facilities & Many Other More
          </h1>
          <p class="restaurantSection__container__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip.
          </p>
          <button class="btn">TAKE A TOUR</button>
        </div>
      </section>

      <!-- Facilities Section -->
      <section class="featuresSection dark">
        <p class="featuresSection__subtitle dark__subtitle">FACILITIES</p>
        <h1 class="featuresSection__title dark__title">Core Features</h1>
        <div class="swiperFeatures featuresSection__slides dark__slides">
          <div class="swiper-wrapper dark__swiper-wrapper">
            <div class="swiper-slide dark__swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/rating.png"
                  alt="Rating icon"
                />
                <div
                  class="featuresSection__slides__container--number dark__slides--number"
                >
                  01
                </div>
              </div>

              <h1 class="featuresSection__slides--title dark__slides--title">
                Have High Rating
              </h1>
              <p
                class="featuresSection__slides--description dark__slides--description"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide dark__swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/hours.png"
                  alt="Hours icon"
                />
                <div
                  class="featuresSection__slides__container--number dark__slides--number"
                >
                  02
                </div>
              </div>

              <h1 class="featuresSection__slides--title dark__slides--title">
                Quiet Hours
              </h1>
              <p
                class="featuresSection__slides--description dark__slides--description"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide dark__swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/location.png"
                  alt="Location icon"
                />
                <div
                  class="featuresSection__slides__container--number dark__slides--number"
                >
                  03
                </div>
              </div>

              <h1 class="featuresSection__slides--title dark__slides--title">
                Best Locations
              </h1>
              <p
                class="featuresSection__slides--description dark__slides--description"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide dark__swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/cancellation.png"
                  alt="Cancellation icon"
                />
                <div
                  class="featuresSection__slides__container--number dark__slides--number"
                >
                  04
                </div>
              </div>

              <h1 class="featuresSection__slides--title dark__slides--title">
                Free Cancellation
              </h1>
              <p
                class="featuresSection__slides--description dark__slides--description"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide dark__swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/payment.png"
                  alt="Payment icon"
                />
                <div
                  class="featuresSection__slides__container--number dark__slides--number"
                >
                  05
                </div>
              </div>

              <h1 class="featuresSection__slides--title dark__slides--title">
                Payment Options
              </h1>
              <p
                class="featuresSection__slides--description dark__slides--description"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide dark__swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/offers.png"
                  alt="Offers icon"
                />
                <div
                  class="featuresSection__slides__container--number dark__slides--number"
                >
                  06
                </div>
              </div>

              <h1 class="featuresSection__slides--title dark__slides--title">
                Special Offers
              </h1>
              <p
                class="featuresSection__slides--description dark__slides--description"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiperFeatures-pagination"></div>
        </div>
        <div class="featuresSection__container dark__container">
          <div
            class="featuresSection__container__slides dark__container__slides"
          >
            <div
              class="featuresSection__container__slides__container dark__container__slides__container"
            >
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/rating.png"
                alt="Rating icon"
              />
              <div
                class="featuresSection__slides__container--number dark__slides--number"
              >
                01
              </div>
            </div>

            <h1
              class="featuresSection__container__slides--title dark__slides--title"
            >
              Have High Rating
            </h1>
            <p
              class="featuresSection__container__slides--description dark__slides--description"
            >
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div
            class="featuresSection__container__slides dark__container__slides"
          >
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/hours.png"
                alt="Hours icon"
              />
              <div
                class="featuresSection__slides__container--number dark__slides--number"
              >
                02
              </div>
            </div>

            <h1
              class="featuresSection__container__slides--title dark__slides--title"
            >
              Quiet Hours
            </h1>
            <p
              class="featuresSection__container__slides--description dark__slides--description"
            >
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div
            class="featuresSection__container__slides dark__container__slides"
          >
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/location.png"
                alt="Location icon"
              />
              <div
                class="featuresSection__slides__container--number dark__slides--number"
              >
                03
              </div>
            </div>

            <h1
              class="featuresSection__container__slides--title dark__slides--title"
            >
              Best Locations
            </h1>
            <p
              class="featuresSection__container__slides--description dark__slides--description"
            >
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div
            class="featuresSection__container__slides dark__container__slides"
          >
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/cancellation.png"
                alt="Cancellation icon"
              />
              <div
                class="featuresSection__slides__container--number dark__slides--number"
              >
                04
              </div>
            </div>

            <h1
              class="featuresSection__container__slides--title dark__slides--title"
            >
              Free Cancellation
            </h1>
            <p
              class="featuresSection__container__slides--description dark__slides--description"
            >
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div
            class="featuresSection__container__slides dark__container__slides"
          >
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/payment.png"
                alt="Payment icon"
              />
              <div
                class="featuresSection__slides__container--number dark__slides--number"
              >
                05
              </div>
            </div>

            <h1
              class="featuresSection__container__slides--title dark__slides--title"
            >
              Payment Options
            </h1>
            <p
              class="featuresSection__container__slides--description dark__slides--description"
            >
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div
            class="featuresSection__container__slides dark__container__slides"
          >
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/offers.png"
                alt="Offers icon"
              />
              <div
                class="featuresSection__slides__container--number dark__slides--number"
              >
                06
              </div>
            </div>

            <h1
              class="featuresSection__container__slides--title dark__slides--title"
            >
              Special Offers
            </h1>
            <p
              class="featuresSection__container__slides--description dark__slides--description"
            >
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
        </div>
      </section>

      <!-- Counter Section -->
      <section class="counterSection">
        <p class="counterSection__subtitle">COUNTER</p>
        <h1 class="counterSection__title">Some Fun Facts</h1>
        <div class="counterSection__container">
          <img
            class="counterSection__container__icon"
            src="./resources/assets/icons/happy.svg"
            alt="Facts icon"
          />
          <div class="counterSection__container__subContainer">
            <h1 class="counterSection__container__subContainer__number">
              8000
            </h1>
            <p class="counterSection__container__subContainer__text">
              Happy Users
            </p>
          </div>
          <img
            class="counterSection__container__arrow"
            src="./resources/assets/icons/arrow.svg"
            alt="Facts icon"
          />
        </div>
        <div class="counterSection__container">
          <img
            class="counterSection__container__icon"
            src="./resources/assets/icons/thumb.svg"
            alt="Facts icon"
          />
          <div class="counterSection__container__subContainer">
            <h1 class="counterSection__container__subContainer__number">10M</h1>
            <p class="counterSection__container__subContainer__text">
              Reviews & Appriciate
            </p>
          </div>
          <img
            class="counterSection__container__arrow"
            src="./resources/assets/icons/arrow.svg"
            alt="Facts icon"
          />
        </div>
        <div class="counterSection__container">
          <img
            class="counterSection__container__icon"
            src="./resources/assets/icons/world.svg"
            alt="Facts icon"
          />
          <div class="counterSection__container__subContainer">
            <h1 class="counterSection__container__subContainer__number">100</h1>
            <p class="counterSection__container__subContainer__text">
              Country Coverage
            </p>
          </div>
          <img
            class="counterSection__container__arrow"
            src="./resources/assets/icons/arrow.svg"
            alt="Facts icon"
          />
        </div>
        <div class="swiperMenuImages counterSection__images">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img
                class="swiperMenuImages__img"
                src="./resources/assets/images/reception.jpg"
                alt="Reception image"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="swiperMenuImages__img"
                src="./resources/assets/images/reception2.jpg"
                alt="Reception image"
              />
            </div>
          </div>
          <div class="swiperMenuImages-pagination"></div>
        </div>
        <div class="menuSection__imagesDesktop">
          <img
            class="swiperMenuImages__img"
            src="./resources/assets/images/reception.jpg"
            alt="Reception image"
          />
          <img
            class="swiperMenuImages__img"
            src="./resources/assets/images/reception2.jpg"
            alt="Reception image"
          />
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