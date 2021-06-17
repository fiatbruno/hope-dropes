<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    
    <!-- My Style Sheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">


    <title>Register Page</title>
    
  </head>
  <body class="">
    
    <h1></h1>

    <div class="form col-lg-4">
    <img class="card-img-top" style="width:120px; height:20vh"  src="<?php echo base_url()?>assets/images/logo.jpg" alt="Blood_Drop">

<span style="font-size:25px">Register Here!</span>
        <div>
            <p>Already have an account? <a href="<?php echo base_url()?>auth/login">Login</a></p>
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
        <?php 
        if($this->session->flashdata("user_exist")){
            echo "<div class='alert alert-danger'>".$this->session->flashdata("user_exist")."</div>";
        }
        ?>
        <form action="" method="POST">
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
        
            <div class="form-group">
                <label for="district" class="form-label">District Name</label>
                <select class="form-select" aria-label="Default select example" name="districtId" id="district" onchange="get_sectors(event)" required>
                    <option>--- Select district Name</option>
                    <?php
                        if(!empty($table)){
                            foreach($table as $district){ ?>
                                <option value="<?php echo $district->districtId?>"><?php echo $district->districtName ?></option>
                            <?php }
                        };
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="district" class="form-label">Sector Name</label>
                <select aria-label="Default select example" name="sectorId" id="sector" class="sectors form-select" required>
                    <option>--- Select sector Name ---</option>
                    <?php
                        if(!empty($sectors)){
                            foreach($sectors as $sector)
                            {
                                $district_id = $sector->districtId ?>
                                <option value="<?php echo $sector->sectorId?>" class="<?=$district_id ?> allSectors"><?php echo $sector->sectorName?></option>
                            <?php }
                        }else{
                                echo "<option>nothing</option>";
                        }
                    ?>
                </select>
            </div>
                <input name="role" class="form-control" id="role" type="text" value="donor" hidden>
            
            <div>
                <button name="register" class="btn btn-blood p-2">Register</button>
            </div>
        </form>
    </div>
    <script>
        function get_sectors(ev){
            let selector = document.getElementsByClassName('sectors')[0];
            selector.value = "";
            let allSectors = document.getElementsByClassName("allSectors");
            id = ev.target.value 
            for(let j=0; j<allSectors.length; j++){
                allSectors[j].style.display = "none";
            }
    // 
            for(let i=0; i<allSectors.length; i++){
                if(allSectors[i].className.includes(id)){
                    allSectors[i].style.display = "block";
                }
            }
        }
  </script>
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>