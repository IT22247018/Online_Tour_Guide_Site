<?php
require 'config.php';

$fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $age = $_POST["address"];
    $quantity = $_POST["member"];
    $packageType = $_POST["ptype"];
    $checkDate = $_POST["checkdate"];
    $checkoutDate = $_POST["checkoutdate"];


$sql = "UPDATE  SET fullname='$fullname', email='$email', age='$age',checking_date='$checking_date',exp_year='$quantity' WHERE Pid='$checkout_date '";

$query = $conn->query($sql);

    if ($query === TRUE) {
        echo "<script>alert('Record Updated Successfully')
        window.location.replace('updatepayment.php');</script>";
        
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
  ?>