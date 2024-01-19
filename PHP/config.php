<?php
  $hostname = "localhost";
  $username = "id21009916_cloud1729";
  $password = "Hello1234@1729";
  $dbname = "id21009916_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
