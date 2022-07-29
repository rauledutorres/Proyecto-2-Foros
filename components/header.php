<?php
//localhost/proyecto2_foros/Proyecto-2-Foros/headerBien.php
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="css/header.css">
</head>

<body>

  <header>

    <div class="header">
      <div class="header_logo">
        <a href=""><img src="img/icons/logo.svg" alt="foro"></a>
        <h3>foro</h3>
      </div>

    </div>
    <div class="header">
      <div class="header_search">
        <input type="search" placeholder="buscar">
      </div>

    </div>
    <div class="header">
      <div class="header_perfil">
        <div class="perfil_hilo">
          <span><img src="img/nuevoHilo.png" alt="">Nuevo Hilo</span>
        </div>
        <img src="img/profile.png" alt="" srcset="">
      </div>
    </div>
  </header>
