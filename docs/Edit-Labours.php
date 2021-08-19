<!DOCTYPE html>
<?php
include("dbConnection.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$laborID="";
$labourIdError=null;
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
if(isset($_GET['laborId'])){
    $laborID=$_GET['laborId'];
    $sql = "SELECT * FROM labor WHERE laborId='$laborID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $nameInitial=$row['nameInitial'];
            $fullName=$row['fullName'];
            $birthDate=$row['birthdate'];
            $contactNo=$row['contact'];
            $hireCompany=$row['company'];
            $salary=$row['salary'];
            $gender=$row['gender'];
            /*/*
            */
        }
    }
    /**/
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["labourId"])) {
        $labourIdError = "*Labour ID is required";
    }
    else{
         $laborID= test_input($_POST["labourId"]);
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

    $sql = "UPDATE labor SET nameInitial='$nameInitial',fullName='$fullName',gender='$gender',birthdate='$birthDate',contact='$contactNo',company='$hireCompany',salary='$salary' WHERE laborId='$laborID'";

        if ($conn->query($sql) === TRUE) {
            echo "<SCRIPT type='text/javascript'> 
            alert('Labor details Updated successfully');
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
        <script src="js/validate.js">
        
    </script>
    </head>
    <body>
        
        <div id="path">
            <p><i class="fas fa-tachometer-alt"></i> Child / Edit Labor</p>
        </div>
        <form id="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="form_title">
                <p><i class="far fa-money-bill-alt"></i>Edit Labor</p>
            </div>
            <div id="form_body">
            <div class="group">
                    <label>Labour ID</label>
                    <input readonly type="text" id="labourId" name="labourId" value="<?php echo $laborID; ?>">
                    <p id="labourIdWarn"><?php echo $labourIdError; ?></p>
                </div>
                <div class="group">
                    <label>Name with Initials</label>
                    <input type="text" id="nameInitial" name="nameInitial" value="<?php echo $nameInitial; ?>">
                    <p id="nameInitialWarn"><?php echo $nameInitialError; ?></p>
                </div>
                <div class="group">
                    <label>Full Name</label>
                    <input type="text" id="fullName" name="fullName" value="<?php echo $fullName; ?>">
                    <p id="fullNameWarn"><?php echo $fullNameError; ?></p>
                </div>
                
                <div class="group">
                    <label>Birth Date</label>
                    <input type="date" id="birthDate" name="birthDate" value="<?php echo $birthDate; ?>">
                    <p id="birthDateWarn"><?php echo $birthDateError; ?></p>
                </div>
                <div class="group">
                    <label>Contact No</label>
                    <input type="number" id="contactNo" name="contactNo" value="<?php echo $contactNo; ?>">
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
                <?php
            if($gender=='Male'){
                echo '<script>
                document.getElementById("male").checked=true;
                </script>';
            }
            else{
                echo '<script>
                document.getElementById("female").checked=true;
                </script>';
            }
        ?>
                <div class="group">
                    <label>Name of Hiring Company</label>
                    <select name="hireCompany" id="hireCompany">
                        <option value="0">--Select Company--</option>
                        <option value="sunshine">Sunshine</option>
                        <option value="moonlight">MoonLight</option>
                    </select>
                    <p id="hireCompanyWarn"><?php echo $hireCompanyError; ?></p>
                </div>
                <?php
                if($hireCompany=='sunshine'){
                    echo "<script>
                    document.getElementById('hireCompany').value='sunshine';
                    </script>";
                }
                if($hireCompany=='moonlight'){
                    echo "<script>
                    document.getElementById('hireCompany').value='moonlight';
                    </script>";
                }
                ?>
                <div class="group">
                    <label>Salary</label>
                    <input type="number" id="salary" name="salary" value="<?php echo $salary; ?>">
                    <p id="salaryNoWarn"><?php echo $salaryError; ?></p>
                </div>
                <div class="group">
                    <label></label>
                    <input type="submit" name="submit" value="Update" >
                </div>
                
            </div>
        </div>
    </body>
</html>