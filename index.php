<?php 
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
      html {
        background-color: black;
      }
      input, input:focus  {
        appearance: none;
        background-color: white;
        border-radius: 50px;
        padding: 5px 10px;
        font-size: 20px;
      } 

      body {
        margin-top: 5%;
      }

      button {
        appearance: none;
        background-color: white;
        border-radius: 50px;
        padding: 5px 10px;
        font-size: 20px;
      }

      h2, label  {
        color: white;
      }
    </style>
</head>
<body>
  <center>
    <h2>Logowanie</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required>
        <br>
        <br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" required>
        <br>
        <br>
        <br>
        <button type="submit">Login</button>
        <br>
        <br>
        Dane do logowania:
        <br>
        Username: admin
        <br>
        Password: admin
    </form>
  </center>
</body>
</html>