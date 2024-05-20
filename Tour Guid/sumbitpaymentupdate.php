<<?php
require 'config.php';

$Paymentid = $_POST["id"];
$Nameoncard = $_POST["cardname"];
$cardnumber = $_POST["cardnumber"];
$expmonth = $_POST["expmonth"];
$cvv = $_POST["cvv"];
$expyear = $_POST["expyear"];

$sql = "UPDATE Payment SET nameoncard='$Nameoncard', creditcardnumber='$cardnumber', expmonth='$expmonth', cvv='$cvv', expyear='$expyear' WHERE paymentid='$Paymentid'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Record Updated Successfully')</script>";
  echo "<script>window.location.replace('updatepayment.php');</script>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
