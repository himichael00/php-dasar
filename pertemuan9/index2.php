<?php
// koneksi ke db
$dbconn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel product / query data product
$result = mysqli_query($dbconn, "SELECT * FROM tokoban");
if (!$result) {
    echo mysqli_error($dbconn);
}

// ambil data aka (fetch) tokoban dari object result
// mysqli_fetch_row() // array numerik
// mysqli_fetch_assoc() // array associative
// mysqli_fetch_array() // numerik dan associative (double data)
// mysqli_fetch_object() // objectnya dipanggil

// while ($product = mysqli_fetch_assoc($result) ) {
//     var_dump($product);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    
    <h1>List of products</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Label</th>
            <th>Size</th>
            <th>Type</th>
            <th>Price</th>
            <th>Picture</th>
            <th>Action</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["label"]; ?></td>
            <td><?php echo $row["size"]; ?></td>
            <td><?php echo $row["type"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><img src="img/<?php echo $row["picture"]; ?>" width="50"></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>

</body>
</html>