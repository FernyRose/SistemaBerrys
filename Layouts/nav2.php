<?php error_reporting(0);?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="inicio.php">
          <img src="../Imagenes/Nlogo.png" width="170" height="40" class="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Sobre Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Tienda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ubicanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ayuda</a>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        <?php
            if($_SESSION["usuario"]!=NULL){
              echo "<li class='nav-item'>
              <a class='nav-link' href='../cerrarsesion.php'>Salir
                <i class='fa-solid fa-right-to-bracket'></i>
              </a>
            </li>";
            }
            else{
              echo "<li class='nav-item'>
              <a class='nav-link' href='../InicioSesion/iniciosesion.php'>Iniciar
                <i class='fa-solid fa-right-to-bracket'></i>
              </a>
            </li>";
            }
          ?>
        <?php
            if($_SESSION["usuario"]!=NULL){
              echo "<li class='nav-item'>
              <a class='nav-link' href='../Usuario/datosUsuario.php'>Perfil
                <i class='fa-solid fa-user'></i>
              </a>
            </li>";
            }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa-solid fa-xmark"></i>
            </a>
          </li>
        </ul>
      </div>
        </div>
      </nav>