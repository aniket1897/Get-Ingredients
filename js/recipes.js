function someFunction (){
  var recipes_objects= JSON.parse(localStorage.getItem("bookmarks"));
  var recipes_index=recipes_objects[0].recipes_index;
  var recipes =recipes_objects[0].recipes_array[recipes_index];
  document.getElementById("doc_title").innerHTML=recipes.recipeName;
  document.getElementById("title").innerHTML="<h1>"+ recipes.recipeName  +"</h1>";

}