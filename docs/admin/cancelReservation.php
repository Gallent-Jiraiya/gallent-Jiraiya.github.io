<?php
if(isset($_GET['cancelReservation'])){

$delete_id = $_GET['cancelReservation'];

$delete_pro = "delete from rent where rentID='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('Resevation has been canceled')</script>";

echo "<script>window.open('index.php?reservations','_self')</script>";

}

}

?>