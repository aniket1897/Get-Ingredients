<?php
session_start();
$db=mysqli_connect('localhost','root','','Get-Recipe');
if( mysqli_connect_error($db) ){
      echo($db);
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Welcome to Get Recipe!!</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery & Bootstrap Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script src="bootstrap/bootstrap.min.js"></script>

    <!-- Styles for home page -->
    <link rel="stylesheet" href="styles.css">
    <link href="home.css" rel="stylesheet">


  </head>

  <body class="text-center">

      <header>
          <!-- Fixed navbar -->
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
            <a class="navbar-brand" href="#">
              <img src="images/logo.jpeg" alt="LOGO" width="50" height="50" >&ThickSpace; Get Recipe
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>

           <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="login.html">Login<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="register.html">Register<span class="sr-only">(current)</span></a>
                </li>
              </ul>     
            </div> 
          </nav>
        </header>

        <div class="container-fluid">
            <div class="row">
              <?php
              $result=mysqli_query($db,'SELECT * FROM recipes');
              while( $row = mysqli_fetch_array($result)){
 
                $title=$row['name'];
                $desc=$row['description'];
                $url=$row['link'];
                echo "<div class='col-md-4'>
                         <div class='card'>
                         <img class='card-img-top' src=$url height='190' width='190'  alt='Card image'>
                         <div class='card-body'>
                             <h5>$title</h5>
                             <h3>$desc</h3>
                         </div>
                     </div>
                     </div>";
               }
              echo("</div></div>");

              echo("<footer class='footer bg-footer-color'>
              <div class='container'>
                <span class='text-muted'>&copy; Copyright 2018-2019</span>
              </div>
            </footer>
              ");



              ?>

 <!--   <footer class="footer bg-footer-color">
        <div class="container">
          <span class="text-muted">&copy; Copyright 2018-2019</span>
        </div>
      </footer> -->
  </body>
</html>
