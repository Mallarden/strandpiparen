(function ($, root, undefined) {
  $(function () {
    "use strict";

    // 	$(window).scroll(function() {
    // 	var scroll = $(window).scrollTop();

    // 	if (scroll >= 700) {
    // 		$(".footer").addClass("show-footer");
    // 	}
    // 	else $(".footer").removeClass("show-footer");
    // });
    var $element = $(".arrow-scroll");

    $(window).scroll(function () {
      if ($(this).scrollTop() > 0) {
        $element.fadeOut(500);
      } else {
        $element.fadeIn(500);
      }
    });
  });
})(jQuery, this);
