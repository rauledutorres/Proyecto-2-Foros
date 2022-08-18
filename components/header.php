<?php
session_start();
include './config.php';

if (isset($_SESSION['welcome_usuario'])) {
  $user=$_SESSION['welcome_usuario'];
  //usuario selecciona dependiendo el login
  $selecUser=mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM usuarios where user_id= $user"));
}else{
  echo 'no se inicio session';
}
include 'components/conector.php';
$categoryUsers=mysqli_query($connect,"SELECT * FROM usuarios");
$allUser=[];
while($x=mysqli_fetch_assoc($categoryUsers)){
$allUser[]=$x;
}
print_r($allUser);
$_SESSION['signed_in'] = true; // Variable de prueba, cambiar a true cuando un usuario inicie sesión
$_SESSION['user'] = 1; // Variable inventada, a user_id cuando haya usuario con sesión iniciada

$categoryHilos=mysqli_query($connect,"SELECT * FROM publicaciones");
$selecHilos=[];
while($cont = mysqli_fetch_assoc($categoryHilos)){
$selecHilos[] = $cont;
}
// Obtiene las categorías para el select de nuevo post y para la página de temas 

//seleccion del tema a gusto del usuario 
$categoryQuery =mysqli_query($connect,"SELECT tema_id, tema_nombre, tema_img FROM temas ORDER BY tema_nombre ASC");
// $categoryResult = $mysqli->query($categoryQuery);

$categoryArray = [];

while ($row = mysqli_fetch_assoc($categoryQuery)) {
    $categoryArray[] = $row;
}

// Publicar nuevo post y guardarlo en la base de datos
// Da problema porque siempre guarda el $_POST y se crean entradas cada vez que se refresca la página 
// Habría que redirigir a otra página (la del nuevo post creado por ejemplo) para evitar esto
$error = "";

if($_SESSION['signed_in'] == false) {
  $error = 'Para publicar <a href="signin.php">inicia sesión</a>.';
} else {
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //solo coloque mi variable SESSION_usuario
      $sql = "INSERT INTO publicaciones (publi_titulo, publi_descri, publi_date, publi_tema, publi_user) 
        VALUES ('$_POST[postTitle]', '$_POST[postDescription]', now(), '$_POST[category]','$_SESSION[welcome_usuario]')";
      try {
        $result = $mysqli->query($sql);
        if (!$result){
          $error = 'Algo no ha ido bien, por favor inténtalo de nuevo más tarde.';
        } else {
          $error = 'Se acaba de publicar tu pregunta.';
        }
      } catch (Exception $e) {
        $error = "Algo ha salido mal. ".$e->getMessage();
      }
    }
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
      <img src="img/icons/x.svg" class="icon" id="xIcon" onclick="closeModal()" alt="Cerrar">
      <form id="postForm" method="POST">
        <input type="text" class="input" name="postTitle" id="postTitle" placeholder="Título">
        <select name="category">
          <option selected="true" disabled="disabled">Selecciona un tema</option>
          <?php
          for ($i=0; $i < count($categoryArray); $i++) { 
            echo '<option value="'.$categoryArray[$i]["tema_id"].'">'.$categoryArray[$i]["tema_nombre"].'</option>"';
          }?>
        </select>
        <textarea name="postDescription" id="description"></textarea>
        <p><?php echo $error?></p>
        <div id="postButtons">
          <button type="reset" class="button cancel" id="cancelPost" onclick="closeModal()">Cancelar</button>
          <button type="submit" class="button">Guardar</button>
        </div>
        <script>
          tinymce.init({
            selector: 'textarea#description',
            max_width: 1000,
            min_width: 300,
            height: 400,
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