<!DOCTYPE html>
<html lang="es">
<head>
<title>Enviando email de contacto | webgratis.com.ar</title>


<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page5">
<!-- header -->

 <?php include('menu.php');
 ?> 
    
    
    <!-- content -->
    
    <section id="content">
      <div class="padding">
        <div class="indent">
          <h2>Formulario de Contacto</h2>
          <div class="wrapper indent-bot">
            <div class="col-3">
          		
            <?php 

            	$nombre = $_POST['nombre'];
				$mail = $_POST['mail'];
				$asunto = $_POST['asunto'];
				$mensaje_1 = $_POST['comentario'];
				$telefono = $_POST['telefono'];									
				$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
				$mensaje .= "===================================" . " \r\n";
				$mensaje .= "Su e-mail es: " . $mail . " \r\n";
				$mensaje .= "Su telefono es: " . $telefono . " \r\n";
				$mensaje .= " \r\n";
				$mensaje .= "Mensaje: " . $mensaje_1 . " \r\n";
				$mensaje .= "Enviado el " . date('d/m/Y', time());

            	require("class.phpmailer.php");
				require("class.smtp.php");

				$mail = new PHPMailer();
				$mail->IsSMTP();                                      // Establecer envío SMTP
				$mail->Host = "mail.webgratis.com.ar";  // Especificar el servidor principal y de respaldo
				$mail->SMTPAuth = true;     // Activar la autenticación SMTP
				$mail->Username = "info@webgratis.com.ar";  // SMTP nombre de usuario
				$mail->Password = "3!lsAg*?&WSj"; // SMTP contraseña

				$mail->From = "info@webgratis.com.ar";
				$mail->FromName = "Mailer";
				$mail->AddAddress("info@webgratis.com.ar", "Informacion WebGratis!");        // opcional
				$mail->AddReplyTo($mail, $nombre);

				$mail->WordWrap = 50;
				$mail->IsHTML(true);                                  // Formato de correo electrónico listo para HTML

				$mail->Subject = $asunto;
				$mail->Body    = $mensaje;
				$mail->AltBody = $mensaje;

				if(!$mail->Send())
				{
				echo "El mensaje no se ha podido enviar. <p>";
				echo "Error: " . $mail->ErrorInfo;
				exit;
				}

				echo "Mensaje envíado correctamente";
				/*
				if($mail->Send())
				{
					echo '<img src="images/emailok.jpg" width="450" height="237" alt="emailok en webgratis.com.ar">';
				}
				else echo '<img src="images/emailfailed.jpg" width="450" height="237" alt="emailfail en webgratis.com.ar">';
				*/
				
			?>               

             </div>
          </div>          
        </div>
                
      </div>
      
    </section>
    
    
    <!-- footer -->
     <?php include('footer.php');
	 ?> 
    
  </div>
</div>

</body>
</html>
