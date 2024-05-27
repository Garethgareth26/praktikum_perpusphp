<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td:last-child {
            text-align: center;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #4caf50;
            color: white;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #45a049;
        }


    </style>
</head>
<body>
    <h1>--Daftar Buku gareth--</h1>

    <table>
        <tr>
            <th>Nama</th>
            <th>ISBN</th>
            <th>Unit</th>
            <th>Action</th>
        </tr>

        <!-- PHP -->
        <?php foreach ($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["nama"] ?></td>
                <td><?php echo $buku["isbn"] ?></td>
                <td><?php echo $buku["unit"] ?></td>
                <td>
                    <a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>Edit</a>
                    <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <br>

    <a href="./tambah-buku.php">Tambah Data Buku</a>
    <br>
    <br>
    <a href="./index.php">Kembali ke Halaman Utama</a>
</body>
</html>
