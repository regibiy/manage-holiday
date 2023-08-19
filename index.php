<?php
include("connection.php");
?>

<a href="add_data.php">Tambah hari libur di sini ya</a>

<form action="action.php" method="post">
    <div>
        <label for="cek_tanggal">Cek tanggal</label>
        <input type="date" name="cek_tanggal" id="cek_tanggal">
    </div>
    <button type="submit" name="cek">Cek Tanggal</button>
</form>