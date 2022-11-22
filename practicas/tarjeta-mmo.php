<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="imagenes/Logo-removebg-preview.png" height="75px" width="75px" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">

         
          <li class="nav-item">
            <a class="nav-link active" href="tarjeta-electro.php">Electro</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="true" aria-expanded="false">Informatíca</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="tarjeta-infomañana.php">Mañana</a>
              <a class="dropdown-item" href="tarjeta-infotarde.php">Tarde</a>


            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="foto.php">Subir foto </a>

          </li>
        </ul>
      </div>
  </nav>

  <div class="flex">
  <div class="row">

    
    <?php
      include 'cnx.php';
      $consulta = mysqli_query($mysqli,"SELECT * FROM basedt.tarjetas where curso='1'" );
      while ($tarjeta= mysqli_fetch_array($consulta)){
        
        echo '<div class="card" style="width: 18rem;">';
        echo '<img class="card-img-top" src="'. $tarjeta['img'] .'" alt="Card image cap">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'. $tarjeta['nombre'].'</h5>';
        echo '<p class="card-text">' . $tarjeta['descripcion'] . '</p>';
        $ins = 'https://www.instagram.com/' . $tarjeta['ig'] .'/';
        echo '<a href="'.$ins.'" >';
        echo '<img src="imagenes/descarga.png"  withd="30px" height="30px"alt="">';
        echo '</a>';
        echo '</div>';
        echo '</div>';
       
        
        
        
        
        
        
        
        
        
        
        
      }
      ?>

  </div>
</div>


  



















</body>

</html>