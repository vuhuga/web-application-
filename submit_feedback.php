<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "campaign_feedback";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', $rating)";
if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>