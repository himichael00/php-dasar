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
    <link rel="stylesheet" href="./styles/style2.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Register Page</title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5">


              <h2 class="fw-bold mb-2 text-uppercase text-center">REGISTER</h2>
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


                    <div class="form-outline w-100">
                        <input type="password" name="password2" class="form-control form-control-lg" id="password2" />
                        <label for="password2" class="form-label">Confirm Password</label>
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