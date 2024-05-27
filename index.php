<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi perpustakaan gareth</title>
    <style>
        body {
            background-color: cadetblue;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }

        h1 {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        a {
            color: white;
            text-decoration: none;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>aplikasi perpustakaan gareth</h1>

    <a href="./buku.php">Lihat Daftar Buku</a>
    <a href="./staff.php">Lihat Daftar staff</a>

    <form action="logout.php" method="POST">
    <button type="submit">LOGOUT</button>

</body>
</html>
