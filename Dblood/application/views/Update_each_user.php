
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            font-family: "Poppins";
            background: #FF416C; /* fallback for old browsers */
            background: -webkit-linear-gradient(
                to right,
                #FF4B2B,
                #FF416C
            ); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(
                to right,
                #FF4B2B,
                #FF416C
            ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .form{
            /* height: 633px; */
            border: 1px solid black;
            padding: 5rem;
            border-radius: 3rem;
            box-shadow: 20px 20px #212529;
            background-color: #fff;
            margin: 7rem auto;
        }

        .btn-blood {
            margin: 12px 0;
            background-color: #FD3A5C;
            color: #fff;
        }
        .btn-blood:hover {
            background-color: #fff;
            color: #FD3A5C;
            border: 1px solid #FD3A5C;
        }

    </style>
</head>
<body>

<div class="col-6 shado p-5 mt-5 form">
<?php 
    foreach($updates as $update){
        $id = $update->user_id;
    }
    echo $id 
?>        

        <form action="<?php echo base_url('updateA/editUserForm/').$id?>" method="POST" class="form-inline">
            <h3 class="text-center">Update User</h3>
            
            <label for="username" class="form-label">Username</label>
            <?php echo form_error('username'); ?>
            <input type="text" name="username" class="form-control" id="username" value="<?php echo set_value('username',$update->username);?>" required>

            <label for="email" class="form-label">Email</label>
            <?php echo form_error('email'); ?>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo set_value('email',$update->email);?>" required>

            <label for="email" class="form-label">Gender</label>
            <?php echo form_error('email'); 

            if($update->gender=='female'){ ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female" checked>
                    <label class="form-check-label" for="gender">
                        Female
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                    <label class="form-check-label" for="gender">
                        Male
                    </label>
                </div>
            <?php }else{ ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                    <label class="form-check-label" for="gender">
                        Female
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked>
                    <label class="form-check-label" for="gender">
                        Male
                    </label>
                </div>
            <?php }
            ?>

            <label for="email" class="form-label">Telephone</label>
            <?php echo form_error('email'); ?>
            <input type="number" name="telephone" class="form-control" id="email" value="<?php echo set_value('email',$update->telephone);?>" required>

            <button type="submit" class="btn btn-blood mt-2">Update</button>
        </form>
        </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>