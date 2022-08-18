<?php

//http://localhost/proyecto2_foros/Proyecto-2-Foros/paginaHilos
$title = "Categorías";
$css = "css/temas.css";
require 'config.php';
include 'components/header.php';
$cod=$_GET['id'];
for($i=0;$i<count($categoryArray);$i++){
    if ($categoryArray[$i]['tema_id'] == $cod) {
        $cat=$categoryArray[$i];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina hilos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/paginaHiloss.css">
    
</head>
<body>
        <div class="paginaEntera">
            <div class="temasLista">
                <div class="tituloLista">
                    <h4>Temas</h4>
                </div>
                <ul>
                    <?php
                    for ($i=0;$i<count($categoryArray);$i++) {
                        //colocar un if para verificar la imagen si esta seleccionado o  no.s
                        ?>
                        <button><li>
                           <a href="paginaHilos.php?id=<?php echo $categoryArray[$i]["tema_id"]; ?>">
                           <img src="./img/<?php if ($categoryArray[$i]['tema_id'] == $cat['tema_id']) {
                                echo 'CircleWavyQuestion.png';
                        }else{
                            echo 'Compass.png';
                        }?>"><?php echo $categoryArray[$i]['tema_nombre'];?></a></li></button>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            
            <div class="listaHilos">
                <h2><?php echo ucwords($cat['tema_nombre']);?></h2>
                <?php
                    for ($i=0; $i <count($selecHilos) ; $i++) { 
                        if ($selecHilos[$i]['publi_tema'] == $cat['tema_id']) {
                    ?>
                <div class="hilo">
                    <div class="hiloFoto">
                        <img src="./img/woman1.png" alt="">
                        <h5><?php for ($j=0; $j <count($allUser) ; $j++) { 
                            if ($allUser[$j]['user_id']==$selecHilos[$i]['publi_user']) {
                                echo $allUser[$j]['user_nombre'];
                            }
                           
                        } ?></h5>
                    </div>
                    <div class="hiloTexto">
                        <div class="hiloTitulo">
                            <h3> <?php echo $selecHilos[$i]['publi_titulo'];?></h3>
                        </div>
                        <div class="hiloTime">
                            
                            <h6><?php //hacer una conversion de la fecha para obtenerla con este formato?>vie, 29 de Julio del 2022, 13:31:35(GMT)</h6>
                        </div>
                        <div class="hiloDesc">
                            <p><?php echo $selecHilos[$i]['publi_descri'];?></p>
                        </div>
                    </div>    
                </div>
                <?php } } ?>
               
            </div>
        </div>    
</body>
</html>