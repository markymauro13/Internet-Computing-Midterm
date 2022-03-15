<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$num_street = $_POST['num_street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$room = $_POST['room'];
$num_of_people = $_POST['num_of_people'];
$phonenum = $_POST['phonenum'];
$e_mail = $_POST['e_mail'];
$payment = $_POST['payment'];
$cardnum = $_POST['cardnum'];
$special_requests = $_POST['special_requests'];

// calculating number of days between checkout and checkin
$new_checkin = (string) $checkin;
$new_checkout = (string) $checkout;
$datetime1 = new DateTime($new_checkin);
$datetime2 = new DateTime($new_checkout);
$interval = $datetime1->diff($datetime2);
// echo $interval->format('%a');
$num_of_days = $interval;

// saving the number from date subtraction
$number_num_of_days = $interval->format('%a');

echo "<h1>Thank you ".$fname." ".$lname." for your reservation</h1>";
echo "<p>The followings are the information that you entered:</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlantic Trails Resort</title>
</head>
<body>

<style>
    #form_label {
        display: inline-block;
        width: 150px;
      }
</style>

    <p>
        <label id="form_label"> Number & Street </label> 
            <label> 
            <?php
                echo $num_street;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> City </label> 
            <label> 
            <?php
                echo $city;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> State </label> 
            <label> 
            <?php
                echo $state;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Zip Code </label> 
            <label> 
            <?php
                echo $zip;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Check In Date </label> 
            <label> 
            <?php
                echo $checkin;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Check Out Date </label> 
            <label> 
            <?php
                echo $checkout;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Room Type </label> 
            <label> 
            <?php
                echo $room;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Number of People </label> 
            <label> 
            <?php
                echo $num_of_people;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Number of Days </label> 
            <label> 
            <?php
                echo $num_of_days->format('%a');
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Email </label> 
            <label> 
            <?php
                echo $e_mail;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Phone Number </label> 
            <label> 
            <?php
                echo $phonenum;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Credit Card </label> 
            <label> 
            <?php
                echo $cardnum;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Special Request </label> 
            <label> 
            <?php
                echo $special_requests;
            ?>
            </label>
    </p>
    <p>
        <label id="form_label"> Total Charge </label> 
            <label> 
            <?php
                $king = 200;
                $queen = 150;
                $suite = 300;

                $total_cost = 0;

                if($room == "King"){
                    $total_cost = ($king * $number_num_of_days) * 1.07;
                    echo "$".number_format($total_cost,2);
                }
                elseif($room == "Queen"){
                    $total_cost = ($queen * $number_num_of_days) * 1.07;
                    echo "$".number_format($total_cost,2);
                }
                elseif($room == "Suite"){
                    $total_cost = ($suite * $number_num_of_days) * 1.07;
                    echo "$".number_format($total_cost,2);
                }
                else {
                    echo "improper room input!";
                }

            ?>
            </label>
    </p>


</body>
</html>