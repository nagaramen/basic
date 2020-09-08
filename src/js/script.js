$(function(){
  if((navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0) ||
  (navigator.userAgent.indexOf('iPad') > 0 || navigator.userAgent.indexOf('Android') > 0)) {
    (function(d) {
      var config = {
        kitId: 'fgd3szu',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  }

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
