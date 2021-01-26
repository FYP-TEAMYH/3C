<?php
//connection to database
$con=mysqli_connect("localhost","root","","fyp");
$connect = new PDO("mysql:host=localhost;dbname=fyp", "root", "");

if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
?>
