<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/lightslider.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/lightslider.js"></script>
    </head>
    <body>

    <div id="head_bar">
    <a href="index.php"><img src="admin/img/Carsons Logo white.png"></a>
    </div>
    <div id="banner">

    </div>
    <div>
        <form  id="search" action="search.php" method="post">
        <span>
        <label>Start Date</label>
        <input type="date" name="startDate">
        </span>
        <span>
        <label>End Date</label>
        <input type="date" name="startDate">
        </span>
        <input type="submit" value="Check Available Vehicles">
        </form>
    </div>
    <div id="about">
        <div id="abt_topic">
            <p>Enjoy the efficient and specialized services of Casons Rent a Car; Sri Lanka's leading rent-a-car company
            </p>
        </div>
        <div id="cards">
            <div class="card">
                <i class="fas fa-car-alt"></i>
                <p class="mini"> Over 500 Vehicles</p>
                <p>Over 60 4WD Jeeps, 50 Vans, 200 Cars, Double Cabs, Luxury Coaches, Lorries etc</p>
            </div>
           <div class="card">
           <i class="fas fa-user"></i>
            <p class="mini"> Our Strengh</p>
            <p>30 In-house Operational Staff, 18 Automobile Technicians and 90 permanent Drivers from every part of the Island</p>
            </div>
           <div class="card">
           <i class="fas fa-star"></i>
            <p class="mini"> Insurance</p>
            <p>Comprehensive Insurance available for all our vehicles including Passengers</p>
            </div>
           <div class="card">
           <i class="fas fa-user"></i>
            <p class="mini"> 24/7 Breakdown Service</p>
            <p>24 hrs Island wide backup services with affiliated Garages and Mobile units</p>
            </div>
           
            
        </div>
    </div>
    <div class="topic">
            Our Vehicles
        </div>
    <div id="vehicles">
        <div id="cars">
                <ul id="autoWidth" class="cs-hidden" style="height: auto; margin-bottom: 10px;">
                <?php
                include ("dbConnection.php");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM vehicle";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <li class="item-a">
                                <div class="box">
                                    <img src="admin/img/Vehicles/<?php echo $row['picture'];?>" class="person">
                                    <div class="details">
                                        <h4>
                                        <?php echo $row['brand'];?>
                                        </h4>
                                        <p><i class="fa fa-male"></i><?php echo $row['passengers'];?> Passengers  </p>
                                        <p><i class="fa fa-cog"></i><?php echo $row['transmissionType'];?> Transmission</p>
                                        <p><i class="far fa-snowflake"></i><?php echo $row['airCondition'];?> Air Conditioning</p>
                                        <p><i class="fa fa-suitcase"></i><?php echo $row['Luggage'];?> Luggages</p>
                                        <p><i class="fas fa-money-bill-alt"></i><?php echo $row['pricePerExtraKM'];?> LKR per Extra Km</p>
                                        <p><i class="fa fa-road"></i>Free Mileage:<?php echo $row['freeMilage'];?> Km</p>                                
                                    </div>
                                </div>
                            </li>
                    <?php
                        }
                    } 
                    else {
                    echo "0 results";
                    }
                    $conn->close();
                    ?>
                    
                </ul>
            
        </div>
    </div>
    <div id="footer">
        <div class="contact">
            <h2>Contact Us</h2>
            Casons Rent-A-Car (Pvt) Ltd
            <br>181, Gothami Gardens, Gothami Road,<br> Rajagiriya, Sri Lanka.

            <br><br>Hotlines:
            <br>+94 11 4 377 366
            <br>+94 777 312 500

            <br><br>Fax:
            <br>+94 11 4 406 544

            <br><br>Email:
            <br>info@casonsrentacar.com
        </div>
        <div class="contact">
            <h2>Vehicle Fleet</h2>
            Cars
            <br><br>SUVs

            <br><br>Vans & Busses
            <br><br>Utility Vehicles & Lorries
            <br><br>Motorbikes

            <br><br>Tuk Tuks
         
        </div>

        <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63492.94592206908!2d80.51572826335031!3d5.952076466173329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae138d151937cd9%3A0x1d711f45897009a3!2sMatara!5e0!3m2!1sen!2slk!4v1629634461135!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div id="copyright">
    Copyright © 2021 Carsons Rent-A-Car (Pvt) Ltd. . All Rights Reserved.
    </div>
    </body>
</html>