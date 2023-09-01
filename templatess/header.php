<?php 
$url_base="http://127.0.0.1/tienda_db/";?>
<!doctype html>
<html lang="en">

<head>
  <title>Tienda online </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>

  <nav class="navbar navbar-expand navbar-light bg-light">
      <ul class="nav navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" href="<?php echo $url_base;?>secciones/cliente/index.php" aria-current="page">Cliente <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/pedido/index.php">Pedido</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/detalle pedido/index.php">Detalle Pedido</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/producto/index.php">Producto</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/marca/index.php">Marca</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/categoria/index.php">Categoria</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/stock/index.php">Stock</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/tienda/index.php">Tienda</a>
          </li>
      </ul>
  </nav>
  <main class="container">