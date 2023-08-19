<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Libur</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="btn">
            <a href="add_data.php">Tambah hari libur di sini</a>
        </div>

        <div class="form">
            <form action="action.php" method="post">
                <div>
                    <label for="cek_tanggal">Cek tanggal</label>
                    <input type="date" name="cek_tanggal" id="cek_tanggal">
                </div>
                <button type="submit" name="cek">Cek Tanggal</button>
            </form>
        </div>
    </div>
</body>

</html>