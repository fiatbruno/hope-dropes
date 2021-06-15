<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope dropes</title>
</head>
<style>
	.home-container{
		background-image: radial-gradient(white, silver);
		width: 100.81%;
	}
	.btn{
		padding: 5px 10px;
	}
	.content{
		margin: 150px 100px;
	}
	nav{
		z-index: 999;
	}
</style>
<body>

    <div data-bs-spy="scroll" data-bs-target="#navlinks" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <nav class="navbar navbar-expand-lg navbar-light col-ms-12 col-md-12 bg-body position-sticky top-0 shadow-sm p-3 rounded" id="navlinks">
            <div class="container-fluid">
              <a class="navbar-brand text-success" style="text-shadow: 0px 1px black; font-weight: bolder" href="#"><img src="<?php echo base_url()?>assets/images/blood.jpg" style="width: 50px;"></a>
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
			  	<a href="<?php echo base_url()?>auth/login" class="btn btn-danger shadow-sm" style="padding: 5px 10px">Sign in</a>
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
					<p><button type="submit" class="btn-danger shadow-sm row"style="padding: 5px 20px; border-none: none">Donate</button></p>
				</div>
			</div>
			
			<div class="col container">
				<img src="<?php echo base_url()?>assets/images/doctor.png" >
			</div>
        </div>


        <div class="col-md-11 col-ms-11 p-3 m-5 justify-content-center" id="about">
			<div class="card mb-3">
				<img src="<?php echo base_url()?>assets/images/beirut.webp" class="card-img-top" style="height: 280px" al style="height: 150px"t="donate">
				<div class="card-body">
					<h2 class="card-title">We aim to provide for donnors a reliable resource to help needy people</h2>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Log in to donate</small></p>
				</div>
			</div>
        </div>



        <div class="col-md-12 col-sm-12 table-responsive p-4 justify-content-center" id="services">
			<div class="row row-cols-1 row-cols-md-3 g-4 p-2">
				<div class="col">
					<div class="card h-100">
					<img src="<?php echo base_url()?>assets/images/beirut.webp" class="card-img-top" style="height: 150px" alt="...">
					<div class="card-body">
						<h5 class="card-title">Donate blood</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">log in to donate</small>
					</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
					<img src="<?php echo base_url()?>assets/images/blood.jpg" class="card-img-top" style="height: 150px" alt="...">
					<div class="card-body">
						<h5 class="card-title">Book appointment</h5>
						<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">log in to book appointment</small>
					</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
					<img src="assets/images/beirut.webp" class="card-img-top" style="height: 150px" alt="...">
					<div class="card-body">
						<h5 class="card-title">Hospital</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">navigate through our page</small>
					</div>
					</div>
				</div>
			</div>
        </div>

		<div class="form">

		</div>
        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>