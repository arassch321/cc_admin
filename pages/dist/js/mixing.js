 var cl = new cloudinary.Cloudinary({cloud_name: "kadabengaran-cloud", secure: true});

 let clothesListContainer = document.querySelector(
  "#pick_cloth_img .images-area"
);
document.addEventListener("DOMContentLoaded", function () {
  if (clothes.length > 0) {
    console.log(clothesListContainer);
    clothes
      .slice()
      .reverse()
      .forEach((e, i) => {
        const imageCloth = document.createElement("img");
        if (i == 0) {
          imageCloth.classList.add("firstImage");
        }
         const myURL =cl.url("fashion-design/"+e["img"]);
        imageCloth.src = myURL;
        clothesListContainer.append(imageCloth);
      });
  } else {
    console.log("kosong");
    const toCatalog = document.createElement("a");
    var linkText = document.createTextNode("Add item");
    toCatalog.appendChild(linkText);
    toCatalog.classList.add("btn", "pick-btn");
    toCatalog.href = "./katalog/clothes";
    clothesListContainer.append(toCatalog);
  }
});

let pantsListContainer = document.querySelector("#pick_pants_img .images-area");
let shoesListContainer = document.querySelector("#pick_shoes_img .images-area");

document.addEventListener("DOMContentLoaded", function () {
  if (pants.length > 0) {
    console.log(pantsListContainer);
    pants
      .slice()
      .reverse()
      .forEach((e, i) => {
        const imageCloth = document.createElement("img");
        if (i == 0) {
          imageCloth.classList.add("firstImage");
        }
         const myURL =cl.url("fashion-design/"+e["img"]);
        imageCloth.src = myURL;
        pantsListContainer.append(imageCloth);
      });
  } else {
    console.log("kosong");
    const toCatalog = document.createElement("a");
    var linkText = document.createTextNode("Add item");
    toCatalog.appendChild(linkText);
    toCatalog.classList.add("btn", "pick-btn");
    toCatalog.href = "./katalog/pants";
    pantsListContainer.append(toCatalog);
  }
    if (shoes.length > 0) {
      
    }else{
      shoes = [];
    }
  try {
      let hah = shoes.length;

  } catch (error) {
    let shoes = [];
  }
  if (shoes.length > 0) {
    console.log(shoesListContainer);
    shoes
      .slice()
      .reverse()
      .forEach((e, i) => {
        const imageCloth = document.createElement("img");
        if (i == 0) {
          imageCloth.classList.add("firstImage");
        }
         const myURL =cl.url("fashion-design/"+e["img"]);
        imageCloth.src = myURL;
        shoesListContainer.append(imageCloth);
      });
  } else {
    console.log("kosong");
    const toCatalog = document.createElement("a");
    var linkText = document.createTextNode("Add item");
    toCatalog.appendChild(linkText);
    toCatalog.classList.add("btn", "pick-btn");
    toCatalog.href = "./katalog/shoes";
    shoesListContainer.append(toCatalog);
  }
});
