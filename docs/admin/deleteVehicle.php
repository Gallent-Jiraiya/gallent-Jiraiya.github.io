<?php
if(isset($_GET['deleteVehicle'])){

$delete_id = $_GET['deleteVehicle'];

$delete_pro = "delete from vehicle where regNum='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One Vehicle has been deleted')</script>";

echo "<script>window.open('index.php?viewVehicle','_self')</script>";

}

}

?>