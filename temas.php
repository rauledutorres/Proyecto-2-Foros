<?php
$title = "Categorías";
$css = "css/temas.css";
include 'components/header.php';


?>

<div class="pageContent">
    <h2>¿Qué categoría quieres explorar?</h2>
    <div id="categoryContainer">
    <?php
    for ($i=0; $i < count($categoryArray); $i++) {
         // **************** Cambiar la dirección a la de la página de hilos ***********************
        echo '<a href="hilos.php?id='.$categoryArray[$i]["tema_id"].'"><div class="category">
        '.$categoryArray[$i]["tema_img"].'
            <h3>'.$categoryArray[$i]["tema_nombre"].'</h3>
        </div></a>';
    }?>
    </div>
</div>
<?php
include 'components/footer.php';
?>