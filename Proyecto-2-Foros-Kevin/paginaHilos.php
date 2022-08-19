<?php
//http://localhost/proyecto2_foros/Proyecto-2-Foros/Proyecto-2-Foros-Kevin/paginaHilos.php
$title = "Categorías";
$css = "css/temas.css";
include 'components/header.php';
$cod=$_GET['id'];
$tema=[];
foreach ($categoryArray as $key => $category) {
    if($category['tema_nombre'] == $cod ){
        $sqli=$category;
    }
}

print_r($sqli);
if (isset($_POST[''])) {

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
                        for ($i=0; $i <count($categoryArray) ; $i++) { 
                        ?>
                        <button><li><a  href="paginaHilos.php?id=<?php echo $categoryArray[$i]["tema_nombre"];?>"><img src="./img/Compass.png"><?php echo ucwords($categoryArray[$i]['tema_nombre']);?></a></li></button>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            
            <div class="listaHilos">
                <h2><?php echo strtoupper($categoryArray['tema_nombre']);?></h2>
                <div class="hilo">
                    <div class="hiloFoto">
                        <img src="./img/woman1.png" alt="">
                        <h5>ariana95</h5>
                    </div>
                    <div class="hiloTexto">
                        <div class="hiloTitulo">
                            <h3>Lanzamiento Telescopio James Webb</h3>
                        </div>
                        <div class="hiloTime">
                            <h6><?php echo strftime("%a, %d de %B del %Y, %H:%M:%S"); ?> vie, 29 de Julio del 2022, 13:31:35(GMT)</h6>
                        </div>
                        <div class="hiloDesc">
                            <p>Después de innumerables retrasos, el 25/12/2021 a las 12:20 UTC parece que va a ser la fecha definitiva para el lanzamiento del telescopio espacial James Webb, el telescopio mas potente y complejo de la historia que se espera revolucione el conocimiento en la astrofísica.</p>
                        </div>
                    </div>    
                </div>
            </div>
        </div>    
</body>
</html>