const swiper = new Swiper(".swiper", {
  effect: "default",
  direction: "horizontal",
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1000: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

const swiperFeatures = new Swiper(".swiperFeatures", {
  direction: "horizontal",
  loop: true,
  slidesPerView: "1",
  spaceBetween: 30,
  autoplay: {
    delay: 6000,
  },
  pagination: {
    el: ".swiperFeatures-pagination",
    type: "bullets",
  },
});

const swiperMenu = new Swiper(".swiperMenu", {
  direction: "horizontal",
  loop: true,
  slidesPerView: "1",
  spaceBetween: 30,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: ".swiperMenu-button-next",
    prevEl: ".swiperMenu-button-prev",
  },
  breakpoints: {
    1000: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});
const swiperMenuImages = new Swiper(".swiperMenuImages", {
  direction: "horizontal",
  loop: true,
  slidesPerView: "1",
  spaceBetween: 30,
  autoplay: {
    delay: 6000,
  },
  pagination: {
    el: ".swiperMenuImages-pagination",
    type: "bullets",
  },
});
const swiperRoomsList = new Swiper(".swiperRoomsList", {
  direction: "horizontal",
  loop: true,
  slidesPerView: "1",
  spaceBetween: 30,
  pagination: {
    el: ".swiperRoomsList-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
});
