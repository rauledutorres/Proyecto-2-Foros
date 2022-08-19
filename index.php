<?php
$title = "foro: Categorías";
$css = "css/index.css";
include 'components/header.php';
?>

<div class="pageContent">
    <h2>¿Qué categoría quieres explorar?</h2>
    <div id="categoryContainer">
    <?php
    for ($i=0; $i < count($categoryArray); $i++) {
        echo '<a href="categoria.php?id='.$categoryArray[$i]["tema_id"].'" class="category">
        '.$categoryArray[$i]["tema_img"].'
            <h3>'.$categoryArray[$i]["tema_nombre"].'</h3>
        </a>';
    }?>
    </div>
</div>
<?php if (isset($signedInError)):?>
    <script>openModal();</script>
<?php endif; ?>
<?php
include 'components/footer.php';
?>