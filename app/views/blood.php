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

    <title>Blood Type</title>
  </head>
  <body>

    <h1 class="head">Hope Drops</h1>
  
    <div class="form col-lg-4">
        <h1>Choose Blood Type!</h1>
        <?php if (isset($_SESSION['success'])) {?>
        
        <div class="alert alert-success"><?php echo $_SESSION["success"];?></div>
        <?php
        }?>
        <?php if (isset($_SESSION['error'])) {?>
            <div class="alert alert-danger"><?php echo $_SESSION["error"];?></div>
        <?php
        }?>
        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
        <form class="" action="" method="POST">
            <div class="blood-group">
                <div class="grouper">
                    <div class="form-check">
                        <input type="radio" value="A" name="blood-group" class="form-check-input btn-circle p-2"></input>
                        <label class="form-check-label" for="flexCheckDefault">A</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" value="B" name="blood-group" class="form-check-input btn-circle p-2"></input>
                        <label class="form-check-label" for="flexCheckDefault">B</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" value="O" name="blood-group" class="form-check-input btn-circle p-2"></input>
                        <label class="form-check-label" for="flexCheckDefault">O</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" value="AB" name="blood-group" class="form-check-input btn-circle double p-2"></input>
                        <label class="form-check-label" for="flexCheckDefault">AB</label>
                    </div>
                </div>
                <br>
                <p>Either <span>+</span> or <span>-</span></p>
                <div class="grouper">
                    <div class="form-check">
                        <input type="radio" value="-" name="blood-group-sign" class="form-check-input btn-circle p-2"></input>
                        <label class="form-check-label" for="flexCheckDefault">-</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" value="+" name="blood-group-sign" class="form-check-input btn-circle p-2"></input>
                        <label class="form-check-label" for="flexCheckDefault">+</label>
                    </div>
                </div>
            </div>
            <div>
            </div>
            <div>
                <p>Don't know your Blood Group? Click <a href="<?php echo base_url(); ?>user/profile">Here!</a></p>                
            </div>
            <div>
                <button name="submit-blood-group" class="btn btn-blood p-2">Submit</button>
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