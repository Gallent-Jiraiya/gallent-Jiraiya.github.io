<?php

if(isset($_GET['endRent'])){

$edit_id = $_GET['endRent'];

$get_pro = "select * from rent where rentID='$edit_id'";

$run_pro = mysqli_query($conn,$get_pro);
$row_pro = mysqli_fetch_array($run_pro);

$CustName = $row_pro['CustName'];
$customerNIC = $row_pro['customerNIC'];
$ConNum = $row_pro['ConNum'];
$vehicleRegNum = $row_pro['vehicleRegNum'];
$fromDate = $row_pro['fromDate'];
$toDate = $row_pro['toDate'];
$advancePayment = $row_pro['advancePayment'];
$startMilage = $row_pro['startMilage'];
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>End Rent</title>
  <link rel="stylesheet" href="css/formStyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">End Rent</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Customer Name</span>
            <input type="text" placeholder="Enter name" name="donor" value="<?php echo $CustName?>" required>
          </div>
          <div class="input-box">
            <span class="details">Customer NIC</span>
            <input type="text" placeholder="Enter NIC" name="nic" value="<?php echo $customerNIC?>" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" placeholder="Enter the contact number" name="contactNo" value="<?php echo $ConNum?>" required id="tele" onkeyup="checkTelNo()">
            <span id="output"></span>
          </div>
          <div class="input-box">
            <span class="details">Vehicle Registration No</span>
            <input type="text" placeholder="Enter vehicle registration no" name = "regNo" value="<?php echo $vehicleRegNum?>" required>
          </div>
          <div class="input-box">
            <span class="details">Start Date</span>
            <input type="date" name="startDate" id="" value="<?php echo $fromDate?>" required>
          </div>
          <div class="input-box">
            <span class="details">End Date</span>
            <input type="date" name="endDate" id="" value="<?php echo $toDate?>" required>
          </div>
          <div class="input-box">
            <span class="details">Start Mileage</span>
            <input type="text" placeholder="Enter Start Mileage" name="sMileage" value="<?php echo $startMilage?>" required>
          </div>
          <div class="input-box">
            <span class="details">End Mileage</span>
            <input type="text" placeholder="Enter End Mileage" name="eMileage" required>
          </div>
          <div class="input-box">
            <span class="details">Advance Payment</span>
            <input type="text" placeholder="Enter advance payment" name="advancePay" value="<?php echo $advancePayment?>" required>
          </div>
          <div class="input-box">
            <span class="details">Total Cost</span>
            <input type="text" placeholder="Enter Total Cost" name="totalCost" required>
          </div>
          <div class="input-box">
            <span class="details">Final Payment</span>
            <input type="text" placeholder="Enter Final Payment" name="finalPay" required>
          </div>
          <div class="input-box">
            <span class="details">Balance</span>
            <input type="text" placeholder="" name = "balance">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Confirm and Print" name="print">
        </div>
      </form>
    </div>
  </div>
</body>
<script>
  function checkTelNo() {
    let telNo = document.getElementById("tele").value;
    let output = document.getElementById("output");
    if(isNaN(parseInt(telNo))){
        //enters an illegal character
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
</script>
</html>