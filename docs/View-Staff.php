<!DOCTYPE html>
<?php
include("dbConnection.php");
?>
<html>
    <head>
        <title>View Child</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="css/frame.css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="path">
            <p><i class="fas fa-tachometer-alt"></i> Child / View Staff</p>
        </div>
        <div id="form">
            <div id="form_title">
                <p><i class="far fa-money-bill-alt"></i>View Staff</p>
            </div>
            <div id="form_body">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name with Initials</th>
                            <th>Full Name</th>
                            <th>NIC</th>
                            <th>Contact No</th>
                            <th>E-mail</th>
                            <th>Post</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $sql = "SELECT * FROM staff";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["staffId"] ?></td>
                                        <td><?php echo $row["nameInitial"] ?></td>
                                        <td><?php echo $row["fullName"] ?></td>
                                        <td><?php echo $row["nic"] ?></td>
                                        <td><?php echo $row["ContactNo"] ?></td>
                                        <td><?php echo $row["eMail"] ?></td>
                                        <td><?php echo $row["post"] ?></td>
                                        <td><?php echo $row["username"] ?></td>
                                        <td><a href="Edit-Staff.php?staffId=<?php echo $row['staffId']?>"><i class="fas fa-pen"></i> Edit</a></td>
                                        <td><a href="Delete-Staff.php?staffId=<?php echo $row['staffId']?>"><i class="far fa-trash-alt"></i>Delete</a></td>
                                        
                                    </tr>

                                    <?php
                                }
                              } else {
                                echo "0 results";
                              }
                            $conn->close();
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>