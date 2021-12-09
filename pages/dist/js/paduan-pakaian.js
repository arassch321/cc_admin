  let baju_picked = document.querySelector(".picker-price#cloth h4");
  let baju_picked_price = document.querySelector(".picker-price#cloth p");
  let celana_picked = document.querySelector(".picker-price#pants h4");
  let celana_picked_price = document.querySelector(".picker-price#pants p");
  let sepatu_picked = document.querySelector(".picker-price#shoes h4");
  let sepatu_picked_price = document.querySelector(".picker-price#shoes p");
  let picked_total = document.querySelector(".picker-price#total p");


document.addEventListener("DOMContentLoaded", function () {

  let celana_del = document.querySelector(".picker-btn#pants .btn");
  let sepatu_del = document.querySelector(".picker-btn#shoes .btn");

  let baju_del = document.querySelector(".picker-btn#cloth .btn");

  
  celana_del.addEventListener("click", deleteAllPants);
  sepatu_del.addEventListener("click", deleteAllShoes);

  baju_del.addEventListener("click", deleteAllClothes);

  let clothes_imagesAreaImages = document.querySelectorAll(
    "#cloth .images-area img"
  );
  let clothes_imagesAreaFirstImage = document.querySelector(
    "#cloth .images-area .firstImage"
  );

  let clothes_previousBtn = document.querySelector(".previous-btn#pick_cloth");
  let clothes_nextBtn = document.querySelector(".next-btn#pick_cloth");
  let clothes_currentImageCount = 1;

  let clothes_sliderController;

  let pants_imagesAreaImages = document.querySelectorAll(
    "#pants .images-area img"
  );
  let pants_imagesAreaFirstImage = document.querySelector(
    "#pants .images-area .firstImage"
  );
  let pants_imagesAreaFirstImageClose = document.querySelector(
    "#pants .images-area .firstImage .firstImageClose"
  );

  let pants_previousBtn = document.querySelector(".previous-btn#pick_pants");
  let pants_nextBtn = document.querySelector(".next-btn#pick_pants");
  let pants_currentImageCount = 1;

  let pants_sliderController;

  let shoes_imagesAreaImages = document.querySelectorAll(
    "#shoes .images-area img"
  );
  let shoes_imagesAreaFirstImage = document.querySelector(
    "#shoes .images-area .firstImage"
  );

  let shoes_previousBtn = document.querySelector(".previous-btn#pick_shoes");
  let shoes_nextBtn = document.querySelector(".next-btn#pick_shoes");
  let shoes_currentImageCount = 1;

  let shoes_sliderController;

  clothes_previousBtn.addEventListener("click", clothes_previousImage);
  clothes_nextBtn.addEventListener("click", clothes_nextImage);

  // Previous Image Function
  function clothes_previousImage() {
    if (clothes_currentImageCount === 1) {
      return false;
    } else {
      clothes_currentImageCount--;
      clothes_sliderController();
    }
  }

  // Next Image Function
  function clothes_nextImage() {
    if (clothes_currentImageCount === clothes_imagesAreaImages.length) {
      return false;
    } else {
      clothes_currentImageCount++;
      clothes_sliderController();
    }
  }

  // Slider Controler Function
  (clothes_sliderController = function () {
    activeButton();

    let currentImageMinusOne = clothes_currentImageCount - 1;
    try {
      clothes_imagesAreaFirstImage.style.marginLeft = `-${
        210 * currentImageMinusOne
      }px`;
    } catch (error) {}
    console.log(600 * currentImageMinusOne);
    console.log(clothes_currentImageCount);
    fillClothID(clothes_currentImageCount);
  })();

  function removeAllActive(targetElement) {
    for (var i = 0; i < targetElement.length; i++) {
      targetElement[i].classList.remove("active");
    }
  }

  function activeButton() {
    clothes_currentImageCount === 1
      ? clothes_previousBtn.classList.add("disabled")
      : clothes_previousBtn.classList.remove("disabled");

    // If The Current Image Count Equle clothes_imagesAreaImages.length
    clothes_currentImageCount === clothes_imagesAreaImages.length
      ? clothes_nextBtn.classList.add("disabled")
      : clothes_nextBtn.classList.remove("disabled");
  }

  pants_previousBtn.addEventListener("click", pants_previousImage);
  pants_nextBtn.addEventListener("click", pants_nextImage);

  // Previous Image Function
  function pants_previousImage() {
    if (pants_currentImageCount === 1) {
      return false;
    } else {
      pants_currentImageCount--;
      pants_sliderController();
    }
  }

  // Next Image Function
  function pants_nextImage() {
    if (pants_currentImageCount === pants_imagesAreaImages.length) {
      return false;
    } else {
      pants_currentImageCount++;
      pants_sliderController();
    }
  }

  // Slider Controler Function
  (pants_sliderController = function () {
    activeButton();

    let currentImageMinusOne = pants_currentImageCount - 1;
    try {
      pants_imagesAreaFirstImage.style.marginLeft = `-${
        210 * currentImageMinusOne
      }px`;
      pants_imagesAreaFirstImageClose.style.marginLeft = `-${
        210 * currentImageMinusOne
      }px`;
    } catch (error) {}

    console.log(600 * currentImageMinusOne);
    fillPantsID(pants_currentImageCount);
  })();

  function removeAllActive(targetElement) {
    for (var i = 0; i < targetElement.length; i++) {
      targetElement[i].classList.remove("active");
    }
  }

  function activeButton() {
    pants_currentImageCount === 1
      ? pants_previousBtn.classList.add("disabled")
      : pants_previousBtn.classList.remove("disabled");

    // If The Current Image Count Equle pants_imagesAreaImages.length
    pants_currentImageCount === pants_imagesAreaImages.length
      ? pants_nextBtn.classList.add("disabled")
      : pants_nextBtn.classList.remove("disabled");
  }

  shoes_previousBtn.addEventListener("click", shoes_previousImage);
  shoes_nextBtn.addEventListener("click", shoes_nextImage);

  // Previous Image Function
  function shoes_previousImage() {
    if (shoes_currentImageCount === 1) {
      return false;
    } else {
      shoes_currentImageCount--;
      shoes_sliderController();
    }
  }

  // Next Image Function
  function shoes_nextImage() {
    if (shoes_currentImageCount === shoes_imagesAreaImages.length) {
      return false;
    } else {
      shoes_currentImageCount++;
      shoes_sliderController();
    }
  }

  // Slider Controler Function
  (shoes_sliderController = function () {
    activeButton();

    let currentImageMinusOne = shoes_currentImageCount - 1;
    try {
      shoes_imagesAreaFirstImage.style.marginLeft = `-${
        210 * currentImageMinusOne
      }px`;
    } catch (error) {}
    console.log(600 * currentImageMinusOne);
    fillShoesID(shoes_currentImageCount);
  })();

  function removeAllActive(targetElement) {
    for (var i = 0; i < targetElement.length; i++) {
      targetElement[i].classList.remove("active");
    }
  }

  function activeButton() {
    shoes_currentImageCount === 1
      ? shoes_previousBtn.classList.add("disabled")
      : shoes_previousBtn.classList.remove("disabled");

    // If The Current Image Count Equle shoes_imagesAreaImages.length
    shoes_currentImageCount === shoes_imagesAreaImages.length
      ? shoes_nextBtn.classList.add("disabled")
      : shoes_nextBtn.classList.remove("disabled");
  }

  console.log(baju_picked.value);
  console.log(baju_picked_price.value);
  console.log(celana_picked.value);
  console.log(celana_picked_price.value);
  console.log(sepatu_picked.value);
  console.log(sepatu_picked_price.value);
  console.log(picked_total.value);

  console.log(baju_selected.value);
  console.log(celana_selected.value);
  console.log(sepatu_selected.value);

  if (
    baju_selected.value !== "" &&
    celana_selected.value !== "" &&
    sepatu_selected.value !== ""
  ) {
    console.log("enable");
    selected_submit.classList.remove("disabled");

    selected_submit.disabled = false;
  } else {
    console.log("disabled");
selected_submit.classList.add("disabled");

    selected_submit.disabled = true;
  }
});

