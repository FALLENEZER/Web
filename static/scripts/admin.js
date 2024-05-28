const postData = {
  title: "",
  subtitle: "",
  content: "",
  author: "",
  author_url: "",
  publish_date: "",
  image_url: "",
  image_post: "",
  featured: 0,
};
const inputAuthorPhoto = document.getElementById("author-photo");
const authorPhotoView = document.getElementById("upload-preview__author-photo");
const authorPhotoPreView = document.getElementById("author-photo__card");
const inputHeroPhoto = document.getElementById("hero-photo");
const heroPhotoView = document.getElementById("upload-preview__hero-photo");
const inputHeroSmallPhoto = document.getElementById("hero-photo--small");
const heroPhotoSmallView = document.getElementById(
  "upload-preview__hero-photo--small"
);
const postPagePhoto = document.getElementById("post-page__photo");
const postCardPhoto = document.getElementById("card-page__photo");

document
  .getElementById("upload-new-button")
  .addEventListener("click", function () {
    document.getElementById("hero-photo").click();
  });

document
  .getElementById("upload-new-button--small")
  .addEventListener("click", function () {
    document.getElementById("hero-photo--small").click();
  });

function readFileAsBase64(file, onload) {
  const reader = new FileReader();
  reader.addEventListener(
    "load",
    () => {
      onload(reader.result);
    },
    false
  );
  reader.readAsDataURL(file);
}

function uploadImage(inputPhoto, photoView, photoPreview, property) {
  const file = inputPhoto.files[0];
  if (file) {
    readFileAsBase64(file, (imgLink) => {
      postData[property] = imgLink;
      photoView.style.backgroundImage = `url(${imgLink})`;
      photoView.style.backgroundSize = "cover";
      photoPreview.style.backgroundImage = `url(${imgLink})`;
      photoPreview.style.backgroundSize = "cover";
    });
  }
}

inputAuthorPhoto.addEventListener("change", function () {
  uploadImage(
    inputAuthorPhoto,
    authorPhotoView,
    authorPhotoPreView,
    "author_url"
  );
  addButtonsToAuthor();
});

inputHeroPhoto.addEventListener("change", function () {
  uploadImage(inputHeroPhoto, heroPhotoView, postPagePhoto, "image_url");
  addButtonsToHero();
});

inputHeroSmallPhoto.addEventListener("change", function () {
  uploadImage(
    inputHeroSmallPhoto,
    heroPhotoSmallView,
    postCardPhoto,
    "image_post"
  );
  addButtonsToHeroSmall();
});

function addButtonsToAuthor() {
  if (inputAuthorPhoto.value !== "") {
    document.querySelector(".upload__button-author").src =
      "static/images/upload-new.svg";
    document
      .querySelector(".remove__button-author")
      .classList.remove("status_off");
  }
}

function deleteAuthorImage() {
  document.querySelector(".upload__button-author").src =
    "static/images/upload.svg";
  document.querySelector(".remove__button-author").classList.add("status_off");
  authorPhotoView.style.backgroundImage = "";
  authorPhotoPreView.style.backgroundImage = "";
}

function addButtonsToHero() {
  if (inputHeroPhoto.value !== "") {
    document
      .querySelectorAll(".upload__button-hero")[0]
      .classList.remove("status_off");
    document
      .querySelectorAll(".remove__button-hero")[0]
      .classList.remove("status_off");
  }
}

function deletePostImage() {
  document
    .querySelectorAll(".upload__button-hero")[0]
    .classList.add("status_off");
  document
    .querySelectorAll(".remove__button-hero")[0]
    .classList.add("status_off");
  heroPhotoView.style.backgroundImage = "";
  heroPhotoView.style.backgroundSize = "auto";
  postPagePhoto.style.backgroundImage = "";
}

function addButtonsToHeroSmall() {
  if (inputHeroSmallPhoto.value !== "") {
    document
      .querySelectorAll(".upload__button-hero")[1]
      .classList.remove("status_off");
    document
      .querySelectorAll(".remove__button-hero")[1]
      .classList.remove("status_off");
  }
}

