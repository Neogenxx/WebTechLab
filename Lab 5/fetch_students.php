<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $student_id = $_POST['student_id'];
    $about = $_POST['about'];

    $conn = new mysqli("localhost", "root", "", "assignment");

    if ($conn->connect_error) {
        die("Database connection failed");
    }

    $sql = "INSERT INTO hostel_users 
            (name, email, user_password, phone, gender, language, student_id, about)
            VALUES 
            ('$name', '$email', '$password', '$phone', '$gender', '$language', '$student_id', '$about')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration Successful";
    } else {
        echo "Error inserting data";
    }

    $conn->close();
}
?>
