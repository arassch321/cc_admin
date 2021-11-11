let buttonAdd = document.querySelectorAll(".btn-add");
function ajax_get(url, callback) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      console.log("responseText:" + xmlhttp.responseText);
      try {
        var data = JSON.parse(xmlhttp.responseText);
      } catch (err) {
        console.log(err.message + " in " + xmlhttp.responseText);
        return;
      }
      callback(data);
    }
  };

  xmlhttp.open("GET", url, true);
  xmlhttp.send();
}
buttonAdd.forEach((item) => {
  item.addEventListener("click", (event) => {
    addToList(event.target);
  });
});

function addToList(button) {
  if (button.getAttribute("data-item") == "clothes") {
    console.log("yow");
    ajax_get(
      "./getajaxclothes/" + button.getAttribute("data-id"),
      function (data) {
        id = data["id_baju_man"];
        console.log(id);
        img = data["gambar"];
        link = data["link"];
        const clothObject = composeClothObject(id, img, link);
        clothes.push(clothObject);
        updateDataToStorage();
        location.href = "../mixing";
      }
    );
  } else if (button.getAttribute("data-item") == "pants") {
    console.log("yow");
    ajax_get(
      "./getajaxpants/" + button.getAttribute("data-id"),
      function (data) {
        id = data["id_celana_man"];
        console.log(id);
        img = data["gambar"];
        link = data["link"];
        const pantsObject = composePantsObject(id, img, link);
        pants.push(pantsObject);
        updateDataToStorage();
        location.href = "../mixing";
      }
    );
  } else if (button.getAttribute("data-item") == "shoes") {
    console.log("yow3");
    ajax_get(
      "./getajaxshoes/" + button.getAttribute("data-id"),
      function (data) {
        id = data["id_sepatu"];
        console.log(id);
        img = data["gambar"];
        link = data["link"];
        const shoesObject = composeShoesObject(id, img, link);
        shoes.push(shoesObject);
        updateDataToStorage();
        location.href = "../mixing";
      }
    );
  }

  //   emptyCheck();
}
