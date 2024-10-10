<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "feedback_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $q1 = (int)$_POST['q1'];
    $q2 = (int)$_POST['q2'];
    $q3 = (int)$_POST['q3'];
    $q4 = (int)$_POST['q4'];
    $q5 = (int)$_POST['q5'];
    $q6 = (int)$_POST['q6'];
    $q7 = (int)$_POST['q7'];
    $q8 = (int)$_POST['q8'];
    $q9 = (int)$_POST['q9'];
    $q10 = (int)$_POST['q10'];

    $stmt = $conn->prepare("INSERT INTO infrastructure_feedback (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiiiiiiii", $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);

    if ($stmt->execute()) {
        echo "Feedback submitted successfully.";
    header("Location: Home.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
