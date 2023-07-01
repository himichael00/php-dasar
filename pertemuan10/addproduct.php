<?php
// koneksi ke DB
$dbconn = mysqli_connect("localhost", "root", "", "phpdasar");


// cek apakah tombol sudah di submit belum
if( isset($_POST["submit"])) {
    // ambil data dari tiap elemen dalam form
    $label = $_POST["label"];
    $size = $_POST["size"];
    $type = $_POST["type"];
    $price = $_POST["price"];
    $picture = $_POST["picture"];

    // query insert data
    $query = "INSERT INTO tokoban VALUES ('', '$label', '$size', '$type', '$price', '$picture')";

    mysqli_query($dbconn, $query);

    // cek keberhasilan data
    if (mysqli_affected_rows($dbconn) > 0) {
        echo "Data sucessfully added";
    } else {
        echo "Adding Data Failed";
        var_dump(mysqli_error($dbconn));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Add Data Product</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="label">Label Product : </label>
                <input type="text" name="label" id="label">
            </li>
            <li>
                <label for="size">Size : </label>
                <input type="text" name="size" id="size">
            </li>
            <li>
                <label for="type">Type : </label>
                <input type="text" name="type" id="type">
            </li>
            <li>
                <label for="price">Price : </label>
                <input type="text" name="price" id="price">
            </li>
            <li>
                <label for="picture">Picture Product : </label>
                <input type="text" name="picture" id="picture">
            </li>
                <button class="btn btn-primary" type="submit" name="submit">
                    Add Product
                </button>
        </ul>
    </form>
</body>
</html>