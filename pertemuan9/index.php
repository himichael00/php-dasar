<?php
require 'functions.php';
$products = query("SELECT * FROM tokoban");
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
        <?php foreach($products as $product) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $product["label"]; ?></td>
            <td><?php echo $product["size"]; ?></td>
            <td><?php echo $product["type"]; ?></td>
            <td><?php echo $product["price"]; ?></td>
            <td><img src="img/<?php echo $product["picture"]; ?>" width="50"></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>