<?php
if ( !isset($_GET["username"])) {
    // redirect
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?></h1>
    <a href="login.php">logout</a>
</body>
</html>