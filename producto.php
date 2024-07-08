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
          <a href="productos.php">Uniforme</a>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step active">
          <p>Uniforme nombre</p>
        </div>
      </div>
    </div>

    <section id="product">
      <div class="container">
        <div class="side-gallery">
          <figure class="product__gallery--image active">
            <img loading="lazy" src="img/uniforme.jpg" alt="" />
          </figure>
          <figure class="product__gallery--image">
            <img loading="lazy" src="img/uniforme2.jpg" alt="" />
          </figure>
          <figure class="product__gallery--image">
            <img loading="lazy" src="img/uniforme.jpg" alt="" />
          </figure>
        </div>

        <div class="product-image">
          <figure class="product__image--active pi1">
            <img loading="lazy" src="img/uniforme.jpg" alt="" />
          </figure>
        </div>

        <div class="product__slider">
          <div class="glide" id="product-slider">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide">
                  <figure><img loading="lazy" src="img/uniforme.jpg" alt="" /></figure>
                </li>
                <li class="glide__slide">
                  <figure><img loading="lazy" src="img/uniforme.jpg" alt="" /></figure>
                </li>
                <li class="glide__slide">
                  <figure><img loading="lazy" src="img/uniforme.jpg" alt="" /></figure>
                </li>
              </ul>
              <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
              </div>
            </div>
          </div>
        </div>

        <div class="product-info">
          <h2 class="product__title">Lorem Ipsum</h2>
          <figure class="stars"><img loading="lazy" src="img/stars.png" alt="" /></figure>
          <p class="price"><strong>$ 0.00 MXN</strong></p>
          <p class="desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
            eget dui quis diam gravida sollicitudin in nec ex. Aenean pharetra
            viverra est a sodales. Nam non turpis ut est gravida ornare.
          </p>

          <div class="talla">
            <div class="input-group">
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

          <div class="adder">
            <div class="input-group">
              <input type="number" value="0" name="Qty" id="Qty" />
              <button class="decrement">-</button>
              <button class="increment">+</button>
            </div>
          </div>

          <div class="product__buttons">
            <a href="javascript:void(0);" class="button__secondary add__product">Agregar al carrito</a>
            <a href="carrito.php" class="button">Comprar</a>
          </div>

          <div class="product__image--zoom">
            <figure class="product__image--active pi2">
              <img loading="lazy" src="img/uniforme.jpg" alt="" />
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section id="products" class="producto">

      <h2>Best Seller</h2>

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
<script src="js/adder.js"></script>
<script src="js/cartModal.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

<script>
  var product = new Glide("#product-slider", {
    type: "carousel",
    perView: 1,
    autoplay: 5000,
    animationDuration: 2000,
    animationTimingFunction: "ease-in-out",
    pauseOnHover: true,
  });
  product.mount();
</script>

<script>
  const img1 = document.querySelector(".pi1");
  const img2 = document.querySelector(".product__image--zoom");
  const zoomImg = document.querySelector(".pi2 > img");
  const mainImg = document.querySelector(".pi1 > img");
  const galleryImages = document.querySelectorAll(".product__gallery--image");

  galleryImages.forEach((galleryImage) => {
    galleryImage.addEventListener("click", () => {
      galleryImages.forEach((galleryImg) => {
        galleryImg.classList.remove("active");
      });
      galleryImage.classList.add("active");
      let srcAttr = galleryImage.firstElementChild.getAttribute("src");
      mainImg.setAttribute("src", srcAttr);
      zoomImg.setAttribute("src", srcAttr);
    });
  });

  img1.addEventListener("mousemove", ver);
  img1.addEventListener("mouseout", () => {
    img2.style.display = "none";
  });

  function ver(e) {
    img2.style.display = "block";
    img2.style.boxShadow = "5px 5px 10px 0px gray";
    img2.style.border = "1px solid black";
    img1.style.cursor = "zoom-in";
    const rect = img1.getBoundingClientRect();
    let offsetX = e.clientX - rect.left;
    offsetX = (offsetX / img1.clientWidth) * 100;
    let offsetY = e.clientY - rect.top;
    offsetY = (offsetY / img1.clientHeight) * 100;
    zoomImg.style.left = `-${offsetX}%`;
    zoomImg.style.top = `-${offsetY}%`;
    zoomImg.style.transform = "scale(1.2)";
  }
</script>


<!-- <script>
  const imgs1 = document.querySelectorAll(".pi1");
  const img2 = document.querySelector(".product__image--zoom");
  const zoomImg = document.querySelector(".pi2 > img");
  const mainImg = document.querySelector(".pi1 > img");
  const galleryImages = document.querySelectorAll(".glide__slide");
  const figures = document.querySelectorAll(".glide__slide > figure");
  const productSlider = document.querySelector('.glide__slides');


  imgs1.forEach(img1 => {
    img1.addEventListener("mousemove", (e) => ver(e, img1));
    img1.addEventListener("mouseout", () => {
      img2.style.display = "none";
    });
  });

  function ver(e, img1) {
    let mainImg = img1.firstElementChild;
    let srcAttr = mainImg.getAttribute("src");
    zoomImg.setAttribute("src", srcAttr);
    img1.style.cursor = "zoom-in";
    img2.style.display = "block";
    img2.style.boxShadow = "5px 5px 10px 0px gray";
    img2.style.border = "1px solid black";

    const rect = mainImg.getBoundingClientRect();
    let offsetX = e.clientX - rect.left;
    let half = img1.clientWidth / 2;
    if (offsetX < half) {
      offsetX = ((offsetX / img1.clientWidth) * 100) * (-1);
      offsetX += 50;
    } else {
      offsetX = (offsetX / img1.clientWidth) * 100;
      offsetX -= 50;
      offsetX = offsetX * (-1)
    }

    let offsetY = e.clientY - rect.top;

    if (offsetY < half) {
      offsetY = ((offsetY / img1.clientWidth) * 100) * (-1);
      offsetY += 50;
    } else {
      offsetY = (offsetY / img1.clientWidth) * 100;
      offsetY -= 50;
      offsetY = offsetY * (-1)
    }
    zoomImg.style.left = `${offsetX}%`;
    zoomImg.style.top = `${offsetY}%`;
    zoomImg.style.transform = "scale(1.4)";
  }
</script> -->

</html>