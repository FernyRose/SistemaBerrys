<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Datatables-1.11.3/css/dataTables.bootstrap5.min.css">
    <title>Document</title>
</head>
<style>
    body{
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>
<body class="body bg-secondary text-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="inicio.php">Intensity Gym &nbsp;&nbsp;&nbsp;&nbsp;</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Catalagos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="Clientes.php">Clientes</a></li>
                  <li><a class="dropdown-item" href="Categorias.php">Categorias</a></li>
                  <li><a class="dropdown-item" href="Productos.php">Productos</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Movimientos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="Ventas.php">Ventas</a></li>
                  <li><a class="dropdown-item" href="Membresias.php">Membresias</a></li>
                  <li><a class="dropdown-item" href="Pagos.php">Pagos</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Reportes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="reporteProductos.php">Reporte de productos</a></li>
                  <li><a class="dropdown-item" href="reporteClientes.php">Reporte de clientes</a></li>
                  <li><a class="dropdown-item" href="reporteMembresias.php">Reporte de membresias</a></li>
                  <li><a class="dropdown-item" href="membresiasStatus.php">Reporte de membresias por Status</a></li>
                  <li><a class="dropdown-item" href="reportePagos.php">Reporte de pagos</a></li>
                  <li><a class="dropdown-item" href="pagosPeriodo.php">Reporte de pagos por periodo</a></li>
                  <li><a class="dropdown-item" href="ventasPeriodo.php">Reporte de ventas por periodo</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ayuda</a>
              </li>
            </ul>
            <form class="d-flex">
            <h1 id="user">&nbsp;&nbsp;&nbsp;&nbsp;</h1>
              <a href="index.php"><input type="button" value="Salir" class="btn btn-primary"></a>
            </form>
          </div>
        </div>
      </nav>

      <body background="archivos/Gymico.jpg" >
          
      </body>

    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="datatables.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>