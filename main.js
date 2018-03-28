function loadDoc() {
  var field=document.getElementById("search_field").value;
  var url="http://api.yummly.com/v1/api/recipes?_app_id=aca5f9f4&_app_key=1239d6ac759cf352ad4ce1c4e2c7706c&q="+field;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     //document.getElementById("demo").innerHTML = this.responseText;
     console.log(this.response);
    }
  };
  xhttp.open("GET",url, true);
  xhttp.send();
}