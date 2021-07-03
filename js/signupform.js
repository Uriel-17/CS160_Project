document.getElementById("username").addEventListener("blur", validateUserName);
document.getElementById("fullname").addEventListener("blur", validateFullName);
document.getElementById("password").addEventListener("blur", validatePassword);
document.getElementById("cpw").addEventListener("blur", confirmPassword);
document
  .getElementById("streetaddress")
  .addEventListener("blur", validateAddress);
document
  .getElementById("secondaddress")
  .addEventListener("blur", validateSecondAddress);
document.getElementById("city").addEventListener("blur", validateCity);
document.getElementById("state").addEventListener("blur", validateState);
document.getElementById("country").addEventListener("blur", validateCountry);
document.getElementById("zipcode").addEventListener("blur", validateZipcode);
document.getElementById("phone").addEventListener("blur", validatePhone);
document.getElementById("email").addEventListener("blur", validateEmail);

const errorElement = document.getElementById("error");

//var button = document.getElementById("signup");

function validateUserName() {
  const username = document.getElementById("username");
  console.log(username);
  const re = /^[a-zA-Z ]{4,30}$/;
  if (!re.test(username.value)) {
    setErrorFor(username, "only alphabets with length 4-30");
  } else {
    setSuccessFor(username);
  }
}

function validateFullName() {
  const fullname = document.getElementById("fullname");
  console.log(fullname);
  const re = /^[a-zA-Z ]{4,30}$/;
  if (!re.test(fullname.value)) {
    setErrorFor(fullname, "only alphabets with length 4-30");
  } else {
    setSuccessFor(fullname);
  }
}

function validatePassword() {
  const password = document.getElementById("password");
  const re = /^[a-zA-Z0-9!@#$%^&*_]{8,30}$/;
  if (!re.test(password.value)) {
    setErrorFor(
      password,
      "only alphabets, numbers or !@#$%^&*_  with length 8 - 30"
    );
  } else {
    setSuccessFor(password);
  }
}

function confirmPassword() {
  const password = document.getElementById("password");
  const password2 = document.getElementById("cpw");

  if (password2.value !== password.value) {
    setErrorFor(password2, "password doesn't match");
  } else {
    setSuccessFor(password2);
  }
}

function validateAddress() {
  const address = document.getElementById("streetaddress");
  const re = /^[a-zA-Z0-9, ]+$/;

  if (!re.test(address.value)) {
    setErrorFor(address, "invalid address");
  } else {
    setSuccessFor(address);
  }
}

function validateSecondAddress() {
  const secondaddress = document.getElementById("secondaddress");
  const re = /^[a-zA-Z0-9, ]+$/;

  if (!re.test(secondaddress.value)) {
    setErrorFor(secondaddress, "invalid address");
  } else {
    setSuccessFor(secondaddress);
  }
}
function validateCity() {
  const city = document.getElementById("city");
  const re = /^[a-zA-Z ]+$/;

  if (!re.test(city.value)) {
    setErrorFor(city, "invalid city name");
  } else {
    setSuccessFor(city);
  }
}

function validateState() {
  const state = document.getElementById("state");
  const re = /^[a-zA-Z ]+$/;

  if (!re.test(state.value)) {
    setErrorFor(state, "invalid state name");
  } else {
    setSuccessFor(state);
  }
}

function validateCountry() {
  const country = document.getElementById("country");
  const re = /^[a-zA-Z ]+$/;

  if (!re.test(country.value)) {
    setErrorFor(country, "invalid country name");
  } else {
    setSuccessFor(country);
  }
}

function validateZipcode() {
  const zipcode = document.getElementById("zipcode");
  const re = /^[0-9]{4,6}$/;

  if (!re.test(zipcode.value)) {
    setErrorFor(zipcode, "4-6 digts please");
  } else {
    setSuccessFor(zipcode);
  }
}

function validatePhone() {
  const phone = document.getElementById("phone");
  const re = /^[0-9]{10,10}$/;

  if (!re.test(phone.value)) {
    setErrorFor(phone, "10 digts please");
  } else {
    setSuccessFor(phone);
  }
}

function validateEmail() {
  const email = document.getElementById("email");
  const re = /^[0-9]{10,10}$/;

  if (!isEmail(email.value)) {
    setErrorFor(email, "invalid email");
  } else {
    setSuccessFor(email);
  }
}

function setErrorFor(input, message) {
  const formGroup = input.parentElement; //.form-group

  //add error message in error div on top of form
  //errorElement.innerText = message;
  input.setCustomValidity(message);

  //add error class
  if (
    input == document.getElementById("city") ||
    input == document.getElementById("state") ||
    input == document.getElementById("zipcode") ||
    input == document.getElementById("country")
  ) {
    formGroup.className = "form-group error col-xs-12 col-md-3";
  } else {
    formGroup.className = "form-group error col-xs-12 col-md-6";
  }
}

function setSuccessFor(input) {
  const formGroup = input.parentElement; //.form-group
  input.setCustomValidity("");

  if (
    input == document.getElementById("city") ||
    input == document.getElementById("state") ||
    input == document.getElementById("zipcode") ||
    input == document.getElementById("country")
  ) {
    formGroup.className = "form-group success col-xs-12 col-md-3";
  } else {
    formGroup.className = "form-group success col-xs-12 col-md-6";
  }
  setTimeout(() => {
    errorElement.innerText = "";
  }, 1000);
}

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
