
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
