// JavaScript Document





 $('#section1_video1, #boton, #section2_video1, #menu_principal a').on('click', function(e) {
      $('#content_home').addClass('quitar_ie8');
	  $('#content_home').removeClass('top_ie8');
 });
 
 
 $('#inicio').on('click', function(e) {
      $('#content_home').removeClass('quitar_ie8');
	  $('#content_home').addClass('top_ie8');
 });