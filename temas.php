<?php
$title = "Categorías";
$css = "css/temas.css";
include 'components/header.php';
require 'config.php';

?>

<div class="pageContent">
    <h2>¿Qué categoría quieres explorar?</h2>
    <div id="categoryContainer">
    <?php
    // print_r ($categoryArray[0]["tema_id"]);
    for ($i=0; $i < count($categoryArray); $i++) {
         // **************** Cambiar la dirección a la de la página de hilos ***********************
        // echo '<a href="hilos.php?id='.$categoryArray[$i]["tema_id"].'"><div class="category">
        //  '.($categoryArray[$i]["tema_img"]).'
        //     <h3>'.$categoryArray[$i]["tema_nombre"].'</h3>
        // </div></a>';
//********codigo para mostrar los temas diferentes lo mismo de arriba pero mas barato jajaXD */
        ?>
        <a href="paginaHilos.php?id=<?php echo $categoryArray[$i]["tema_id"];?>">
            <div class="category">
                <img class="category" src="data:image/jpg;base64,<?php echo base64_encode($categoryArray[$i]["tema_img"]);?>" alt="">
                <h3><?php echo $categoryArray[$i]["tema_nombre"];?></h3>
            </div>
        </a>
        <?php
    }?>
    
    </div>
</div>
<?php
include 'components/footer.php';
?>