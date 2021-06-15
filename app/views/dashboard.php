<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/dashboard.css">
</head>
<body>
    <div>
              <main>
                <div class="text">
                  <h1>Hope Drops</h1>              
                  <?php if (isset($_SESSION['success'])) {?>        
                  <div class="alert alert-success"><?php echo $_SESSION["success"];?></div>
                  <?php
                  }?>
                  <?php if (isset($_SESSION['error'])) {?>
                      <div class="alert alert-danger"><?php echo $_SESSION["error"];?></div>
                  <?php
                  }?>
                  <p class="font-weight-bold"> "Blood Donation Costs You Nothing, But It Can Mean The World To Someone In Need."</p>
                </div>
                  <div class="flex">
                    <div class="line">
                      <a href="<?php echo base_url()?>dashboard/index">Dashboard</a>
                      <div class="beirut"></div>
                      <a href="<?php echo base_url()?>select/index">Donors</a>
                      <div class="beirut"></div>
                    </div>
                    <div class="line">
                      <a href="<?php echo base_url()?>mail/index">Reports</a>
                      <div class="beirut"></div>
                      <a href="<?php echo base_url()?>user/profile">Profile</a>
                      <div class="beirut"></div>
                    </div>
                  </div>
              </main>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>