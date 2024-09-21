<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'webperros');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the posted data
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid username or password!";
}

// Close the connection
$conn->close();

$para      = 'j.ruizmontenegro05@gmail.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: j.ruizmontenegro05@gmail.com' . "\r\n" .
    'Reply-To: j.ruizmontenegro05@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>