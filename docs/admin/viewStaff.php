<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> View Staff</title>
  <link rel="stylesheet" href="css/tableStyle.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container staff">
    <div class="title">View Staff</div>
    <div class="content">
    <table class="content-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>NIC</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>Post</th>
                <th>Email</th>
                <th>Username</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php

$i = 0;

$get_pro = "select * from staff";

$run_pro = mysqli_query($conn,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    $firstName = $row_pro['fName'];
    $nic = $row_pro['NIC'];
    $contactNo = $row_pro['contactNo'];
    $address_staff = $row_pro['address'];
    $post = $row_pro['type'];
    $email = $row_pro['email'];
    $username = $row_pro['userName'];
    $id = $row_pro['NIC'];
$i++;
?>
<tr >

<td><?php echo $i; ?></td>

<td><?php echo $firstName; ?></td>
<td><?php echo $nic; ?></td>
<td><?php echo $contactNo; ?></td>
<td><?php echo $address_staff; ?></td>
<td><?php echo $post; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $username; ?></td>
<td>
<a href="index.php?editStaff=<?php echo $id; ?>">
<i class="fas fa-edit"></i>
</a>
</td>
<td>
<a href="index.php?deleteStaff=<?php echo $id; ?>">
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
