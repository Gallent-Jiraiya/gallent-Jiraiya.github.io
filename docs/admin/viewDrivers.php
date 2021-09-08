<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Driver Details</title>
  <link rel="stylesheet" href="css/tableStyle.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container staff">
    <div class="title">Driver Details</div>
    <div class="content">
    <table class="content-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>NIC</th>
                <th>Licence No</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>Email</th>
                <th>Age</th>
                <th>Charge Per Day</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php

$i = 0;

$get_pro = "select * from driver";

$run_pro = mysqli_query($conn,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    $firstName = $row_pro['fName'];
    $nic = $row_pro['NIC'];
    $d_Licence = $row_pro['d_Licence'];
    $contactNo = $row_pro['contactNo'];
    $address = $row_pro['address'];
    $email = $row_pro['email'];
    $age = $row_pro['age'];
    $chargePerDay = $row_pro['chargePerDay'];
    $id = $row_pro['NIC'];
$i++;
?>
<tr >

<td><?php echo $i; ?></td>
<td><?php echo $firstName; ?></td>
<td><?php echo $nic; ?></td>
<td><?php echo $d_Licence; ?></td>
<td><?php echo $contactNo; ?></td>
<td><?php echo $address; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $age; ?></td>
<td><?php echo $chargePerDay; ?></td>
<td>
<a href="index.php?editDriver=<?php echo $id; ?>">
<i class="fas fa-edit"></i>
</a>
</td>
<td>
<a href="index.php?deleteDriver=<?php echo $id; ?>">
<i class="fas fa-trash-alt"></i>
</a>
</td>
</tr>

<?php } ?>


        </tbody>
    </table>

    </div>
  </div>

</body>

</html>
