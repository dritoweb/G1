<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
    <title>LA PIÑATA FELIZ</title>
  </head>
  <body>
  
  <div class="container-fluid " style="background-color: beige;">
  <div class="row ">
   
            <nav class="navbar navbar-expand-lg " >
          <div class="container-fluid " >
          <?php
            session_start();
            if(!isset($_SESSION['usuario'])){
          ?>
            <h1>SESIoN NO INICIADA </h1>
            
            <a class="navbar-brand text-success" href="formularios/formurlogin.html">INICIAR SESIoN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
             <?php
             }
            else
            {
                if( $_SESSION['usuario']=='administracion')
            {
            
            ?>
            
            <h1>SESIoN INICIADA POR <?php $_SESSION['usuario'] ?></h1>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="codigo/principal?cerrarsesion">CERRAR SESIoN</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    OPERACIONES ESTRUCTURAS
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="codigo/principal.php?crearBD">CREAR ESTRUCTURA</a></li>
                    <li><a class="dropdown-item" href="codigo/principal.php?borrarBD">BORRAR ESTRUCTURA</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ANIMADORES
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="formularios/formualtanimador.php?alta">ALTA</a></li>
                    <li><a class="dropdown-item" href="formularios/formualtanimador.php?modificar">MODIFICACIONES</a></li>
                    <li><a class="dropdown-item" href="codigo/principal.php?bajanimador">BAJA</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CONSULTAS
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="formularios/formubuscar?animador">ANIMADORES</a></li>
                    <li><a class="dropdown-item" href="formularios/formubuscar?fiesta">FIESTAS</a></li>
                    <li><a class="dropdown-item" href="formularios/formubuscar?fiestacliente">FIESTAS POR CLIENTE</a></li>
                  </ul>
                </li>
            <?php
            }
            else
            {
            ?>
            
            <h1>SESIoN INICIADA POR <?php $_SESSION['usuario'] ?></h1>
            
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="codigo/principal?cerrarsesion">CERRAR SESIoN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="formularios/formuregistro.html">ALTA USUARIO</a>
                </li>
                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    FIESTAS
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">ORGANIZA TU FIESTA</a></li>
                    <li><a class="dropdown-item" href="#">CONFIRMACIoN</a></li>
                    <li><a class="dropdown-item" href="#">CONSULTA TUS FIESTAS</a></li>
                  </ul>
                </li>
                
              </ul>
            <?php
                }
            }
            ?>
              
            </div>
          </div>
        </nav>

</div>
</div>
    
  </body>
</html>