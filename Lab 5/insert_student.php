<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $student_id = $_POST['student_id'];
    $about = $_POST['about'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "assignment";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL Insert Query
    $sql = "INSERT INTO hostel_users 
    (name, email, user_password, phone, gender, language, student_id, about) 
    VALUES 
    ('$name', '$email', '$user_password', '$phone', '$gender', '$language', '$student_id', '$about')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "Registered Successfully";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
