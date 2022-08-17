<?php
$title = "foro";
$css = "css/paginaHiloCom.css";
$_GET["id"] = 13;
include 'components/header.php';

$threadQuery = "SELECT publicaciones.publi_titulo AS postTitle, publicaciones.publi_descri AS postDescription, publicaciones.publi_date AS postDate, usuarios.user_id AS user_id, usuarios.user_nombre AS userName, usuarios.user_img AS userImg
FROM publicaciones
JOIN usuarios ON usuarios.user_id = publicaciones.publi_user
WHERE (SELECT publi_id = $_GET[id])";
$threadResult = $mysqli->query($threadQuery);

$threadArray = [];
while ($row = $threadResult->fetch_assoc()) {
    $threadArray[] = $row;
}

?>

<div class="paginaEntera">
    <div class="temasLista">
        <h4>Temas</h4>
        <ul>
            <?php
            for ($i = 0; $i < count($categoryArray); $i++) {
                echo '<a href="paginaHilo.php?id=' . $categoryArray[$i]["tema_id"] . '"><li><img src="./img/icons/compass.svg" class="listIcon">' . $categoryArray[$i]["tema_nombre"] . '</li></a>';
            } ?>
        </ul>
    </div>

    <div class="listaHiloPrincipal">
        <div class="hilo">
            <div class="hiloFoto">
                <img src=<?php echo $threadArray[0]["userImg"];?> alt="">
                <h5><?php echo $threadArray[0]["userName"];?></h5>
            </div>
            <div class="hiloTexto">
                <div class="hiloTitulo">
                    <h3><?php echo $threadArray[0]["postTitle"];?></h3>
                </div>
                <div class="hiloTime">
                    <h6><?php echo $threadArray[0]["postDate"];?></h6>
                </div>
                <div class="hiloDesc">
                   <?php echo $threadArray[0]["postDescription"];?>
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