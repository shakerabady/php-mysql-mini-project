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

if(isset($_POST['submit'])) {

$username = $_POST['uname'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    
    session_start();

    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
        $_SESSION['logged-user'] = $row["first_name"]. " " . $row["last_name"];
    }
    
    
    header("Location: ../../dashboard.php");
} else {
    echo "0 results";
}


/* 
if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} */

}
$conn->close();

