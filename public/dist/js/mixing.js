let clothesListContainer = document.querySelector(
  "#pick_cloth_img .images-area"
);

document.addEventListener("DOMContentLoaded", function () {
  if (clothes !== []) {
    console.log(clothesListContainer);
    clothes
      .slice()
      .reverse()
      .forEach((e, i) => {
        const imageCloth = document.createElement("img");
        if (i == 0) {
          imageCloth.classList.add("firstImage");
        }
        imageCloth.src = "./uploads/" + e["img"] + ".jpg";
        clothesListContainer.append(imageCloth);
      });
  }
});

let pantsListContainer = document.querySelector("#pick_pants_img .images-area");

document.addEventListener("DOMContentLoaded", function () {
  if (pants !== []) {
    console.log(pantsListContainer);
    pants
      .slice()
      .reverse()
      .forEach((e, i) => {
        const imageCloth = document.createElement("img");
        if (i == 0) {
          imageCloth.classList.add("firstImage");
        }
        imageCloth.src = "./uploads/" + e["img"] + ".jpg";
        pantsListContainer.append(imageCloth);
      });
  }
});
let shoesListContainer = document.querySelector("#pick_shoes_img .images-area");

document.addEventListener("DOMContentLoaded", function () {
  if (shoes !== []) {
    console.log(shoesListContainer);
    shoes
      .slice()
      .reverse()
      .forEach((e, i) => {
        const imageCloth = document.createElement("img");
        if (i == 0) {
          imageCloth.classList.add("firstImage");
        }
        imageCloth.src = "./uploads/" + e["img"] + ".jpg";
        shoesListContainer.append(imageCloth);
      });
  }
});
