function loadDoc() {
  var field=document.getElementById("search_field").value;
  var url="http://api.yummly.com/v1/api/recipes?_app_id=aca5f9f4&_app_key=1239d6ac759cf352ad4ce1c4e2c7706c&q="+field;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     var response=JSON.parse(xhttp.responseText);
     var matches=response.matches;
     
     for(var i=0;  i< matches.length ;  i++  ){
      var a=10;   
      var div=document.createElement('div');
      div.className="col-md-4";
      
      div.innerHTML=' <div class="card" style="width:300px">\
      <img class="card-img-top" src="'+ matches[i].imageUrlsBySize[90] +'" alt="Card image">\
      <div class="card-body">\
        <h4 class="card-title">'+ matches[i].sourceDisplayName  +'</h4>\
        <p class="card-text">Time taken to make: '+ matches[i].totalTimeInSeconds +'s</p>\
        <a href="#" class="btn btn-primary" onclick="openInNewTab('+matches[i].totalTimeInSeconds+')" >See Recipe</a>\
      </div>\
    </div>';
     
      document.getElementById('recipes').appendChild(div);

   }


    }

  };
  xhttp.open("GET",url, true);
  xhttp.send();
}

function openInNewTab(a) {
  
  console.log(a);
  
  var win = window.open('recipes.html', '_blank');
  
  //someFunction(a);
  win.focus();
}


