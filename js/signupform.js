const username = document.getElementById("username");
const fullname = document.getElementById("fullname");
const password = document.getElementById("password");
const confirmpw = document.getElementById("cpw");
const secondaddress = document.getElementById("secondaddress");
const city = document.getElementById("city");
const state = document.getElementById("state");
const country = document.getElementById("country");
const zipcode = document.getElementById("zipcode");
const form = document.getElementById("form");
const errorElement = document.getElementById("error");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  //get values from inputs
  const usernameValue = username.value.trim();
  const fullnameValue = fullname.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = confirmpw.value.trim();

  if (usernameValue === "") {
    //show error
    //add error class
    setErrorFor(username, "Username cannot be blank");
  } else {
    //add success class
    setSuccessfor(username);
  }

  if (fullnameValue === "") {
    //show error
    //add error class
    setErrorFor(fullname, "Full name cannot be blank");
  } else {
    //add success class
    setSuccessfor(fullname);
  }

  if (emailValue === "") {
    setErrorFor(email, "Email cannot be blank");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "Email is not valid");
  } else {
    setSuccessFor(email);
  }

  if (passwordValue === "") {
    setErrorFor(password, "Password cannot be blank");
  } else {
    setSuccessfor(password);
  }

  if (password2Value === "") {
    setErrorFor(confirmpw, "Password cannot be blank");
  } else if (password2value !== passwordValue) {
    setErrorFor(confirmpw, "password doesn not match");
  } else {
    setSuccessFor(confirmpw);
  }
}
function setErrorFor(input, message) {
  const formGroup = input.parentElement; //.form-group
  //add error message in error div on top of form
  errorElement.innerText = message;

  //add error class
  formGroup.className = "form-group error";
}

function setSuccessFor(input) {
  const formGroup = input.parentElement; //.form-group
  formGroup.className = "form-group success";
}

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
