<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">



<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
	<title>Animalandia</title>
</head>


<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark fondo">
  <div class="container-fluid">
    <a class="navbar-brand fuente" href="#"><i class="fas fa-dog"></i>Casa Hogar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('/productos/registro') ?>">Registro de Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('/Animales/registro') ?>">Registro de Animales</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</header>

 
  <section>
    <div class="container mt-3">
        <div class="row">
          <div class="col-12">


                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?= base_url('public/img/imagen1.jpg') ?>" class="d-block w-100" alt="foto1">
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('public/img/imagen2.jpg') ?>" class="d-block w-100" alt="foto2">
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('public/img/imagen3.jpg') ?>" class="d-block w-100" alt="foto3">
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

          </div>
            
        </div>

    </div>
  </section>

  <section> 
        <div class="container mt-4"  >
          <div class="row d-flex justify-content-center">
            <div class="col-5">
                  <h2 class="fuente" > Hogar de Animales ANIMALANDIA</h2>
                    

            </div>
          </div>

            <div class="row d-flex justify-content-center">
              <div class="col-7">
              Los hombres verdaderamente generosos están siempre dispuestos a ser compasivos cuando la desgracia de un enemigo sobrepasa los límites del odio hacia él.---- Las heridas morales tienen la particularidad de que se ocultan, pero no ce cierran; siempre dolorosas, siempre prontas a sangrar cuando se les toca, quedan vivas y abiertas en el corazón.----Todo mal tiene dos remedios; el tiempo y el silencio.
              </div>
            </div>

            <div class="row d-flex justify-content-center mt-5">
              <div class="col-1">
                    <img src="<?= base_url('public/img/dog-icon.png') ?>" alt="" class="img-fluid w-100 zoom zoom:hover">
                    <h5 class="d-flex justify-content-center" >Perros</h5>
              </div>
              <div class="col-1">
                    <img src="<?= base_url('public/img/cat-icon.png') ?>" alt="" class="img-fluid w-100 zoom zoom:hover">
                    <h5 class="d-flex justify-content-center">Gatos</h5>
              </div>
              <div class="col-1">
                    <img src="<?= base_url('public/img/horse-icon.png') ?>" alt="" class="img-fluid w-100 zoom zoom:hover">
                    <h5 class="d-flex justify-content-center">Caballos</h5>
              </div>
              <div class="col-1">
                    <img src="<?= base_url('public/img/reptile-icon.png') ?>" alt="" class="img-fluid w-100 zoom zoom:hover">
                    <h5 class="d-flex justify-content-center">Reptiles</h5>
              </div>
              <div class="col-1">
                    <img src="<?= base_url('public/img/rodent-icon.png') ?>" alt="" class="img-fluid w-100 zoom zoom:hover">
                    <h5 class="d-flex justify-content-center">Roedores</h5>
              </div>
            </div>

        </div>

  </section>

  <section class="fondoapp">


  </section>

  </section>

  <div class="container">
    <div class="row d-flex justify-content-center mt-5">
      <div class="col-5">
      <img src="<?= base_url('public/img/morgan.jpeg') ?>" alt="" class="img-fluid w-100">
      </div>
      <div class="col-5">
        <p>
        Los hombres verdaderamente generosos están siempre dispuestos a ser compasivos cuando la desgracia de un enemigo sobrepasa los límites del odio hacia él.---- Las heridas morales tienen la particularidad de que se ocultan, pero no ce cierran; siempre dolorosas, siempre prontas a sangrar cuando se les toca, quedan vivas y abiertas en el corazón.----Todo mal tiene dos remedios; el tiempo y el silencio.
        Los hombres verdaderamente generosos están siempre dispuestos a ser compasivos cuando la desgracia de un enemigo sobrepasa los límites del odio hacia él.---- Las heridas morales tienen la particularidad de que se ocultan, pero no ce cierran; siempre dolorosas, siempre prontas a sangrar cuando se les toca, quedan vivas y abiertas en el corazón.----Todo mal tiene dos remedios; el tiempo y el silencio.
        Los hombres verdaderamente generosos están siempre dispuestos a ser compasivos cuando la desgracia de un enemigo sobrepasa los límites del odio hacia él.---- Las heridas morales tienen la particularidad de que se ocultan, pero no ce cierran; siempre dolorosas, siempre prontas a sangrar cuando se les toca, quedan vivas y abiertas en el corazón.----Todo mal tiene dos remedios; el tiempo y el silencio.Los hombres verdaderamente generosos están siempre dispuestos a ser compasivos cuando la desgracia de un enemigo sobrepasa los límites del odio hacia él.---- Las heridas morales tienen la particularidad de que se ocultan, pero no ce cierran; siempre dolorosas, siempre prontas a sangrar cuando se les toca, quedan vivas y abiertas en el corazón.----Todo mal tiene dos remedios; el tiempo y el silencio.
        </p>
      </div>
    </div>
  </div>


  </section>

  <section>
  <footer class="text-right text-lg-start" style="background-color: rgba(0, 0, 0, 0.2);">
  <!-- Grid container -->
  <div class="container p-2">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">HORARIO DE ATENCION</h5>

        <p>
          Lunes a viernes 7:00am - 3:00 pm
          Sabado 7:00am-2:30pm
          Domingos y festivos 8:00am - 3:00pm
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase fuenteF">Ayudas:</h5>

        <p>
          Glosario/ Correo Electronico/monitoreo y desempeño del
          uso web 
        </p>
      </div>
    
      <div class="col-lg-4 col-lg-4 col-md-12 mb-4 mb-md-0 " >
        
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <h1 class="fuente">Animalandia</h1>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>
        <i class="fas fa-paw"></i>

      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->
  <div class="container p-2">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase fuenteF">Direccion</h5>

        <p>
          Bello City Av Siempre viva Calle 42&56-21.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase fuenteF">Proteccion de datos</h5>

        <p>
          Proteccion de datos personales de facebook
        </p>
      </div>

      <div class="col-lg-4 col-md-6 mb-1 mb-md-0">
        
      <i class="fab fa-instagram" style="size:5x"></i>
      <i class="fab fa-facebook"></i>
      <i class="fab fa-youtube-square"></i>
      <p >
          Social Network
        </p>
       
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>

  </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>
</html>