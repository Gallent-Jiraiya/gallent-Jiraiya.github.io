<?php
if(isset($_GET['deleteStaff'])){

$delete_id = $_GET['deleteStaff'];

$delete_pro = "delete from staff where NIC='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One staff member has been deleted')</script>";

echo "<script>window.open('index.php?viewStaff','_self')</script>";

}

}

?>