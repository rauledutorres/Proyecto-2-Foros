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
  var resultDropdown = document.getElementById("searchResultContainer");
  console.log(resultDropdown);
  if (term.length > 4) {
    fetch('./components/search.php?term=' + term).then((response) => response.json()).then((data) => {
      console.log(data);
      resultDropdown.innerHTML = "";
      if (data.length > 0) {
        for (let index = 0; index < data.length; index++) {
          let a = document.createElement('a');
          a.classList.add('searchResult');
          a.href = 'hilo.php?id=' + data[index].publi_id;
          let text = document.createElement('div');
          text.innerText = data[index].publi_titulo;
          a.appendChild(text);
          resultDropdown.appendChild(a);
          let category = document.createElement('span');
          category.className = "searchCategory";
          category.innerText = data[index].tema_nombre;
          a.appendChild(category);
        }
      } else {
        let result = document.createElement('p');
        result.innerText = "No hay resultados";
        result.className = "searchResult";
        resultDropdown.appendChild(result);

      }
    }
    )
  }
}