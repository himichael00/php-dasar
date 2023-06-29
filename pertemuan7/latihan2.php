<?php
if ( !isset($_GET["merk"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?php echo $_GET["merk"]; ?></li>
        <li><?php echo $_GET["tipe"]; ?></li>
        <li><?php echo $_GET["ukuran"]; ?></li>
        <li><?php echo $_GET["harga"]; ?></li>

    </ul>
</body>
</html>