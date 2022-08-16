<?php 
$title = "Mi perfil";
$css = "css/editProfile.css";
include ("components/header.php");
?>
    <div id="container">
        <div id="userProfile">
            <img class="profilePic" src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" width="150px" alt="profile picture">
            <form id="updateProfile" method="POST">
                <div class="image-upload">
                    <label for="profilePic">
                        <img src="./img/icons/camera.svg" width="35px" height="35px">
                    </label>
                    <input type="file" id="profilePic" name="profilePic">
                </div>
                <div class="inputBox">
                    <img src="./img/icons/user.svg" class="icon" id="userIcon">
                    <img src="./img/icons/edit.svg" class="icon editIcon" id="editUser">
                    <input class="input" type="text" name="nombre" id="userName" placeholder="Nuevo nombre de usuario" value="Prueba" readonly>
                </div>
                <div class="inputBox">
                    <img src="./img/icons/lock.svg" class="icon" id="passIcon">
                    <img src="./img/icons/edit.svg" class="icon editIcon" id="editPass">
                    <input class="input" type="password" id="actualPass" placeholder="Contraseña actual" value="prueba" readonly>
                </div>
                <div id="passContainer" style="display:none">
                    <div class="inputBox">
                        <img src="./img/icons/lock.svg" class="icon" id="passIcon">
                        <input class="input" type="password" name="password" placeholder="Nueva contraseña">
                    </div>
                    <div class="inputBox">
                        <img src="./img/icons/lock.svg" class="icon" id="passConfirmIcon">
                        <input class="input" type="password" placeholder="Confirma la contraseña">
                    </div>
                </div>
                <div id="buttonContainer">
                    <button type="reset" class="button cancel" id="cancelButton">Cancelar</button>
                    <button type="submit" class="button">Guardar</button>
                </div>
            </form>
        </div>
        <div id="userThread">
            <div id="title">
                <img src="./img/icons/question.svg" class="icon" id="questionIcon">
                <h2>Mis hilos</h2>
            </div>
            <div id="threadContent">
                <img src="./img/web/man-thinking.svg" alt="man thinking">
                <p>¡No seas tímido, publica algo!</p>
            </div>
        </div>
    </div>

<?php
include 'components/footer.php';
?>
<script src="js/editProfile.js"></script>

