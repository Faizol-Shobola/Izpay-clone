new numberRush('number-one', {
    speed: 30,
    steps: 1,
})

new numberRush('number-two', {
    speed: 85,
    steps: 1,
})

new numberRush('number-three', {
    speed: 85,
    steps: 1,
})

new numberRush('number-four', {
    speed: 65,
    steps: 1,
})

new numberRush('number-five', {
    speed: 30,
    steps: 1,
})

new numberRush('number-six', {
    speed: 35,
    steps: 1,
})

new numberRush('number-seven', {
    speed: 35,
    steps: 1,
})

new numberRush('number-eight', {
    speed: 35,
    steps: 1,
})

var openMenu = document.querySelector(".open_menu");
var closeMenu = document.querySelector(".close_menu");
var mobileNavigation = document.querySelector(".mobile-menu");
var subMenuHandler = document.querySelector(".toggle_sub-menu");
var mobileSubMenu = document.querySelector(".mobile_sub-menu")

// open Mobile Navigation
openMenu.addEventListener('click', () => {
    mobileNavigation.classList.remove('hidden');
})

// clode Mobile Navigation
closeMenu.addEventListener('click', () => {
    mobileNavigation.classList.add('hidden');
})

// toggle Mobile Navigation submenu
subMenuHandler.addEventListener('click', () => {
    mobileSubMenu.classList.toggle('hidden');
    subMenuHandler.classList.toggle('group-hover:-rotate-180');

})
