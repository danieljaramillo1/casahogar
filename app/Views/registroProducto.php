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
    <title>Registro</title>
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
          <a class="nav-link active" aria-current="page" href="<?= site_url('/welcome') ?>">Home</a>
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
    
    
    
        <div class="container mt-12">

            <div class="row">
                <div class="col-5">

                   <form action="<?= site_url('/producto/registro/nuevo') ?>" method="POST">
                   <h1 class="fuente">Registro Producto</h1>
                        <div class="form-group">
                            <label for="formGroupExampleInput" style="margin-top:10px">Producto:</label>
                            <input type="text" class="form-control mt-2" id="formGroupExampleInput" placeholder="" name="producto">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2" style="margin-top:10px">Fotografia:</label>
                            <input type="text" class="form-control mt-2" id="formGroupExampleInput2" placeholder="" name="fotografia">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2" style="margin-top:10px">Precio Unidad:</label>
                            <input type="text" class="form-control mt-2" id="formGroupExampleInput2" placeholder="" name="precio">
                        </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" style="margin-top:10px">Descripcion</label>
                                <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputState " class="mt-3">Tipo de Animal</label>
                            <select id="inputState" class="form-control mt-2 w-100" name="tipo">

                                <option selected>Perro</option>
                                
                                <option>Gato</option>
                                <option>Caballo</option>
                                <option>Reptil</option>
                                <option>Roedor</option>
                            </select>
                            </div>
                            <button type="submit" style="width:100% " class="btn btn-primary mt-4">Sign in</button>
                        </form>
                </div>
                <div class="col-5">
                
                    <img src="<?= base_url('public/img/dako.jpeg') ?>" alt="" style=" height:600px">
                    
              </div>
                    
                </div>


            </div>

        </div>

    </section>
      

    <section>
              <?php if(session('mensaje')): ?>
                  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" >Casa Hogar</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                      <div class="modal-body">
                        <h5><?= session('mensaje')?></h5>
                      </div>
                      
                    </div>
                  </div>
                <?php unset($_SESSION['mensaje']);?>
              <?php endif ?>
    </section>


    <script type="module" src="<?= base_url('public/js/lanzarmodal.js')?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>
</html>