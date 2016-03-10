<?php

function ValidarDatos($campo){
    /*Array con las posibles cabeceras a utilizar por un spammer*/
    $badHeads = array("Content-Type:","MIME-Version:","Content-Transfer-Encoding:","Return-path:","Subject:","From:","Envelope-to:","To:","bcc:","link=","url=","cc:");
    /*Comprobamos que entre los datos no se encuentre alguna de las cadenas del array. Si se encuentra alguna cadena se dirige a una página de Forbidden*/
    foreach($badHeads as $valor){
      if(strpos(strtolower($campo), strtolower($valor)) !== false){
        echo "<p>Lo sentimos, no permitimos el spam en nuestro sitio. (Sorry, I don't allow spammers in my website)</p>";
        exit;
      }
    }
}

if (isset($_POST[nombre])) 
{
	ValidarDatos($_POST['nombre']);ValidarDatos($_POST['apellido']);ValidarDatos($_POST['rut']);ValidarDatos($_POST['email']);ValidarDatos($_POST['telefono']);ValidarDatos($_POST['ciudad']);
	
	
	
	
	
$nombr = $_POST['nombre']; 
$nombre = strip_tags($nombr);    
$n_nombre = strlen($nombre);      

$apellid = $_POST['apellido']; 
$apellido = strip_tags($apellid);    
$n_apellido = strlen($apellido);  

$emai = $_POST['email']; 
$email = strip_tags($emai);    
$n_email = strlen($email);    

$ru = $_POST['rut']; 
$rut = strip_tags($ru);    
$n_rut = strlen($rut); 

$telefon = $_POST['telefono']; 
$telefono = strip_tags($telefon);    
$n_telefono = strlen($telefono); 

$ciuda = $_POST['ciudad']; 
$ciudad = strip_tags($ciuda);    
$n_ciudad = strlen($ciudad); 

     
$fecha = date("d-m-Y H:i"); 

//$total_car = $n_nombre * $n_apellido * $n_email * $n_rut * $n_telefono;    // Si alguno de ellos vale 0, $total_car valdrá 0 

 
     //BASE DE DATOS
    include("abre_conexion.php"); 
     
    $_GRABAR_SQL = "INSERT INTO $tabla (nombre,apellido,email,rut,telefono, ciudad , fecha) VALUES ('$nombre','$apellido','$email', '$rut', '$telefono', '$ciudad' , '$fecha')";  
    mysql_query($_GRABAR_SQL); 
    include("cierra_conexion.php"); 
	
	$correo="<html><head></head><body><p style='font-family:Arial;font-size:12px;line-height:16px;'>
	Contacto Cuenta 2:<br /><br />
	<strong>Nombre:</strong> $_POST[nombre]<br />
	<strong>Apellido:</strong> $_POST[apellido]<br />
	<strong>RUT:</strong> $_POST[rut]<br />
	<strong>E-mail:</strong> $_POST[email]<br /><br />
	<strong>Teléfono:</strong> $_POST[telefono]<br />
	<strong>Ciudad:</strong> $_POST[ciudad]<br />
	<br />
	</p></body></html>";
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	
	$mail->IsSMTP();
	
	$mail->SMTPDebug = 3; // enables SMTP debug information (for testing) // 1 = errors and messages // 2 = messages only
	$mail->Debugoutput = 'html';
	
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "TLS";
	$mail->Host       = "ssl://email-smtp.us-east-1.amazonaws.com";
	$mail->Port       = 465;
	$mail->Username = "AKIAJZEC72Z56EWX6FTQ";
	$mail->Password = "Ak/fkgFY34tqqoUwZ1Eqb6pkHyUa8ynolvxjwfzGVlLP";
	$body = "<html><head><style>p{font-family:Arial;font-size:12px}</style></head><body>$correo</body>";
	$mail->SetFrom('cuprum@tubonoal100.cl',$_POST[nombre]);
	$mail->AddAddress("cuprum@tubonoal100.cl", "Tu Bono al 100%");
	$mail->Subject = "Formulario de Contacto";
	$mail->MsgHTML($body);
	$mail->Send();
	
	
	/* if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	} */
	
}
?>