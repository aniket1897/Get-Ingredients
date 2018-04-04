<?php session_start();  
if($_SESSION['username'] == ''){
  header('location: login.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Search Recipes</title>

    <!-- Scripts -->
    <script src="../js/search.js" ></script>
    <script src="../js/recipes.js" ></script>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery & Bootstrap Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script src="../bootstrap/bootstrap.min.js"></script>
  
    <!-- Styles for home page -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/search.css">

    <!-- Temp styles -->
    <style>
      form.search_box input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}
form.search_box button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #ff4d4d;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}
form.search_box button:hover {
    background: #660000;
}
form.search_box::after {
    content: "";
    clear: both;
    display: table;
}
    </style>


  </head>

  <body class="text-center" style="background-color: #ffcccc;" onload="deleteBookmarks
  ()">

      <header>
          <!-- Fixed navbar -->
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger" style="position:fixed;">
            <a class="navbar-brand" href="#">
              <img src="../images/logo.jpeg" alt="LOGO" width="50" height="50" >&ThickSpace; Get Recipe
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>

           <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="search.html">Search Recipes<span class="sr-only">(current)</span></a>
                </li>
              </ul>
                  <div class="dropdown">
                  <button class="btn dropdown-toggle" style="background-color:#990000;color:white;" type="button" data-toggle="dropdown">Hello <?php echo $_SESSION['username'];?>
                  </button>
                  <div class="dropdown-menu">
                   <a class="dropdown-item" href="logout.php">Logout</a>
                   </div>
                  </div>
            </div> 
          </nav>
        </header>
        
      <!-- Search Box -->
      <div class="container-fluid">
         <div class="search_box">
        
              <form class="search_box">
                <input type="text" id="search_field" placeholder="Search for any recipes u like!!!!" name="search">
                <button type="button" onclick="loadDoc()"><i class="fa fa-search"></i></button>
              </form>

         </div>
         
         <div class="row" id="recipes">
         </div>
         
        
      </div>   
    <footer class="footer bg-footer-color">
        <div class="container">
          <span class="text-muted">&copy; Copyright 2018-2019</span>
        </div>
      </footer> 
  </body>
</html>
