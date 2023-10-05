<?php error_reporting(0);?>
<style>
  .nav-link{
    position: relative;
  }
  
  .nav-link::after{
    content: '';
    opacity: 0;
    transition: all 0.2s;
    height: 2px;
    width: 100%;
    background-color: #fff;
    position: absolute;
    bottom: 0;
    left: 0;
  }
  .nav-link:hover::after{
    opacity: 5;
  }
  </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">

<!-- Index de Pedidos-->
        <div class="container-fluid">
          <a class="navbar-brand" href="inicio.php">
          <img src="../Imagenes/f31.png" width="75" height="40" class="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Catalagos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../Fruta/registrarFruta.php">Frutas</a></li>
                <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../EspecificacionesFruta/registrarEsp.php">Especificaciones</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../Presentaciones/registrarPre.php">Presentaciones</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pedidos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../ConsultaPedidos/consultaPedidos.php">Pedidos pendientes</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../PedidosSurtidos/pedidosSurtidos.php">Pedidos Surtidos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../PedidosEnviados/pedidosEnviados.php">Pedidos Enviados</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../PedidosEntregados/pedidosEntregados.php">Pedidos Entregados</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ayuda</a>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
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
        <?php
            if(isset($_SESSION["usuario"])){
              if($_SESSION["usuario"]!=NULL){
                echo "<li class='nav-item'>
                <a class='nav-link' href='../cerrarsesion.php'>Salir
                  <i class='fa-solid fa-right-to-bracket'></i>
                </a>
              </li>";
              }
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
            if(isset($_SESSION["usuario"])){
              echo "<li class='nav-item'>
              <a class='nav-link' href='../Usuario/datosUsuario.php'>Perfil
                <i class='fa-solid fa-user'></i>
              </a>
            </li>";
            }
          ?>
        </ul>
      </div>
        </div>
      </nav>
      <br><br><br>