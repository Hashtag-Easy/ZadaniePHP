<?php
session_start();

$servername = "localhost";
$username_db = "root";
$password_db = "";
$database = "test";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = htmlentities($_POST["username"]);
  $password = htmlentities($_POST["password"]);

  $conn = new mysqli($servername, $username_db, $password_db, $database);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query = "SELECT * FROM users WHERE NAME = '$username' AND PASSWORD = '$password'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    header("Location: dashboard.php");
    exit();
  } else {
    echo "Invalid username or password";
  }

  $conn->close();
}
