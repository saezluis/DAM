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
          
            <div class="icon-menu toggle-menu"></div>
            <?php
				include "menu.php";
			?>
          
        </div>
      </div>
    </header>
    <section class="ciclon">
      <div class="ed-container">
        <article class="interior ed-item base-100 tablet-100 web-50 hd-50 full-50"><img src="img/just_logo.png" alt="El Spaguetton Millonario"/>
          <p class="sepeque">¿Tienes alguna duda o consulta? Escríbenos</p>
        </article>
        <article class="ed-item base-100 tablet-100 web-50 hd-50 full-50">
          <div class="ed-item base-100 web-100">
            <form id="contacto" method="post" action="procesar-contacto.php">
              <label class="contact">Nombre</label>
              <input type="text" name="nombre" required />
              <label class="contact">Teléfono</label>
              <input type="text" name="telefono" required />
              <label class="contact">Asunto</label>
              <input type="text" name="asunto" required />
              <label class="contact">Cuéntanos</label>
              <textarea name="comentario" required ></textarea>
              <input type="submit" value="Enviar"/>
            </form>
          </div>
        </article>
      </div>
    </section>
  </body>
</html>