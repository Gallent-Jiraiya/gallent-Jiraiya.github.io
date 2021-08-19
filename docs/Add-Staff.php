<!DOCTYPE html>
<?php
include("dbConnection.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$nameInitial="";
$nameInitialError=null;
$fullName = "";
$fullNameError=null;
$birthDate = "";
$birthDateError=null;
$NIC="";
$NICError=null;
$contactNo="";
$contactNoError=null;
$gender ="";
$genderErr=null;
$address="";
$addressError=null;
$eMail="";
$eMailError=null;
$post="";
$postError=null;
$username="";
$usernameError=null;
$password="";
$passwordError=null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameError = "*User Name is required";
      } 
    else {
        $username = test_input($_POST["username"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fullName)) {
            $usernameError = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["password"])) {
        $passwordError = "*Password is required";
      } 
    else {
        $password = test_input($_POST["password"]);
    }

    if(empty($_POST['nic']))
    {
        $NICError="*NIC Number is required";
        
    }
    else if( strlen($_POST['nic'])==10 || strlen($_POST['nic'])==12 ) {
        $NIC=$_POST["nic"];
    }
    else{
        $NICError="*Enter Valid NIC Number";
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

    if (empty($_POST["eMail"])) {
        $eMailError = "Email is required";
      } else {
        $eMail = test_input($_POST["eMail"]);
        // check if e-mail address is well-formed
        if (!filter_var($eMail, FILTER_VALIDATE_EMAIL)) {
          $eMailError = "Invalid email format";
        }
      }
    if (empty($_POST["nameInitial"])) {
        $nameInitialError = "*Name with Initials is required";
      } 
    else {
        $nameInitial = test_input($_POST["nameInitial"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nameInitial)) {
            $nameInitialError = "Only letters and white space allowed";
        }
     }

    if (empty($_POST["fullName"])) {
        $fullNameError = "*Name is required";
      } 
    else {
        $fullName = test_input($_POST["fullName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fullName)) {
            $fullNameError = "Only letters and white space allowed";
        }
     }
    
    if(empty($_POST['birthDate']))
    {
        $birthDateError="*Birth Date is required";
        
    }
    else{
        $birthDate=$_POST["birthDate"];
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
    
    if ($_POST["post"]=="0") {
        $postError = "*Select Post";
      } else {
        $post = test_input($_POST["post"]);
      }
    if(is_null($birthDateError) && is_null($fullNameError) && is_null($genderErr)
     && is_null($nameInitialError) && is_null($contactNoError) && is_null($postError)
      && is_null($NICError) && is_null($addressError) && is_null($eMailError)
       && is_null($usernameError) && is_null($passwordError)){
        $sql = "insert into staff (nameInitial,fullName,gender,birthdate,ContactNo,nic,Address,eMail,post,username,password)"
                . " values ('$nameInitial','$fullName','$gender','$birthDate','$contactNo','$NIC','$address','$eMail','$post','$username','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<SCRIPT type='text/javascript'> 
            alert('New Staff Member details recorded successfully');
            window.location.replace('View-Staff.php');
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
        <title>Add Labor</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="css/frame.css">
        <script src="js/validate.js"></script>
    </head>
    <body>
        <div id="path">
            <p><i class="fas fa-tachometer-alt"></i> Child / Add Staff</p>
        </div>
        <form id="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="form_title">
                <p><i class="far fa-money-bill-alt"></i>Add Staff</p>
            </div>
            <div id="form_body">
                
                <div class="group">
                    <label>Name with Initials</label>
                    <input type="text" id="nameInitial" name="nameInitial">
                    <p id="nameInitialWarn"><?php echo $nameInitialError ?></p>
                </div>
                <div class="group">
                    <label>Full Name</label>
                    <input type="text" id="fullName" name="fullName">
                    <p id="fullNameWarn"><?php echo $fullNameError ?></p>
                </div>
                <div class="group">
                    <label>Birth Date</label>
                    <input type="date" id="birthDate" name="birthDate">
                    <p id="birthDateWarn"><?php echo $birthDateError ?></p>
                </div>
                <div class="group">
                    <label>NIC</label>
                    <input type="text" id="nic" name="nic">
                    <p id="nicWarn"><?php echo $NICError ?></p>
                </div>
                <div class="group">
                    <label>Gender</label>
                    <div>
                    <input type="radio" id="male" name="gender" value="Male">
                      <label for="Male">Male</label>
                      <input type="radio" id="female" name="gender" value="Female">
                      <label for="Female">Fe-Male</label>
                    </div>
                    <p id="genderWarn"><?php echo $genderErr ?></p>
                </div>
                <div class="group">
                    <label>Contact No</label>
                    <input type="number" id="contactNo" name="contactNo">
                    <p id="contactNoWarn"><?php echo $contactNoError; ?></p>
                </div>
                <div class="group">
                    <label>Address</label>
                    <input type="text" id="address" name="address">
                    <p id="addressWarn"><?php echo $addressError ?></p>
                </div>
                <div class="group">
                    <label>Email Address</Address></label>
                    <input type="text" id="eMail" name="eMail">
                    <p id="eMailWarn"><?php echo $eMailError ?></p>
                </div>
                <div class="group">
                    <label>Post</label>
                    <select name="post" id="post">
                        <option value="0">--Select Post--</option>
                        <option value="admin">Admin</option>
                        <option value="principal">Principal</option>
                        <option value="matron">Matron</option>
                    </select>
                    <p id="postWarn"><?php echo $postError ?></p>
                </div>
                <div class="group">
                    <label>User Name</label>
                    <input type="text" id="username" name="username">
                    <p id="usernameWarn"><?php echo $usernameError ?></p>
                </div>
                <div class="group">
                    <label>Password</label>
                    <input type="text" id="password" name="password">
                    <p id="passwordWarn"><?php echo $passwordError ?></p>
                </div>
                <div class="group">
                    <label></label>
                    <input type="submit" name="submit" value="Insert" >
                </div>
            </div>
        </div>
    </body>
</html>