var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 3000
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 40
    },
    // when window width is >= 640px
    1000: {
        slidesPerView: 4,
        spaceBetween: 40
    }
  }
});