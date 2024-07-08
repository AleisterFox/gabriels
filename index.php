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
    <section id="hero">
      <div class="glide" id="hero-slider">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <figure class="portada"><img loading="lazy" src="img/unif1.jpg" alt="" /></figure>
              <div class="content">

                <h1>Lorem ipsum dolor sit amet</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, blanditiis!
                </p>
                <a href="" class="button">Comprar</a>
              </div>
            </li>
            <li class="glide__slide">
              <figure class="portada"><img loading="lazy" src="img/unif2.jpg" alt="" /></figure>
              <div class="content">

                <h1>Lorem ipsum dolor sit amet</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, blanditiis!
                </p>
                <a href="" class="button">Comprar</a>
              </div>
            </li>
            <li class="glide__slide">
              <figure class="portada"><img loading="lazy" src="img/unif3.jpg" alt="" /></figure>
              <div class="content">

                <h1>Lorem ipsum dolor sit amet</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, blanditiis!
                </p>
                <a href="" class="button">Comprar</a>
              </div>
            </li>

          </ul>

          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
          </div>
        </div>
      </div>
      <div class="socials">
        <ul>
          <li><a href=""><i class="fab fa-facebook"></i></a></li>
          <li><a href=""><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </section>
    <!-- <section id="us">
      <div class="top">
        <div class="left">
          <figure class="maguey-black">
            <img loading="lazy" src="img/maguey-black.png" alt="">
          </figure>
          <h2>Discover a unique flavor, with authentic origin and artisanal process.</h2>
          <hr>
          <p>'Humo de mar' mezcal stands out for its careful preparation process and its captivating flavor notes. Each sip is an unparalleled experience.</p>
          <a href="" class="button">About Us</a>
        </div>
        <div class="right">
          <figure><img loading="lazy" src="img/us1.jpg" alt=""></figure>
        </div>
      </div>
      <div class="bottom">
        <div class="left">
          <figure>
            <img loading="lazy" src="img/us2.jpg" alt="">
          </figure>
        </div>
        <div class="right">
          <h2>Carefully made with the highest quality ingredients.</h2>
          <figure><img loading="lazy" src="img/us3.jpg" alt=""></figure>
        </div>
      </div>
    </section> -->

    <!-- <div class="banner">
      <h2>Descubre el sabor único</h2>
      <h3>“THE TASTE OF OUR HERITAGE”</h3>
      <a href="" class="button">Comprar</a>
    </div> -->

    <section id="products">

      <h2>Más vendidos</h2>

      <div class="mezcales">
        <div class="mezcal">
          <a href="producto.php" class="mezcal-info">
            <figure><img loading="lazy" src="img/uniforme.jpg " alt="" /></figure>
            <h4>Lorem Ipsum</h4>
            <p class="mezcal-description">Lorem Ipsum</p>
            <p class="price">$ 0.00 MXN</p>
          </a>
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
          <a href="javascript:void(0);" class="button add__product">Agregar al carrito</a>
        </div>
        <div class="mezcal">
          <a href="producto.php" class="mezcal-info">
            <figure><img loading="lazy" src="img/uniforme.jpg " alt="" /></figure>
            <h4>Lorem Ipsum</h4>
            <p class="mezcal-description">Lorem Ipsum</p>
            <p class="price">$ 0.00 MXN</p>
          </a>
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
          <a href="javascript:void(0);" class="button add__product">Agregar al carrito</a>
        </div>
        <div class="mezcal">
          <a href="producto.php" class="mezcal-info">
            <figure><img loading="lazy" src="img/uniforme.jpg " alt="" /></figure>
            <h4>Lorem Ipsum</h4>
            <p class="mezcal-description">Lorem Ipsum</p>
            <p class="price">$ 0.00 MXN</p>
          </a>
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
          <a href="javascript:void(0);" class="button add__product">Agregar al carrito</a>
        </div>
        <div class="mezcal">
          <a href="producto.php" class="mezcal-info">
            <figure><img loading="lazy" src="img/uniforme.jpg " alt="" /></figure>
            <h4>Lorem Ipsum</h4>
            <p class="mezcal-description">Lorem Ipsum</p>
            <p class="price">$ 0.00 MXN</p>
          </a>
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
          <a href="javascript:void(0);" class="button add__product">Agregar al carrito</a>
        </div>
      </div>

      <a href="productos.php">Ver más <i class="fas fa-arrow-right"></i></a>
    </section>

    <section id="promociones">
      <h2>Promociones</h2>
      <div class="glide" id="projects-slider">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <figure><img loading="lazy" src="img/uniforme2.jpg" alt=""></figure>
              <div class="content">
                <h3>Lorem ipsum dolor sit amet</h3>
              </div>
            </li>

            <li class="glide__slide">
              <figure><img loading="lazy" src="img/uniforme.jpg" alt=""></figure>
              <div class="content">
                <h3>Lorem ipsum dolor sit amet</h3>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </section>

    <section id="faqs">
      <h2>Preguntas frecuentes</h2>

      <div class="container">
        <details>
          <summary>
            <h5>Lorem Ipsum</h5> <i class="fas fa-chevron-down"></i>
          </summary>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
        </details>
        <details>
          <summary>
            <h5>Lorem Ipsum</h5> <i class="fas fa-chevron-down"></i>
          </summary>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
        </details>
        <details>
          <summary>
            <h5>Lorem Ipsum</h5> <i class="fas fa-chevron-down"></i>
          </summary>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
        </details>
        <details>
          <summary>
            <h5>Lorem Ipsum</h5> <i class="fas fa-chevron-down"></i>
          </summary>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
        </details>
      </div>
    </section>

    <div class="cart__modal cart__modal--active">
      <div class="cart__modal--container">
        <div class="top">
          <div class="close__modal">
            <i class="fas fa-x"></i>
          </div>
          <h2>Carrito de compra</h2>
        </div>
        <div class="products">
          <div class="product">
            <div class="product__info">
              <figure><img loading="lazy" src="img/uniforme.jpg " alt="" /></figure>
              <div class="product__info--data">
                <h4 class="product__name">Nombre del producto</h4>
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
              <p class="product__price">$ 0.00 MXN</p>
            </div>
          </div>
        </div>
        <div class="costos">
          <div class="subtotal">
            <h4>Subtotal</h4>
            <p class="subtotal__amount">$ 0.00 MXN</p>
          </div>
          <div class="entrega">
            <h4>Entrega</h4>
            <p class="subtotal__amount">Por calcular</p>
          </div>
          <div class="total">
            <h3>Total</h3>
            <p class="total__amount">$ 0.00 MXN</p>
          </div>
        </div>
        <a href="carrito.php" class="button">Comprar ahora</a>
        <div class="cart__bottom">
          <a href="javascript:void(0);" class="keep__buying">Seguir comprando</a>
          <a href="javascript:void(0);">Vaciar carrito</a>
        </div>
      </div>
    </div>
  </main>

  <?php include 'elements/footer.php' ?>

</body>
<script src="js/script.js"></script>
<script src="js/script2.js"></script>

<script src="js/cartModal.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/adder.js"></script>
<script src="js/loader.js"></script>
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

<script>
  var glide = new Glide("#hero-slider", {
    type: "carousel",
    perView: 1,
    autoplay: 5000,
    animationDuration: 2000,
    animationTimingFunction: "ease-in-out",
  });
  glide.mount();

  var proyectos = new Glide("#projects-slider", {
    type: "carousel",
    perView: 3,
    breakpoints: {
      768: {
        perView: 2,
      },
      550: {
        perView: 1,
      },
    },
    autoplay: 5000,
    animationDuration: 2000,
    animationTimingFunction: "ease-in-out",
    pauseOnHover: true,
  });
  proyectos.mount();
</script>

</html>