<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href=<?php echo $css ?>>
</head>

<body>

  <header>

    <div class="header" id="logoContainer">
        <a href="" class="header_logo">
          <img src="img/icons/logo.svg" alt="foro">
          <h1>foro</h1>
        </a>
    </div>
    <div class="header perfil_hilo">
      <div class="header_search">
        <img src="img/icons/search.svg" class="icon" id="searchIcon">
        <input type="search" placeholder="Buscar">
        <button id="searchButton" class="button">search</button>
      </div>
      <div class="nuevoHilo">
        <img src="img/icons/post.svg" class="icon" id="postIcon">
        <button class="button">Nuevo Hilo</button>
      </div>
      <div id="profileIcon">
        <img class="headerProfile" src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="" srcset="">
        <img src="img/icons/down.svg" class="icon" id="profileMore">
        <div id="profileMenu">
          <a href="editProfile.php">Editar perfil</a>
          <span></span>
          <a href="index.php">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </header>

  <script>
    document.getElementById("profileIcon").onclick = function() {
      let menu = document.getElementById("profileMenu");
      if (menu.style.display == "none") {
        menu.style.display = "flex";
      } else {
        menu.style.display = "none"
      }
    }
  </script>