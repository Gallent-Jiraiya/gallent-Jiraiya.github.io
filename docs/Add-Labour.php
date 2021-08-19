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
$contactNo="";
$contactNoError=null;
$gender ="";
$genderErr=null;
$hireCompany="";
$hireCompanyError=null;
$salary="";
$salaryError=null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

     if (empty($_POST["salary"])) {
        $salaryError = "*Salary is required";
    }
    else{
        $salary = test_input($_POST["salary"]);
    }  
    
    if ($_POST["hireCompany"]=="0") {
        $hireCompanyError = "*Select Company";
      } else {
        $hireCompany = test_input($_POST["hireCompany"]);
      }
    if(is_null($birthDateError) && is_null($fullNameError) && is_null($genderErr) && is_null($nameInitialError) && is_null($contactNoError) && is_null($hireCompanyError) && is_null(($salaryError))){
        $sql = "insert into labor (nameInitial,fullName,gender,birthdate,contact,company,salary)"
                . " values ('$nameInitial','$fullName','$gender','$birthDate','$contactNo','$hireCompany','$salary')";

        if ($conn->query($sql) === TRUE) {
            echo "<SCRIPT type='text/javascript'> 
            alert('New labor details recorded successfully');
            window.location.replace('View-Labours.php');
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
            <p><i class="fas fa-tachometer-alt"></i> Child / Add Labor</p>
        </div>
        <form id="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="form_title">
                <p><i class="far fa-money-bill-alt"></i>Add Labor</p>
            </div>
            <div id="form_body">
                <div class="group">
                    <label>Name with Initials</label>
                    <input type="text" id="nameInitial" name="nameInitial">
                    <p id="nameInitialWarn"><?php echo $nameInitialError; ?></p>
                </div>
                <div class="group">
                    <label>Full Name</label>
                    <input type="text" id="fullName" name="fullName">
                    <p id="fullNameWarn"><?php echo $fullNameError; ?></p>
                </div>
                
                <div class="group">
                    <label>Birth Date</label>
                    <input type="date" id="birthDate" name="birthDate">
                    <p id="birthDateWarn"><?php echo $birthDateError; ?></p>
                </div>
                <div class="group">
                    <label>Contact No</label>
                    <input type="number" id="contactNo" name="contactNo">
                    <p id="contactNoWarn"><?php echo $contactNoError; ?></p>
                </div>
                
                <div class="group">
                    <label>Gender</label>
                    <div>
                    <input type="radio" id="male" name="gender" value="Male">
                      <label for="Male">Male</label>
                      <input type="radio" id="female" name="gender" value="Female">
                      <label for="Female">Fe-Male</label>
                    </div>
                    <p id="genderWarn"><?php echo $genderErr; ?></p>
                </div>
                <div class="group">
                    <label>Name of Hiring Company</label>
                    <select name="hireCompany" id="hireCompany">
                        <option value="0">--Select Company--</option>
                        <option value="sunshine">Sunshine</option>
                        <option value="moonlight">MoonLight</option>
                    </select>
                    <p id="hireCompanyWarn"><?php echo $hireCompanyError; ?></p>
                </div>
                <div class="group">
                    <label>Salary</label>
                    <input type="number" id="salary" name="salary">
                    <p id="salaryNoWarn"><?php echo $salaryError; ?></p>
                </div>
                <div class="group">
                    <label></label>
                    <input type="submit" name="submit" value="Insert" >
                </div>
                
            </div>
        </div>
    </body>
</html>