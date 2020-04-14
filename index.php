<?php //include 'script/CargaNoticias.php';

    $fecha = getdate();
    $day= $fecha['mday'];
    $month=$fecha['month'];
    $year=$fecha['year'];
    
   ?>

<html lang="es">
  <head>
    <!--Configuracion inicial de la pagina -->
    <meta charset="utf-8">
    <meta name="description" content="Pagina virtual de inicio AQtV">
    <meta name="keywords" content="pagina, inicio, AQtV, ventas, virtual">
    <meta name="viewport" content="width=device-width,initial-scale=1 ,user-scalable=1">
    <link rel="shortcut icon" type="image/icon" href="image/Logo_AQTV.jpg">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <script src="https://kit.fontawesome.com/e4100513fa.js" crossorigin="anonymous"></script>
    <title> AQTV virtual, soluciones en servicios de seguridad, hogar y energias renovable</title>
  </head>

  <body>
      <header class="encabezados">

            <img src="image/Banner.png">

      </header>

      <nav class="navegador">
          <ul class="menu">
            <li class="menuitem"><a href="#">Inicio</a></li>
            <li class="menuitem"><a href="pages/quienes_somos.php">Quienes somos?</a></li>
            <li class="menuitem"><a href="pages/productos.html">Productos</a></li>
            <li class="menuitem"><a href="#">Contactanos</a></li>
          </ul>
      </nav>

<div class="cuerpo">
        <section class="seccion">

            <h2> Noticias</h2>
            <h3>  <?php echo "Noticias del ".$day." de ".$month." del ".$year; ?></h3>

            <article class="articulo">
              <h2>Primera noticia</h2>
              <figure><img src="image/children_security.jpg" alt="seguridad infantil">
              <figcaption>seguridad infantil</figcaption></figure>
               <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</br>
              et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</br>
              ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</br>
              nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </br>
              id est laborum.</p>
            </article>
            <article class="articulo">
              <h2>segunda noticia</h2>
              <figure> <img src="image/cyber_security.jpg" alt="ciberseguridad">
              <figcaption>seguridad cibernetica</figcaption></figure>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</br>
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</br>
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</br>
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </br>
                id est laborum.
              </p>
            </article>
            <article class="articulo">
              <h2>tercera noticia</h2>
              <figure> <img src="image/security_news.jpg" alt="imagen de seguridad">
              <figcaption>noticias de seguridad</figcaption></figure>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</br>
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</br>
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</br>
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </br>
                id est laborum.
              </p>
            </article>

          </section>
            <section class="seccion">
              <h2>Oferta</h2>
              <article>
                <h2>primera oferta</h2>
                <figure><img src="image/oferta_1.jpg" alt="oferta 1">
                <figcaption>ofertas de seguridad</figcaption></figure>
                <p>
                  *Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</br>
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</br>
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</br>
                  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </br>
                  id est laborum.
                </p>
              </article>
              <article>
                <h2>segunda oferta</h2>
                <figure><img src="image/oferta_2.jpg" alt="oferta 2">
                <figcaption>ofertas de seguridad</figcaption></figure>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</br>
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</br>
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</br>
                  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </br>
                  id est laborum.
                </p>
              </article>
              <article>
                <h2>tercera oferta</h2>
                <figure><img src="image/oferta_3.jpg" alt="oferta 3">
                <figcaption>ofertas de seguridad</figcaption></figure>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</br>
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</br>
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</br>
                  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </br>
                  id est laborum.
                </p>
              </article>


        </section>
        <aside class="lateral">

            <h2>Novedades</h2>

              <article class="articulo">
                <h2>primera novedad</h2>
                <figure><img src="image/novedades_1.jpg" alt="Novedades 1">
                <figcaption>novedades de seguridad</figcaption></figure>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</br>
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</br>
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</br>
                  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </br>
                  id est laborum.
                </p>
              </article>
              <article class="articulo">
                <h2>segunda novedad</h2>
                <figure><img src="image/novedades_2.jpg" alt="Novedades 2">
                <figcaption>novedades de seguridad</figcaption></figure>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</br>
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</br>
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</br>
                  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </br>
                  id est laborum.
                </p>
              </article>
              <article class="articulo">
                <h2>tercera novedad</h2>
                <figure><img src="image/novedades_3.jpg" alt="Novedades 3">
                <figcaption>novedades de seguridad</figcaption></figure>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</br>
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</br>
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</br>
                  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </br>
                  id est laborum.
                </p>
              </article>

        </aside>
</div>
        <footer>
<div class="pie">
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a>
        <a href="#"><i class="fas fa-phone-square"></i></a>
          <a href="#"><i class="far fa-comments"></i></a>

          <address>
            <p>
              yenlu, diseño de soluciones informaticas</br>
              telefono: 5355423</br>
              direccion: calle falsa 123
            </p>
          </address>
</div>
        </footer>


  </body>

</html>
