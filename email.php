<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $destan="Kamalafizzet45@gmail.com";
    $subje="Hi";
    $body="I am njf a a";
    $headers="From: eumuhoza83@gmail.com";

    if(mail($destan,$subje,$body,$headers)){
        echo  "email sent";
    }else{
        echo "Email not sent";
    }
    ?>
</body>
</html>