
jQuery(function(){
function slider(reverse){
    var current = $('.item.current');
    if( reverse ){
      var next = current.is(':first-child') ? $('.item').last() : current.prev();
    } else {
      var next = current.is(':last-child') ? $('.item').first() : current.next();
    }
    next.addClass('current');
    current.removeClass('current');
  }
  var setSlider = setInterval( slider, 4000);
  
  $('.button').on('click', function(){
    clearInterval( setSlider );
    var flag = $(this).is('.prev') ? true : false;
    slider( flag );
    setSlider = setInterval( slider, 4000);
  });
});