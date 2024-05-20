<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $age = $_POST["address"];
    $quantity = $_POST["member"];
    $packageType = $_POST["ptype"];
    $checkDate = $_POST["checkdate"];
    $checkoutDate = $_POST["checkoutdate"];

    // Perform any required validation or processing here

    // Connect to the database and insert the form data
    // Replace the database credentials with your own
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "online tour guide";

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO bookings (fullname, email, age, quantity, package_type, checking_date, checkout_date) VALUES ('$fullname', '$email', '$age', '$quantity', '$packageType', '$checkDate', '$checkoutDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
