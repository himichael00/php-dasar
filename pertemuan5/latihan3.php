<?php
// array numeric
$students = [
    ["michael", "672020188","Teknik Informatika", "michaelrio89@gmail.com"],
    ["rio", "672020188","Teknik Informatika", "michaelrio98@gmail.com"],
    ["aditya", "672020188","Teknik Informatika", "michaelrio89@gmail.com"],
];

// array associative

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($students as $student) : ?>
    <ul>
        <?php foreach ($student as $detail) : ?>
            <li>
                <?php echo $detail; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
</body>
</html>