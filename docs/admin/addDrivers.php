<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Add Drivers </title>
  <link rel="stylesheet" href="css/formStyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container addStaffCSS">
    <div class="title">Add Drivers</div>
    <div class="content">
      <form action=""method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter first name" name="firstName" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter last name" name="lastName" required>
          </div>
          <div class="input-box">
            <span class="details">NIC</span>
            <input type="text" placeholder="Enter NIC" name="nic" required id="nic" onkeyup="checkNIC()">
            <span id="output"></span>
          </div>
          <div class="input-box">
            <span class="details">Driving Licence</span>
            <input type="text" placeholder="Enter licence number" name="licenceNo" required >
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" placeholder="Enter contact number" name="contactNo" required id="tele" onkeyup="checkTelNo()">
            <span id="outputCN"></span>
          </div>
          <div class="input-box">
            <span class="details">Permanent Address</span>
            <input type="text" placeholder="Enter address" name="address" required>
          </div>
          <div id="email" class="input-box">
            <span class="details">Email Address</span>
            <input type="text" placeholder="Enter email address" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" placeholder="Enter age" name="age" required>
          </div>
          <div class="input-box">
            <span class="details">Charge Per Day</span>
            <input type="text" placeholder="Enter charge per day" name="chargePerDay" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Add" name="addDriver">
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

if (isset($_POST['addDriver'])) {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $nic = $_POST['nic'];
  $licenceNo = $_POST['licenceNo'];
  $contactNo = $_POST['contactNo'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $chargePerDay = $_POST['chargePerDay'];

  $insertdriver = "INSERT INTO driver(fName,lName,NIC,d_Licence,contactNo,address,email,age,chargePerDay)" . "VALUES ('$firstName', '$lastName', '$nic', '$contactNo', '$licenceNo', '$address', '$email', '$age', '$chargePerDay')";

  $rundriver= mysqli_query($conn, $insertdriver);

  if ($rundriver) {
    echo "<script> alert('Driver Added Successfully ')</script>";
    echo "<script> window.open('index.php?addDriver ','_self')</script>";
}
}
  

?>