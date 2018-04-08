$(function() {

  checkHeaderPosition();
  checkMenuPosition();

  $(".jsScrollTo").on('click', function(e) {
       e.preventDefault();
       var target = $(this).attr('href');
       $('html, body').animate({
         scrollTop: ($(target).offset().top)
       }, 1000);
    });

    $("#jsToggleLanguage").on('click', function(){
      if($(this).html() === "English") {
         changeLanguage('en');
      } else {
         changeLanguage('ar');
      }
    });

    $(window).on("scroll", function(e) {
      checkHeaderPosition();
      checkMenuPosition();
    });

    function checkHeaderPosition() {
      if ($('html').scrollTop() > 580) {
        $(".header").addClass("header_is-fixed");
      } else {
        $(".header").removeClass("header_is-fixed");
      }
    }

    function checkMenuPosition() {
      $(".menu__link").each(function() {
        if($('html').scrollTop() >= $($(this).attr('href')).position().top){
          clearMenus();
          $(this).addClass('menu__link_is-selected')
        }
      })
    }

    function clearMenus() {
      $('.menu__link').each(function() {
        $(this).removeClass('menu__link_is-selected');
      })
    }

    function changeLanguage(lang) {
     var location = "http://localhost:8888/smartways/change-language.php?lang=" + lang;
     window.location = location;
    }
});
