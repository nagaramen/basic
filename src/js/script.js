$(function(){
  $('a[href^="#"]').click(function() {
    var adjust = 100;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - adjust;

    $('body, html').animate({
      scrollTop: position,
      duration: 1000,
      easing: 'swing'
    });

    return false;
  });

  $('#hamburger').on('click', function() {
    $("nav").toggleClass('menu-active');
    return false;
  });

  var $main = $("main");
  var $buttons = $("button");
  var $courses = $(".course-3").children();

  $buttons.on('click', function() {
    var class = $(this).attr("id");

    $courses.each(function() {
      $(this).animate({
        opacity: '0'
      },
      100,
      'swing'
      );
    });

    setTimeout(function() {
      $main.removeClass().addClass("epithese " + class);
      var $class = $("." + class);

      $class.each(function() {
        $(this).animate({
          opacity: '1'
        },
        100,
        'swing'
        );
      });
    }, 100);
  });

  $(window).on('load',function() {
    $('body').removeClass('loading');
  });
});
