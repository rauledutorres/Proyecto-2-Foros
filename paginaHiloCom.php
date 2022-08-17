<?php
//localhost/proyecto2_foros/Proyecto-2-Foros/paginaHiloCom.php
$title = "Categorías";
$css = "css/paginaHiloCom.css";
include 'components/header.php';
?>

<div class="paginaEntera">
    <div class="temasLista">
        <h4>Temas</h4>
        <ul>
          <?php
          for ($i=0; $i < count($categoryArray); $i++) { 
            echo '<a href="paginaHilo.php?id='.$categoryArray[$i]["tema_id"].'"><li><img src="./img/icons/compass.svg" class="listIcon">'.$categoryArray[$i]["tema_nombre"].'</li></a>';
          }?>
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
                <textarea name="comment" id="comment" placeholder="Introduzca aquí su comentario" rows=5 cols=40></textarea>
                <div id="postButtons">
                    <button type="reset" class="button cancel" id="cancelPost" onclick="closeModal()">Cancelar</button>
                    <button type="submit" class="button">Guardar</button>
                </div>
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
<script>
    tinymce.init({
        selector: 'textarea#comment',
        width: 1110,
        height: 250,
        plugins: 'code lists',
        mobile: {
            menubar: true,
            plugins: 'autosave lists autolink',
            toolbar: 'undo bold italic styles'
        }
    });
</script>
<?php include 'components/footer.php'; ?>