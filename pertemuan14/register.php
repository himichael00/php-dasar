<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if ( registration($_POST) > 0){
        echo "<script>
                alert('user successfully added');
            </script>
        ";
    } else {
        echo mysqli_error($dbconn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Register Page</title>
</head>
<body>
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                <form action="" method="post">

                <div class="row">
                    <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <input type="text" name="username" id="username" class="form-control form-control-lg" />
                        <label class="form-label" for="username">Username</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline w-100">
                        <input type="password" name="password" class="form-control form-control-lg" id="password" />
                        <label for="password" class="form-label">Password</label>
                    </div>
                    </div>

                    <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline w-100">
                        <input type="password" name="password2" class="form-control form-control-lg" id="password2" />
                        <label for="password2" class="form-label">Confirm Password</label>
                    </div>
                    </div>
                </div>

                <div class="mt-4 pt-2">
                    <button class="btn btn-primary" type="submit" name="register">Register</button>
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