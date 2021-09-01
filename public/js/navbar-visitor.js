// hamburger js

// selectors
Overlay = document.querySelector(".dark-overlay");
Hamburger = document.querySelector(".hamburger");
HamburgerClose = document.querySelector(".hamburger-close");
HamburgerMenu = document.querySelector(".hamburger-menu");
OverlayLogo = document.querySelector(".dark-overlay-logo");

// variables
HamburgerNav = false;
loginOverlay = false;

// event listeners
Hamburger.addEventListener("click", this.hamburgerMenuOpen);
HamburgerClose.addEventListener("click", this.hamburgerMenuClose);
Overlay.addEventListener("click", this.overlayFunction);

function hamburgerMenuOpen() {
  if (HamburgerNav === false) {
    HamburgerNav = true;
    HamburgerMenu.classList.add("hamburgerMenu-open");
    HamburgerMenu.classList.remove("hamburgerMenu-close");
    Overlay.classList.add("open-overlay");
    Overlay.classList.remove("close-overlay");
    OverlayLogo.classList.remove("hidden");
    disableScroll();
  }
}

function hamburgerMenuClose() {
  if (HamburgerNav === true) {
    HamburgerNav = false;
    HamburgerMenu.classList.remove("hamburgerMenu-open");
    HamburgerMenu.classList.add("hamburgerMenu-close");
    Overlay.classList.remove("open-overlay");
    Overlay.classList.add("close-overlay");
    OverlayLogo.classList.add("hidden");
    enableScroll();
  }
}

function overlayFunction() {
  if (HamburgerNav === true) {
    hamburgerMenuClose();
  }

  if (loginOverlay === true) {
    loginFunction();
  }
}

function loginFunction() {
  if (loginOverlay === false) {
    loginOverlay = true;
    Overlay.classList.add("open-overlay");
    Overlay.classList.remove("close-overlay");
    loginPage.classList.remove("hidden");
    disableScroll();
  } else {
    loginOverlay = false;
    Overlay.classList.remove("open-overlay");
    Overlay.classList.add("close-overlay");
    loginPage.classList.add("hidden");
    enableScroll();
  }
}
