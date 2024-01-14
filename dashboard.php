<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
  <style>
    input,
    input:focus {
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

    h2,
    label {
      font-size: 24px;
    }
  </style>
  <script text="javascript">
    function calculate()
    {
      let a = document.getElementById("input-a").value;
      let h = document.getElementById("input-h").value;

      if (a < 0 || h < 0)
      {
        document.getElementById("result").innerHTML = "Wartości nie mogą być mniejsze niż 0";

        return;
      }

      document.getElementById("result").innerHTML = `Pole trójkąta wynosi: ${a * h / 2}`;
    }
  </script>
</head>

<body>
  <center>
    <h2>Zalogowano, cześć <?php echo $_SESSION["username"] ?></h2>
    <br>
    <br>
    <h2>Policz pole trójkąta</h2>
    <label>Podaj A:</label>
    <br>
    <input id="input-a" type="number" required>
    <br>
    <br>
    <label>Podaj H:</label>
    <br>
    <input id="input-h" type="number" required>
    <br>
    <br>
    <button onclick="calculate()">Policz</button>
    <br>
    <br>
    <label id="result"></label>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="logout.php"><button type="submit">Wyloguj się</button></a>
  </center>
</body>

</html>