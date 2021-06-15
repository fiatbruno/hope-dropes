<!DOCTYPE html>

<!-- <?php 
session_start();
if(isset($_SESSION['error'])){
    location('dashboard/login');
}
?> -->
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="<?php base_url('assets/css/rome.css');?>">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php base_url();?>assets/css/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/style.css">
</head>
<body>
    <div class="container">
    <nav class="nav-bar">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="<?php echo base_url()?>assets/images/logo.jpg" alt="" style="height:15%; width:15%;" class="d-inline-block align-text-top">
     <span class="text-center mt-5">HopeDropes</span> 
    </a>
  </div>
</nav>
    </nav>
    </div>

    <div class="container my-5">
        <div class="row mt-5" id="row">
            <!-- <div  class="col-4"> -->
            <p class="text-center w-25 mt-5 col-4">The blood I was given gave me power to work harder and be more stronger</p>
            
            <!-- </div> -->
            <!-- <div class="col-8"> -->
            <img src="<?php echo base_url()?>assets/images/mysvg.jpg" alt="image"class="w-75 col-8">
            <!-- </div> -->
        </div>
       <div class="row w-100 mx-2">
       <div class="card col-4" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo base_url();?>assets/images/12349205.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Mother's tears can't save her child, but your blood can</p>
                <a href="<?php echo base_url();?>userDashboard/viewAppointments" class="btn btn-danger mt-5">My appointments</a>
            </div>
        </div>
        <div class="card mx-2 col-4" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo base_url();?>assets/images/post-img.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Each single drop of your own blood could put a smile on someone's face and hope on someone's heart</p>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Make appointment
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" class="form">
        <div class="content">
    
    <div class="container text-left">
      <div class="row justify-content-center">
        <div class="col-lg-3">
          <form action="#" class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="input_from">Select Date</label>
                <input type="text" class="form-control" id="input">
              </div>
            </div>
          </form>
        </div>
      </div>
          
    </div>
  </div>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/rome.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
        <div class="card col-4" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo base_url();?>assets/images/donation.jpg" alt="Card image cap">
            <div class="card-body">
            <p class="card-text">Donate a little drops of your blood and you'll be someone's hero</p>
                <a href="<?php echo base_url();?>userDashboard/userprofile" class="btn btn-danger mt-5 btn-center">My profile</a>
            </div>
        </div>
       </div>
    </div>
    <div class="row bg-danger">
        <footer>
            <div class="container">
                <h6>Address</h6>
                <div class="container">
                   <div class="col-12 w-100">Email:hopedrops@gmail.com</div> 
                   <div class="col-12 w-100">Instagram:hopedropes</div> 
                   <div class="col-12 w-100">Twitter:hopedropes</div> 
                </div>
            </div>
        </footer>
    </div>
</body>
</html>