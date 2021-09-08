<?php

if(isset($_GET['editVehicle'])){

$edit_id = $_GET['editVehicle'];

$get_pro = "select * from vehicle where regNum='$edit_id'";

$run_pro = mysqli_query($conn,$get_pro);
$row_pro = mysqli_fetch_array($run_pro);

$regNum = $row_pro['regNum'];
$brand = $row_pro['brand'];
$picture = $row_pro['picture'];
$modelYear = $row_pro['modelYear'];
$airCondition = $row_pro['airCondition'];
$transmissionType = $row_pro['transmissionType'];
$Luggage = $row_pro['Luggage'];
$passengers = $row_pro['passengers'];
$pricePerDay = $row_pro['pricePerDay'];
$freeMilage = $row_pro['freeMilage'];
$pricePerExtraKM = $row_pro['pricePerExtraKM'];
$id = $row_pro['regNum'];
}

?>



<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title> Add Vehicle </title>
<link rel="stylesheet" href="css/formStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Update Vehicle Details</div>
    <div class="content">
      <form action="" method="POST">
      <div class="user-details">
          <div class="input-box">
            <span class="details">Register Number</span>
            <input type="text" placeholder="Enter register Number" name="registerNum" value="<?php echo $regNum?>" required>
          </div>
          <div class="input-box">
            <span class="details">Brand</span>
            <input type="text" placeholder="Enter brand" name="brand" value="<?php echo $brand?>" required>
          </div>
          <div class="input-box">
            <span class="details">Vehicle Image</span>
            <input type="file" name="vehicleImage" id="vehicleImage" value="<?php echo $picture?>"  accept="image/png, image/jpeg">
          </div>
          <div class="input-box">
            <span class="details">Model Year</span>
            <input type="text" placeholder="Model Year" name="modelYear" id="" value="<?php echo $modelYear?>" required>
          </div>
          <div class="input-box">
            <span class="details">Air Condition</span>
            <input type="text" placeholder="Air Condition" name="airCondition" id="" value="<?php echo $airCondition?>" required>
          </div>
          <div class="input-box">
            <span class="details">Transmission Type</span>
            <select name="transmissionType" id="transmissionType" value="<?php echo $transmissionType?>" required>
              <option value="Auto">Auto</option>
              <option value="Manual">Manual</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Luggage</span>
            <input type="text" placeholder="Luggage" name="luggage" id="" value="<?php echo $Luggage?>" required>
          </div>
          <div class="input-box">
            <span class="details">No. of Passengers</span>
            <input type="text" placeholder="Passengers" name="passengers" id="" value="<?php echo $passengers?>" required>
          </div>
          <div class="input-box">
            <span class="details">Price Per Day</span>
            <input type="text" placeholder="Price per day" name="pricePerDay" id="" value="<?php echo $pricePerDay?>" required>
          </div>
          <div class="input-box">
            <span class="details">Free Mileage</span>
            <input type="text" placeholder="Free mileage" name="freeMileage" id="" value="<?php echo $freeMilage?>" required>
          </div>
          <div class="input-box">
            <span class="details">Price Per Extra KM</span>
            <input type="text" placeholder="Price per extra KM" name="priceExtra" id="" value="<?php echo $pricePerExtraKM?>" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Update" name="editVehicle">
        </div>
      </form>
    </div>
  </div>

</body>

</html>


<?php
    if (isset($_POST['editVehicle'])) {

      $registerNum = $_POST['registerNum'];
      $brand = $_POST['brand'];
      $vehicleImage = $_POST['vehicleImage'];
      $modelYear = $_POST['modelYear'];
      $airCondition = $_POST['airCondition'];
      $transmissionType = $_POST['transmissionType'];
      $luggage = $_POST['luggage'];
      $passengers = $_POST['passengers'];
      $pricePerDay = $_POST['pricePerDay'];
      $freeMileage = $_POST['freeMileage'];
      $priceExtra = $_POST['priceExtra'];
    

        $updateVehicle = "UPDATE vehicle SET regNum='$registerNum',brand='$brand',picture='$vehicleImage',modelYear='$modelYear',airCondition='$airCondition',transmissionType='$transmissionType',Luggage='$luggage',passengers='$passengers',pricePerDay='$pricePerDay',freeMilage='$freeMileage',pricePerExtraKM='$priceExtra' where regNum= '$edit_id'";

        $run_staff = mysqli_query($conn, $updateVehicle);

        if ($run_staff) {
            echo "<script> alert('Vehicle details updated successfully ')</script>";
            echo "<script> window.open('index.php?viewVehicle ','_self')</script>";
        }
    }
    ?>

