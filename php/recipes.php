<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title id="doc_title"></title>

    <!-- Scripts -->
    <script src="../js/recipes.js" ></script>
    <script src="../js/main.js" ></script>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery & Bootstrap Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script src="../bootstrap/bootstrap.min.js"></script>

    <!-- Styles for recipes page -->
    <link rel="stylesheet" href="../css/recipes.css">
  </head>

  <body class="text-center" style="background-color: #ffcccc;"
  onload="someFunction()">

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
                  <a class="nav-link" href="../index.html">Home<span class="sr-only">(current)</span></a>
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

      <!-- Main Content  -->
        <div class="ratings" id="ratings">
              <h4 style="display:inline">Ratings </h4>
        </div>
        <div class="container">
          <div class="recipes">
              <h1 id="title"></h1>
          </div>
        </div>
        <div id="display_image"></div>
        <div class="row" style="margin-left:0px;">

          <div class="col-md-4" style="margin-top:0px;">
            <div class="ingredients_display">
                <ul id="ingredients" class="list-group">
                  <h3>Ingredients To Be Added</h3>
                </ul>
            </div>
          </div>

            <div class="col-md-4">
                <div class="ingredients_display">
                    <ul id="course_type" class="list-group">
                      <h3>Course Type</h3>
                    </ul>
                </div>
           </div>
             <div class="col-md-4" style="margin-top:38px;">
                   <div class="flavours">
                       <ul id="flavours" class="list-group">
                         <h3>Flavours</h3>
                       </ul>
             </div>
           </div>

      </div>

        <footer class="footer bg-footer-color" style="color:white;">
            <div class="container">
              <span class="text-muted">&copy; Copyright 2018-2019</span>
            </div>
          </footer>

</body>
</html>
