
// jQuery(document).ready(function($){
//   $('#datetimepicker').datetimepicker();
// });

$(document).ready(function() {
  $('#mSlider').lightSlider({
    item:1,
    slideMove:1,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    loop:true,
    auto:true,
    speed:400,
    pauseOnHover:true,
    enableTouch:true,
  }); 
  $('#bSlider').lightSlider({
    item:2,
    slideMove:2,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    margin: 0,
    speed:600,
    loop:true,
    pauseOnHover:true,
    enableTouch:true,
    pager:false,
  });  
});

// if ($(window).width() < 768) 
//   $('.find-your-trip').addClass('collapse');
// }
// else {
// }
