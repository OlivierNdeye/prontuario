<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Database connection
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Query
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Redirect to home page
    header('Location: home.php');
} else {
    echo "Incorrect username or password";
}

mysqli_close($conn);
?>