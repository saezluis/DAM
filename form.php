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
		
		$registrosComuna = mysqli_query($conexion,"SELECT * FROM comuna ORDER BY comuna_nombre asc;") or die("Problemas en el select de comuna".mysqli_error($conexion));
		
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
            <h2>Para comenzar ingresa tus datos</h2><!-- <span>(El ingreso de facturas tiene un desfase de 24 hrs.)</span> -->
          </div>
          <form id="dale" class="ed-container" method="post" action="validar-nro-factura.php">
            <div class="ed-item base-100 web-50 midium-100">
              <label>Nombre</label>
              <input type="text" name="nombre" required />
            </div>
            <div class="ed-item base-100 web-50 midium-100">
              <label>Apellido</label>
              <input type="text" name="apellido" required />
            </div>
            <div class="ed-item base-100 web-50 midium-100">
              <label class="half">Mail</label>
              <label class="half left-margin">Teléfono</label>
              <input type="text" class="half righ-margin" name="email" id="mail" required />
              <input type="text" class="half" id="telefono" name="telefono" required />
            </div>
            <div class="ed-item base-100 web-50 midium-100">
              <label>Selecciona tu comuna</label>
              <select name="comuna">
				<?php
					while($reg=mysqli_fetch_array($registrosComuna)){						
						$nombreComuna = $reg['comuna_nombre'];						
						echo "<option value=\"$nombreComuna\">$nombreComuna</option>";
					}
				?>
              </select>
            </div>
            <div class="ed-item base-100 web-100">
              <label>Ingresa tu número de factura</label>
              <input type="text" name="nro_factura" />
            </div>
            <div class="ed-item base-100 web-100">
              <label>Ingresa el número de gift card</label>
              <input type="text" name="nro_gift_card" />
            </div>
            <div class="ed-item base-100 web-100">
              <input type="submit" value="Ir al juego"/>
            </div>
          </form>
        </article>
      </div>
    </section>
  </body>
</html>