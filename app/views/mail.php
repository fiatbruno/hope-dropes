<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
   <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/dashboard.css"> 
</head>
<body>
  <main class="col-md-9 ml-sm-auto col-lg-10 ml-lg-17 px-md-4 py-4">
    <h1>Manage Blood Donors</h1>
    <?php if (isset($_SESSION['success'])) {?>        
    <div class="alert alert-success"><?php echo $_SESSION["success"];?></div>
    <?php
    }?>
    <?php if (isset($_SESSION['error'])) {?>
        <div class="alert alert-danger"><?php echo $_SESSION["error"];?></div>
    <?php
    }?>
    <a href="<?php echo base_url()?>dashboard/index">Dashboard</a>
    <br><br>
    <div class="container-table  table-responsive">
      <table class="table  table-hover table-striped table-secondary table-bordered text-nowrap w-100" id="table_example">
        <thead>
          <tr>  
            <th>User Email</th>                                    
            <th>Send Mail</th>        
            <th> Update Donor</th>
            <th>Delete Donor</th>
          </tr>  
        </thead>
        <tbody>  
          <?php  
            foreach ($h->result() as $row) {  
              ?><tr>  
                  <td><?php echo $row->email;?></td>   
                  <td><button class="btn  btn-outline-primary">Send Mail</button></td>  
                  <td><button class="btn  btn-outline-success">Update</button></td>
                  <td><button class="btn  btn-outline-danger">Delete</button></td>
                </tr>  
              <?php } ?>  
        </tbody>  
      </table>
    </div>
  </main>
<script>
    $(document).ready( function () {
        $('#table_example').DataTable(
            {
                "scrollX": true
            }
        );
    } );
</script>
</body>
</html>