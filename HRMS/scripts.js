function showHint(str) {
    //check if input field is empty
    if (str.length == 0) {
      document.getElementById("txt_hint").innerHTML = "";
      return;
    } else {
      //if the field is not empty, create an XMLHttpRequest to get suggestions
      var xmlhttp = new XMLHttpRequest();
      // server response is ready, we call the function
      xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("txt_hint").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "/learn/best-code-editor-example?q=" + str, true);
      xmlhttp.send();
    }
  }