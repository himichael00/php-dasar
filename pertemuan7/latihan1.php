<?php
// $_GET
$products = [
        [
            "gambar" => "azulajpg",
            "merk" => "michelin",
            "tipe" => "tubeless",
            "ukuran" => "185/65R15",
            "harga" => 1000000,
    ],
        [
            "gambar" => "azula.jpg",
            "merk" => "bridgestone",
            "tipe" => "all season",
            "ukuran" => "195/60R16",
            "harga" => 1200000,
    ],
        [
            "gambar" => "azula.jpg",
            "merk" => "corsa",
            "tipe" => "all season",
            "ukuran" => "205/55R17",
            "harga" => 1100000,
    ],
        [
            "gambar" => "azula.jpg",
            "merk" => "IRC",
            "tipe" => "Touring",
            "ukuran" => "225/50R18",
            "harga" => 1300000,
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk Ban</title>
</head>
<body>
    <ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <a 
            href="latihan2.php?merk=<?php echo $product["merk"]; ?>
            &tipe= <?php echo $product["tipe"]; ?>
            &ukuran= <?php echo $product["ukuran"]; ?>
            &harga= <?php echo $product["harga"]; ?>
            &gambar= <?php echo $product["gambar"]; ?>"
            >
            <?php echo $product["merk"]; ?>
        </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>