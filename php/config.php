<?php
  $hostname = "localhost";
  $username = "user";
  $password = "";
  $dbname = "dbname";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
