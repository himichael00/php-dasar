<?php
require 'functions.php';
// cek apakah tombol sudah di submit belum
if( isset($_POST["submit"])) {

    // cek keberhasilan data
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data succesfully added');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "<script>
                alert('data add failed');
                document.location.href = 'addproduct.php';
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
    <h1>Add Data Product</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="label">Label Product : </label>
                <input type="text" name="label" id="label" required>
            </li>
            <li>
                <label for="size">Size : </label>
                <input type="text" name="size" id="size" required>
            </li>
            <li>
                <label for="tipe">Type : </label>
                <input type="text" name="tipe" id="tipe" required>
            </li>
            <li>
                <label for="price">Price : </label>
                <input type="text" name="price" id="price" required>
            </li>
            <li>
                <label for="picture">Picture Product : </label>
                <input type="file" name="picture" id="picture">
            </li>
                <button class="btn btn-primary" type="submit" name="submit">
                    Add Product
                </button>
        </ul>
    </form>
</body>
</html>