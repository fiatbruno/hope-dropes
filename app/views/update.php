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
<h1></h1>
<body class="">
    <div class="form col-lg-4">
    <img class="card-img-top" style="width:100px; height:20vh"  src="<?php echo base_url()?>assets/images/logo.jpg" alt="Blood_Drop">

        <span style="font-size:25px">Update Profile</span>

        <p class="text-center">Update your credentials</p>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success"><?php echo $_SESSION["success"]; ?></div>
        <?php } 
        if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger"><?php echo $_SESSION["error"]; ?></div>
        <?php }
        echo validation_errors('<div class="alert alert-danger">', '</div>'); 

        foreach($data as $row){  ?>
        <form action="<?php echo base_url()?>User/update" method="POST">
            <div class="form-group">
                <label for="username" class="label-default">Username:</label>
                <input name="username" class="form-control" id="username" type="text" value="<?=$row->username?>">
            </div>
            <div class="form-group">
                <label for="email" class="label-default">Email</label>
                <input name="email" class="form-control" id="email" type="email" value="<?=$row->email?>">
            </div>
            <div class="form-group">
                <label for="gender" class="label-default">Gender:</label>
                <select name="gender" class="form-select" id="gender">
                <?php echo "<option selected value='".$row->gender."'>".$row->gender."</option>"?>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telephone" class="label-default">Telephone:</label>
                <input name="telephone" class="form-control" id="telephone" type="tel" value="<?=$row->telephone?>">
            </div>
            <div>
                <button name="update" class="btn btn-blood p-2">Update</button>
            </div>
        </form>
        <?php } ?>
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