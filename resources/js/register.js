function myFunction() {
    var x = document.getElementById("inputpwd");
    if (x.type === "pwd") {
      x.type = "text";
    } else {
      x.type = "pwd";
    }
  }