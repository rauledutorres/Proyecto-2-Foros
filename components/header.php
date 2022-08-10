<?php
include 'components/conector.php';

$headquery = "SELECT tema_id, tema_nombre FROM temas ORDER BY tema_nombre ASC";
$resultOne = $mysqli->query($headquery);

$temas = [];
while ($fila = $resultOne->fetch_assoc()) {
    $temas[] = $fila;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href=<?php echo $css ?>>
  <script src="https://cdn.tiny.cloud/1/wyr78gq4bxmh08sv63gfilc0rvzydpgjc3knjw3k6t1xpcev/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
        <input type="search" placeholder="Buscar" class="input">
        <button id="searchButton" class="button">search</button>
      </div>
      <div class="nuevoHilo" onclick="openModal()">
        <img src="img/icons/post.svg" class="icon" id="postIcon">
        <button class="button" >Nuevo Hilo</button>
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
    <script src="js/header.js"></script>
  </header>
  <main id="main">
  <div class="modal" id="newPostModal">
    <div id="newPost">
      <form id="postForm">
        <input type="text" class="input" name="posttitle" id="postTitle" placeholder="Título">
        <select name="category">
          <option selected="true" disabled="disabled">Selecciona un tema</option>
          <?php
          for ($i=0; $i < count($temas); $i++) { 
            echo '<option value="'.$temas[$i]["tema_id"].'">'.$temas[$i]["tema_nombre"].'</option>"';
          }?>
        </select>
        <textarea name="postDescription" id="description"></textarea>
        <div id="postButtons">
          <button type="reset" class="button cancel" id="cancelPost">Cancelar</button>
          <button type="submit" class="button">Guardar</button>
        </div>
        <script>
          tinymce.init({
            selector: 'textarea#description',
            max_width: 1000,
            min_width: 300,
            height: 450,
            plugins: 'code lists',
            mobile: {
              menubar: true,
              plugins: 'autosave lists autolink',
              toolbar: 'undo bold italic styles'
            }
          });
        </script>
      </form>
    </div>
  </div>