<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'Get-Recipe');
$email=$_POST['email'];
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user['email'] === $email) {
       echo "<p style='color:red;'>Email Already Exists</p>";
    }
    else
    {
    	echo "OK";
    }
    exit();
?>