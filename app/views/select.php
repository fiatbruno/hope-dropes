<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
   <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script> -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/mainstyle.css"></head>
<body>
<nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand text-danger font-weight-bold" href="#">
            <img class="card-img-top" style="width:15px; height:4vh"  src="<?php echo base_url()?>assets/images/bloodDrop.png" alt="Blood_Drop">
               Hope_Drops
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <!-- <div class="col-12 col-md-4 col-lg-2">
            <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
        </div> -->
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="mr-3 mt-1">
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                Admin <?php echo $_SESSION['username']; ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item"  href="<?php echo base_url()?>user/profile">Settings</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url(); ?>auth/logout" >Log out</a></li>
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
                          <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>dashboard/index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span class="ml-2">Dashboard</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url()?>select/index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="ml-2">Users</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"  href="<?php echo base_url()?>donor/index">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="ml-2">Donors</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"  href="<?php echo base_url()?>mail/index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                            <span class="ml-2">Requests</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url()?>user/profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            <span class="ml-2">Profile settings</span>
                          </a>
                        </li>
                      </ul>
                </div>
            </nav>
<main class="col-md-9 ml-sm-auto col-lg-10  wd-50 ml-lg-17 px-md-4 py-4">
<nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-danger">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List of Users</li>
                    </ol>
                </nav>
<div class="card">
  <div class="card-body text-center">
  <h2 class="text-center text-danger">List of All users</h2>
  </div>
</div>
  <div class="container  mt-30 table-responsive">
  <table class="table  table-hover  text-nowrap w-100" id="table_example">
            <thea>
                <tr>  
                <th>#</th>                                    
                <th>Username </th>
                <th>Gender </th>
                <th>Telephone  </th>
                <th>Email </th>        
                <th>Actions</th>
                </tr>  
            </thead>
            <tbody>  
                <?php  
                $id = 1;
                foreach ($user as $row)  
                {  
                    ?><tr>  
                    <td><?=$id?></td>  
                    <td><?php echo $row->username;?></td>  
                    <td><?php echo $row->gender;?></td>  
                    <td><?php echo $row->telephone;?></td>  
                    <td><?php echo $row->email;?></td>  
                    <td><a href="<?php echo base_url()?>user/UpdateForm" class="btn btn-outline-success" role="button" aria-disabled="true">Update</a>
                    <a href="<?php echo base_url()?>user/delete" name="delete" class="btn btn-outline-danger" role="button" aria-disabled="true">Delete</a>
</td>
                    </tr>  
                    <?php $id+=1;?>
                <?php }  
                ?>  
            </tbody>  
        </table>
        <p class="text-right"><?php echo $links; ?></p>
</div>
<a href="<?php echo base_url()?>createPdf/addToPdf" class="btn btn-primary btn-lg" role="button" aria-disabled="true">View Pdf of users</a>
</main>
<!-- <script>
    $(document).ready( function () {
        $('#table_example').DataTable(
            {
                "scrollX": true
            }
        );
    } );
</script> -->
</body>
</html>