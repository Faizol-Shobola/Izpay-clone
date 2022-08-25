var openMenu = document.querySelector(".open_menu");
var closeMenu = document.querySelector(".close_menu");
var mobileNavigation = document.querySelector(".mobile-menu");
var subMenuHandler = document.querySelector(".toggle_sub-menu");
var mobileSubMenu = document.querySelector(".mobile_sub-menu")

// open Mobile Navigation
openMenu.addEventListener('click', () => {
    mobileNavigation.classList.remove('hidden');
    mobileNavigation.classList.add('slide-right-m');
    mobileNavigation.classList.remove('slide-left-m');
})

// clode Mobile Navigation
closeMenu.addEventListener('click', () => {
    mobileNavigation.classList.add('slide-left-m');
    mobileNavigation.classList.remove('slide-right-m');
})

// toggle Mobile Navigation submenu
subMenuHandler.addEventListener('click', () => {
    mobileSubMenu.classList.toggle('hidden');
    mobileSubMenu.classList.toggle('slide-right-m');
    subMenuHandler.classList.toggle('group-hover:-rotate-180');

})

// Swiper Animation Controller
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

// Reveal Animation Controller
var slideUp = {
    distance: '200px',
    origin: 'bottom',
    opacity: 0,
    duration: 1200
};
var slideDown = {
    distance: '200px',
    origin: 'top',
    opacity: 0,
    duration: 1200
};
var slideRight = {
    distance: '200px',
    origin: 'left',
    opacity: 0,
    duration: 1200,
};
var slideLeftSm = {
    distance: '150px',
    origin: 'right',
    opacity: 0,
    duration: 1200
};
var slideLeft = {
    distance: '200px',
    origin: 'right',
    opacity: 0,
    duration: 1200
};
var interval = {
    distance: '200px',
    origin: 'left',
    opacity: 0,
    duration: 1200,
    interval: 200
};
var spotLight = {
    distance: '0px',
    duration: 100,
    delay: 400,
    opacity: 0.5
};

// Scroll reveal
ScrollReveal().reveal('.slide-up', slideUp);
ScrollReveal().reveal('.slide-down', slideDown);
ScrollReveal().reveal('.slide-right', slideRight);
ScrollReveal().reveal('.slide-left-sm', slideLeftSm);
ScrollReveal().reveal('.interval',  interval);
ScrollReveal().reveal('.slide-left', slideLeft);
ScrollReveal().reveal('.spotlight', spotLight);