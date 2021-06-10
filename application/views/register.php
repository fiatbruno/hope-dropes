<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<div class="row w-100 col-12 shadow-sm">
<!-- 		
	<img src="<?php echo base_url("images/blood@2x.png")?>" alt="image" id="logo" class="logo w-25"> -->
		<nav class="nav p-3 justify-content-end">
			<a href="home.php" class="nav-link px-5">Home</a>
			<a href="register.php" class="nav-link px-5 active bg-danger text-light rounded">Register</a>
			<a href="logout.php" class="nav-link rounded">Logout</a>
		</nav>
	</div>
	<div class="row m-auto">
		<div class="container col-4">
		<!-- <img src="./blood-donation-concept-illustration_114360-5708.jpg" class="img1"> -->
		<img src=<?php echo base_url("images/blood-donation-concept-illustration_114360-5708.jpg");?> alt="">
		<div class="container">
			<div class="container">
				<h1 id="donation" class="text-center">Donation process</h1>
				<div class="container my-1">
					<p class="w-100">
						Here at hopdrops, we give appointments to donators.
						First, you have to fill out the form to the right. It is replied to by the administrator
						who sends a message to your email provided in the form indicating the time you shall go for the donation.
						Give blood, save a life.
					</p>
				</div>
			</div>
		</div>
		</div>
		<div class="container col-8 d-4 my-3">
		<form method="post" class="form m-auto w-75 px-5">
			<h1 class="text-center" id="book">Book appointment</h1>
			<div class="container py-4 mx-auto">
			<!-- <div class="container my-4">
				<label for="firstname">FirstName</label>
				<input type="text" name="firstname" class="form-control p-2 w-100">
			</div>
			<div class="container my-4">
				<label for="lastname">LastName</label>
				<input type="text" name="lastname" class="form-control p-2 w-100">
			</div> -->
			<div class="container my-4">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control p-2 w-100">
			</div>
			<div class="container my-4">
				<label for="telephone">Telephone</label>
				<input type="number" name="telephone" class="form-control p-2 w-100">
			</div>
			<div class="container my-4">
				<label for="bloodgroup">Blood Group</label>
				<select name="bloodtype" id="bloodtype" class="form-control p-2 w-100">
				<i class="fas fa-chevron-circle-down"></i>
				<option>---select type---</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="AB">AB</option>
				<option value="O">O</option>
				</select>
			</div>
			<div class="container my-4">
				<label for="address">City</label>
				<input type="text" class="form-control p-2 w-100" name="city">
			</div>
			<div class="container my-4">
				<input type="submit" value="Submit" class="form-control w-25 p-2 bg-success text-white" name="save">
			</div>
			</div>
		</form>
		</div>
	</div>
</body>
</html>