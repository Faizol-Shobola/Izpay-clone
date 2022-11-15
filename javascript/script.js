/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

/**************/
var openMenu = document.querySelector(".open_menu");
var closeMenu = document.querySelector(".close_menu");
var mobileNavigation = document.querySelector(".mobile-menu");
var subMenuHandler = document.querySelectorAll(".toggle_sub-menu");

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

// subMenu toggler
for (var i = 0; i < subMenuHandler.length; i++) {
    subMenuHandler[i].addEventListener("click", function() {
      // this.classList.toggle("active");
      var mobileSubMenu = this.nextElementSibling;
      mobileSubMenu.classList.toggle('active')
      if (mobileSubMenu.style.display === "block") {
        mobileSubMenu.style.display = "none";
        this.classList.remove('rotate');
      } else {
        mobileSubMenu.style.display = "block";
        this.classList.add('rotate')
      }
    });
}