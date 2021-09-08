<?php
if(isset($_GET['deleteDriver'])){

$delete_id = $_GET['deleteDriver'];

$delete_pro = "delete from driver where NIC='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One driver has been deleted')</script>";

echo "<script>window.open('index.php?viewDriver','_self')</script>";

}

}

?>