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
            <p><i class="fas fa-tachometer-alt"></i> Child / View Child</p>
        </div>
        <div id="form">
            <div id="form_title">
                <p><i class="far fa-money-bill-alt"></i>View Child</p>
            </div>
            <div id="form_body">
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Name with Initials</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>Birth Date</th>
                            <th>Age</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $sql = "SELECT * FROM childdetails";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["id"] ?></td>
                                        <td><?php echo $row["nameInitial"] ?></td>
                                        <td><?php echo $row["fullName"] ?></td>
                                        <td><?php echo $row["gender"] ?></td>
                                        <td><?php echo $row["birthdate"] ?></td>
                                        <td><?php 
                                                $dob=new DateTime($row["birthdate"]);
                                                $now=new DateTime();
                                                $difference=$now->diff($dob);
                                                $age= $difference->y;
                                                echo $age;
                                                ?></td>
                                        <td><a href="Edit-Child.php?id=<?php echo $row['id']?>"><i class="fas fa-pen"></i> Edit</a></td>
                                        <td><a href="Delete-Child.php?childId=<?php echo $row['id']?>"><i class="far fa-trash-alt"></i>Delete</a></td>
                                        
                                        
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