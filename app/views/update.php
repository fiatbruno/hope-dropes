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


    <title>Update Page</title>
    
  </head>
  <body class="">
    
    <h1 class="head">Hope Drops</h1>

    <div class="form col-lg-4">
        <h1>Update Page!</h1>
        <div>
        </div>
        <p>Fill out the credentials</p>
        <?php if (isset($_SESSION['success'])) { ?>
        
        <div class="alert alert-success"><?php echo $_SESSION["success"];?></div>
        <?php 
        } ?>
        <?php if (isset($_SESSION['error'])) { ?>
        
        <div class="alert alert-danger"><?php echo $_SESSION["error"];?></div>
        <?php
        } ?>
        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
        <form action="" method="POST">
            <div class="form-group invisible">
                <label for="update_id" class="label-default">Id</label>
                <input name="update_id" class="form-control" id="update_id" type="number" value="<?= $_SESSION['update_id'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="username" class="label-default">Username:</label>
                <input name="username" class="form-control" id="username" type="text">
            </div>
            <div class="form-group">
                <label for="email" class="label-default">Email</label>
                <input name="email" class="form-control" id="email" type="email">
            </div>
            <div class="form-group">
                <label for="password" class="label-default">Password:</label>
                <input name="password" class="form-control" id="password" type="password">
            </div>
            <div class="form-group">
                <label for="password2" class="label-default">Confirm Password:</label>
                <input name="password2" class="form-control" id="password2" type="password">
            </div>
            <div class="form-group">
                <label for="gender" class="label-default">Gender:</label>
                <select name="gender" class="form-select" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telephone" class="label-default">Telephone:</label>
                <input name="telephone" class="form-control" id="telephone" type="tel">
            </div>
            <div>
                <button name="update" class="btn btn-blood p-2">Update</button>
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