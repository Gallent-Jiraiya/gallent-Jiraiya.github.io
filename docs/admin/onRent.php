<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>On Rent</title>
  <link rel="stylesheet" href="css/tableStyle.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">On Rent</div>
    <div class="content">
    <table class="content-table">
        <thead>
            <tr>
                <th>Rent ID</th>
                <th>Name</th>
                <th>NIC</th>
                <th>Contact No</th>
                <th>Vehicle Registration No</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Start Mileage</th>
                <th>Advance Payment</th>
                <th>Calculate</th>
                <th>End Rent</th>
            </tr>
        </thead>
        <tbody>
        <?php

$i = 0;

$get_pro = "SELECT * FROM rent WHERE rentType='OnRent' ";

$run_pro = mysqli_query($conn,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    $rentID = $row_pro['rentID'];
    $CustName = $row_pro['CustName'];
    $customerNIC = $row_pro['customerNIC'];
    $ConNum = $row_pro['ConNum'];
    $vehicleRegNum = $row_pro['vehicleRegNum'];
    $fromDate = $row_pro['fromDate'];
    $toDate = $row_pro['toDate'];
    $startMilage = $row_pro['startMilage'];
    $advancePayment = $row_pro['advancePayment'];
    $id = $row_pro['rentID'];
$i++;
?>
<tr >

<!-- <td><?php echo $i; ?></td> -->

<td><?php echo $rentID; ?></td>
<td><?php echo $CustName; ?></td>
<td><?php echo $customerNIC; ?></td>
<td><?php echo $ConNum; ?></td>
<td><?php echo $vehicleRegNum; ?></td>
<td><?php echo $fromDate; ?></td>
<td><?php echo $toDate; ?></td>
<td><?php echo $startMilage; ?></td>
<td><?php echo $advancePayment; ?></td>
<td>
<a href="index.php?=<?php echo $id; ?>">
<i class="fas fa-calculator"></i>
</a>
</td>
<td>
<a href="index.php?endRent=<?php echo $id; ?>">
<i class="fas fa-check-square"></i>
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
