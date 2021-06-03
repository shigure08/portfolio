jQuery(function(){
  $('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#header__nav-wrap').toggleClass('open');
   });
});