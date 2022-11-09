<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/22b7637fd9/UntitledProject/style.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/fonts.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <script type="text/javascript" src="js/scrollreveal.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


    <title>IUTA</title>
  </head>
  <body>
    <header>
      <?php
      require_once("modulos/header.php");
      ?>
    </header>
 <!--ENCABEZADO ESTÁ EN HEADER.PHP -->
    
<!-- CARRUSEL -->
    <div container-fluid id="carrusel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/inscripciones_banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><b></b></h1>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/carreras_banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><b></b></h1>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/sedes_banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><b></b></h1>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/convenio_banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><b></b></h1>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>


<h1 class="title">Carreras Disponibles</h1><br>

<!--CARRUSEL 2 -->

<div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="cards-wrapper">
            <div class="card" style="width: 18rem;">
  <img src="img/comercio_card.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Comercio Exterior</h5>
    <p class="card-text"></p><br>
    <a href="comercio.php">Ver más</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/publicidad_card.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Publicidad y Mercadeo</h5>
    <p class="card-text"></p><br>
    <a href="publicidad.php">Ver más</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/informatica_card.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Informática</h5>
    <p class="card-text"></p><br>
    <a href="informatica.php">Ver más</a>
  </div>
</div>

        </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card" style="width: 18rem;">
  <img src="img/adminT_card.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Administración tributaria</h5>
    <p class="card-text"></p>
    <a href="adminT.php">Ver más</a>
  </div>
</div>
           <div class="card" style="width: 18rem;">
  <img src="img/adminP_card.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Administración de personal</h5>
    <p class="card-text"></p>
    <a href="adminP.php">Ver más</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/adminE_card.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Administración de Empresas</h5>
    <p class="card-text"></p>
    <a href="admin.php">Ver más</a>
  </div>
</div>
      </div>
    </div>
    <div class="carousel-item">
        <div class="cards-wrapper">
             <div class="card" style="width: 18rem;">
  <img src="img/hsi_card.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Higiene y Seguridad Industrial</h5>
    <p class="card-text"></p><br>
    <a href="higiene.php">Ver más</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/mto_card.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Administración de sistemas de mantenimiento</h5>
    <p class="card-text"></p>
    <a href="sismto.php">Ver más</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/logistica_card.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Logistica industrial</h5>
    <p class="card-text"></p><br><br>
    <a href="logistica.php">Ver más</a>
  </div>
</div>

        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- CARDS -->
<!--
    <section>
     <h1 class="title">Carreras Disponibles</h1>
    
    <div class="container">
       
        <div class="card">
            <img src="img/informatica.png">
            <h4>Informática</h4>
            <p>La carrera en computación e informática es la encargada de velar por el diseño...</p>
            <a href="#">Leer más</a>
        </div>
        
        <div class="card">
            <img src="img/admin.jpg">
            <h4>Administración de Empresas</h4>
            <p>
La Administración de Empresas tiene como objetivo principal lograr el máximo beneficio...</p>
            <a href="#">Leer más</a>
        </div>

        <div class="card">
            <img src="img/admin.jpg">
            <h4>Administración de Personal</h4>
            <p>
La Administración de Empresas tiene como objetivo principal lograr el máximo beneficio...</p>
            <a href="#">Leer más</a>
        </div>
        
        <div class="card">
            <img src="img/publicidad.png">
            <h4>Publicidad y Mercadeo</h4>
            <p>El marketing hace todo el estudio del mercado y diseña el producto o servicio de acuerdo...</p>
            <a href="#">Leer más</a>
        </div> 
    </div>
    </section>
-->
<h1 class="title">¿Por qué estudiar T.S.U en el IUTA - EXTENSIÓN MARACAY?</h1><br>
<section class="cuadro">
    
    <p class="parrafo"><br>Las carreras como técnico superior son programas universitarios de corta duración (dos años y medio) enfocados al aprendizaje práctico. Regularmente son en áreas específicas y operativas. Algunas son de carácter terminal y otras permiten la revalidación de conocimientos a nivel universitario. De hecho, la oferta de este tipo de programas de estudio va en aumento y se ha diversificado en áreas científicas, administrativas y digitales, por lo que hoy en día es posible encontrar una gran variedad de opciones. El IUTA - EXTENSIÓN MARACAY ofrece diferentes modalidades de estudio que se acoplan a tus necesidades, tenemos una excelente ubicación en el centro de Maracay y personal altamente calificado en todas las áreas.</p><center><img class="iutaporque" align="center" src="img/iutaporque.jpg"></center>
</section>
<!-- MAPA IUTA -->
 <section>
      <h1 class="title">¿Dónde nos encontramos?</h1><br>

      <div id="map">
        <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1963.065161500079!2d-67.59941986827434!3d10.251071709358076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e803c9ef90d2ebf%3A0xb2ce2ad6a079032a!2sIUTA!5e0!3m2!1ses!2sve!4v1666259757103!5m2!1ses!2sve" width="400" height="450" style="border:1" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
      </div>
    </section>

   <!-- PIE DE PAGINA LLAMADO DE FOOTER.PHP-->
   <footer>
     <?php 
     require_once("modulos/footer.php")

     ?>
   </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>