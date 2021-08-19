<!DOCTYPE html>
<?php
include("dbConnection.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$ID="";
$IDError=null;
$nameInitial="";
$nameInitialError=null;
$fullName = "";
$fullNameError=null;
$birthDate = "";
$birthDateError=null;
$gender ="";
$genderErr=null;

if(isset($_GET['id'])){
    $ID=$_GET['id'];
    $sql = "SELECT * FROM childdetails WHERE id='$ID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $nameInitial=$row['nameInitial'];
            $fullName=$row['fullName'];
            $birthDate=$row['birthdate'];
            $gender=$row['gender'];
            
        }
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])) {
        $IDError = "*ID is required";
    }
    else{
         $ID= test_input($_POST["id"]);
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
        
    
    if(is_null($birthDateError) && is_null($fullNameError) && is_null($genderErr) && is_null($nameInitialError)){
    $sql = "UPDATE childdetails SET nameInitial='$nameInitial',fullName='$fullName',gender='$gender',birthdate='$birthDate' WHERE id='$ID'";

        if ($conn->query($sql) === TRUE) {
            echo "<SCRIPT type='text/javascript'> 
            alert('Child details Updated successfully');
            window.location.replace('View-Child.php');
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
        <title>Add Child</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="css/frame.css">
        <script src="js/validate.js"></script>
    </head>
    <body>
        <div id="path">
            <p><i class="fas fa-tachometer-alt"></i> Child / Edit Child</p>
        </div>
        <form id="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="form_title">
                <p><i class="far fa-money-bill-alt"></i>Edit Child</p>
            </div>
            <div id="form_body">
            <div class="group">
                    <label>ID</label>
                    <input readonly type="text" id="id" name="id" value="<?php echo $ID ;?>">
                    <p id="idWarn"><?php echo $IDError; ?></p>
                </div>
                <div class="group">
                    <label>Name with Initials</label>
                    <input type="text" id="nameInitial" name="nameInitial"  value="<?php echo $nameInitial; ?>">
                    <p id="nameInitialWarn"><?php echo $nameInitialError; ?></p>
                </div>
                <div class="group">
                    <label>Full Name</label>
                    <input type="text" id="fullName" name="fullName"  value="<?php echo $fullName; ?>">
                    <p id="fullNameWarn"><?php echo $fullNameError; ?></p>
                </div>
                <div class="group">
                    <label>Birth Date</label>
                    <input type="date" id="birthDate" name="birthDate"  value="<?php echo $birthDate; ?>">
                    <p id="birthDateWarn"><?php echo $birthDateError; ?></p>
                </div>
                <div class="group">
                    <label>Gender</label>
                    <div>
                    <input type="radio" id="male" name="gender" value="Male"><label for="Male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female"><label for="Female">Fe-Male</label>
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
                    <label></label>
                    <input id="insrt" type="submit" name="submit" value="Update" >
                </div>
            </div>
        </div>
    </body>
</html>