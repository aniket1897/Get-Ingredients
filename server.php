<?php
// initializing variables
$firstname = "";
$lastname = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Get-Recipe');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['fname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  /*if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }*/

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
   
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (firstname,lastname,email, password) 
  			  VALUES('$firstname', '$lastname','$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $firstname;
    $_SESSION['success'] = "You are now logged in";

    echo "Success";

  	header('location: login.html');
  }

}
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  /*if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }*/

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $query1 = "SELECT firstname FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    $firstname= mysqli_query($db, $query1);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $firstname;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    }else {
      array_push($errors, "Wrong email/password combination");
      
    }
  }

}

?>