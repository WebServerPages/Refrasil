<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<? 
//se mandan a llamar las variables con metodo POST 
$nombre = $_POST["nombre"]; 
$telefonos = $_POST["telefonos"]; 
$correo = $_POST["correo"]; 
$comentario = $_POST["comentario"]; 


//se incluyen las variables del form en el mensaje 
$mensaje .="Nuevo Comentario de :". $nombre ." \r\n"; 
$mensaje .="con Telefonos: ".$telefonos." \r\n"; 
$mensaje .="Correo Electronico: ".$correo." \r\n"; 
$mensaje .="El Comentario es: ".$comentario." \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time());


$cabeceras = "From:<$correo>\n"; 

$body_top = "--Message-Boundary\n"; 
$body_top .= "Content-type: text/plain;charset=US-ASCII\n"; 
$body_top .= "Content-transfer-encoding: 7BIT\n"; 
$body_top .= "Content-description: Mail messagebody\n\n"; 
$cuerpo = $mensaje; 

//cuenta de correo a donde quieren q llegue el formulario 
$destino = "compuclinic911@gmail.com"; 
$asunto = 'Contacto desde Website REFRASIL';
echo ("<center><b><font size='5' color='#000000' face='Arial'>"); 

if (mail($destino,$asunto,$cuerpo,$cabeceras)) 
{ 
echo ("SU MENSAJE A SIDO ENVIADO"); 
} else { 
echo ("ERROR. PORFAVOR INTENTE MAS TARDE"); 
} 

echo ("</center></font></b>"); 

?> 



</body>
</html>