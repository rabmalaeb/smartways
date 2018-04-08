$(function() {
  $(".jsScrollTo").on('click', function(e) {
       e.preventDefault();
       var target = $(this).attr('href');
       $('html, body').animate({
         scrollTop: ($(target).offset().top)
       }, 1000);
    });

    $("#jsToggleLanguage").on('click', function(){
        console.log($(this).html());
      if($(this).html() === "English") {
         changeLanguage('en');
      } else {
         changeLanguage('ar');
      }
    });

    $(window).on("scroll", function(e) {
      var container = $('html');
      if (container.scrollTop() > 580) {
        $(".header").addClass("header_is-fixed");
      } else {
        $(".header").removeClass("header_is-fixed");
      }

      $('.menu__link').each(function() {
        $(this).removeClass('menu__link_is-selected');
        var target = $(this).attr('href');
        if(isVisible($(target))){
          $(this).addClass('menu__link_is-selected')
        }
      })
    });

    function isVisible(element) {
      var elementTop = $(element).offset().top;
      var elementBottom = elementTop + $(element).outerHeight();
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
      return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    function changeLanguage(lang) {
     var location = "http://localhost:8888/smartways/change-language.php?lang=" + lang;
     window.location = location;
    }
});
