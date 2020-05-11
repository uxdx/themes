import { MDCTopAppBar } from "@material/top-app-bar";
const topAppBar = MDCTopAppBar.attachTo(document.getElementById("app-bar"));
topAppBar.setScrollTarget(document.getElementById("main-content"));
topAppBar.listen("MDCTopAppBar:nav", () => {
  drawer.open = !drawer.open;
});

(function ($) {
  $(function () {
    $(".sidenav").sidenav();
    $(".dropdown-trigger").dropdown();
    $(".fixed-action-btn").floatingActionButton();
    $(".fixed-action-btn").floatingActionButton({
      toolbarEnabled: true,
    });
    $(".slider").slider();
    $(".carousel.carousel-slider").carousel({
      fullWidth: true,
      indicators: true,
    });
  }); // end of document ready
})(jQuery); // end of jQuery name space
