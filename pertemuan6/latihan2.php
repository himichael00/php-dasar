<?php
// $students = [
//     ["Michael", "672020188", "michaelrio89@gmail.com", "IT"],
//     ["Rio", "672020189", "michaelrio89@gmail.com", "IT"]
// ];

// array associative
// keynya bukan lagi index melainkan string
$students = [
            [
            "nim" => "672020188",
            "nama" => "michael",
            "email" => "michaelrio89@gmail.com",
            "jurusan" => "IT",
            "gambar" => "azula.jpg"
        ],
            [
            "nama" => "rio",
            "nim" => "672020188",
            "email" => "michaelrio98@gmail.com",
            "jurusan" => "IT",
            "gambar" => "azula.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associative</title>
</head>
<body>

    <h1>Mahasiswa perulangan keseluruhan</h1>
    <?php foreach ($students as $student) : ?>
        <ul>
            <?php foreach ($student as $detail) : ?>
                <li><?php echo $detail; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

    <br>

    <h1>Mahasiswa perulangan perpoint</h1>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li>
                <img src="img/<?= $student["gambar"]; ?>">
            </li>
            <li>Nama : <?php echo $student["nama"]; ?></li>
            <li>Nim : <?php echo $student["nim"]; ?></li>
            <li>Email : <?php echo $student["email"]; ?></li>
            <li>Jurusan : <?php echo $student["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>

