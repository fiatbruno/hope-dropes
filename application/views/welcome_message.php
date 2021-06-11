<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- <link rel="stylesheet" href="<?php echo base_url() ?>/bootstrap-5.0.1-disk/css/bootstrap.min.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link href="<?php echo base_url()?>assets/css/responde.css">
	<style type="text/css">
		::selection {
			background-color: #4caf50;
			color: white;
		}

		::-moz-selection {
			background-color: #4caf50;
			color: white;
		}
	</style>
</head>

<body>
<nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand text-danger font-weight-bold" href="#">
               Hope_Drops
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
            <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="mr-3 mt-1">
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                 John Doe
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </div>
        </div>
    </nav>

	<div class="col-12 p-3 container-fluid row justify-content-center">
		<div class="col-6 shadow-sm p-5 mt-3">
			<form class="rounded mt-2 needs-validation" novalidate action="#" method="GET">
				<h3 class="text-success mb-3">Reset password </h3>
				<div class="mb-3 mt-2 row">
					<label for="exampleFormControlInput1" class="form-label col-3">Sent to Email</label>
					<input type="email" class="form-control w-75" id="exampleFormControlInput1" placeholder="name@example.com" required>
					<div class="invalid-feedback">
						Please enter a valid email!
					</div>
				</div>
				<div class="mb-3 mt-2 row">
					<label for="exampleFormControlInput1" class="form-label col-3">Sent By Doctor</label>
					<input type="text" class="form-control w-75" id="exampleFormControlInput1" placeholder="dr. Donatien" required>
					<div class="invalid-feedback">
						Please enter a valid email!
					</div>
				</div>
				<div class="mb-3 mt-2 row">
					<label for="exampleFormControlInput1" class="form-label col-3">Message</label>
					<textarea type="text" class="form-control w-75 h" style="width: 100px" id="exampleFormControlInput1" placeholder="The response to the donnor...." required></textarea>
					<div class="invalid-feedback">
						Message is required!
					</div>
				</div>
				<div class="justify-content-center">
					<button class="btn btn-danger w-50 mb-2 justify-content-end" type="submit">Send</button>
				</div>
			</form>
		</div>
	</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
		'use strict'

		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.querySelectorAll('.needs-validation')

		// Loop over them and prevent submission
		Array.prototype.slice.call(forms)
			.forEach(function(form) {
				form.addEventListener('submit', function(event) {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
	})()
</script>

</html>