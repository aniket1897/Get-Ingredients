<?php include('server.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- <link rel="icon" href="../../../../favicon.ico">-->

    <title>Register to Get Recipe</title>
    <!-- ajax 
    <script type="text/javascript">
      function check(value)
      {
        xmlHttp=GetXmlHttpObject()
        var url="checkmail.php"
        url=url+"?emailid="+value;
        xmlHttp.onreadystatechange=stateChanged
        xmlHttp.open("Get",url,true)
        xmlHttp.send(null)
      }
      function stateChanged(){
        if(xmlHttp.readyState==4 || xmlHttp.readyState="complete")
        {
          var showdata=xmlHttp.responseText;
          document.getElementById("email").innerHTML=showdata;
        }
      }
      function GetXmlHttpObject(){
        var xmlHttp=null;
        try{
          xmlHttp=new XMLHttpRequest();
        }
        catch(e){
          try{
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
          }
          catch(e){
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        }
        return xmlHttp;
      }
    </script>
-->
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

     <!-- jQuery Scripts -->

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
     </script>
 
     <script src="bootstrap/bootstrap.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="register.css" rel="stylesheet">
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
                <li class="nav-item">
                  <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Veg Recipes<span class="sr-only">(current)</span></a>
                  </li>
  
                  <li class="nav-item">
                    <a class="nav-link" href="#">Non-Veg Recipes<span class="sr-only">(current)</span></a>
                  </li>
  
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Diet Recipes<span class="sr-only">(current)</span></a>
                  </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="login.html">Login<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Register<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://getrecipe591286641.wordpress.com">Blogs<span class="sr-only">(current)</span></a>
                  </li>

              </ul>     
            </div> 
          </nav>
        </header>

    <form class="form-signin" method="post" action=""register1.php"">
       <img class="mb-4" src="images/logo.jpeg" alt="" width="152" height="152"> 
      <h1 class="h3 mb-3 font-weight-normal">Register</h1>

      <label for="fname" class="sr-only">Enter first name</label>
      <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter first name" required autofocus>

      <label for="lname" class="sr-only">Enter last name</label>
      <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter last name" required>

      <label for="email" class="sr-only">Enter email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Enter email address" required>

      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password_1" id="inputPassword" class="form-control" placeholder="Password" required>

      <label for="cpass" class="sr-only">Confirm Password</label>
      <input type="password" id="cpass" name="password_2" class="form-control" placeholder="Enter confirm password" required>

     
       <button class="btn btn-lg btn-danger btn-block" type="submit" name="reg_user">Sign in</button> 
     <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>-->
    </form>

    <footer class="footer bg-footer-color">
        <div class="container">
          <span class="text-muted">&copy; Copyright 2018-2019</span>
        </div>
      </footer>


  </body>
</html>

