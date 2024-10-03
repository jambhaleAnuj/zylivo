// Contact Form
function validateForm(form_id) {
  var name = document.forms[form_id]["name"].value;
  var email = document.forms[form_id]["email"].value;
  var mobile = document.forms[form_id]["mobile"].value;
  var comments = document.forms[form_id]["comments"].value;

  document.getElementById("error-msg").style.opacity = 0;
  document.getElementById('error-msg').innerHTML = "";
  
  if (name == "" || name == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>Please enter your name</div>";
    fadeIn();
    return false;
  }
  
  if (mobile == "" || mobile == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>Please enter a mobile</div>";
    fadeIn();
    return false;
  }

  if (email == "" || email == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>Please enter your email</div>";
    fadeIn();
    return false;
  } else {
    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([com net org]{3}(?:\.[a-z]{6})?)$/i
    if (!filter.test(email)) {
      document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>Please enter a valid email address!";
      fadeIn();
      return false;
    }
  }

  if (comments == "" || comments == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Comments*</div>";
    fadeIn();
    return false;
  }

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("simple-msg").innerHTML = this.responseText;
      document.forms[form_id]["name"].value = "";
      document.forms[form_id]["email"].value = "";
      document.forms[form_id]["mobile"].value = "";
      document.forms[form_id]["comments"].value = "";
    }
  };
  xhttp.open("POST", "http://1OEeK9c1JAVB.com/contact.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("name=" + name + "&email=" + email + "&mobile=" + mobile + "&comments=" + comments + "&form_id=" + form_id);
  return false;
}
function fadeIn() {
  var fade = document.getElementById("error-msg");
  var opacity = 0;
  var intervalID = setInterval(function () {
    if (opacity < 1) {
      opacity = opacity + 0.5
      fade.style.opacity = opacity;
    } else {
      clearInterval(intervalID);
    }
  }, 200);
}