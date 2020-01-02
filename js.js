$(window).scroll(function(){

  var fix = $('.menu')

  if($(this).scrollTop() > 100){
    fix.addClass('fix');
  }
  else{
    fix.removeClass('fix');
  }

})