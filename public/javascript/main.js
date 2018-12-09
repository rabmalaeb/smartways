$(function () {
  $('.jsScrollTo').on('click', function (e) {
    e.preventDefault()
    var target = $(this).attr('href')
    $('html, body').animate({
      scrollTop: ($(target).offset().top)
    }, 1000)
  })

  $('#jsToggleLanguage').on('click', function () {
    console.log($(this).html())
    if ($(this).html() === 'English') {
      changeLanguage('en')
    } else {
      changeLanguage('ar')
    }
  })

  function changeLanguage (lang) {
    var location = 'http://192.168.64.2/smartways/change-language.php?lang=' + lang
    window.location = location
  }
})
