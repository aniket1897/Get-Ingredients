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
  for(var i=0 ; i< ingr.length ; i++){
      var li=document.createElement("li");
      li.className="list-group-item";
      li.innerHTML=''+ingr[i]+'';
      document.getElementById("ingredients").appendChild(li);
  }

}