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
    <link rel="stylesheet" href="./css/paginaHilos.css">
    
</head>
<body>
        <div class="paginaEntera">
            <div class="temasLista">
                <div class="tituloLista">
                    <a href="temas.php"><h3>Temas</h3></a>
                </div>
                <ul>
                    <?php
                    //El filtro de los temas
                    for ($i=0;$i<count($categoryArray);$i++) {
                        //colocar un if para verificar la imagen si esta seleccionado o  no.
                        ?>
                        <a href="paginaHilos.php?id=<?php echo $categoryArray[$i]["tema_id"]; ?>">
                        <button><li>
                           <img src="./img/<?php if ($categoryArray[$i]['tema_id'] == $cat['tema_id']) {
                                echo 'CircleWavyQuestion.png';
                        }else{
                            echo 'Compass.png';
                        }?>"><?php echo $categoryArray[$i]['tema_nombre'];?></li></button></a>
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
                    <?php
                    if (strtotime($newDate['user_time']) < strtotime($selecHilos[$i]['publi_date'])) {
                        echo gmdate("d-F-Y H:i:s ", time() + 3600*(1+date("I")));

                        $dateTwo['user_time']=gmdate("d-F-Y H:i:s ", time() + 3600*(1+date("I")));
                        $_SESSION['date']=$dateTwo;
                        //es una manera muy obligada de que muestre los mensajes nuevos hay q seguir buscando...
                        ?><script>
                            document.querySelector(".hilo").classList.toggle("bord");
                        </script><?php
                    }else{
                        echo 'hola';
                        ?><script>
                            document.querySelector(".hilo").classList.remove("bord");
                        </script><?php
                    }
                    ?>

                    <div class="hiloFoto">
                        <img src="./img/woman1.png" alt="">
                        <h5><?php for ($j=0; $j <count($allUser) ; $j++) { 
                            if ($allUser[$j]['user_id']==$selecHilos[$i]['publi_user']) {
                                echo $allUser[$j]['user_nombre'];
                            }}?></h5>
                    </div>
                    <div class="hiloTexto">
                        <div class="hiloTitulo">
                            <h3> <?php echo ucwords($selecHilos[$i]['publi_titulo']);?></h3>
                        </div>
                        <div class="hiloTime">
                            
                            <h6><?php $dateHilo = strtotime($selecHilos[$i]['publi_date']);
                            setlocale(LC_ALL, "es-ES");
                            //$nuevoDateHilo = date("l, d M Y", strftime($dateHilo))
    
                            echo strftime("%a, %d de %B del %Y, %H:%M:%S", $dateHilo);
                            ?> </h6>
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