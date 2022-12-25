<?php

$fullname = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "souravwd_contact_from", "9002675238", "souravwd_contact_from") or die("connection failed");
$sql = "INSERT INTO user_data(Full_name, Email, Subject_box, Message_box) VALUES ('{$fullname}','{$email}','{$subject}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
echo("Thanks")



?>
