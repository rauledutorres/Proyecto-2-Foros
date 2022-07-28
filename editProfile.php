<link rel="stylesheet" href="./css/editProfile.css">


<section id="userProfile">
    <div class="boxProfile">
        <img class="profilePic" src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" width="150px" alt="profile picture">
    </div>
    <form>
        <div class="image-upload">
            <label for="profilePic">
                <img src="./img/icons/camera.svg" width="35px" height="35px"></object>
            </label>
            <input type="file" id="profilePic" name="profilePic">
        </div>
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="password" placeholder="Nueva contraseña">
        <input type="password" placeholder="Confirma la contraseña">
        <button class="button">Guardar</button>
    </form>
</section>