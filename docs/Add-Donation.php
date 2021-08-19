<!DOCTYPE html>
<?php
include("dbConnection.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$donorName = "";
$donorNameError=null;
$contactNo="";
$contactNoError=null;
$address ="";
$addressError=null;
$donationType="";
$donationTypeError=null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["donorName"])) {
        $donorNameError = "*Name is required";
      } 
    else {
        $donorName = test_input($_POST["donorName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$donorName)) {
            $fullNameError = "Only letters and white space allowed";
        }
     }

    
    if (empty($_POST["gender"])) {
        $genderErr = "*Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }

    if (empty($_POST["contactNo"])) {
        $contactNoError = "*Contact Number is required";
    } else if(strlen($_POST["contactNo"])==10){
        $contactNo = test_input($_POST["contactNo"]);
    }
    else{
        $contactNoError = "*A valid Contact Number is required";
    } 

    if(empty($_POST['address']))
    {
        $addressError="*Address is required";
        
    }
    else if( strlen($_POST['address'])<200 ) {
        $address=$_POST["address"];
    }
    else{
        $addressError="*Maximum character limit is 200";
    }
    
    if ($_POST["donationType"]=="0") {
        $donationTypeError = "*Select Donation Type";
      } else {
        $donationType = test_input($_POST["donationType"]);
      }
    if(is_null($donorNameError) && is_null($contactNoError) && is_null($addressError) && is_null($donationTypeError)){
        $date=new DateTime();
        $nowdate = $date->format('Y-m-d-H-i-s'); 
        $sql = "insert into donars (donarName,contactNo,Address,donationType,date)"
                . " values ('$donorName','$contactNo','$address','$donationType','$nowdate')";

        if ($conn->query($sql) === TRUE) {
            echo "<SCRIPT type='text/javascript'> 
            alert('New labor details recorded successfully');
            window.location.replace('View-Donars.php');
        </SCRIPT>";
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>
<html>
    <head>
        <title>Add Donation</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="css/frame.css">
        <script src="js/validate.js"></script>
    </head>
    <body>
    
        <div id="path">
            <p><i class="fas fa-tachometer-alt"></i> Donations / Add Donars</p>
        </div>
        <form id="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="form_title">
                <p><i class="far fa-money-bill-alt"></i>Add Donars</p>
            </div>
            <div id="form_body">
                <div class="group">
                    <label>Donar Name</label>
                    <input type="text" id="donorName" name="donorName">
                    <p id="fullNameWarn"><?php echo $donorNameError?></p>
                </div>
                <div class="group">
                    <label>Contact No</label>
                    <input type="number" id="contactNo" name="contactNo">
                    <p id="contactNoWarn"><?php echo $contactNoError?></p>
                </div>
                <div class="group">
                    <label>Address</label>
                    <input type="text" id="address" name="address">
                    <p id="addressWarn"><?php echo $addressError?></p>
                </div>
                <div class="group">
                    <label>Donation Type</label>
                    <select onclick="donation()" name="donationType" id="donationType">
                        <option value="0">-Select Donation type-</option>
                        <option  value="cash">Cash</option>
                        <option value="items">Items</option>
                        <option value="both">Both</option>
                    </select>
                    <p id="donationWarn"><?php echo $donationTypeError?></p>
                </div>
                <script>
                    function donation(){
                        var val=document.getElementById('donationType').value
                        if(val=='cash'){
                            document.getElementById('cashAmount').disabled=false;
                        }
                        else if(val=='items'){
                            document.getElementById('cashAmount').disabled=true;
                            document.getElementById('donationTable').contenteditable=false;
                        }
                        else if(val=='both'){
                            document.getElementById('cashAmount').disabled=false;
                        }
                        else{
                            document.getElementById('cashAmount').disabled=true;
                        }
                    }
                </script>

                <div class="group" >
                    <label>Donated Cash Amount</label>
                    <input disabled type="number" id="cashAmount" name="cashAmount">
                    <p id="cashAmountWarm"></p>
                </div>
                <div class="group" id="cashAmountbox">
                    <label>Donated Cash Amount</label>
                    <table id="donationTable">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr >
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr >
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr >
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                            </tr>
                        </tbody> 
                    </table>
                    <p id="cashAmountWarm"></p>
                </div>

                <div class="group">
                    <label></label>
                    <input type="submit" name="submit" value="Insert" >
                </div>

                </script>
                
            </div>
        </form>

        
    </body>
</html>