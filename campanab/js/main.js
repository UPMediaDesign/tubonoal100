//LOADING

$(document).ready(function(){
$('#section1_video1').click();
});

jQuery(window).load(function() {
		
		$(".loading").fadeOut("slow");
		
	});

//VARIABLES
var menu = $('#menu_container');
var listado_menu = $('#menu_principal li');
var container = $('#content');
var boton = $('#boton');
var contacto = $('#contacto_wrap');
var inicio = $('#inicio');
var texto_menu = $('#text_menu');


$('#menu').on('click', function(e) {
      $('#menu_container').addClass('activo');
	  TweenMax.from(menu, 0.2,   {marginTop:"-50px", opacity:0, delay:0});
	  TweenMax.staggerFrom(listado_menu, 0.5, {scale:0.2, opacity:0, delay:0.2, force3D:true, marginLeft:"-8900px"}, 0.2);
	  TweenMax.from(texto_menu, 0.5,   {rotation:0, y:"-950px", opacity:0, delay:0.5});
	  TweenMax.to(boton, 0.3,   {marginLeft:"0%", opacity:1, delay:0});  
 });
 
 $('.close').on('click', function(e) {
      $('#menu_container').removeClass('activo');
	 
 });
 
 $('#inicio').on('click', function(e) {
      $('#content').removeClass('activo');
	  TweenMax.to(boton, 0.3,   {marginLeft:"0%", opacity:1, delay:0});
	  TweenMax.to(container, 0.5,   {top:"-100%", opacity:0, delay:0});
	  TweenMax.to(inicio, 0.3,   {top:"-100%", opacity:0, delay:0}); 
 });
 
 
  $('#section1_video1, #boton, #section2_video1, #menu_principal a').on('click', function(e) {
      $('#content').addClass('activo');
	  $('body').addClass('remove_logo');
	  TweenMax.to(inicio, 0.2,   {top:"5%", opacity:1, delay:0}); 
 });

 $('#section1_video1').on('click', function(e) {
	 $('#content').addClass('video');
     $('#content').load('parts/video.html');
	 ga('send', 'pageview', 'Landing(B) - Video1');
 });
 
   $('#section2_video1').on('click', function(e) {
     
	 $('#content').addClass('video');
     $('#content').load('parts/video2.html');
	 ga('send', 'pageview', 'Landing(B) - Video2');
 });


  $('#close_content').on('click', function(e) {
      $('#content').removeClass('activo');
	  
	
 });



 $('#boton').on('click', function(e) {
	 $('#content').addClass('contacto');
     beforeSend:jQuery('#content').html("<div class='cargando'></div>"); 
     $('#content').load('parts/contacto.html'); 
	 ga('send', 'pageview', 'Landing(B) - Contacto');
 });
 
  $('.menu1').on('click', function(e) {
	 $('#content').addClass('contenido');
	 $('#menu_container').removeClass('activo');
	  beforeSend:jQuery('#content').html("<div class='cargando'></div>"); 
	 $('#content').load('parts/que_es_apv.html'); 
	 ga('send', 'pageview', 'Landing(B) - Que es APV');
 });
 
  $('.menu2').on('click', function(e) {
	  $('#content').addClass('contenido');
	  $('#menu_container').removeClass('activo');
	   beforeSend:jQuery('#content').html("<div class='cargando'></div>"); 
      $('#content').load('parts/beneficios_apv.html'); 
	  ga('send', 'pageview', 'Landing(B) - Beneficios APV');
 });
 
  $('.menu3').on('click', function(e) {
	   $('#content').addClass('contenido');
	   $('#menu_container').removeClass('activo');
	    beforeSend:jQuery('#content').html("<div class='cargando'></div>"); 
	  $('#content').load('parts/inverti_apv.html'); 
	  ga('send', 'pageview', 'Landing(B) - Invertir APV');
 });
 
 

$( document ).ajaxComplete(function( event, xhr, settings ) {
	
	
	
	
	
	
	
	 $('body').addClass('white');
	
	if (screen && screen.width > 480) {
 $(".nano").nanoScroller({ 
	alwaysVisible: true 
	
	});
}
	
	
	TweenMax.to(container, 0.5,   {top:"0px", opacity:1, delay:0});
	
  if ( settings.url === "parts/contacto.html" ) {
	  
	  






	  
//$('#boton').addClass('quitar');
	  TweenMax.to(boton, 0.5,   {marginLeft:"-100%", opacity:0, delay:0});
	  TweenMax.from(contacto, 0.5,   {marginLeft:"-115%", opacity:0, delay:1});
	   }
});

