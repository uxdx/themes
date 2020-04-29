(function ($) {
  $(function () {
    $(".sidenav").sidenav();
    $(".dropdown-trigger").dropdown();
    $(document).ready(function () {
      $(".fixed-action-btn").floatingActionButton();
    });
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
