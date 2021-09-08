<?php 
$get_vehicle = "select count(regNum) from vehicle ";
$run_vehicle = mysqli_query($conn,$get_vehicle);
$row_vehicle=mysqli_fetch_array($run_vehicle);
$allvehicle = $row_vehicle['count(regNum)'];

$get_onRent = "select count(rentID) from rent WHERE rentType='OnRent'";
$run_onRent = mysqli_query($conn,$get_onRent);
$row_onRent=mysqli_fetch_array($run_onRent);
$allonRent = $row_onRent['count(rentID)'];

$get_driver = "select count(NIC) from driver ";
$run_driver = mysqli_query($conn,$get_driver);
$row_driver=mysqli_fetch_array($run_driver);
$alldriver = $row_driver['count(NIC)'];


?>



<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title> Overview </title>
  <link rel="stylesheet" href="css/overviewStyle.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container overviewCSS">
  <div class="home-content">
    <div class="overview-boxes">
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Vehicles</div>
          <div class="number"><?php echo $allvehicle ?></div>
          <div class="indicator">
          <a href="#" style="text-decoration:none;" >
          <i class='bx bx-right-arrow-alt'></i>
            <span class="text">View Details</span>
            </a>
          </div>
        </div>
        <i class="fas fa-money-check-alt cart"></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total On Rent</div>
          <div class="number"><?php echo $allonRent ?></div>
          <div class="indicator">
          <a href="#" style="text-decoration:none;" >
          <i class='bx bx-right-arrow-alt'></i>
            <span class="text">View Details</span>
          </a>
          </div>
        </div>
        <i class="fas fa-child cart two"></i>
      </div>
      <!-- <div class="box">
        <div class="right-side">
          <div class="box-topic">Staff Details</div>
          <div class="number"><?php echo $allstaff ?></div>
          <div class="indicator">
          <a href="index.php?viewStaff" style="text-decoration:none;" >
          <i class='bx bx-right-arrow-alt'></i>
            <span class="text">View Details</span>
          </a>
          </div>
        </div>
        <i class="fas fa-id-card cart three"></i>
      </div> -->
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Drivers</div>
          <div class="number"><?php echo $alldriver ?></div>
          <div class="indicator">
            <a href="#" style="text-decoration:none;" >
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text">View Details</span>
            </a>
          </div>
        </div>
        <i class="fas fa-people-carry cart four"></i>
      </div>
    </div>
    </div>
    <!-- <div class="title">Cash Donation Details</div> -->
  <!-- <table class="content-table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Amount</th>
      <th>Contact No</th>
      <th>Date</th>
    </tr>
  </thead>
    <?php
  $get_order = "select * from donars WHERE donationType='Cash' order by date DESC limit 5";
  $run_order = mysqli_query($conn,$get_order);
  
  while($row_order=mysqli_fetch_array($run_order)){
  $id = $row_order['donarId'];
  $name = $row_order['donarName'];
  
  $contact = $row_order['contactNo'];
  
  $address = $row_order['Address'];
  $date = $row_order['date'];
  $amount = $row_order['donationAmount'];
  ?>
  <tbody>
  
  
    <tr>
      <td><?php echo $name?></td>
      <td><?php echo $amount?></td>
      <td><?php echo $contact?></td>
      <td><?php echo substr($date, 0,10) ?></td>
    </tr>
  
  <?php }?>
  </tbody>
  
  
  </table> -->
  
  </div>
  
  
  
  
  
  
  
  </div>
  
</body>

</html>