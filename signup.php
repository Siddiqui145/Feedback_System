<?php
$host = "localhost";  
$username = "root";  
$password = "";       
$dbname = "feedback_db"; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $year_of_study = mysqli_real_escape_string($conn, $_POST['year']);
    $prn_number = mysqli_real_escape_string($conn, $_POST['prn']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql_check = "SELECT * FROM users WHERE email='$email' OR prn_number='$prn_number'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "User with this email or PRN number already exists!";
    } else {
        $sql = "INSERT INTO users (name, email, password, year_of_study, prn_number) 
                VALUES ('$name', '$email', '$hashed_password', '$year_of_study', '$prn_number')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: login.html"); 
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
