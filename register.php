<?php
session_start();

if (isset($_SESSION['email'])) {
    header("Location: index.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1>Register Akun</h1>
    <form method="POST" action="./registerproses.php">

    <label for="email">Email: </label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password: </label><br>
        <input type="passowrd" id="password" name="password"><br>

        <br>
        <button type="submit" value="register">Register</button>
    </form>

</body>
</html>