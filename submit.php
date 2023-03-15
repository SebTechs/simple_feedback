<?php

// Including the connection to the server
include("connection.php");

// grabbing all of the feedback parts.

$name = $_POST['name'];
$email = $_POST['email'];
$feedback_message = $_POST['feedback_message'];
$review = $_POST['review'];

// Prevent bad stuff and allow stuff like ' and ""

$name = htmlspecialchars($name);
$name = mysqli_real_escape_string($con, $name);

$email = htmlspecialchars($email);
$email = mysqli_real_escape_string($con, $email);

$feedback_message = htmlspecialchars($feedback_message);
$feedback_message = mysqli_real_escape_string($con, $feedback_message);

$review = htmlspecialchars($review);
$review = mysqli_real_escape_string($con, $review);

// Send to database

$query = ("insert into feedback (name,email,comment,review) values ('$name','$email','$feedback_message','$review')");
$result = mysqli_query($con, $query);
if ($result){
    header("Location: submitted.html?Worked");
}
else{
    echo"<h1>Something has gone wrong.<h1>";
}

?>