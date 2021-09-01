//js
var openBtn = document.querySelector(".__open-btn");
var Btn = document.querySelector(".dots");
var Circle = document.querySelector(".circle-open");
var SideNav = document.querySelector(".sidenav-menu");
var SideNavMenu = document.querySelector(".sidenav-menu ul");

//handler
var menuStatus = false;

openBtn.addEventListener("click", this.sidenavFunction);
window.addEventListener("scroll", this.handleScroll);

function sidenavFunction() {
  if (menuStatus === false) {
    menuStatus = true;
    console.log("menu status true");
    Btn.classList.add("open");
    Btn.classList.remove("close");
    Circle.classList.add("__changes");
    SideNav.classList.remove("hidden");
    setTimeout(function () {
      Overlay.classList.add("open-overlay");
      Overlay.classList.remove("close-overlay");
      SideNavMenu.classList.remove("hidden");
    }, 100);
    setTimeout(function () {
      SideNavMenu.classList.add("opacity-1");
      SideNavMenu.classList.remove("opacity-0");
    }, 200);
    disableScroll();
    OverlayLogo.classList.remove("hidden");
  } else {
    menuStatus = false;
    console.log("menu status false");
    Btn.classList.remove("open");
    Btn.classList.add("close");
    Overlay.classList.remove("open-overlay");
    Overlay.classList.add("close-overlay");
    Circle.classList.remove("__changes");
    SideNavMenu.classList.add("hidden");
    SideNavMenu.classList.remove("opacity-1");
    SideNavMenu.classList.add("opacity-0");
    enableScroll();
    OverlayLogo.classList.add("hidden");
    SideNav.classList.add("hidden");
  }
}

function handleScroll() {
  const currentScrollPos = window.pageYOffset;
  if (currentScrollPos < 400) {
    openBtn.classList.add("hidden");
  } else {
    openBtn.classList.remove("hidden");
  }
}
