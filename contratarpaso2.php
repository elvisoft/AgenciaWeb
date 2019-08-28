<!DOCTYPE html>
<html lang="es">
<head>
<title>Ordenar servicio en webgratis | webgratis.com.ar</title>

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
          <h2>Solicitud del servicio. Paso 2</h2>
          <div class="wrapper indent-bot">
            <div class="col-3">
          		
                <?php
					$nombre = $_POST['nombre'];
					$mail = $_POST['mail'];
					$provincia = $_POST['provincia'];
					$localidad = $_POST['localidad'];
					$nombreempresa = $_POST['nombreempresa'];
					$telefono = $_POST['telefono'];
					$quienessomos = $_POST['quienessomos'];
					$productos = $_POST['productos'];
					$plan = $_POST['plan'];
					$comentarios = $_POST['comentarios'];
					$header = 'From: ' . $mail . " \r\n";
					$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
					$header .= "Mime-Version: 1.0 \r\n";
					$header .= "Content-Type: text/plain";
					
					$mensaje = "Solicitud de servicio enviado por: " . $nombre . " \r\n";
					$mensaje .= "=========================================================" . " \r\n";
 					$mensaje .= "=========================================================" . " \r\n";
					$mensaje .= "Su e-mail es: " . $mail . " \r\n";
					$mensaje .= "Su telefono es: " . $telefono . " \r\n";
					$mensaje .= "Provincia: " . $provincia . " \r\n";
					$mensaje .= "Localidad: " . $localidad . " \r\n";
					$mensaje .= "Nombre de empresa: " . $nombreempresa . " \r\n";
					$mensaje .= "Texto quienes somos: " . $quienessomos . " \r\n";
					$mensaje .= "Texto productos/servicios: " . $productos . " \r\n";
					$mensaje .= "Plan a contratar: " . $plan . " \r\n";
					
					$mensaje .= " \r\n";
					$mensaje .= "comentarios adicionales: " . $comentarios . " \r\n";
					$mensaje .= "Enviado el " . date('d/m/Y', time());
					
					$para = 'info@webgratis.com.ar';
					ini_set("sendmail_from", "info@webgratis.com.ar");
					if (mail($para, $asunto, $mensaje, $header) & $nombre!='' & $mail!='' & $nombreempresa!='' & $productos!='' & $quienessomos!='' )
					{
						echo '<img src="images/ordenenviadaok.jpg" width="450" height="238">';
					}
					else { echo '<img src="images/emailfailed.jpg" width="450" height="237" alt="emailfail en webgratis.com.ar">';
						}
					
					//echo 'mensaje enviado exitosamnete';
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
