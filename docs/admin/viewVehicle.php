<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> View Vehicle</title>
  <link rel="stylesheet" href="css/tableStyle.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container vehicleCSS">
    <div class="title">View Vehicle</div>
    <div class="content">
    <table class="content-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Register Number</th>
                <th>Brand</th>
                <th>Picture</th>
                <th>Model Year</th>
                <th>Air Condition</th>
                <th>Transmission Type</th>
                <th>Luggage</th>
                <th>Passengers</th>
                <th>Price Per Day</th>
                <th>Free Mileage</th>
                <th>Price Per Extra KM</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php

$i = 0;

$get_pro = "select * from vehicle";

$run_pro = mysqli_query($conn,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
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
$i++;
?>
<tr >

<td><?php echo $i; ?></td>

<td><?php echo $regNum; ?></td>
<td><?php echo $brand; ?></td>
<td><?php echo $picture; ?></td>
<td><?php echo $modelYear; ?></td>
<td><?php echo $airCondition; ?></td>
<td><?php echo $transmissionType; ?></td>
<td><?php echo $Luggage; ?></td>
<td><?php echo $passengers; ?></td>
<td><?php echo $pricePerDay; ?></td>
<td><?php echo $freeMilage; ?></td>
<td><?php echo $pricePerExtraKM; ?></td>
<td>
<a href="index.php?editVehicle=<?php echo $id; ?>">
<i class="fas fa-edit"></i>
</a>
</td>
<td>
<a href="index.php?deleteVehicle=<?php echo $id; ?>">
<i class="fas fa-trash-alt delete"></i>
</a>
</td>
</tr>

<?php } ?>


        </tbody>
    </table>

    </div>
  </div>

</body>

</html>
