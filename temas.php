<?php
$title = "Categorías";
$css = "css/temas.css";
include 'components/header.php';

$query = "SELECT tema_id AS id, tema_nombre AS tema, tema_img AS img FROM temas ORDER BY tema ASC";
$result = $mysqli->query($query);

$array = [];
while ($fila = $result->fetch_assoc()) {
    $array[] = $fila;
}
?>

<div class="pageContent">
    <h2>¿Qué categoría quieres explorar?</h2>
    <div id="categoryContainer">
    <?php 
    for ($i=0; $i < count($array); $i++) {
        echo '<div class="category">
        '.$array[$i]["img"].'
            <h3>'.$array[$i]["tema"].'</h3>
        </div>';
    }?>
    </div>
</div>
<?php
include 'components/footer.php';
?>