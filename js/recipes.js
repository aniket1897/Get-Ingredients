function someFunction (){
  var recipes_objects= JSON.parse(localStorage.getItem("bookmarks"));
  var recipes_index=recipes_objects[0].recipes_index;
  var recipes =recipes_objects[0].recipes_array[recipes_index];

  console.log(recipes);

  document.getElementById("doc_title").innerHTML=recipes.recipeName;

  //Title
  document.getElementById("title").innerHTML="<h1>"+ recipes.recipeName  +"</h1>";

  //Image
  document.getElementById("display_image").innerHTML="<img alt='Recipes Image' src='" + recipes.imageUrlsBySize[90]+"' height='300' width='300' />";

  //Ratings
  var ratings=recipes.rating;
  for (var i = 0; i < ratings; i++) {
      var span=document.createElement("span");
      span.className="fa fa-star checked";
      document.getElementById("ratings").appendChild(span);
  }
  for(i=0;i<(5-ratings);i++){
    var span=document.createElement("span");
    span.className="fa fa-star";
    document.getElementById("ratings").appendChild(span);
  }

  //ingredients
  var ingr=recipes.ingredients;
  for(var i=0 ; i< ingr.length ; i++){
      var li=document.createElement("li");
      li.className="list-group-item";
      li.innerHTML=''+ingr[i]+'';
      document.getElementById("ingredients").appendChild(li);
  }

  //flavors
    var ingr=recipes.flavors;
    if(ingr != null){
      for(var i=0 ; i< ingr.length ; i++){
          var li=document.createElement("li");
          li.className="list-group-item";
          li.innerHTML=''+ingr[i]+'';
          document.getElementById("flavours").appendChild(li);
    }
  }
  else{
        var li=document.createElement("li");
        li.className="list-group-item";
        li.innerHTML='Flavour not available';
        document.getElementById("flavours").appendChild(li);
  }
  //Course type
  var c=recipes.attributes.course;
  for (var i = 0; i < c.length; i++) {
    var li=document.createElement("li");
    li.className="list-group-item";
    li.innerHTML=''+c[i]+'';
    document.getElementById("course_type").appendChild(li);
  }
}