function fillClothID(id) {
  if (clothes.length !== 0) {
    let temp = clothes.map((e, i, a) => a[a.length - 1 - i]);
    let val = temp[id - 1]["id"];
    let name = temp[id - 1]["nama"];
    let price = temp[id - 1]["harga"];
    baju_picked.innerHTML = name;
    baju_picked_price.dataset.price  = price;
    let harga = parseInt(baju_picked_price.dataset.price).toLocaleString("id-ID", {
      style: 'currency',
      currency: 'IDR',});
    baju_picked_price.innerHTML = harga;
    harg1 =(baju_picked_price.dataset.price === undefined)? 0 : parseInt(baju_picked_price.dataset.price);
    harg2 = (celana_picked_price.dataset.price === undefined)? 0 : parseInt(celana_picked_price.dataset.price);
    harg3 =(sepatu_picked_price.dataset.price === undefined)? 0 : parseInt(sepatu_picked_price.dataset.price);
    let total = harg1 +harg2 + harg3;

    let harga_tot = total.toLocaleString("id-ID", {
      style: 'currency',
      currency: 'IDR',});
    picked_total.innerHTML = '<b>Estimasi Total harga</b> '+ harga_tot;
    baju_selected.value = val;
    total_selected.value = harga_tot;
  }
}
function fillPantsID(id) {
  if (pants.length !== 0) {
    let temp = pants.map((e, i, a) => a[a.length - 1 - i]);
    let val = temp[id - 1]["id"];
    let name = temp[id - 1]["nama"];
    let price = temp[id - 1]["harga"];
    celana_picked.innerHTML = name;
    celana_picked_price.dataset.price  = price;
    let harga = parseInt(celana_picked_price.dataset.price).toLocaleString("id-ID", {
      style: 'currency',
      currency: 'IDR',});
    celana_picked_price.innerHTML = harga;
    harg1 =(baju_picked_price.dataset.price === undefined)? 0 : parseInt(baju_picked_price.dataset.price);
    harg2 = (celana_picked_price.dataset.price === undefined)? 0 : parseInt(celana_picked_price.dataset.price);
    harg3 =(sepatu_picked_price.dataset.price === undefined)? 0 : parseInt(sepatu_picked_price.dataset.price);
    let total = harg1 +harg2 + harg3;

    let harga_tot = total.toLocaleString("id-ID", {
      style: 'currency',
      currency: 'IDR',});
    picked_total.innerHTML = '<b>Estimasi Total harga</b> '+ harga_tot;
    celana_selected.value = val;
    total_selected.value = harga_tot;

  }
}
function fillShoesID(id) {
  if (shoes.length !== 0) {
    let temp = shoes.map((e, i, a) => a[a.length - 1 - i]);
    let val = temp[id - 1]["id"];
    let name = temp[id - 1]["nama"];
    let price = temp[id - 1]["harga"];
    sepatu_picked.innerHTML = name;
    sepatu_picked_price.dataset.price  = price;

    let harga = parseInt(sepatu_picked_price.dataset.price).toLocaleString("id-ID", {
      style: 'currency',
      currency: 'IDR',});
    sepatu_picked_price.innerHTML = harga;
    harg1 =(baju_picked_price.dataset.price === undefined)? 0 : parseInt(baju_picked_price.dataset.price);
    harg2 = (celana_picked_price.dataset.price === undefined)? 0 : parseInt(celana_picked_price.dataset.price);
    harg3 =(sepatu_picked_price.dataset.price === undefined)? 0 : parseInt(sepatu_picked_price.dataset.price);
    let total = harg1 +harg2 + harg3;

    let harga_tot = total.toLocaleString("id-ID", {
      style: 'currency',
      currency: 'IDR',});
    picked_total.innerHTML = '<b>Estimasi Total harga</b> '+ harga_tot;
    sepatu_selected.value = val;
    total_selected.value = harga_tot;
  }
}
