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
    subMenuHandler.classList.toggle('group-hover:-rotate-180');

})