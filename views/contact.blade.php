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
        <h1 class="subheaderSection__title">New Details</h1>
        <div class="subheaderSection__navigation">
          <p class="subheaderSection__navigation__page">Home</p>
          <p class="subheaderSection__navigation__page--active">Blog</p>
        </div>
      </section>
      <!-- Contact Details Section -->
      <section class="contactDetailsSection">
        <div class="contactDetailsSection__container">
          <img
            class="contactDetailsSection__container__img"
            src="./resources/assets/icons/contactIcon2.png"
            alt="Contact icon"
          />
          <div class="contactDetailsSection__container__subcontainer">
            <p class="contactDetailsSection__container__subcontainer__header">
              Hotel Address
            </p>
            <p class="contactDetailsSection__container__subcontainer__text">
              OXYGEN Workspace, C/Princesa 31, planta 2, 28008 Madrid
            </p>
          </div>
          <p class="contactDetailsSection__container__number">01</p>
        </div>
        <div class="contactDetailsSection__container">
          <img
            class="contactDetailsSection__container__img"
            src="./resources/assets/icons/contactIcon1.png"
            alt="Contact icon"
          />
          <div class="contactDetailsSection__container__subcontainer">
            <p class="contactDetailsSection__container__subcontainer__header">
              Phone Number
            </p>
            <p class="contactDetailsSection__container__subcontainer__text">
              +34 611 049 632
            </p>
          </div>
          <p class="contactDetailsSection__container__number">02</p>
        </div>
        <div class="contactDetailsSection__container">
          <img
            class="contactDetailsSection__container__img"
            src="./resources/assets/icons/contactIcon3.png"
            alt="Contact icon"
          />
          <div class="contactDetailsSection__container__subcontainer">
            <p class="contactDetailsSection__container__subcontainer__header">
              Email
            </p>
            <p class="contactDetailsSection__container__subcontainer__text">
              scriado.f@gmail.com
            </p>
          </div>
          <p class="contactDetailsSection__container__number">03</p>
        </div>
      </section>
      <!-- Map Section -->
      <section class="mapSection">
        <input
          type="text"
          class="mapSection__address address"
          placeholder="Enter your location"
        />
        <button class="btn button-find-location">Find location</button>

        <select class="regions">
          <option value="Spain">Spain</option>
          <option value="0">Andalucía</option>
          <option value="1">Aragón</option>
          <option value="2">Asturias, Principado de</option>
          <option value="3">Balears, Illes</option>
          <option value="4">Canarias</option>
          <option value="5">Cantabria</option>
          <option value="6">Castilla y León</option>
          <option value="7">Castilla - La Mancha</option>
          <option value="8">Cataluña / Catalunya</option>
          <option value="9">Comunitat Valenciana</option>
          <option value="10">Extremadura</option>
          <option value="11">Galicia</option>
          <option value="12">Madrid, Comunidad de</option>
          <option value="13">Murcia, Región de</option>
          <option value="14">Navarra, Comunidad Foral de</option>
          <option value="15">País Vasco / Euskadi</option>
          <option value="16">Rioja, La</option>
          <option value="17">Ceuta</option>
          <option value="18">Melilla</option>
        </select>

        <button class="button-map button-location">Find my location</button>
        <button class="button-map button-matrix" style="right: 10px">
          Get hotels distance
        </button>
        <div id="map" ></div>
        <div class="location-list"></div>
      </section>
      <!-- Contact Form Section -->
      <form class="contactFormSection"  action="/contact.php" method="POST">
        <div class="contactFormSection__firstContainer">
          <div class="contactFormSection__firstContainer__input">
            <input
              class="contactFormSection__firstContainer__input__field"
              type="text"
              placeholder="Your full name"
              name="name"
            />
            <img
              class="contactFormSection__firstContainer__input__icon"
              src="./resources/assets/icons/contactPerson.png"
              alt="Contact icon"
            />
          </div>
          <div class="contactFormSection__firstContainer__input">
            <input
              class="contactFormSection__firstContainer__input__field"
              type="text"
              placeholder="Add phone number"
              name="phone"
            />
            <img
              class="contactFormSection__firstContainer__input__icon"
              src="./resources/assets/icons/contactPhone.png"
              alt="Contact icon"
            />
          </div>
        </div>
        <div class="contactFormSection__firstContainer">
          <div class="contactFormSection__firstContainer__input">
            <input
              class="contactFormSection__firstContainer__input__field"
              type="text"
              placeholder="Enter email address"
              name="email"
            />
            <img
              class="contactFormSection__firstContainer__input__icon"
              src="./resources/assets/icons/contactEnvelop.png"
              alt="Contact icon"
            />
          </div>
          <div class="contactFormSection__firstContainer__input">
            <input
              class="contactFormSection__firstContainer__input__field"
              type="text"
              placeholder="Enter subject"
              name="header"
            />
            <img
              class="contactFormSection__firstContainer__input__icon"
              src="./resources/assets/icons/contactBook.png"
              alt="Contact icon"
            />
          </div>
        </div>
        <div class="contactFormSection__firstContainer">
          <div class="contactFormSection__firstContainer__input">
            <input
              class="contactFormSection__firstContainer__input__field--big"
              type="text"
              placeholder="Enter message"
              name="comment"
            />
            <img
              class="contactFormSection__firstContainer__input__icon"
              src="./resources/assets/icons/contactPen.png"
              alt="Contact icon"
            />
          </div>  
          <button type="submit" class="btn">SEND</button>
</div>
</form>
    </main>
    @endsection

@section('footer')
    @parent
@endsection

@section('scripts')
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script
      async
      defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZxv43jCV8VV1CaRUj8vQinRXA1ZIi0Ig&callback=initMap"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="./resources/js/index.js"></script>
    <script type="module" src="./resources/js/mobile-menu.js"></script>
    <script src="./resources/js/regionsSpain.js"></script>
    <script src="./resources/js/hotels.js"></script>
    <script src="./resources/js/comunitiesSpain.js"></script>
    <script src="./resources/js/maps.js"></script>
    @endsection
</body>

</html>