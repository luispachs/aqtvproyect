
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Pagina quienes somos de aqtv virtual">
    <meta name="keywords" content="quienes,somos,aqtv,informacion,empresarial">
    <title>Quienes somos? AQTV VIRTUAL</title>
    <link rel="shortcut icon" type="image/icon" href="../image/Logo_AQTV.jpg">
    <link rel="stylesheet" type="text/css" href="../Style/quienes.css">
    <script src="https://kit.fontawesome.com/e4100513fa.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="encabezados">
      <img src="../image/Banner.png" alt="Banner aqtv">
      <?php
      $day;
      $month;
      $year;
      $date=getdate();
      $day=$date["mday"];
      $month=$date["month"];
      $year=$date["year"];
       ?>
    </header>
    <nav class="navegador">
      <ul>

      <li>  <a href="../index.php">Inicio</a></li>
        <li><a href="#">Quienes somos?</a></li>
        <li><a href="productos.html">Productos</a></li>
      <li>  <a href="#">Contactanos</a></li>
      </ul>
    </nav>
    <div>
    <section class="seccion">
      <?php
        echo "<h3>{$day} de {$month} del {$year}</h3>";
      ?>
      <article>
        <h3>Nuestra empresa</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>
           labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <img class="quienes"src="../image/nuestra_empresa.png">
      </article>
      <article >
        <h3>Donde nos encontramos</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>
           labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           <img class="quienes" src="../image/encuentranos.jpg"  >
      </article>
      <article>
        <h3>Contactanos</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>
           labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           <img class="quienes" src="../image/contactanos.png">
      </article>
    </section>

  </div>
    <footer>
      <div >
        <a href="#"><i class="fab fa-facebook"> </i></a>
        <a href="#"> <i class="fab fa-twitter-square"> </i> </a>
        <a href="#"><i class="fas fa-phone-square"> </i></a>
        <a href="#"> <i class="far fa-comments"> </i></a>
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
