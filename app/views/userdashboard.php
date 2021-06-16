<!DOCTYPE html>

<!-- <?php 
session_start();
if(isset($_SESSION['error'])){
    // location('dashboard/login');
}
?> -->
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


<link rel="stylesheet" href="C:/xampp/htdocs/hopedropesp/assets/calendar-14/fonts/icomoon/style.css">

<link rel="stylesheet" href="<?php base_url('assets/calender-14/css/rome.css');?>">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php base_url();?>assets/calender-14/css/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="<?php base_url();?>assets/calender-14/css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light w-100 d-flex justify-content-end">
    <a class="navbar-brand" href="#">
        <img src="<?php echo base_url()?>assets/images/logo.jpg" alt="" style="height:15%; width:15%;" class="d-inline-block align-text-top">
     <span class="text-center mt-5">HopeDropes</span> 
    </a>
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link px-3 mx-2 active bg-secondary rounded text-white" aria-current="page" href="<?php echo base_url();?>userDashboard/displaydashboard">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 mx-2" aria-current="page" href="<?php echo base_url();?>user/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-danger text-white rounded px-3 mx-2" aria-current="page" href="<?php echo base_url();?>auth/logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="w-100">
<?php $this->session->flashdata('message')?>
</div>
    <div class="container my-5">
        <div class="row mt-5" id="row">
            <!-- <div  class="col-4"> -->
            <p class="text-center w-25 mt-5 col-4">The blood I was given gave me power to work harder and be more stronger</p>
            <!-- <p class="text-center w-25 mt-5 col-4" >The greatest investment of life is when you save someone with few drops of your own blood</p> -->
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
                <a href="<?php echo base_url();?>blood/chooseBlood" class="btn btn-danger mt-4">Make appointments</a>
            </div>
        </div>
        <div class="card mx-2 col-4" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo base_url();?>assets/images/post-img.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Each single drop of your own blood could put a smile on someone's face and hope on someone's heart</p>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Set Appointment
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-5" id="exampleModalLabel">Make appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url()?>UserDashboard/makeappointment" method="POST">
              <label for="date">Select date</label>
              <input type="date" name="date" id="date">
              <!-- <a href="<?php echo base_url()?>UserDashboard/makeappointment"> -->
              <input type="submit" name="submit" class="submit w-25 bg-success p-1">
              <!-- </a> -->
          </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirm</button>
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
                <a href="<?php echo base_url();?>user/profile" class="btn btn-danger my-4 btn-center">My profile</a>
            </div>
        </div>
       </div>
    </div>
    <div class="row bg-danger text-white py-2 col-12 w-100">
        <footer>
            
            <div class="container text-center">
            <span class="text-center">Copyright hopedropes group Rwanda Coding Academy</span>
            </div>
        </footer>
    </div>
</body>
</html>