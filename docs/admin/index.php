<?php
session_start();
include("includes/database.php");
if(!isset($_SESSION['userName'])){
echo "<script>window.open('login.php','_self')</script>";
}

else {

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Carsons </title>
  <link rel="stylesheet" href="css/sideBarStyle.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="sidebar ">
    <div class="logo-details">
      <img class="logo_img" src="img/Carsons Logo white.png" alt="Logo">
      <!-- <i class='bx bxs-home-heart'></i>
      <span class="logo_name">Carsons</span> -->
    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php?overview">
        <i class="fas fa-list-alt"></i>
          <span class="link_name">Overview</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Overview</a></li>
        </ul>
      </li>
      <li>
        <a href="index.php?search">
        <i class="fas fa-search"></i>
          <span class="link_name">Search</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Search</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
          <i class="fas fa-taxi"></i>
            <span class="link_name">Rent</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Rent</a></li>
          <li><a href="index.php?onRent">On Rent</a></li>
          <li><a href="index.php?reservations">Reservations</a></li>
          <li><a href="index.php?completed">Completed</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
          <i class="fas fa-users"></i>
            <span class="link_name">Staff</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Staff</a></li>
          <li><a href="index.php?addStaff">Add Staff</a></li>
          <li><a href="index.php?viewStaff">View Staff</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
          <i class="fas fa-car"></i>
            <span class="link_name">Vehicles</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Vehicles</a></li>
          <li><a href="index.php?addVehicle">Add Vehicles</a></li>
          <li><a href="index.php?viewVehicle">View Vehicles</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
          <i class="fas fa-user-friends"></i>
            <span class="link_name">Drivers</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Search</a></li>
          <li><a href="index.php?addDriver">Add Drivers</a></li>
          <li><a href="index.php?viewDriver">View Drivers</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="img/Salila.jpg" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name"><?php echo $_SESSION["userName"]; ?></div>
            <!-- <div class="job"></div> -->
          </div>
          <a href="logout.php">
          <i class='bx bx-log-out'></i>
          </a>
          
        </div>
      </li>
    </ul>
  </div>

  <script src="js/sideBarScript.js"></script>


  <?php 

  if(isset($_GET['overview'])){

  include("overview.php");
  
  }
  if(isset($_GET['search'])) {
    include('search.php');
  }

  if(isset($_GET['addStaff'])) {
    include('addStaff.php');
  }

  if(isset($_GET['viewStaff'])) {
    include('viewStaff.php');
  }
  if(isset($_GET['deleteStaff'])) {
    include('deleteStaff.php');
  }
  if(isset($_GET['editStaff'])) {
    include('editStaff.php');
  }
  
  if(isset($_GET['addVehicle'])) {
    include('addVehicle.php');
  }

  if(isset($_GET['viewVehicle'])) {
    include('viewVehicle.php');
  }

  if(isset($_GET['deleteVehicle'])) {
    include('deleteVehicle.php');
  }

  if(isset($_GET['editVehicle'])) {
    include('editVehicle.php');
  }

  if(isset($_GET['onRent'])) {
    include('onRent.php');
  }
  if(isset($_GET['endRent'])) {
    include('endRent.php');
  }

  if(isset($_GET['reservations'])) {
    include('reservations.php');
  }
  if(isset($_GET['cancelReservation'])) {
    include('cancelReservation.php');
  }
  if(isset($_GET['completed'])) {
    include('completed.php');
  }
  if(isset($_GET['addDriver'])) {
    include('addDrivers.php');
  }
  if(isset($_GET['viewDriver'])) {
    include('viewDrivers.php');
  }
  if(isset($_GET['deleteDriver'])) {
    include('deleteDrivers.php');
  }
  if(isset($_GET['editDriver'])) {
    include('editDrivers.php');
  }
  ?>

</body>

</html>


<?php } ?>