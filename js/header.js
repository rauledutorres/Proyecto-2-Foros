document.getElementById("profileIcon").onclick = function() {
    let menu = document.getElementById("profileMenu");
    if (menu.style.display == "none") {
      menu.style.display = "flex";
    } else {
      menu.style.display = "none"
    }
  }
  
  function openModal(){
    document.getElementById("newPostModal").style.display = "block"
  }

  function closeModal(){
    document.getElementById("newPostModal").style.display = "none"
  }