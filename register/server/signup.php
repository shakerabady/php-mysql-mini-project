<?php
$servername = "localhost";
$username = "root";
$password = "SHaker@100";
$database = "project1";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if(isset($_POST['submit'])) {

$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username,first_name, last_name ,password ,email)
VALUES ('$uname', '$fname', '$lname', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    session_start();
    $_SESSION['logged-user'] = $fname . " " . $lname;

    header("Location: ../../dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();
