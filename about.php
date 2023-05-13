<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery site php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, 'gallery site php');
 $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $query="insert into contact(name, email, number) values ('$name', '$email', '$number')";
    mysqli_query($conn, $query);
    header('location:index.html#contact');

?>
