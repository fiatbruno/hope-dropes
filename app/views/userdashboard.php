<!DOCTYPE html>

<!-- <?php
      session_start();
      if (isset($_SESSION['error'])) {
        // location('dashboard/login');
      }
      ?> -->
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <link rel="stylesheet" href="C:/xampp/htdocs/hopedropesp/assets/calendar-14/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?php base_url('assets/calender-14/css/rome.css'); ?>">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/calender-14/css/bootstrap.min.css">

  <style>
    li {
      list-style: none;
    }
  </style>
  <!-- Style -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/calender-14/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
</head>
<style>
  .nav-pills .nav-link.active,
  .nav-pills .show>.nav-link {
    background-color: white;
    color: black;
    width: 100%;
    border-radius: none;
  }

  .nav-pills .nav-link {
    color: silver;
  }

  .modal {
    z-index: 9999;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light col-ms-12 col-md-12 bg-body position-sticky top-0 shadow-sm rounded" id="navlinks" style="z-index: 999;">
    <div class="container-fluid">
      <a class="navbar-brand text-success" style="text-shadow: 0px 1px black; font-weight: bolder" href="#"> <img src="<?php echo base_url() ?>assets/images/logo.jpg" alt="" style="height:60px; width:60px;" class="d-inline-block align-text-top"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        </div>
      </div>
      <div class="d-flex">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['username'] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>user/profile">Profile</a></li>
            <li><a class="dropdown-item" href="#">Reset Password</a></li>
            <li><a class="dropdown-item" href="#">Notifications</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-danger text-white rounded shadow-sm btn px-3 mx-2" aria-current="page" href="<?php echo base_url() ?>auth/login" style="padding: 5px 10px">Logout</a>
        </li>
      </div>
    </div>
  </nav>
  <div class="w-100">
    <?php $this->session->flashdata('message') ?>
  </div>


  <!-- Side navbar -->
  <div class="row w-100 sideNav">
    <div class="right col-3 position-relative col-ms-12">
      <div class="d-flex align-items-start bg-dark col-ms-12 position-fixed" style="height: 640px; width: 20%;">
        <div class="nav flex-column nav-pills w-100" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link p-3 active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</button>
          <button class="nav-link p-3" id="v-pills-blood-tab" data-bs-toggle="pill" data-bs-target="#v-pills-blood" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Blood type</button>
          <button class="nav-link p-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Donate</button>
          <button class="nav-link p-3" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Events</button>
          <button class="nav-link p-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
        </div>
      </div>

    </div>


    <div class="container my-5 col-7 col-ms-12">
      <div class="tab-content" id="v-pills-tabContent">

        <!-- Home page -->
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row mt-5 mb-5" id="row">
            <div class="col">
              <h3>Welcome to hope dropes</h3>
              <p>You can now donate blood to the patients all you need to do is to follow the rules so you can donate blood.</p>
              <p class="text-center mt-2">The blood I was given gave me power to work harder and be more stronger </p>
              <div class="col">
                <ol class="list-group list-group-numbered">
                  <li class="list-group-item">Add blood group</li>
                  <li class="list-group-item">Go to book donate</li>
                  <li class="list-group-item">Go to book appointment</li>
                  <li class="list-group-item">Check email for the response</li>
                </ol>
              </div>
            </div>
            <div class="col-7">
              <img src="<?php echo base_url() ?>assets/images/mysvg.jpg" alt="image" class="w-100">
            </div>
          </div>
        </div>

        <!-- Add blood type -->
        <div class="tab-pane fade" id="v-pills-blood" role="tabpanel" aria-labelledby="v-pills-blood-tab">
          <div class="row w-100 mx-2">
            <div class="card col-8" style="border: none;">
              <img class="card-img-top h-75" src="<?php echo base_url(); ?>assets/images/image-asset.gif" alt="Card image cap">
              <div class="card-body">
                <h3>Add blood group</h3>
                <p class="card-text">Add your blood group so that we can know which blood type group you want to donate!</p>
              </div>
              <a href="<?php echo base_url(); ?>blood/chooseBlood" class="btn btn-danger mt-2">Add blood type <i class='fas fa-angle-double-right ' style='font-size:20px;margin-left: 15px;'></i></a>
            </div>
          </div>
        </div>

        <!-- Make appointments -->
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <div class="row w-100 mx-2">
            <div class="card col-7" style="border: none;">
              <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/12349205.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Mother's tears can't save her child, but your blood can</p>
              </div>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Send Appointment</button>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url() ?>UserDashboard/makeappointment" method="POST">
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">User name</label>
                        <input type="text" class="form-control" value="<?= $_SESSION['username'] ?>" id="recipient-name" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="date">Select date</label>
                        <input type="date" class="form-control" name="date" id="date">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <?php 
                        $found = 0;
                        foreach($blood as $row){
                          if($row->user_id == $_SESSION['user_id']){
                              $found += 1;
                          } 
                        }

                        if($found==0){
                          echo "<p>Please first add blood group!<p>";
                          echo "<button type='submit' class='btn btn-danger' disabled>Send appointment</button>";
                        }else{
                          echo "<button type='submit' class='btn btn-danger'>Send appointment</button>";
                        }
                        ?>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <div class="table table-responsive shadow-sm">
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th>No</th>
                  <th>Date</th>
                  <th>Added time</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $n = 1;
                if ($data) {
                  foreach ($data as $row) { 
                    $id = $row->appointId;
                    ?>
                    <tr>
                      <td><?= $n ?></td>
                      <td><?= $row->data ?></td>
                      <td><?= $row->addedTime ?></td>
                      <td><a href="<?php echo base_url()?>UserDashboard/updateForm?id=<?= $id ?>">Update</a></td>
                      <td><a href="<?php echo base_url()?>UserDashboard/deleteAppointment?id=<?=$id ?>">Delete</a></td>
                    </tr>
                    <?php $n += 1 ?>
                  <?php  }
                } else { ?>
                  <tr>
                    <td>You don't have any appointment</td>
                  </tr>
                <?php }
                ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Personal account or settings -->
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="card col-4" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/donation.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Donate a little drops of your blood and you'll be someone's hero</p>
              <a href="<?php echo base_url(); ?>user/profile" class="btn btn-danger my-4 btn-center">My profile</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <footer class="row bg-dark text-white py-2 col-12 w-100" style="position: absolute; bottom: 0;">
    <div class="container text-center">
      <span class="text-center">Copyright hopedropes group Rwanda Coding Academy</span>
    </div>
  </footer>

</body>

</html>