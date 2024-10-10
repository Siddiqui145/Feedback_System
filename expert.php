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
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
    $question6 = $_POST['question6'];
    $question7 = $_POST['question7'];
    $question8 = $_POST['question8'];
    $question9 = $_POST['question9'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO feedback (question1, question2, question3, question4, question5, question6, question7, question8, question9, comments)
            VALUES ('$question1', '$question2', '$question3', '$question4', '$question5', '$question6', '$question7', '$question8', '$question9', '$comments')";

if ($stmt->execute()) {
    echo "Feedback submitted successfully.";
    header("Location: Home.html");
        exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
} else {
echo "Invalid request method.";
}
?>