function deletePreviewImage() {
  document
    .querySelectorAll(".upload__button-hero")[1]
    .classList.add("status_off");
  document
    .querySelectorAll(".remove__button-hero")[1]
    .classList.add("status_off");
  heroPhotoSmallView.style.backgroundImage = "";
  heroPhotoSmallView.style.backgroundSize = "auto";
  postCardPhoto.style.backgroundImage = "";
}

document.querySelector(".remove__button-author").onclick = deleteAuthorImage;
document.querySelectorAll(".remove__button-hero")[0].onclick = deletePostImage;
document.querySelectorAll(".remove__button-hero")[1].onclick =
  deletePreviewImage;

// -------------------------------------------------------------

const titleInput = document.getElementById("title");
const titleOutput = document.getElementById("title-preview");
const descriptionInput = document.getElementById("description");
const descriptionOutput = document.getElementById("description-preview");
const authorNameInput = document.getElementById("author-name");
const authorNameOutput = document.getElementById("author-name-preview");
const dateInput = document.getElementById("date");
const dateOutput = document.getElementById("date-preview");
const subcontentInput = document.getElementById("subcontent__text");

function displayInput(placeInput, placeOutput) {
  placeOutput.textContent = placeInput.value;
}

function changeColor(placeInput) {
  if (placeInput.value) {
    placeInput.classList.remove("input__error");
  } else {
    placeInput.classList.add("input__error");
  }
}

titleInput.addEventListener("input", function () {
  displayInput(titleInput, titleOutput);
  changeColor(titleInput);
  postData.title = titleInput.value;
});

descriptionInput.addEventListener("input", function () {
  displayInput(descriptionInput, descriptionOutput);
  changeColor(descriptionInput);
  postData.subtitle = descriptionInput.value;
});

authorNameInput.addEventListener("input", function () {
  displayInput(authorNameInput, authorNameOutput);
  changeColor(authorNameInput);
  postData.author = authorNameInput.value;
});

dateInput.addEventListener("input", function () {
  displayInput(dateInput, dateOutput);
  changeColor(dateInput);
  postData.publish_date = dateInput.valueAsDate;
});

subcontentInput.addEventListener("input", function () {
  changeColor(subcontentInput);
  postData.content = subcontentInput.value;
});

// -------------------------------------

const submitButton = document.getElementById("publish-button");
const formData = document.getElementById("inputData");

formData.addEventListener("submit", function (event) {
  event.preventDefault();
  const mainStatus = document.querySelector(".main__status");
  const statusText = document.getElementById("status__info");
  const statusIcon = document.getElementById("status__icon");
  document.querySelector(".main__status").classList.remove("status_off");
  if (checkFieldsNotEmpty()) {
    mainStatus.classList.remove("status__error");
    statusText.textContent = "Publish Complete!";
    mainStatus.classList.add("status__success");
    statusIcon.src = "/static/images/check-circle.svg";
    sendData();
  } else {
    mainStatus.classList.remove("status__success");
    statusText.textContent = "Whoops! Some fields need your attention :o";
    mainStatus.classList.add("status__error");
    statusIcon.src = "/static/images/alert-circle.svg";
    highlightEmptyFields();
  }
});

function checkFieldsNotEmpty() {
  let inputs = document.querySelectorAll("input");
  for (let input of inputs) {
    if (!input.value || subcontentInput.value == "") {
      return false;
    }
  }
  return true;
}

function highlightEmptyFields() {
  const inputs = document.querySelectorAll(".input-box");
  for (let elem of inputs) {
    const item = elem.parentElement.querySelector(".isRequired");
    if (!item) continue;
    changeColor(elem);
    if (elem.classList.contains("input__error")) {
      item.classList.remove("status_off");
    } else {
      item.classList.add("status_off");
    }
  }
}

function sendData() {
  //console.log(postData)
  var json = JSON.stringify(postData);
  //console.log(json)
  fetch("api.php", {
    method: "POST",
    body: json,
  })
    .then(function (response) {
      //
      console.log("ok");
    })
    .catch(function (error) {
      //...
    });
}
