<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <div class="container">
    <form action="" class="form w-75" method="post">
    <h1 class="heading mx-5 text-center">My profile</h1>
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
        <input type="submit" value="Update" class="bg-success text-white w-25 rounded my-3 mx-5" name="submit">
    </div>
    </div>
    </form>
    </div>
</body>
</html>