<!DOCTYPE html>
<html lang="es" xml:lang="es" style="overflow-x: visible">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Eric Aguirrez Andraca" />
  <meta name="description" content="" />

  <meta name="Keywords" content="" />

  <meta name="robots" content="all" />
  <meta property="og:title" content="Uniformes Gabriel's" />
  <meta property="og:description" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="../img/imagen.png" />
  <meta property="og:image:width" content="300" />
  <meta property="og:image:height" content="300" />
  <meta property="og:site_name" content="Uniformes Gabriel's" />
  <meta name="msapplication-TileColor" content="rgb(16, 48, 55)" />
  <meta name="theme-color" content="rgb(16, 48, 55)" />

  <?php include 'elements/estilos.php' ?>

  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <title>Uniformes Gabriel's</title>
</head>

<body>
  <div class="whatsapp">
    <a href="" target="_blank"><i class="fab fa-whatsapp"></i></a>
  </div>

  <!-- <div class="loader__screen" id="loader">
    <div id="wifi-loader">
      <svg class="circle-outer" viewBox="0 0 86 86">
        <circle class="back" cx="43" cy="43" r="40"></circle>
        <circle class="front" cx="43" cy="43" r="40"></circle>
        <circle class="new" cx="43" cy="43" r="40"></circle>
      </svg>
      <svg class="circle-middle" viewBox="0 0 60 60">
        <circle class="back" cx="30" cy="30" r="27"></circle>
        <circle class="front" cx="30" cy="30" r="27"></circle>
      </svg>
      <svg class="circle-inner" viewBox="0 0 34 34">
        <circle class="back" cx="17" cy="17" r="14"></circle>
        <circle class="front" cx="17" cy="17" r="14"></circle>
      </svg>
      <div class="text" data-text="Loading..."></div>
    </div>
  </div> -->

  <?php include 'elements/header.php' ?>

  <main>
    <section id="productos-hero">
      <figure class="portada"><img loading="lazy" src="img/unif3.jpg" alt=""></figure>
      <figure class="icono"><img loading="lazy" src="img/logo.png" alt=""></figure>
      <div class="socials">
        <ul>
          <li><a href=""><i class="fab fa-facebook"></i></a></li>
          <li><a href=""><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </section>
    <section id="contacto">
      <div class="container">

        <div class="left">
          <a href="tel:+52 445 457 3122"><i class="fas fa-phone"></i>&nbsp;+52 445 457 3122</a>
          <a href="https://www.google.com/maps/dir//Peatonal+58,+Zona+Centro,+38800+Morole%C3%B3n,+Gto./@20.134809,-101.1900277,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x842cfaea3441c7c3:0x328406c969d07b96!2m2!1d-101.1874528!2d20.134809!3e0?entry=ttu" target="__blank"><i class="fas fa-location-dot"></i>&nbsp;Peatonal No.58 Moroleón, Gto</a>
        </div>
        <div class="right">
          <form action="">
            <input type="text" name="name" id="name" placeholder="Nombre" required>
            <input type="email" name="email" id="email" placeholder="Correo" required>
            <input type="tel" name="phone" id="phone" placeholder="Teléfono" required>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje*" required></textarea>
            <button type="submit" class="button">Enviar</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <?php include 'elements/footer.php' ?>

</body>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>


</html>