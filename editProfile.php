<?php 
$title = "Mi perfil";
$css = "css/editProfile.css";
include ("components/header.php");
?>
    <div id="container">
        <div id="userProfile">
            <img class="profilePic" src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" width="150px" alt="profile picture">
            <form method="POST">
                <div class="image-upload">
                    <label for="profilePic">
                        <img src="./img/icons/camera.svg" width="35px" height="35px">
                    </label>
                    <input type="file" id="profilePic" name="profilePic">
                </div>
                <div class="inputBox">
                    <img src="./img/icons/user.svg" class="icon" id="userIcon">
                    <img src="./img/icons/edit.svg" class="icon editIcon" id="editUser">
                    <input type="text" name="nombre" id="userName" placeholder="Nuevo nombre de usuario" value="Prueba" readonly>
                </div>
                <div class="inputBox">
                    <img src="./img/icons/lock.svg" class="icon" id="passIcon">
                    <img src="./img/icons/edit.svg" class="icon editIcon" id="editPass">
                    <input type="password" id="actualPass" placeholder="Contraseña actual" value="prueba" readonly>
                </div>
                <div id="passContainer" style="display:none">
                    <div class="inputBox">
                        <img src="./img/icons/lock.svg" class="icon" id="passIcon">
                        <input type="password" name="password" placeholder="Nueva contraseña">
                    </div>
                    <div class="inputBox">
                        <img src="./img/icons/lock.svg" class="icon" id="passConfirmIcon">
                        <input type="password" placeholder="Confirma la contraseña">
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

<script>
    var editUser = document.getElementById('editUser');
    editUser.onclick = function() {
        document.getElementById('userName').readOnly = false;
        document.getElementById('userName').value = "";
        document.getElementById('buttonContainer').style.display = "block";
        editUser.style.cursor = auto;
    }

    var editPass = document.getElementById('editPass');
    editPass.onclick = function() {
        document.getElementById("actualPass").value = "";
        document.getElementById('actualPass').readOnly = false;
        document.getElementById("passContainer").style.display = "block";
        document.getElementById('buttonContainer').style.display = "block";
    }

    document.getElementById('profilePic').onclick = function() {
        document.getElementById('buttonContainer').style.display = "block";
    }

    document.getElementById('cancelButton').onclick = function() {
        document.getElementById('userName').readOnly = true;
        document.getElementById('actualPass').readOnly = true;
        document.getElementById("passContainer").style.display = "none";
        document.getElementById('buttonContainer').style.display = "none";
    }
</script>
