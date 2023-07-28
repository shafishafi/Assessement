<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "students");

// Check if the connection was successful
if ($conn === false) {
die("ERROR: Could not connect to the database.");
}

// Get the data from the form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$parent_name = $_POST['parent_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$phone_number = $_POST['phone_number'];

// Insert the data into the database
$sql = "INSERT INTO students (first_name, last_name, dob, parent_name, address, city, phone_number) VALUES ('$first_name', '$last_name', '$dob', '$parent
