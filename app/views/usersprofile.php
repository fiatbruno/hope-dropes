<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
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
          <a class="nav-link px-3 mx-2" aria-current="page" href="<?php echo base_url();?>userDashboard/displaydashboard">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active bg-secondary px-3 mx-2 rounded text-white" aria-current="page" href="<?php echo base_url();?>userDashboard/userprofile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-danger text-white rounded px-3 mx-2" aria-current="page" href="<?php echo base_url();?>Auth/logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container my-2">
    <form action="<?php echo base_url()?>UserDashboard/updateprofile" class="form w-75 m-auto bg-danger mt-3 rounded" method="post">
    <h1 class="heading mx-5 text-center text-white">My profile</h1>
    <img src="<?php echo base_url();?>assets/images/profile.png" style="width:80px; height:80px;" class="image m-auto" alt="">
    <div class="user">
    <?php
    // $userid=$_SESSION['user_id'];

    $this->load->database();
    $data=$this->db->query("select *from users where user_id='3'");
    $data->result();
    $row=$data->row_array();
    // echo $row['username'];
    ?>
    <div class="container w-75">
        <label for="username" class="col-12 text-white">Username</label>
        <input type="text" class="form-control col-12" name="username" value="<?php echo $row['username'];?>">
    </div>
    <div class="container w-75">
        <label for="email" class="col-12 text-white">Email</label>
        <input type="email" class="form-control col-12" name="email" value="<?php echo $row['email']?>">
    </div>
    <div class="container w-75">
        <label for="password" class="col-12 text-white">Password</label>
        <input type="password" class="form-control col-12" name="password" value="<?php echo $row['password']?>">
    </div>
    <div class="container w-75">
        <label for="gender" class="text-white">Gender</label>
        <select type="text" class="form-control w-50" name="gender" value="<?php echo $row['gender'];?>">
        <option value="male">Male</option>
        <option value="female">Female</option>
        </select>
    </div>
    <div class="container w-75">
        <label for="telephone" class="col-12 text-white">Telephone</label>
        <input type="text" name="telephone" class="form-control" value="<?php echo $row['telephone'];?>">
    </div>

    <div class="container w-75">
        <input type="submit" value="Update" class="bg-success text-white w-25 rounded my-3 mx-5 p-1" name="submit">
    </div>
    </div>
    </form>
    </div>
</body>
</html>