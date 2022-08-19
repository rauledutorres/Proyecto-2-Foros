function showMenu() {
  let menu = document.getElementById("profileMenu");
  if (menu.style.display == "none") {
    menu.style.display = "flex";
  } else {
    menu.style.display = "none"
  }
}

function openModal() {
  document.getElementById("newPostModal").style.display = "block"
}

function closeModal() {
  document.getElementById("newPostModal").style.display = "none"
}


 document.getElementById("searchBox").onkeyup = function (e) {
    var term = this.value;
    console.log(term);
    var resultDropdown = this.nextElementSibling
    if(term.length > 4) {
      fetch('./components/search.php?term=' + term).then((response) => response.json()).then((data)=>{
        resultDropdown.innerHTML = "";
        for (let index = 0; index < data.length; index++) {
          let a = document.createElement('a');
          a.innerText = data[index].publi_titulo;
          a.classList.add('searchResult');
          a.href = 'hilo.php?id='+data[index].publi_id;
          resultDropdown.appendChild(a);
        }
      }
      )
    }
  }