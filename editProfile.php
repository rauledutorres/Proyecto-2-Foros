<link rel="stylesheet" href="./css/editProfile.css">
<div id="container">
    <div id="userProfile">
        <img class="profilePic" src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" width="150px" alt="profile picture">
        <form>
            <div class="image-upload">
                <label for="profilePic">
                    <img src="./img/icons/camera.svg" width="35px" height="35px">
                </label>
                <input type="file" id="profilePic" name="profilePic">
            </div>
            <div class="inputBox">
                <img src="./img/icons/user.svg" width="20px" height="20x" class="icon" id="userIcon">
                <img src="./img/icons/edit.svg" width="20px" height="20x" class="icon" id="editIcon">
                <input type="text" name="nombre" id="userName" placeholder="Nuevo nombre de usuario" value="Prueba" readonly>
            </div>
            <div>
                <img src="./img/icons/lock.svg" width="20px" height="20x" class="icon" id="passIcon">
                <input type="password" placeholder="Nueva contraseña">
            </div>
            <div>
                <img src="./img/icons/lock.svg" width="20px" height="20x" class="icon" id="passConfirmIcon">
                <input type="password" placeholder="Confirma la contraseña">
            </div>
            <button class="button">Guardar</button>
        </form>
    </div>
    <div id="userThread">
        <div id="title">
            <img src="./img/icons/question.svg" width="25px" height="25px" class="icon" id="questionIcon">
            <h2>Mis hilos</h2>
        </div>
        <div id="threadContent">
            <img src="./img/web/man-thinking.svg" alt="man thinking">
            <p>¡No seas tímido, publica algo!</p>
        </div>
    </div>
</div>
<script>
    var editIcon = document.getElementById('editIcon')
    editIcon.onclick = function() {
        document.getElementById('userName').removeAttribute('readonly');
        document.getElementById('userName').value = "";
        editIcon.style.cursor = "auto";
    }
</script>