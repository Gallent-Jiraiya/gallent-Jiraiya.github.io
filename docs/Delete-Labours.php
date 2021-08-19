<?php
include("dbConnection.php");


if(isset($_GET['laborId'])){

$labourID = $_GET['laborId'];

$sql = "delete from labor where laborId='$labourID'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Labour Has been deleted')</script>";

    echo "<script>window.location.replace('View-Labours.php');</script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();

}

?>

