<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/tooltipster.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.tooltipster.min.js"></script>
    <title></title>
  </head>
  <body>
	<?php
		include "config.php";
		
		$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
		$acentos = $conexion->query("SET NAMES 'utf8'");
		
	?>
    <div class="billete-top-left"><img src="img/billete-top-left.png" alt=""/></div>
    <div class="billete-bottom-left"><img src="img/billete-bottom-left.png" alt=""/></div>
    <div class="billete-top-right"><img src="img/billete-top-right.png" alt=""/></div>
    <div class="billete-bottom-right"><img src="img/billete-bottom-right.png" alt=""/></div>
    <header class="menu_top">
      <div class="ed-container">
        <div class="ed-item base-50 web-20">
          <div class="menu__top__logo-luchetti"><img src="img/logo-luchetti.png" alt="Tresmontes Luchetti"/></div>
        </div>
        <div class="ed-item base-50 web-80 no-padding">
			<?php
				include "menu.php";
			?>
        </div>
      </div>
    </header>
    <section>
      <div class="ed-container">
        <article class="interior ed-item base-100 tablet-100 web-50 hd-50 full-50"><img src="img/just_logo.png" alt="El Spaguetton Millonario"/>
          <div class="tarjetas">
            <p class="gift">AL PARTICIPAR PODRÁS GANAR CIENTOS DE GIFTCARDS</p>
            <div class="cardgift"><img src="img/gift-card.png" alt=""/></div>
          </div>
        </article>
        <article class="ed-item base-100 tablet-100 web-50 hd-50 full-50">
          <div class="ed-item base-100 web-100">
            <h2>Para comenzar ingresa tus datos</h2><span>(El ingreso de facturas tiene un desfase de 24 hrs.)</span>
          </div>
          <form id="dale" class="ed-container" method="post" action="ciclon.php">
            <div class="ed-item base-100 web-50 midium-100">
              <?php
			  
				//aqui valido la factura y redirecciono al juego
				$nro_factura = $_REQUEST['nro_factura'];
				
				$registrosUsuario = mysqli_query($conexion,"SELECT * FROM usuario WHERE nro_factura = '$nro_factura' ") or die("Problemas en el select de comuna".mysqli_error($conexion));
				
				$rows = mysqli_num_rows($registrosUsuario);
				
				//echo "Rows: ".$rows;
				//echo "<br>";
				//echo "<br>";
				
				
				if($rows=='0'){
					
					date_default_timezone_set("America/Santiago");
					$date =  date("Y-m-d h:i:s");
					$timestamp = date('Y-m-d h:i:s', strtotime($date));
					//aqui mismo guardo porque esa factura puede participar
					$nombre = $_REQUEST['nombre'];
					$apellido = $_REQUEST['apellido'];
					$comuna = $_REQUEST['comuna'];
					$email = $_REQUEST['email'];
					$telefono = $_REQUEST['telefono'];
					$nro_gift_card = $_REQUEST['nro_gift_card'];
					
					mysqli_query($conexion,"INSERT INTO usuario(nombre,apellido,email,telefono,comuna,nro_factura,nro_gift_card,fecha) values 
									('$nombre',
									'$apellido',
									'$email',
									'$telefono',
									'$comuna',
									'$nro_factura',
									'$nro_gift_card',
									'$timestamp'
									)")
					or die("Problemas con el insert de usuario");
					header('Location: ciclon.php');
					
				}else{
					echo "<label>Número de factura ya fue ingresado al sistema</label>";
					echo "<a href=\"form.php\">Volver</a>";
				}
				
			  ?>
            </div>            
          </form>
        </article>
      </div>
    </section>
  </body>
</html>