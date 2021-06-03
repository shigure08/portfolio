$(function(){
  const obj = $(".scroll-animation-obj");
  const hopIn = $(".scroll-animation-hop");
  const leftIn = $(".scroll-animation-left");
  const rightIn = $(".scroll-animation-right");
  $(window).on('scroll',function(){
    obj.each(function(){
      const objPos = $(this).offset().top;
      const scroll =$(window).scrollTop();
      const windowH = $(window).height();
      if(scroll > objPos - windowH){
        $(this).css({
          'opacity':'1'
        });
      }
    });
    hopIn.each(function(){
      const objPos = $(this).offset().top;
      const scroll = $(window).scrollTop();
      const windowH = $(window).height();
      if(scroll > objPos - windowH){
        $(this).css({
          'transform':'translate(0,0)',
          'transform':'scale(1,1)'
        });
      }else{
        $(this).css({
          'transform':'translate(0,60px)',
          'transform':'scale(0,0)'
        });
      }
    });
  });
});
