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
    <section id="productos">
      <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, quae. Cupiditate, distinctio enim, at perferendis reprehenderit consectetur iste molestiae asperiores praesentium soluta minima. Praesentium quia aut nam et fugiat molestiae.</h3>

      <div class="products-search">
        <div class="input">
          <i class="fas fa-search"></i>
          <input type="text" name="" id="">
        </div>
        <a href="" class="button">Buscar</a>
      </div>

      <div class="toggle__filters">
        <i class="fas fa-sliders-simple"></i>
      </div>
      <div class="container">

        <div class="filters-menu">
          <div class="top">
            <h3>Uniformes</h3>
          </div>

          <div class="filters">
            <div class="size">
              <h4>TIPO</h4>
              <div class="size-option"><input type="checkbox" name="" id="op1"><label for="op1">Hombre</label></div>
              <div class="size-option"><input type="checkbox" name="" id="op2"><label for="op2">Mujer</label></div>
              <!-- <div class="size-option"><input type="checkbox" name="" id="op3"><label for="op3">6</label></div> -->
            </div>

            <div class="alcohol">
              <h4>ESCOLARIDAD</h4>
              <div class="alcohol-option"><input type="checkbox" name="" id="al1"><label for="al1">Kinder</label></div>
              <div class="alcohol-option"><input type="checkbox" name="" id="al2"><label for="al2">Primaria</label></div>
              <div class="alcohol-option"><input type="checkbox" name="" id="al3"><label for="al3">Secundaria</label></div>
            </div>

            <div class="price">
              <h4>PRECIO</h4>
              <div class="slider">
                <div class="progress"></div>
                <div class="range-input">
                  <input type="range" class="range-min" min="0" max="10000" value="2500">
                  <input type="range" class="range-max" min="0" max="10000" value="7500">
                </div>
              </div>
              <div class="price-input">
                <div class="field">
                  <input type="number" class="price-min" value="2500" name="" id="">
                </div>
                <div class="separator">
                  <p>-</p>
                </div>
                <div class="field">
                  <input type="number" class="price-max" value="7500" name="" id="">
                </div>
              </div>
            </div>

            

          </div>

        </div>

        <div class="mezcales prd">
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
<script src="js/cartModal.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>
<script src="js/priceSlider.js"></script>
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

<script>
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

<script>
  const toggleFilters = document.querySelector('.toggle__filters');
  const filtersMenu = document.querySelector('.filters-menu');

  toggleFilters.addEventListener('click', () => {
    if (filtersMenu.style.display != 'block') {
      filtersMenu.style.display = 'block';
      filtersMenu.style.animation = 'showMenu 500ms linear';
    } else {
      filtersMenu.style.animation = 'hideMenu 500ms linear';
      setTimeout(() => {
        filtersMenu.style.display = 'none';
      }, 500);

    }
  });
</script>

</html>