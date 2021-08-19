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
            <p><i class="fas fa-tachometer-alt"></i> Child / View Donars</p>
        </div>
        <div id="form">
            <div id="form_title">
                <p><i class="far fa-money-bill-alt"></i>View Donars</p>
            </div>
            <div id="form_body">
                <table>
                    <thead>
                        <tr>
                            <th>Donar Name</th>
                            <th>Donar Contact</th>
                            <th>Address</th>
                            <th>Donation<br>Type</th>
                            <th>Date</th>
                            <th>Donation<br>Details</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $sql = "SELECT * FROM donars";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["donarName"] ?></td>
                                        <td><?php echo $row["contactNo"] ?></td>
                                        <td><?php echo $row["Address"] ?></td>
                                        <td><?php echo $row["donationType"] ?></td>
                                        <td><?php echo $row["date"] ?></td>
                                        
                                        <td></td>
                                        
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