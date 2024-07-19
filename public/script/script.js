const NAVBAR_TOGGLE_CLASS = ".navbar-toggler";
const STICKY_TOP_CLASS = ".navbar";
const OFFCANVAS_CLASS = ".collapse";

// Selectors
const hamburger = document.querySelector(NAVBAR_TOGGLE_CLASS);
const stickyTop = document.querySelector(STICKY_TOP_CLASS);
const offcanvas = document.querySelector(OFFCANVAS_CLASS);

// Toggle function for sticky top and offcanvas
function toggleStickyTopAndOffcanvas(show) {
  stickyTop.style.overflow = show ? "visible" : "hidden";
  offcanvas.classList.toggle("show", show);
}

// Event listener to show the stickyTop's overflow when hamburger is clicked
hamburger.addEventListener("click", function () {
  toggleStickyTopAndOffcanvas(true);
});

// Event listener for offcanvas 'hidden' event
offcanvas.addEventListener("hidden.bs.collapse", function () {
  toggleStickyTopAndOffcanvas(false);
});

// Event listener for offcanvas 'shown' event
offcanvas.addEventListener("shown.bs.collapse", function () {
  toggleStickyTopAndOffcanvas(true);
});

// Event listener to close the navbar when clicking outside of it
document.body.addEventListener("click", function (event) {
  if (
    !event.target.closest(STICKY_TOP_CLASS) &&
    !event.target.closest(OFFCANVAS_CLASS) &&
    offcanvas.classList.contains("show")
  ) {
    toggleStickyTopAndOffcanvas(false);
  }
});