<?php

if(isset($_GET['editStaff'])){

$edit_id = $_GET['editStaff'];

$get_pro = "select * from staff where NIC='$edit_id'";

$run_pro = mysqli_query($conn,$get_pro);
$row_pro = mysqli_fetch_array($run_pro);

$fName = $row_pro['fName'];
$lName = $row_pro['lName'];
$NIC = $row_pro['NIC'];
$picture = $row_pro['picture'];
$contactNo = $row_pro['contactNo'];
$address = $row_pro['address'];
$email = $row_pro['email'];
$userName = $row_pro['userName'];
$password = $row_pro['password'];
$type = $row_pro['type'];
$id = $row_pro['NIC'];
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Update Staff </title>
  <link rel="stylesheet" href="css/formStyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container addStaffCSS">
    <div class="title">Update Staff Details</div>
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
            <span class="details">Contact Number</span>
            <input type="text" placeholder="Enter contact number" name="contactNo" value="<?php echo $contactNo?>" required id="tele" onkeyup="checkTelNo()">
            <span id="outputCN"></span>
          </div>
          <div class="input-box">
            <span class="details">Permanent Address</span>
            <input type="text" placeholder="Enter address" name="address_staff" value="<?php echo $address?>" required>
          </div>
          <div class="input-box">
            <span class="details">Post</span>
            <select name="post" id="post" value="<?php echo $type?>" required>
              <option value="Admin">Admin</option>
              <option value="Cashier">Cashier</option>
            </select>
          </div>
          <div id="email" class="input-box">
            <span class="details">Email Address</span>
            <input type="text" placeholder="Enter email address" name="email" value="<?php echo $email?>" required>
          </div>
          <div id="image" class="input-box">
            <span class="details">Employee Image</span>
            <input type="file" name="uploadImage" id="uploadImage" value="<?php echo $picture?>"  accept="image/png, image/jpeg">
          </div>
          <div id="username" class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter username" name="username" value="<?php echo $userName?>" required>
          </div>
          <div id="password" class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter password" name="password" value="<?php echo $password?>" required>
          </div>

        </div>
        <div class="button">
          <input type="submit" value="Update" name="editStaff">
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
    if (isset($_POST['editStaff'])) {

      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $nic = $_POST['nic'];
      $contactNo = $_POST['contactNo'];
      $address_staff = $_POST['address_staff'];
      $email = $_POST['email'];
      $post = $_POST['post'];
      $uploadImage = $_POST['uploadImage'];
      $username = $_POST['username'];
      $password = $_POST['password'];

        $insertStaff = "UPDATE staff SET fName ='$firstName',lName ='$lastName',NIC='$nic', contactNo ='$contactNo',address ='$address_staff',email ='$email',type='$post',userName ='$username',password ='$password' where NIC= '$edit_id'";
             

        $run_staff = mysqli_query($conn, $insertStaff);

        if ($run_staff) {
            echo "<script> alert('Staff details updated successfully ')</script>";
            echo "<script> window.open('index.php?viewStaff ','_self')</script>";
        }
    }
    ?>





        
