<?php
include("dbConnection.php");


if(isset($_GET['childId'])){

$childID = $_GET['childId'];

$sql = "delete from childdetails where id='$childID'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('child Has been deleted')</script>";

    echo "<script>window.location.replace('View-Child.php');</script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();

}

?>

