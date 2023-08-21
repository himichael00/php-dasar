<?php
require 'functions.php';
session_start();

// cek cookie
if ( isset($_COOKIE['key']) && isset($_COOKIE['id']) ){
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

// ambil username berdasarkan id
  $result = mysqli_query($dbconn, "SELECT * FROM user WHERE id = $id");
  $rowdatafound = mysqli_fetch_assoc($result);
  
// cek username dan id apakah sama dengan yang di acak
  if ( $key === hash('sha256', $rowdatafound['username']) ) {
    $_SESSION['login'] = true;
  }
}

if( isset($_SESSION["login"]) ) {
  header("Location: index.php");
  exit;
}

if ( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($dbconn, "SELECT * FROM user WHERE username = '$username'");


    // cek username
    if ( mysqli_num_rows($result) > 0 ) {
        // cek password
        $rowdatafound = mysqli_fetch_assoc($result);
        if( password_verify($password, $rowdatafound["password"]) ) {
          // set session
          $_SESSION["login"] = true;

          if( isset($_POST["rememberme"]) ) {
            setcookie('id', $rowdatafound['id'], time()+60);
            setcookie('key', hash('sha256', $rowdatafound['username']), time()+60);
          }
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
    
    // else {
    //     echo "<script>
    //         alert('authentication failed');
    //     </script>
    // ";
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style3.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Login Page</title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5">


              <h2 class="fw-bold mb-2 text-uppercase text-center">LOGIN</h2>

              <?php if (isset($error)) : ?>
                <p style="color:red" class="text-center">username or password incorrect!</p>
              <?php endif; ?>

              <p class="text-white-50 mb-5 text-center">Please enter your username and password!</p>

              <form action="" method="post">


                    <div class="form-outline">
                        <input type="text" name="username" id="username" class="form-control form-control-lg" />
                        <label class="form-label" for="username">Username</label>
                    </div>

                    <div class="form-outline w-100">
                        <input type="password" name="password" class="form-control form-control-lg" id="password" />
                        <label for="password" class="form-label">Password</label>
                    </div>

                    <div>
                      <input type="checkbox" name="rememberme" id="rememberme" />
                      <label for="rememberme">Remember me</label>
                    </div>

                <div class="mt-4 pt-2"> 
                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                </div>

                </form>


            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>