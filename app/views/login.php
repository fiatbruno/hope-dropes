<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- My Style Sheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <title>Login Page</title>
  </head>
  <body>

    <h1></h1>
  
    <div class="form col-lg-4">
    <img class="card-img-top" style="width:120px; height:20vh"  src="<?php echo base_url()?>assets/images/logo.jpg" alt="Blood_Drop">

<span style="font-size:25px">Welcome Back!</span>

        <p class="text-center">Fill out the credentials</p>
        <?php if (isset($_SESSION['success'])) {?>
        
        <div class="alert alert-success"><?php echo $_SESSION["success"];?></div>
        <?php
        }?>
        <?php if (isset($_SESSION['error'])) {?>
            <div class="alert alert-danger"><?php echo $_SESSION["error"];?></div>
        <?php
        }?>
        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username" class="label-default">Username:</label>
                <input name="username" class="form-control" id="username" type="text">
            </div>
            <div class="form-group">
                <label for="password" class="label-default">Password:</label>
                <input name="password" class="form-control" id="password" type="password">
            </div>
            <div>
                <p>Don't have an account? <a href="register">Register</a></p>
            </div>
            <div>
                <p>Forgot password? Reset <a href="<?php echo base_url()?>auth/reset">Here!</a></p>
            </div>
            <div>
                <button name="login" class="btn btn-blood p-2">Login</button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>