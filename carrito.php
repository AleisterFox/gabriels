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

    <div class="pb"></div>
    <div class="topbar">
      <div class="steps">
        <div class="step active">
          <p>Carrito</p>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step">
          <p>Información</p>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step">
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
              <h3>Tu carrito de compra</h3>
              <p class="number__articles">1 Artículo</p>
            </div>

            <div class="product">
              <i class="fas fa-x"></i>
              <figure><img src="img/uniforme.jpg" alt="" /></figure>
              <div class="product__information">
                <h3 class="product__name">Nombre del producto</h3>
                <p class="product__price">$ 0.00 MXN</p>
                <div class="cantidad-talla">
                  <div class="input-group">
                    <input type="number" value="0" name="Qty" id="Qty" />
                    <button class="decrement">-</button>
                    <button class="increment">+</button>
                  </div>
                  <div class="talla talla-two">
                    <div class="input-group ">
                      <select name="talla" id="talla">
                        <option value="">Seleccionar Talla</option>
                        <option value="">2</option>
                        <option value="">4</option>
                        <option value="">6</option>
                        <option value="">8</option>
                        <option value="">10</option>
                        <option value="">12</option>
                        <option value="">14</option>
                        <option value="">16</option>
                        <option value="">18</option>
                        <option value="">20</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="total__bill">$ 0.00 MXN</div> -->
            <a href="producto.php" class="back"><i class="fas fa-chevron-left"></i>Volver al producto</a>
          </div>
        </div>
        <div class="right">
          <div class="cart__total">
            <h2>Total del carrito</h2>
            <div class="subtotal">
              <h4>Subtotal</h4>
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
            <a href="informacion.php" class="button">Finalizar Compra</a>
            <div class="cart__bottom">
              <p><i class="fas fa-shield"></i>Compra segura</p>
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


</html>