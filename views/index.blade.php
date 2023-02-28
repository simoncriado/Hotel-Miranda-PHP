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
      <!-- Take a tour Section -->
      <section class="tourSection">
        <div class="tourSection__container">
          <p class="tourSection__container--subtitleDesktop">
            We Make You Feel Comfortable
          </p>
          <p class="tourSection__container--subtitle">
            THE ULTIMATE LUXURY EXPERIENCE
          </p>
          <h1 class="tourSection__container--title">
            The Perfect Base For You
          </h1>
          <div class="tourSection__container__buttons">
            <button
              class="tourSection__container_buttons tourSection__container__buttons--tour"
            >
              TAKE A TOUR
            </button>
            <button
              class="tourSection__container_buttons tourSection__container__buttons--learn"
            >
              LEARN MORE
            </button>
          </div>
        </div>
      </section>

      <!-- Availability Section -->
      <section class="availabilitySection">
        <form class="availabilitySection__container" action="/availability.php" method="POST">
          <div
            class="availabilitySection__container availabilitySection__container__arrival"
          >
            <p
              class="availabilitySection__container__arrival availabilitySection__container__arrival--text"
            >
              Arrival Date
            </p>
            <input
              class="availabilitySection__container__arrival availabilitySection__container__arrival--input"
              type="date"
              name="checkIn"
            />
          </div>
          <div
            class="availabilitySection__container availabilitySection__container__departure"
          >
            <p
              class="availabilitySection__container__departure availabilitySection__container__departure--text"
            >
              Departure Date
            </p>
            <input
              class="availabilitySection__container__departure availabilitySection__container__departure--input"
              type="date"
              name="checkOut"
            />
          </div>
          <button
            class="availabilitySection__container availabilitySection__container__button"
            
          >
            CHECK AVAILABILITY
          </button>
        </form>
      </section>

      <!-- About Us Section -->
      <section class="aboutSection">
        <div class="aboutSection__info">
          <p class="aboutSection__info--subtitle">ABOUT US</p>
          <h1 class="aboutSection__info--title">Discover Our Underground.</h1>
          <p class="aboutSection__info--paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
          <button class="aboutSection__info--button">BOOK NOW</button>
        </div>
        <div class="aboutSection__cards">
          <div class="aboutSection__cards__team">
            <img
              class="aboutSection__cards__team--img"
              src="./resources/assets/images/strongTeam.jpeg"
              alt="Strong team work"
            />
            <div class="aboutSection__cards__team--container">
              <div class="aboutSection__cards__team--container--icons">
                <img
                  class="aboutSection__cards__team--container--icons--small"
                  src="./resources/assets/icons/team.png"
                  alt="Small team icon"
                />
                <img
                  class="aboutSection__cards__team--container--icons--big"
                  src="./resources/assets/icons/teamBig.png"
                  alt="Big team icon"
                />
              </div>
              <h2 class="aboutSection__cards__team--container--title">
                Strong Team
              </h2>
              <p class="aboutSection__cards__team--container--paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor.
              </p>
            </div>
          </div>
          <div class="aboutSection__cards__room">
            <img
              class="aboutSection__cards__room--img"
              src="./resources/assets/images/room.jpeg"
              alt="Hotel Room"
            />
            <div class="aboutSection__cards__room--container">
              <div class="aboutSection__cards__room--container--icons">
                <img
                  class="aboutSection__cards__room--container--icons--small"
                  src="./resources/assets/icons/calendar.png"
                  alt="Calendar icon"
                />
              </div>
              <h2 class="aboutSection__cards__room--container--title">
                Luxury Room
              </h2>
              <p class="aboutSection__cards__room--container--paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Rooms Section -->
      <section class="roomSlider">
        <p class="roomSlider__subtitle">ROOMS</p>
        <h1 class="roomSlider__title">Hand Picked Rooms</h1>
        <div class="swiper roomSlider__slides">
          <div class="swiper-wrapper">
          @foreach ($rooms as $room)
            <div class="swiper-slide">
              <img
                class="roomSlider__slides--extras"
                src="./resources/assets/images/roomExtras.png"
                alt="Room extras"
              />
              @if ($room["photo"] === "")
              <img
                class="roomSlider__slides--roomImg"
                src="https://mktmarketingdigital.com/wp-content/plugins/elementor/assets/images/placeholder.png"
                alt="Hotel room"
              />
              @endif
              @if ($room["photo"] !== "")
              <img
                class="roomSlider__slides--roomImg"
                src={{$room["photo"]}}
                alt="Hotel room"
              />
              @endif
              <h1 class="roomSlider__slides--title">{{$room["bed_type"]}}</h1>
              <p class="roomSlider__slides--description">
              {{$room["description"]}}
              </p>
              <p class="roomSlider__slides--price">
              ${{$room["room_rate"] /100}}<span class="roomSlider__slides--price--perNight"
                  >/Night</span
                >
              </p>
            </div>
            @endforeach
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </section>

      <!-- Video Section -->
      <section class="videoSection">
        <p class="videoSection__subtitle">INTRO VIDEO</p>
        <h1 class="videoSection__title">Meet With Our Luxury Place.</h1>
        <p class="videoSection__description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat you have to understand this.
        </p>
        <div class="videoSection__videoContainer">
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
        <button class="videoSection__button">BOOK NOW</button>
      </section>

      <!-- Features Section -->
      <section class="featuresSection">
        <p class="featuresSection__subtitle">FACILITIES</p>
        <h1 class="featuresSection__title">Core Features</h1>
        <div class="swiperFeatures featuresSection__slides">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/rating.png"
                  alt="Rating icon"
                />
                <img
                  class="featuresSection__slides__container--number"
                  src="./resources/assets/icons/01.png"
                  alt="Number one"
                />
              </div>

              <h1 class="featuresSection__slides--title">Have High Rating</h1>
              <p class="featuresSection__slides--description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/hours.png"
                  alt="Hours icon"
                />
                <img
                  class="featuresSection__slides__container--number"
                  src="./resources/assets/icons/02.png"
                  alt="Number tow"
                />
              </div>

              <h1 class="featuresSection__slides--title">Quiet Hours</h1>
              <p class="featuresSection__slides--description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/location.png"
                  alt="Location icon"
                />
                <img
                  class="featuresSection__slides__container--number"
                  src="./resources/assets/icons/03.png"
                  alt="Number three"
                />
              </div>

              <h1 class="featuresSection__slides--title">Best Locations</h1>
              <p class="featuresSection__slides--description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/cancellation.png"
                  alt="Cancellation icon"
                />
                <img
                  class="featuresSection__slides__container--number"
                  src="./resources/assets/icons/04.png"
                  alt="Number four"
                />
              </div>

              <h1 class="featuresSection__slides--title">Free Cancellation</h1>
              <p class="featuresSection__slides--description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/payment.png"
                  alt="Payment icon"
                />
                <img
                  class="featuresSection__slides__container--number"
                  src="./resources/assets/icons/05.png"
                  alt="Number five"
                />
              </div>

              <h1 class="featuresSection__slides--title">Payment Options</h1>
              <p class="featuresSection__slides--description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div class="swiper-slide">
              <div class="featuresSection__slides__container">
                <img
                  class="featuresSection__slides__container--icon"
                  src="./resources/assets/icons/offers.png"
                  alt="Offers icon"
                />
                <img
                  class="featuresSection__slides__container--number"
                  src="./resources/assets/icons/06.png"
                  alt="Number six"
                />
              </div>

              <h1 class="featuresSection__slides--title">Special Offers</h1>
              <p class="featuresSection__slides--description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiperFeatures-pagination"></div>
        </div>
        <div class="featuresSection__container">
          <div class="featuresSection__container__slides">
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/rating.png"
                alt="Rating icon"
              />
              <img
                class="featuresSection__container__slides__container--number"
                src="./resources/assets/icons/01.png"
                alt="Number one"
              />
            </div>

            <h1 class="featuresSection__container__slides--title">
              Have High Rating
            </h1>
            <p class="featuresSection__container__slides--description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="featuresSection__container__slides">
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/hours.png"
                alt="Hours icon"
              />
              <img
                class="featuresSection__container__slides__container--number"
                src="./resources/assets/icons/02.png"
                alt="Number tow"
              />
            </div>

            <h1 class="featuresSection__container__slides--title">
              Quiet Hours
            </h1>
            <p class="featuresSection__container__slides--description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="featuresSection__container__slides">
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/location.png"
                alt="Location icon"
              />
              <img
                class="featuresSection__container__slides__container--number"
                src="./resources/assets/icons/03.png"
                alt="Number three"
              />
            </div>

            <h1 class="featuresSection__container__slides--title">
              Best Locations
            </h1>
            <p class="featuresSection__container__slides--description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="featuresSection__container__slides">
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/cancellation.png"
                alt="Cancellation icon"
              />
              <img
                class="featuresSection__container__slides__container--number"
                src="./resources/assets/icons/04.png"
                alt="Number four"
              />
            </div>

            <h1 class="featuresSection__container__slides--title">
              Free Cancellation
            </h1>
            <p class="featuresSection__container__slides--description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="featuresSection__container__slides">
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/payment.png"
                alt="Payment icon"
              />
              <img
                class="featuresSection__container__slides__container--number"
                src="./resources/assets/icons/05.png"
                alt="Number five"
              />
            </div>

            <h1 class="featuresSection__container__slides--title">
              Payment Options
            </h1>
            <p class="featuresSection__container__slides--description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="featuresSection__container__slides">
            <div class="featuresSection__container__slides__container">
              <img
                class="featuresSection__container__slides__container--icon"
                src="./resources/assets/icons/offers.png"
                alt="Offers icon"
              />
              <img
                class="featuresSection__container__slides__container--number"
                src="./resources/assets/icons/06.png"
                alt="Number six"
              />
            </div>

            <h1 class="featuresSection__container__slides--title">
              Special Offers
            </h1>
            <p class="featuresSection__container__slides--description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
        </div>
      </section>

      <!-- Menu Section -->
      <section class="menuSection">
        <div class="wrapper">
          <img
            class="menuSection__icon"
            src="./resources/assets/icons/food.png"
            alt="Food icon"
          />
          <p class="menuSection__subtitle">MENU</p>
          <h1 class="menuSection__title">Our Foods Menu</h1>
          <div class="swiperMenu menuSection__slides">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="menuSection__slides__part1">
                  <div class="menuSection__slides__part1__container">
                    <img
                      class="menuSection__slides__part1__container--icon"
                      src="./resources/assets/images/food1.jpg"
                      alt="Food image"
                    />
                  </div>
                  <div class="menuSection__slides__part1__container2">
                    <h1 class="menuSection__slides__part1__container2--title">
                      Ice cream
                    </h1>
                    <p
                      class="menuSection__slides__part1__container2--description"
                    >
                      Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                      sed do eiusmod tempor.
                    </p>
                  </div>
                  <img
                    class="menuSection__slides__part1--arrow"
                    src="./resources/assets/icons/goldenArrow.png"
                    alt="Golden arrow"
                  />
                </div>
                <div class="menuSection__slides__part2">
                  <div class="menuSection__slides__part2__container">
                    <img
                      class="menuSection__slides__part2__container--icon"
                      src="./resources/assets/images/food2.jpg"
                      alt="Food image"
                    />
                  </div>
                  <div class="menuSection__slides__part2__container2">
                    <h1 class="menuSection__slides__part2__container2--title">
                      Fruit salad
                    </h1>
                    <p
                      class="menuSection__slides__part2__container2--description"
                    >
                      Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                      sed do eiusmod tempor.
                    </p>
                  </div>
                  <img
                    class="menuSection__slides__part2--arrow"
                    src="./resources/assets/icons/goldenArrow.png"
                    alt="Golden arrow"
                  />
                </div>
                <div class="menuSection__slides__part3">
                  <div class="menuSection__slides__part3__container">
                    <img
                      class="menuSection__slides__part3__container--icon"
                      src="./resources/assets/images/food3.jpg"
                      alt="Food image"
                    />
                  </div>
                  <div class="menuSection__slides__part3__container2">
                    <h1 class="menuSection__slides__part3__container2--title">
                      Seasonal fruits
                    </h1>
                    <p
                      class="menuSection__slides__part3__container2--description"
                    >
                      Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                      sed do eiusmod tempor.
                    </p>
                  </div>
                  <img
                    class="menuSection__slides__part3--arrow"
                    src="./resources/assets/icons/goldenArrow.png"
                    alt="Golden arrow"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="menuSection__slides__part1">
                  <div class="menuSection__slides__part1__container">
                    <img
                      class="menuSection__slides__part1__container--icon"
                      src="./resources/assets/images/food4.jpg"
                      alt="Food image"
                    />
                  </div>
                  <div class="menuSection__slides__part1__container2">
                    <h1 class="menuSection__slides__part1__container2--title">
                      Avocado toast
                    </h1>
                    <p
                      class="menuSection__slides__part1__container2--description"
                    >
                      Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                      sed do eiusmod tempor.
                    </p>
                  </div>
                  <img
                    class="menuSection__slides__part1--arrow"
                    src="./resources/assets/icons/goldenArrow.png"
                    alt="Golden arrow"
                  />
                </div>
                <div class="menuSection__slides__part2">
                  <div class="menuSection__slides__part2__container">
                    <img
                      class="menuSection__slides__part2__container--icon"
                      src="./resources/assets/images/food5.jpg"
                      alt="Food image"
                    />
                  </div>
                  <div class="menuSection__slides__part2__container2">
                    <h1 class="menuSection__slides__part2__container2--title">
                      Indian curry
                    </h1>
                    <p
                      class="menuSection__slides__part2__container2--description"
                    >
                      Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                      sed do eiusmod tempor.
                    </p>
                  </div>
                  <img
                    class="menuSection__slides__part2--arrow"
                    src="./resources/assets/icons/goldenArrow.png"
                    alt="Golden arrow"
                  />
                </div>
                <div class="menuSection__slides__part3">
                  <div class="menuSection__slides__part3__container">
                    <img
                      class="menuSection__slides__part3__container--icon"
                      src="./resources/assets/images/food6.jpg"
                      alt="Food image"
                    />
                  </div>
                  <div class="menuSection__slides__part3__container2">
                    <h1 class="menuSection__slides__part3__container2--title">
                      Light meal
                    </h1>
                    <p
                      class="menuSection__slides__part3__container2--description"
                    >
                      Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                      sed do eiusmod tempor.
                    </p>
                  </div>
                  <img
                    class="menuSection__slides__part3--arrow"
                    src="./resources/assets/icons/goldenArrow.png"
                    alt="Golden arrow"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="menuSection__slides__part1">
                  <div class="menuSection__slides__part1__container">
                    <img
                      class="menuSection__slides__part1__container--icon"
                      src="./resources/assets/images/food7.jpg"
                      alt="Food image"
                    />
                  </div>
                  <div class="menuSection__slides__part1__container2">
                    <h1 class="menuSection__slides__part1__container2--title">
                      Homemade waffel
                    </h1>
                    <p
                      class="menuSection__slides__part1__container2--description"
                    >
                      Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                      sed do eiusmod tempor.
                    </p>
                  </div>
                  <img
                    class="menuSection__slides__part1--arrow"
                    src="./resources/assets/icons/goldenArrow.png"
                    alt="Golden arrow"
                  />
                </div>
                <div class="menuSection__slides__part2">
                  <div class="menuSection__slides__part2__container">
                    <img
                      class="menuSection__slides__part2__container--icon"
                      src="./resources/assets/images/food8.jpg"
                      alt="Food image"
                    />
                  </div>
                  <div class="menuSection__slides__part2__container2">
                    <h1 class="menuSection__slides__part2__container2--title">
                      Fried rice
                    </h1>
                    <p
                      class="menuSection__slides__part2__container2--description"
                    >
                      Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                      sed do eiusmod tempor.
                    </p>
                  </div>
                  <img
                    class="menuSection__slides__part2--arrow"
                    src="./resources/assets/icons/goldenArrow.png"
                    alt="Golden arrow"
                  />
                </div>
                <div class="menuSection__slides__part3">
                  <div class="menuSection__slides__part3__container">
                    <img
                      class="menuSection__slides__part3__container--icon"
                      src="./resources/assets/images/food9.jpg"
                      alt="Food image"
                    />
                  </div>
                  <div class="menuSection__slides__part3__container2">
                    <h1 class="menuSection__slides__part3__container2--title">
                      Ramen
                    </h1>
                    <p
                      class="menuSection__slides__part3__container2--description"
                    >
                      Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                      sed do eiusmod tempor.
                    </p>
                  </div>
                  <img
                    class="menuSection__slides__part3--arrow"
                    src="./resources/assets/icons/goldenArrow.png"
                    alt="Golden arrow"
                  />
                </div>
              </div>
            </div>
            <div class="swiperMenu-button-prev">&#60;</div>
            <div class="swiperMenu-button-next">&#62;</div>
          </div>
          <div class="swiperMenuImages menuSection__images">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  class="swiperMenuImages__img"
                  src="./resources/assets/images/foodImg1.jpg"
                  alt="Food image"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="swiperMenuImages__img"
                  src="./resources/assets/images/foodImg2.jpg"
                  alt="Food image"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="swiperMenuImages__img"
                  src="./resources/assets/images/foodImg3.jpg"
                  alt="Food image"
                />
              </div>
            </div>
            <div class="swiperMenuImages-pagination"></div>
          </div>
          <div class="menuSection__imagesDesktop">
            <img
              class="swiperMenuImages__img"
              src="./resources/assets/images/foodImg1.jpg"
              alt="Food image"
            />
            <img
              class="swiperMenuImages__img"
              src="./resources/assets/images/foodImg2.jpg"
              alt="Food image"
            />
            <img
              class="swiperMenuImages__img"
              src="./resources/assets/images/foodImg3.jpg"
              alt="Food image"
            />
          </div>
        </div>
      </section>

      <!-- Statistics Section -->
      <section class="statsSection">
        <div class="statsSection__container">
          <div class="statsSection__container__stat">
            <img src="./resources/assets/icons/iconStat1.png" alt="Stat icon" />
            <h1 class="statsSection__container__stat__title">
              84k<span class="statsSection__container__stat__title--span"
                >+</span
              >
            </h1>
            <p class="statsSection__container__stat__subtitle">
              Projects are completed
            </p>
          </div>
          <div class="statsSection__container__stat">
            <img src="./resources/assets/icons/iconStat2.png" alt="Stat icon" />
            <h1 class="statsSection__container__stat__title">
              10M<span class="statsSection__container__stat__title--span"
                >+</span
              >
            </h1>
            <p class="statsSection__container__stat__subtitle">
              Active Backers Around World
            </p>
          </div>
          <div class="statsSection__container__stat">
            <img src="./resources/assets/icons/iconStat3.png" alt="Stat icon" />
            <h1 class="statsSection__container__stat__title">
              02k<span class="statsSection__container__stat__title--span"
                >+</span
              >
            </h1>
            <p class="statsSection__container__stat__subtitle">
              Categories Served
            </p>
          </div>
          <div class="statsSection__container__stat">
            <img src="./resources/assets/icons/iconStat4.png" alt="Stat icon" />
            <h1 class="statsSection__container__stat__title">
              100M<span class="statsSection__container__stat__title--span"
                >+</span
              >
            </h1>
            <p class="statsSection__container__stat__subtitle">
              Idea Raised Funds
            </p>
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