<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
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
            height: 633px;
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
    
    <div class="container form mt-5 ml-12 shadow p-3 mb-5 bg-body  rounded">
    <a href="<?php echo base_url()?>">Home</a>
    <table>
        
    <?php
        $i=1;
        if(!empty($users))
        {
            foreach($users as $row)
            {
                $id = $row->user_id;
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$row->username."</td>";
                echo "<td>".$row->email."</td>";
                echo "<td> <button type='button' class='btn btn-outline-primary'><span><a href='".base_url()."updateA/update_user/$id'><i class='fa-solid fa-square-pen'></i></span>Edit</a></button></td>";
                echo "<td> <button type='button' class='btn btn-danger'><span><a href='".base_url()."updateA/deleteUser/$id'><i class='fa-solid fa-trash'></i></span>Delete</a></button></td>";
                echo "</tr>";
                $i++;
            }
        }else {
            echo "failed";
        }
        ?>
    </table>
        
    </div>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>