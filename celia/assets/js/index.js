var swiper = new Swiper(".mySwiper", {
  loop: true,
  navigation: {
    nextEl: ".swiper-boutton-next",
    prevEl: ".swiper-boutton-prev",
  },
});

(function ($) {
  "use strict";

  /**
   * ----------------------------------------------------------------------------------------
   *    Book Panel Rotate
   * ----------------------------------------------------------------------------------------
   */

  var $bookPanelContainer = $(".home_par_books_panel_container");

  $bookPanelContainer.each(function () {
    var $this = $(this);
    var $bookPanelItems = $this.find(".is_book_panel_trigger");

    $bookPanelItems.hoverIntent(function (event) {
      var $this = $(this);
      $bookPanelItems.removeClass("selected");
      showBookPanel($this);
    });
    showBookPanel($bookPanelItems.eq(0), true);
  });

  function showBookPanel($selector, dontScrollFlag) {
    $selector.addClass("selected");

    var targetBookID = $selector.data("panel_show");

    $selector
      .parents(".home_par_books_panel")
      .find(".home_par_books_panel_info_inner")
      .removeClass("show visible");
    var $targetBook = $selector
      .parents(".home_par_books_panel")
      .find(
        '.home_par_books_panel_info_inner[data-panel_id="' + targetBookID + '"]'
      );
    $targetBook.addClass("show").outerWidth(); //outerWidth used for reflow http://matheusazzi.com/animating-from-display-none-with-css-and-callbacks/

    $targetBook.addClass("visible");
  }
})(jQuery);
