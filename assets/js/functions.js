// $('.thumbnail').click( function(){
//   $('.thumbnail').find('.hover-content').css({
//     "height" : "0",
//     "opacity" : "0"
//   });
//   $(this).find('.hover-content').css({
//     "height" : "100%",
//     "opacity" : "1"
//   });
// });

$('.thumbnail').hover(
  function(){
    $(this).find('.hover-content').css({
      "height" : "100%",
      "opacity" : "1"
    })
  },
  function(){
    $(this).find('.hover-content').css({
      "height" : "0",
      "opacity" : "0"
    })
  }
  );




$('.view-work-btn').click(() => {
  $('.work').css({
    'display': 'block'
  });

  $('body').css('overflow', 'auto');

  setTimeout(() => {
    $('.work').css({
      'margin-right': '0'
    });
  }, 0);
});

$('.get-to-know-btn').click(() => {
  $('.get-to-know').css({
    'display':'block'
  });

  $('body').css('overflow', 'auto');

  setTimeout(() => {
    $('.get-to-know').css({
      'margin-left': '0'
    });
  }, 0);
});

$('.work .back').click(() => {
  $('.work').css({
    'margin-right':'-100vw'
  });

  setTimeout(() => {
    $('.work').css('display', 'none');
  }, 350);
});

$('.get-to-know .back').click(() => {
  $('.get-to-know').css({
    'margin-left': '-100vw'
  });

  if ($('.get-to-know').css('margin-left', '-100vw')) {
    setTimeout(() => {
      $('.get-to-know').css('display', 'none');
    }, 350);
  }
});

$('.static').click(() => {
  $('.work-categories a').removeClass('active');
  $('.static').addClass('active');
  $('.thumbnail').parent().css('display', 'none');
  $('.my-blind-spots, .perfect-cotton').parent().css('display', 'block');
});

$('.e-com').click(() => {
  $('.work-categories a').removeClass('active');
  $('.e-com').addClass('active');
  $('.thumbnail').parent().css('display', 'none');
  $('.annie-pirotta, .kader-boot-co, .kader-boot-co, .psm, .boxti').parent().css('display', 'block');
});

$('.web-app').click(() => {
  $('.work-categories a').removeClass('active');
  $('.web-app').addClass('active');
  $('.thumbnail').parent().css('display', 'none');
  $('.all-west-eng').parent().css('display', 'block');
});

$('.all').click(() => {
  $('.work-categories a').removeClass('active');
  $('.all').addClass('active');
  $('.thumbnail').parent().css('display', 'block');
});
