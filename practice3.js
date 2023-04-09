function validate() {
  var password1 = document.getElementById("password1").value;
  var password2 = document.getElementById("password2").value;
  
  if (password1.length < 8) { 
    alert("The length of the first password is less than 8 letters");
  } else if (password2.length < 8) {
    alert("The length of the second password is less than 8 letters");
  } else if (password1 !== password2) {
    alert("The two passwords don't match!");
  } else {
    alert("The two passwords are matched!");
  }
}
