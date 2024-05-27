<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])) {

    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "INSERT INTO buku VALUES (
        NULL, '$nama', '$isbn', $unit
    )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH BUKU FORM</title>
</head>
<body>
    <h1>--FORM TAMBAH DATA BUKU--</h1>

    <form action="" method="POST">

    <label for="nama">nama</label>
    <input type="text" id="nama"name="nama">
<br>
<br>
    <label for="isbn">ISBN</label>
    <input type="text" id="isbn"name="isbn">
<br>
<br>
    <label for="unit">Unit</label>
    <input type="number" id="unit"name="unit">

<br>
<br>
    <button type="submit" name="submit">SUBMIT</button>
    </form>

    <br>
    <a href="buku.php">Kembali ke daftar buku</a>
</body>
</html>