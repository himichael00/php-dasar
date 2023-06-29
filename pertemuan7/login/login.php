<?php
// cek apakah tombol submit sudah tekan/belum
if (isset($_POST["submit"])) {

// cek username&password
if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
    // jika benar, redirect admin
    $_SESSION["username"] = $_POST["username"];
    header("Location: admin.php");
    exit;
} else {
    $error = true;
}
// if salah tampilkan pesan
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>

    <?php if (isset($error)) : ?>
    <p>username/password incorrect</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>