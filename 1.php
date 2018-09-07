<!DOCTYPE html>
<html>
<body>

<div id="demo">

<h1>The XMLHttpRequest Object</h1>

<button type="button"
onclick="loadDoc('ajax_info.txt', myFunction)">Change Content
</button>
</div>

<script>
function loadDoc(http://192.168.2.41, cFunction) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
  xhttp.open("GET", http://192.168.2.41, true);
  xhttp.send();
}
function myFunction(xhttp) {
  document.getElementById("demo").innerHTML =
  xhttp.responseText;
}
</script>
</body>
</html>
