const showPasswordIcon = document.getElementById("password__button");
const passwordInput = document.getElementById("passwordInput");
const emailInput = document.getElementById("emailInput");
const buttonSubmit = document.getElementById("submit");

passwordInput.addEventListener("input", function () {
  changeColor(passwordInput);
});

emailInput.addEventListener("input", function () {
  changeColor(emailInput);
});

buttonSubmit.addEventListener("click", function () {
  errorHandler();
});

showPasswordIcon.addEventListener("click", function () {
  if (passwordInput.type == "password") {
    passwordInput.type = "text";
    showPasswordIcon.src = "static/images/eye.svg";
  } else {
    passwordInput.type = "password";
    showPasswordIcon.src = "static/images/eye-off.svg";
  }
});

function changeColor(placeInput) {
  const colorEmpty = "rgba(255, 255, 255, 1)";
  const colorFill = "rgb(247, 247, 247)";
  if (placeInput.value) {
    placeInput.style.backgroundColor = colorFill;
    placeInput.style.borderBottom = "1px solid rgba(46, 46, 46, 1)";
  } else {
    placeInput.style.backgroundColor = colorEmpty;
    placeInput.style.borderBottom = "1px solid rgba(232, 105, 97, 1)";
  }
}

function errorHandler() {
  if (emailInput.value) {
    if (emailInput.value.includes("@") && emailInput.value.includes(".")) {
      document.getElementById("email__require").style.display = "none";
    } else {
      document.getElementById("email__require").style.display = "block";
      document.getElementById("email__require").textContent =
        "Incorrect email format. Correct format is ****@**.***";
    }
  } else {
    document.getElementById("email__require").style.display = "block";
    emailInput.style.borderBottom = "1px solid rgba(232, 105, 97, 1)";
  }
  if (passwordInput.value) {
    document.getElementById("password__require").style.display = "none";
  } else {
    document.getElementById("password__require").style.display = "block";
    passwordInput.style.borderBottom = "1px solid rgba(232, 105, 97, 1)";
  }
  if (emailInput.value == "" || passwordInput.value == "") {
    document.getElementById("error").style.display = "flex";
    document.getElementById("error__status").textContent =
      "A-Ah! Check all fields,";
  } else {
    document.getElementById("error").style.display = "none";
  }
}
