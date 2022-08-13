<?php
//localhost/proyecto2_foros/Proyecto-2-Foros/paginaHiloCom.php
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
    <link rel="stylesheet" href="./css/paginaHiloCom.css">
    
</head>
<body>
    <?php include './components/headerBien.php' ?>
        <div class="paginaEntera">
            <div class="temasLista">
                <div class="tituloLista">
                    <h4>Temas</h4>
                </div>
                <ul>
                    <button><li><img src="./img/CircleWavyQuestion.png">Ciencia</li></button>
                    <button><li><img src="./img/Compass.png">Musica</li></button>
                    <button><li><img src="./img/Compass.png">Sociales</li></button>
                    <button><li><img src="./img/Compass.png">Deportes</li></button>
                    <button><li><img src="./img/Compass.png">Videojuegos</li></button>
                </ul>
            </div>
            
            <div class="listaHiloPrincipal">


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
                            <h6>vie, 29 de Julio del 2022, 13:31:35(GMT)</h6>
                        </div>
                        <div class="hiloDesc">
                            <p>Después de innumerables retrasos, el 25/12/2021 a las 12:20 UTC parece que va a ser la fecha definitiva para el lanzamiento del telescopio espacial James Webb, el telescopio mas potente y complejo de la historia que se espera revolucione el conocimiento en la astrofísica.</p>
                        </div>
                    </div>    
                </div>


                <div class="comentario">
                    <form method="post">
                        <textarea name="comment" placeholder="Introduzca aquí su comentario" rows=5 cols=40></textarea>
                        <input type="submit" value="Publicar">
                    </form>
                </div>


                <div class="respuestas">
                    <div class="reply">
                        <div class="replyFoto">
                            <img src="./img/man1.png" alt="">
                            <h5>elKevin02</h5>
                        </div>
                        <div class="replyTexto">
                            <div class="replyTime">
                                <h6>vie, 29 de Julio del 2022, 13:40:13(GMT)</h6>
                            </div>
                            <div class="replyDesc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempora minus alias harum, consectetur exercitationem. Perspiciatis odio saepe ipsa minima, praesentium, illo animi vero autem nesciunt, cupiditate accusantium ex sapiente.</p>
                            </div>
                        </div>    
                    </div>
                    <div class="reply">
                        <div class="replyFoto">
                            <img src="./img/man2.png" alt="">
                            <h5>Anton34</h5>
                        </div>
                        <div class="replyTexto">
                            <div class="replyTime">
                                <h6>vie, 29 de Julio del 2022, 13:42:54(GMT)</h6>
                            </div>
                            <div class="replyDesc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempora minus alias harum, consectetur exercitationem. Perspiciatis odio saepe ipsa minima, praesentium, illo animi vero autem nesciunt, cupiditate accusantium ex sapiente.</p>
                            </div>
                        </div>    
                    </div>
                </div>    
            </div>

        </div>            
        
</body>
</html>