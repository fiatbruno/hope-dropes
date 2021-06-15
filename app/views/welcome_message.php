<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hope dropes</title>
</head>
<style>
	.home-container {
		background-image: radial-gradient(white, silver);
		width: 100.81%;
	}

	.btn {
		padding: 5px 10px;
	}

	.content {
		margin: 150px 100px;
	}

	nav {
		z-index: 999;
	}
</style>

<body>

	<div data-bs-spy="scroll" data-bs-target="#navlinks" data-bs-offset="0" class="scrollspy-example" tabindex="0">
		<nav class="navbar navbar-expand-lg navbar-light col-ms-12 col-md-12 bg-body position-sticky top-0 shadow-sm p-3 rounded" id="navlinks">
			<div class="container-fluid">
				<a class="navbar-brand text-success" style="text-shadow: 0px 1px black; font-weight: bolder" href="#"><img src="<?php echo base_url() ?>assets/images/blood.jpg" style="width: 50px;"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
						<a class="nav-link" href="#about">About Us</a>
						<a class="nav-link" href="#services">Services</a>
						<a class="nav-link" href="#table">Help</a>
					</div>
				</div>
				<div>
					<a href="<?php echo base_url() ?>auth/login" class="btn btn-danger shadow-sm" style="padding: 5px 10px">Sign in</a>
				</div>
			</div>
		</nav>
		<div class="home-container row" id="home">
			<div class="col container justify-content-center p-4" style="margin-left: 40px;">
				<div class="col-8 content">
					<h1>Donate blood save lives!</h1>
					<p class=" text-secondary">Saving people's lives is something which you can provide easly. What you need to do is first the heart to give.
						We are here to help those who are willing to donnate blood to those in need.
					</p>
					<p><button type="submit" class="btn-danger shadow-sm row" style="padding: 5px 20px; border-none: none">Donate</button></p>
				</div>
			</div>

			<div class="col container">
				<img src="<?php echo base_url() ?>assets/images/doctor.png">
			</div>
		</div>

		<div class="col-md-11 col-ms-11 p-5 m-5 justify-content-center" id="about">
			<div class="row row-cols-1 row-cols-md-2 g-2 row-cols-ms-5">
				<div class="col-6">
					<div class="card h-100 m-1" style="border: none;">
						<div class="card-body col-10">
							<h2 class="text-center text-dark mb-3">About Us</h2>
							<p class="card-text">Each and every person can expore the hospital. To know more about the hospital using the hospital website. As long as you have the heart to donate to the needy people you can use this app to help needy ones.</p>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="card h-100 m-1" style="border: none;">
						<img src="<?= base_url() ?>assets/images/post-img.jpg" class="card-img-top" alt="img3" style="height: 300px;">
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-11 col-ms-11 p-5 m-5 justify-content-center" id="services">
			<h2 class="text-center text-dark mb-3">Our Services</h2>
			<div class="row row-cols-1 row-cols-md-3 g-4 row-cols-ms-5">
				<div class="col">
					<div class="card h-100 shadow m-1" style="border: none;">
						<img src="<?= base_url() ?>assets/images/donation.jpg" class="card-img-top" alt="img3" style="height: 200px;">
						<div class="card-body">
							<h3 class="card-title">Explore Hospital</h3>
							<p class="card-text">Each and every person can expore the hospital. To know more about the hospital using the hospital website.</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow m-1" style="border: none;">
						<img src="<?= base_url() ?>assets/images/post-img.jpg" class="card-img-top" alt="img2" style="height: 200px;">
						<div class="card-body">
							<h3 class="card-title">Donate blood</h3>
							<p class="card-text">A person who is willing to donate blood can donate it to the patient in the hospital. And this is the very amazing action which is really great!</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow m-1" style="border: none;">
						<img src="<?= base_url() ?>assets/images/mysvg.jpg" class="card-img-top" alt="img1" style="height: 200px;">
						<div class="card-body">
							<h3 class="card-title">Doctor appointment</h3>
							<p class="card-text">Any person can book an appointment with the doctor about when to donate the blood. Then when time has reached a donnor can come to the hospital to donate blood.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form">

		</div>

	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>