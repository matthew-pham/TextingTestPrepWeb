<?php
if (isset($_POST['submit']))
{
    $username = $_POST['username'];
      $password = $_POST['password'];
  
  if($username == "admin" && $password == "password")
  {
    echo "You have logged in successfully!";
  }else{
    "Sorry the login information is incorrect!"
  }
}

?>