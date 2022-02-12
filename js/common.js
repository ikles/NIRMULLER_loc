jQuery(document).ready(function( $ ) {

  $(".toggle-mnu").click(function() {
    $(this).toggleClass("on");
    $(".pda__menu-w").slideToggle();
    $('body').toggleClass('ohi');
    return false;
  });

  $('body').click(function () {
    if( $(".toggle-mnu").hasClass("on") ){
      $(".toggle-mnu").removeClass("on");
      $(".pda__menu-w").fadeOut();
      $('body').removeClass('ohi');
    }
  });


  $(".pda__menu-w").click(function (e) {
    e.stopPropagation();
  });





  $("#video__play").click(function(e){
    e.preventDefault();
    var dataYoutube = $(this).parents('.js-video').attr('data-youtube');
    $(this).parents('.js-video').html('<iframe class="embed-responsive-item" width=100% height=100% src="https://www.youtube.com/embed/'+ dataYoutube +'?autoplay=1" frameborder="0" allowfullscreen></iframe>')
  });





  $('.pubs__its').slick({
    infinite: true,    
    speed: 600,
    slidesToScroll: 1,
    autoplay: false,    
    slidesToShow: 5,
    cssEase: 'linear',    
    arrows: true,  
    responsive: [
    {
      breakpoint: 1367,
      settings: {
        slidesToShow: 4        
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2
      }
    },
    ] 
  });




  /************************************/

/*$('.wrapper').prepend('<span class="eye-3"></span>');
let pg = parseInt(document.location.pathname.match(/\d+/))
$('body').addClass('active').css('background-image', "url('../img/"+pg+".jpg')");
$('body:not(.active)').css('background-image', "unset");

$('.eye-3').click(function (e) {
  e.preventDefault();  
  $('body').toggleClass('active');
  let pg = parseInt(document.location.pathname.match(/\d+/));
  $('body.active').css('background-image', "url('../img/"+pg+".jpg')");
  $('body:not(.active)').css('background-image', "unset");

});*/

/************************************/


$('.more__btn').click(function (e) {
  e.preventDefault();
  $('.mostpop__item').css('display', 'block')
});

$('.search__lbl input').attr('placeholder', 'search on site ...');

function popup(openLink, windowEl, closeEl) {  
  $(openLink).click(function(e) {
    e.preventDefault();
    $(windowEl).fadeIn();
    $('body').addClass('ohi');

  if( $(window).width() < 576 ) {
    $('html, body').animate({
      scrollTop: 0
    });  
  }

  $(window).resize(function() {
    if( $(window).width() < 576 ) {
      $('html, body').animate({
        scrollTop: 0
      });  
    }
  });

  });
  $(closeEl).click(function(e) {
    e.preventDefault();
    $(windowEl).fadeOut();
    $('body').removeClass('ohi');
  });
  $('.modal-overlay').click(function () {
    $(this).fadeOut();
    $('body').removeClass('ohi');
  });
  $('.modal-form__block').click(function (e) {
    e.stopPropagation();  
  });
}


popup('.startup__btn', '.modal-overlay_1', '.modal-close_1');

$('.modal-form__txt-1').click(function () {
  $('.modal-overlay').fadeOut();
  $('body').removeClass('ohi');
});


$('a[href*=\\#]:not([href=\\#])').click(function () {
  elementClick = $(this).attr("href");
  destination = $(elementClick).offset().top;
  $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination - 85}, 1100);
  return false;
});


$(window).scroll(function(){
  var wt = $(window).scrollTop();  
  var wh = $(window).height();    
  if (wt > 1600) {
    $('.to-top').show(400);
  }
  else {
   $('.to-top').hide();
 }
});




if($('select').length) {
  $('select').select2({
    minimumResultsForSearch: -1
  });
}

if( $(window).width() < 768 ) {
  let footerH = $('.footer').outerHeight();
  $('.to-top').css('bottom', footerH - 10+'px');
}

$(window).resize(function() {
  if( $(window).width() < 768 ) {
    let footerH = $('.footer').outerHeight();
    $('.to-top').css('bottom', footerH - 10+'px');
  }
});

$(window).resize(function() {
  if( $(window).width() > 767 ) {
    $('.to-top').css('bottom', '');
  } 
});

}); //ready

