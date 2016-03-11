$(document).ready(function(){
			$("#mensaje").hide();
			$("#FormularioContacto").validate({
				event: "blur",rules: {'nombre': "required",'apellido': "required", 'email': "required email", 'telefono': "required", 'ciudad': "required"},
				messages: {'nombre': "Ingresa tu nombre",'apellido': "Ingresa tu apellido",'email': "Ingresa una direcci&oacute;n de e-mail v&aacute;lida",'telefono': "Ingresa un tel&eacute;fono",'ciudad': "Ingresa tu ciudad"},
				debug: true,errorElement: "label",
				submitHandler: function(form){
					$("#mensaje").show();
					$("#mensaje").html("<img src='ajax-loader.gif' style='vertical-align:middle;margin:0 10px 0 0' /><strong>Enviando mensaje...</strong>");
					$.ajax({
						type: "POST",
						url:"parts/envio.php",
						contentType: "application/x-www-form-urlencoded",
						processData: true,
						data: "nombre="+escape($('#Nombre').val())+"&apellido="+escape($('#Apellido').val())+"&rut="+escape($('#RUT').val())+"&email="+escape($('#Email').val())+"&telefono="+escape($('#Telefono').val())+"&ciudad="+escape($('#Ciudad').val()),
						success: function(msg){
							$('body').addClass('final');
							$("#mensaje").html("<strong>Tus datos han sido enviados con éxito </strong><span>Uno de nuestros ejecutivos se contactará<br>contigo a la brevedad.</span><span class='gracias'></span>");
							
							ga('send', 'event', 'Formulario Landing A', 'Submit', $("#Email").val() );
							
							document.getElementById("Nombre").value="";
							document.getElementById("Apellido").value="";
							document.getElementById("RUT").value="";
							document.getElementById("Email").value="";
							document.getElementById("Telefono").value="";
							document.getElementById("Ciudad").value=""
							//setTimeout(function() {$('#mensaje').fadeOut('fast');}, 10000);
							$('#mensaje').addClass('activo');
							$('#FormularioContacto').addClass('oculto');
							$('#contacto_wrap h3').addClass('oculto');
							$('#contacto_wrap p').addClass('oculto');
	
						}
					});
				}
			});
	});
	
   $('#RUT').Rut({
  //on_error: function(){ alert('Rut incorrecto'); },
  format_on: 'keyup'
});
		
 $.validator.addMethod("rut", function(value, element) {
  return this.optional(element) || $.Rut.validar(value); 
}, "Ingresa un RUT válido.");
$("#jq-validation").validate();

