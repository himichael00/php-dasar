<?php
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

// ambil data id
$id = $_GET["id"];

// query data products berdasarkan id
$products = query("SELECT * FROM tokoban WHERE id = $id")[0];

// cek apakah tombol sudah di submit belum
if( isset($_POST["submit"])) {

    // cek keberhasilan ubah data
    if ( ubah($_POST) > 0) {
        echo "<script>
                alert('data succesfully edited');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "<script>
                alert('data edit failed');
                document.location.href = 'edit.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Edit Data Product</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $products["id"]; ?>">
        <input type="hidden" name="oldpicture" value="<?= $products["picture"]; ?>">
        <ul>
            <li>
                <label for="label">Label Product : </label>
                <input type="text" name="label" id="label" required
                value="<?php echo $products["label"]; ?>">
            </li>
            <li>
                <label for="size">Size : </label>
                <input type="text" name="size" id="size" required
                value="<?php echo $products["size"]; ?>">
            </li>
            <li>
                <label for="tipe">Type : </label>
                <input type="text" name="tipe" id="tipe" required
                value="<?php echo $products["tipe"]; ?>">
            </li>
            <li>
                <label for="price">Price : </label>
                <input type="text" name="price" id="price" required
                value="<?php echo $products["price"]; ?>">
            </li>
            <li>
                <label for="picture">Picture Product : </label>
                <img src="img/<?php echo $products["picture"]; ?>" width="80"> <br>
                <input type="file" name="picture" id="picture">
            </li>
                <button class="btn btn-primary" type="submit" name="submit">
                    Submit
                </button>
        </ul>
    </form>
</body>
</html>