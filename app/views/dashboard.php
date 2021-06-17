<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/mainstyle.css">
</head>
<style>
  path#ac_path_z,
  path#ac_path_11,
  path#ac_path_13,
  path#ac_path_15 {
    fill: #bf0000;
    stroke: silver;
  }

  path#ac_path_10,
  path#ac_path_12,
  path#ac_path_14,
  path#ac_path_16 {
    fill: #000000;
    stroke: silver;
  }
</style>

<body>
  <nav class="navbar navbar-light bg-light p-2">
    <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
      <a href="#" class="navbar-brand text-danger">
        <img class="card-img-top" style="width:15px; height:4vh" src="<?php echo base_url() ?>assets/images/bloodDrop.png" alt="Blood_Drop">
        Hope_Drops
      </a>
      <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
      <div class="mr-3 mt-1">
      </div>
      <div class="dropdown">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
          Admin <?php echo $_SESSION['username']; ?>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="<?php echo base_url() ?>user/profile">Update profile</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url() ?>user/profile">Settings</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url(); ?>auth/logout">Log out</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>dashboard/index">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span class="ml-2">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>select/index">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span class="ml-2">Users</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>donor/index">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span class="ml-2">Donors</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>mail/index">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="4"></line>
                  <line x1="6" y1="20" x2="6" y2="14"></line>
                </svg>
                <span class="ml-2">Requests</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>user/profile">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                  <polyline points="2 17 12 22 22 17"></polyline>
                  <polyline points="2 12 12 17 22 12"></polyline>
                </svg>
                <span class="ml-2">Profile settings</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-danger">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </nav>
        <h1 class="h2">The ABO system</h1>
        <p class="font-weight-bold"> “Blood Donation Costs You Nothing, But It Can Mean The World To Someone In Need.”</p>
        <div class="row">
          <div class="col-md-8 col-sm-12 card p-3">
            <div id="bar-chart" style="height: 400px;"></div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card text-center">
              <div class="card-header">
                Featured
              </div>
              <div class="card-body">
                <h5 class="card-title">Hope blood overview</h5>
                <p class="card-text">We have 4 blood group types each with positive and negative blood group.</p>
                <div>
                <ol class="list-group list-group-numbered">
                  <li class="list-group-item"><b>A</b> blood group</li>
                  <li class="list-group-item"><b>B</b> blood group</li>
                  <li class="list-group-item"><b>AB</b> blood group</li>
                  <li class="list-group-item"><b  >O</b> blood group</li>
                </ol>
                </div>
                <a href="<?php echo base_url() ?>select/index" class="btn btn-danger mt-4 my-2">See all users</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row my-4">
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top" style="width:30px; height:7vh" src="<?php echo base_url() ?>assets/images/bloodDrop.png" alt="Blood_Drop">
                <h5 class="text-right">Blood Group A+</h5>
                <h5 class="card-title"><?php echo $a_pos; ?> Donors</h5>
                <p class="card-text">A RhD positive</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top" style="width:30px; height:7vh" src="<?php echo base_url() ?>assets/images/bloodDrop.png" alt="Blood_Drop">
                <h5 class="text-right">Blood Group A-</h5>
                <h5 class="card-title"><?php echo $a_neg; ?> Donors</h5>
                <p class="card-text">A RhD Negative</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top" style="width:30px; height:7vh" src="<?php echo base_url() ?>assets/images/bloodDrop.png" alt="Blood_Drop">
                <h5 class="text-right">Blood Group B+</h5>
                <h5 class="card-title"><?php echo $b_pos; ?> Donors</h5>
                <p class="card-text">B RhD positive</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top" style="width:30px; height:7vh" src="<?php echo base_url() ?>assets/images/bloodDrop.png" alt="Blood_Drop">
                <h5 class="text-right">Blood Group B-</h5>
                <h5 class="card-title"><?php echo $b_neg; ?> Donors</h5>
                <p class="card-text">B RhD Negative</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-4">
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top" style="width:30px; height:7vh" src="<?php echo base_url() ?>assets/images/bloodDrop.png" alt="Blood_Drop">
                <h5 class="text-right">Blood Group AB+</h5>
                <h5 class="card-title"><?php echo $ab_pos; ?> Donors</h5>
                <p class="card-text">B RhD positive</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top" style="width:30px; height:7vh" src="<?php echo base_url() ?>assets/images/bloodDrop.png" alt="Blood_Drop">
                <h5 class="text-right">Blood Group AB-</h5>
                <h5 class="card-title"><?php echo $ab_neg; ?> Donors</h5>
                <p class="card-text">AB RhD positive</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top" style="width:30px; height:7vh" src="<?php echo base_url() ?>assets/images/bloodDrop.png" alt="Blood_Drop">
                <h5 class="text-right">Blood Group O+</h5>
                <h5 class="card-title"><?php echo $o_pos; ?> Donors</h5>
                <p class="card-text">O RhD positive</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top" style="width:30px; height:7vh" src="<?php echo base_url() ?>assets/images/bloodDrop.png" alt="Blood_Drop">
                <h5 class="text-right">Blood Group O-</h5>
                <h5 class="card-title"><?php echo $o_neg; ?> Donors</h5>
                <p class="card-text">0 RhD Negative</p>
              </div>
            </div>
          </div>
        </div>
        <footer class="pt-5 d-flex justify-content-between">
          <span>Copyright © Hope_Drop</span>
        </footer>
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
<script>
  anychart.onDocumentReady(function() {
    // set the data
    var data = {
      header: ["Blood groups", "Donors"],
      rows: [
        ["A +", <?php echo $a_pos; ?>],
        ["A -", <?php echo $a_pos; ?>],
        ["B +", <?php echo $b_pos; ?>],
        ["B -", <?php echo $b_neg; ?>],
        ["AB +", <?php echo $ab_pos; ?>],
        ["AB -", <?php echo $ab_neg; ?>],
        ["O +", <?php echo $o_pos; ?>],
        ["O -", <?php echo $o_neg; ?>]
      ]
    };

    // create the chart
    var chart = anychart.column();

    // add data
    chart.data(data);

    // draw
    chart.container("bar-chart");
    chart.draw();
  });
</script>

</html>