<?php
// Database configuration
$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "ai_aether_db"; // The database name we created earlier

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the contact_form_submissions table
    $sql = "INSERT INTO contact_form_submissions (name, email, phone, gender, message) VALUES ('$name', '$email', '$phone', '$gender', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your message! We will get back to you shortly.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
