<?php

$conn = mysqli_connect("localhost", "root", "", "assesment","3306");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



?>