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
    for ($i=0; $i < count($categoryArray); $i++) {?>
        <a href="paginaHilos.php?id=<?php echo $categoryArray[$i]["tema_id"]; ?>">
            <div class="category">
                <?php //echo $categoryArray[$i]["tema_img"];?>
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