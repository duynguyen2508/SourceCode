<?php
include("includes/db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, phone, message) 
        VALUES ('$name', '$email', '$phone', '$message')";
$conn->query($sql);

header("Location: pages/contact.php?success=1");
?>
