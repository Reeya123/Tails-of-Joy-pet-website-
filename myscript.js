function validate() {
  var password = document.getElementById("password").value;
  var confirm = document.getElementById("confirm").value;

  if (password.trim().length < 8) {
    alert("Password must contain atleast 8 characters");
    return false;
  } else if (password != confirm) {
    alert("Password doesn't match!!!");
    return false;
  } else {
    alert("Registered successfully");
    return true;
  }
}
