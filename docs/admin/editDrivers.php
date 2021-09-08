<?php

if(isset($_GET['editDriver'])){

$edit_id = $_GET['editDriver'];

$get_pro = "select * from driver where NIC='$edit_id'";

$run_pro = mysqli_query($conn,$get_pro);
$row_pro = mysqli_fetch_array($run_pro);

$fName = $row_pro['fName'];
$lName = $row_pro['lName'];
$NIC = $row_pro['NIC'];
$d_Licence = $row_pro['d_Licence'];
$contactNo = $row_pro['contactNo'];
$address = $row_pro['address'];
$email = $row_pro['email'];
$age = $row_pro['age'];
$chargePerDay = $row_pro['chargePerDay'];
$id = $row_pro['NIC'];
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Edit Drivers</title>
  <link rel="stylesheet" href="css/formStyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container addStaffCSS">
    <div class="title">Edit Driver Details</div>
    <div class="content">
      <form action=""method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter first name" name="firstName" value="<?php echo $fName?>" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter last name" name="lastName" value="<?php echo $lName?>" required>
          </div>
          <div class="input-box">
            <span class="details">NIC</span>
            <input type="text" placeholder="Enter NIC" name="nic" value="<?php echo $NIC?>" required id="nic" onkeyup="checkNIC()">
            <span id="output"></span>
          </div>
          <div class="input-box">
            <span class="details">Driving Licence</span>
            <input type="text" placeholder="Enter licence number" name="licenceNo" value="<?php echo $d_Licence?>" required >
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" placeholder="Enter contact number" name="contactNo" value="<?php echo $contactNo?>" required id="tele" onkeyup="checkTelNo()">
            <span id="outputCN"></span>
          </div>
          <div class="input-box">
            <span class="details">Permanent Address</span>
            <input type="text" placeholder="Enter address" name="address" value="<?php echo $address?>" required>
          </div>
          <div id="email" class="input-box">
            <span class="details">Email Address</span>
            <input type="text" placeholder="Enter email address" name="email" value="<?php echo $email?>" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" placeholder="Enter age" name="age" value="<?php echo $age?>" required>
          </div>
          <div class="input-box">
            <span class="details">Charge Per Day</span>
            <input type="text" placeholder="Enter charge per day" name="chargePerDay" value="<?php echo $chargePerDay?>" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Update" name="editDriver">
        </div>
      </form>
    </div>
  </div>

</body>
<script>
  function checkTelNo() {
    let telNo = document.getElementById("tele").value;
    let output = document.getElementById("outputCN");
    if(isNaN(parseInt(telNo))){
        output.style.color = "red";
        output.textContent = "Telephone numbers don't have letters!"
    }
    else{
        if (telNo.length < 10) {
            output.style.color = "red";
            output.textContent = "Please provide a valid number!"
        }
        else if(telNo.length > 10){
            let initTen = telNo.slice(0, 10);
            output.style.color = "red";
            output.textContent = "Maximum length should be 10!"
            telNo.textContent = initTen;
        }
        else{
            output.style.color = "green";
            output.textContent = "Valid number"
        }
    }
}

function checkNIC() {
    let NIC = document.getElementById("nic").value;
    let output = document.getElementById("output");
    if(isNaN(parseInt(NIC))){
        //enters an illegal character
        output.style.color = "red";
        output.textContent = "Type correct NIC!"
    }
    else{
        if (NIC.length < 10) {
            output.style.color = "red";
            output.textContent = "Please provide a NIC!"
        }
        else if(NIC.length > 10){
            let initTen = NIC.slice(0, 10);
            output.style.color = "red";
            output.textContent = "Maximum length should be 10!"
            NIC.textContent = initTen;
        }
        else{
            output.style.color = "green";
            output.textContent = "Valid NIC!"
        }
    }
}

</script>
</html>

<?php
    if (isset($_POST['editDriver'])) {

      $fName = $_POST['firstName'];
      $lName = $_POST['lastName'];
      $NIC = $_POST['nic'];
      $d_Licence = $_POST['licenceNo'];
      $contactNo = $_POST['contactNo'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $chargePerDay = $_POST['chargePerDay'];

        $insertDriver = "UPDATE driver SET fName ='$fName',lName ='$lName',NIC='$NIC',d_Licence='$d_Licence', contactNo ='$contactNo',address ='$address',email ='$email',age='$age',chargePerDay ='$chargePerDay' where NIC= '$edit_id'";
             

        $run_Driver = mysqli_query($conn, $insertDriver);

        if ($run_Driver) {
            echo "<script> alert('Driver details updated successfully ')</script>";
            echo "<script> window.open('index.php?viewDriver ','_self')</script>";
        }
    }
    ?>