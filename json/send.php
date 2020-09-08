<?php
	
	$dominio1 = $_SERVER['HTTP_HOST'];  
	$nombre_archivo1 = $_SERVER['PHP_SELF'];  
	$url = "https://" . "$dominio1" . "$nombre_archivo1";  
 

	if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"])){
		
		
		$nombre = $_POST["nombre"];
		$email = $_POST["email"];
		$telefono = $_POST["telefono"];
		$mensaje = $_POST["mensaje"];


		
	        $dominio = $dominio1;
	        $titulo = "3Pharma";
	        $destinatario = $email;
	        $destinatarioadmin = "orocha@3pharma.com.mx";
	        $color = "rgb(96, 38, 158)";
	        
		      $mensaje = '
		      <html>
		        <head>
		        <title>Contacto Web</title>
		        </head>
		        <body style="padding:20px; " align="center">
		        <div style=" width:100%; max-width:756px; margin:auto; text-align:left;" >
		        <p style="color:'.$color.'">ESTIMADO ADMINISTRADOR:</p>
		        <div>
		        Nombre: <strong style="color:'.$color.'; ">'.$nombre.'</strong><br>
		        Telefono: <strong style="color:'.$color.'; ">'.$telefono.'</strong><br>
		        Email: <strong style="color:'.$color.'; ">'.$email.'</strong><br>
		        Ha contactado desde <strong>'.$titulo.'</strong>  y ha dejado el siguiente mensaje:<br>
		        <p style="padding:5px; border:solid 1px #000; color:'.$color.'; ">
		        
		        <br>
		        '.$mensaje.'
		        <br><br>
		        </p>
		        <strong style="color:'.$color.'; ">¡Saludos!<br></strong>
		        Atte.<br>
		        <strong style="color:'.$color.'; ">Servidor Web</strong>
		        </div>
		        </div>
		        </body>
		       </html>
		      ';
	          
	      $asunto="Contacto desde ".$titulo;
	      $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	      $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	      $cabeceras .= 'From: Contacto desde sitio Web <noreply@'.$dominio.'>' . "\r\n";
	      
	      // $para1=$destinatario;
	      $para2=$destinatarioadmin;

	      // mail($para1, $asunto, $mensaje, $cabeceras);
    		if(@mail($para2, $asunto, $mensaje, $cabeceras)){
				echo "1";
			}else{
				echo "0";
			}
	} else {
		echo "0";
	}

?>