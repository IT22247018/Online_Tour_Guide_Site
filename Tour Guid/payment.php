<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cardname = $_POST["cardname"];
    $cardnumber = $_POST["cardnumber"];
    $expmonth = $_POST["expmonth"];
    $cvv = $_POST["cvv"];
    $expyear = $_POST["expyear"];

    // Connect to the database and insert the form data
    // Replace the database credentials with your own
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "online tour guide"; // Replace with your database name

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO payment (paymentid, nameoncard, creditcardnumber, expmonth, cvv, expyear) 
            VALUES ('', '$cardname', '$cardnumber', '$expmonth', '$cvv', '$expyear')";

    if ($conn->query($sql) === TRUE) {
        // Retrieve the auto-generated payment ID
        $paymentId = $conn->insert_id;
        echo "Payment details added successfully. Payment ID: " . $paymentId;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
