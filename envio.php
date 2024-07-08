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
    <a href="https://wa.link/gtiohk" target="_blank"><i class="fab fa-whatsapp"></i></a>
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

    <div class="pb"></div>
    <div class="topbar">
      <div class="steps">
        <div class="step">
          <a href="carrito.php">Carrito</a>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step">
          <a href="informacion.php">Información</a>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step active">
          <p>Envío</p>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step">
          <p>Pago</p>
        </div>
      </div>
    </div>

    <section id="process">

      <div class="container">
        <div class="left">
          <div class="buying__cart">
            <div class="top">
              <h3>Información</h3>
            </div>
            <div class="customer__info">
              <p class="customer__name">
                <strong>Nombre de la persona</strong>
              </p>
              <p class="customer__phone">Teléfono</p>
              <p class="customer__email">Email</p>
              <a href="">Cambiar</a>
            </div>
          </div>

          <div class="buying__cart">
            <div class="top">
              <h3>Envío</h3>
            </div>

            <div class="customer__info">
              <form action="">
                <input type="number" name="postalCode" id="postalCode" placeholder="Código Postal*" required />
                <a href="">No sé mi codigo postal</a>
                <p>Complete su dirección de entrega</p>

                <select name="state" id="state">
                  <option value="javascript:void(0);">Estado*</option>
                </select>
                <input type="text" name="city" id="city" placeholder="Municipio*" required />
                <input type="text" name="address" id="address" placeholder="Dirección*" required />

                <input type="text" name="colonia" id="colonia" placeholder="Colonia*" required />

                <input type="number" name="exterior" id="exterior" placeholder="No. exterior*" required />

                <input type="number" name="interior" id="interior" placeholder="No. interior" />

                <input type="text" name="destinatario" id="destinatario" placeholder="Destinatario" />

              </form>
            </div>

            <div class="bottom">
              <a href="informacion.php" class="back"><i class="fas fa-chevron-left"></i>Volver a información</a>
              <a href="pago.php" class="button">Continuar</a>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="cart__total">
            <h2>Total del carrito</h2>

            <div class="cart__products">
              <div class="cart__products--product">
                <figure><img src="img/uniforme.jpg" alt=""></figure>
                <div class="cart__product--description">
                  <h4>Nombre uniforme</h4>
                  <p>Descripcion uniforme</p>
                </div>
                <p>$0.00 MXN</p>
              </div>
            </div>

            <div class="subtotal">
              <p>Subtotal</p>
              <p class="subtotal__amount">$ 0.00 MXN</p>
            </div>
            <div class="gastos__envio">
              <p>Calculando gastos de envío</p>
              <p class="subtotal__amount">$ 0.00 MXN</p>
            </div>
            <div class="total">
              <h3>Total</h3>
              <p class="total__amount">$ 0.00 MXN</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include 'elements/footer.php' ?>

</body>
<script src="js/script.js"></script>
<script src="js/cartModal.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>
<script src="js/adder.js"></script>

<script>
  const estadosMexicanos = [
    "Aguascalientes",
    "Baja California",
    "Baja California Sur",
    "Campeche",
    "Chiapas",
    "Chihuahua",
    "Coahuila",
    "Colima",
    "Ciudad de México",
    "Durango",
    "Guanajuato",
    "Guerrero",
    "Hidalgo",
    "Jalisco",
    "Estado de México",
    "Michoacán",
    "Morelos",
    "Nayarit",
    "Nuevo León",
    "Oaxaca",
    "Puebla",
    "Querétaro",
    "Quintana Roo",
    "San Luis Potosí",
    "Sinaloa",
    "Sonora",
    "Tabasco",
    "Tamaulipas",
    "Tlaxcala",
    "Veracruz",
    "Yucatán",
    "Zacatecas",
  ];

  const select = document.getElementById("state");

  estadosMexicanos.forEach((estadoMexicano, index) => {
    const option = document.createElement("option");
    option.text = estadoMexicano;
    option.value = index + 1;
    select.add(option);
  });
</script>

</html>