<!DOCTYPE html>
<?php
include("dbConnection.php");
                            $childcount=0;
                            $sql = "SELECT * FROM childdetails";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $childcount++;
                                }

                              } else {
                                echo "0 results";
                              }
                            $laborcount=0;
                              $sql1 = "SELECT * FROM labor";
                              $result1 = $conn->query($sql1);
                                if ($result1->num_rows > 0) {
                                // output data of each row
                                while($row1 = $result1->fetch_assoc()) {
                                    $laborcount++;
                                }

                              } else {
                                echo "0 results";
                              }
                            ?>
<html>
    <head>
    <title>Add Donation</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="css/frame.css">
    </head>
    <body>
        <div id="path">
        <p><i class="fas fa-tachometer-alt"></i> Overview</p>
        </div>
        <div id="cards">
            <div class="card" id="card1">
                <div class="det">
                    <i class="far fa-money-bill-alt"> </i>
                    <div>
                        <p class="hed" id="totaldonations">Rs.5000</p>
                        <p>Total Donations</p>
                    </div>
                </div>
                <div class="btn-det">
                    <p class="par">View Details</p>
                </div>
            </div>
            <div class="card" id="card2">
                <div class="det">
                <i class="fas fa-child"></i></i>
                    <div>
                        <p class="hed" id="childcount"><?php echo $childcount?></p>
                        <p>Children Count</p>
                    </div>
                </div>
                <div class="btn-det">
                    <p class="par">Children Details</p>
                </div>
            </div>
            <div class="card" id="card3">
                <div class="det">
                <i class="fas fa-users"></i>
                    <div>
                        <p class="hed" id="staffcount">Rs.5000</p>
                        <p>Total Donations</p>
                    </div>
                </div>
                <div class="btn-det">
                    <p class="par">Staff Count</p>
                </div>
            </div>
            <div class="card" id="card4">
                <div class="det">
                <i class="fas fa-male"></i>
                    <div>
                        <p class="hed" id="laborcount"><?php $laborcount?></p>
                        <p>Labour Count</p>
                    </div>
                </div>
                <div class="btn-det">
                    <p class="par">Labor Details</p>
                </div>
            </div>
        </div>
    </body>
</html>