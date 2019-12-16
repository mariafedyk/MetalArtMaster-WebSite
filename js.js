var btn = document.querySelector('.menubtn');
var menu = document.querySelector('.sidemenutop');
btn.addEventListener('click', function(){
	menu.classList.toggle('active')
});

$(window).scroll(function(){

  var fix = $('.menu')

  if($(this).scrollTop() > 100){
    fix.addClass('fix');
  }
  else{
    fix.removeClass('fix');
  }

})