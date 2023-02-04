<?php
  $hostname = "localhost";
  $username = "id20249541_cnweb";
  $password = "FY{0ZmnUGvVX&r]P";
  $dbname = "id20249541_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
