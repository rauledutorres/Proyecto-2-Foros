var editUser = document.getElementById('editUser');
editUser.onclick = function () {
    document.getElementById('userName').readOnly = false;
    document.getElementById('userName').value = "";
    document.getElementById('message').style.display = "none";
    document.getElementById('buttonContainer').style.display = "block";
}

var editPass = document.getElementById('editPass');
editPass.onclick = function () {
    document.getElementById("actualPass").value = "";
    document.getElementById('actualPass').readOnly = false;
    document.getElementById("passContainer").style.display = "block";
    document.getElementById('message').style.display = "none";
    document.getElementById('buttonContainer').style.display = "block";
}

document.getElementById('profilePic').onclick = function () {
    document.getElementById('buttonContainer').style.display = "block";
    document.getElementById('message').style.display = "none";

}

document.getElementById('cancelButton').onclick = function () {
    document.getElementById('userName').readOnly = true;
    document.getElementById('actualPass').readOnly = true;
    document.getElementById("passContainer").style.display = "none";
    document.getElementById('buttonContainer').style.display = "none";
}

document.getElementById('profilePic').onchange = function (e) {
    var reader = new FileReader();
    if (reader) {
        reader.readAsDataURL(e.target.files[0]);
        reader.onload = function () {
            var profilePic = document.getElementById('userProfilePic'); 
            profilePic.src = reader.result;
        };
    }
}
