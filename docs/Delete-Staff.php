<?php
include("dbConnection.php");


if(isset($_GET['staffId'])){

$staffID = $_GET['staffId'];

$sql = "delete from staff where staffId='$staffID'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Staff Member Has been deleted')</script>";

    echo "<script>window.location.replace('View-Staff.php');</script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();

}

?>

