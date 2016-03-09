<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/wow.js"></script>
    <title></title>
	
	<script src="js/main2.js"></script>
	
	<link rel="stylesheet" href="css/main2.css">
	
	<script type="text/javascript">
		//alert("Un mensaje de prueba");
		function luzBox(){
			setTimeout(function() {
				//getScore(); 
				//getResult(); 
				alert("prueba");
			}, 2000);
		}
		
	</script>
	
  </head>
  <body>
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
    <section class="ciclon">
      <div class="ed-container">
        <article class="interior ed-item base-100 tablet-100 web-50 hd-50 full-50"><img src="img/just_logo.png" alt="El Spaguetton Millonario"/>
          <p class="sepeque">AHORA, SOLO TE FALTA PROBAR SUERTE</p>
          <button type="button" value="¡A JUGAR!" class="moveCiclon" onclick="luzBox();">¡PARTICIPAR!</button>
        </article>
        <article class="ed-item base-100 tablet-100 web-50 hd-50 full-50">
          <div class="ed-item base-100 web-100">
            <div class="ciclon"><img src="img/gift-card.png" alt=""/>
              <div class="bille-left"><img src="img/billetes-left.png" alt=""/></div>
              <div class="bille-right"><img src="img/billetes-right.png" alt=""/></div>
              <div class="billeFlotados"><img src="img/billeflotados.png" alt=""/></div>
              <div class="billeFlotados2"><img src="img/billeflotados.png" alt=""/></div>
            </div>
          </div>
        </article>
      </div>
    </section>
	
	<div id="boxes">
		<div style="display: none; position:relative;" id="dialog" class="window centrado-porcentual"> 
			<div class="grupo">
				<div class="imgCupon">
					<h1>Felicitaciones!, ahora ya estás participando.</h1> 
					<h1>El sorteo ser realizará el dd/mm/aa</h1>
					<a href="index.php">Aceptar</a>
				</div>
			</div>
				<h1><a href="#" class="close close-imagenes">X</a></h1>
		</div>
		<div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
	</div>
	
  </body>
</html>