<!DOCTYPE html>
<meta charset="UTF-8">
<title> Add Vehicles </title>
<link rel="stylesheet" href="css/formStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Add Vehicles</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Register Number</span>
            <input type="text" placeholder="Enter register Number" name="registerNum" required>
          </div>
          <div class="input-box">
            <span class="details">Brand</span>
            <input type="text" placeholder="Enter brand" name="brand" required>
          </div>
          <div class="input-box">
            <span class="details">Vehicle Image</span>
            <input type="file" name="vehicleImage" id="vehicleImage"   accept="image/png, image/jpeg">
          </div>
          <div class="input-box">
            <span class="details">Model Year</span>
            <input type="text" placeholder="Model Year" name="modelYear" id="" required>
          </div>
          <div class="input-box">
            <span class="details">Air Condition</span>
            <input type="text" placeholder="Air Condition" name="airCondition" id="" required>
          </div>
          <div class="input-box">
            <span class="details">Transmission Type</span>
            <select name="transmissionType" id="transmissionType" required>
              <option value="Auto">Auto</option>
              <option value="Manual">Manual</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Luggage</span>
            <input type="text" placeholder="Luggage" name="luggage" id="" required>
          </div>
          <div class="input-box">
            <span class="details">No. of Passengers</span>
            <input type="text" placeholder="Passengers" name="passengers" id="" required>
          </div>
          <div class="input-box">
            <span class="details">Price Per Day</span>
            <input type="text" placeholder="Price per day" name="pricePerDay" id="" required>
          </div>
          <div class="input-box">
            <span class="details">Free Mileage</span>
            <input type="text" placeholder="Free mileage" name="freeMileage" id="" required>
          </div>
          <div class="input-box">
            <span class="details">Price Per Extra KM</span>
            <input type="text" placeholder="Price per extra KM" name="priceExtra" id="" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Add" name="addVehicle">
        </div>
      </form>
    </div>
  </div>

</body>

</html>

<?php 

if (isset($_POST['addVehicle'])) {
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

  $addVehicle = "INSERT INTO vehicle(regNum,brand,picture,modelYear,airCondition,transmissionType,Luggage,passengers,pricePerDay,freeMilage,pricePerExtraKM)" . "VALUES ('$registerNum', '$brand', '$vehicleImage', '$modelYear', '$airCondition', '$transmissionType', '$luggage', '$passengers', '$pricePerDay', '$freeMileage', '$priceExtra' )";

  $runVehicle = mysqli_query($conn, $addVehicle);

  if ($runVehicle) {
    echo "<script> alert('Vehicle Added Successfully ')</script>";
    echo "<script> window.open('index.php?addVehicle ','_self')</script>";
}
}

?>