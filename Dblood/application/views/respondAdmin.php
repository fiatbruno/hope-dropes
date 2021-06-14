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
	
	<style type="text/css">
		::selection {
			background-color: #4caf50;
			color: white;
		}

		::-moz-selection {
			background-color: #4caf50;
			color: white;
		}
		.shado {
			box-shadow: 0px 5px 10px 1px rgb(0 0 0 / 8%);
			border-radius: 15px;
		}
		textarea{
			height: 100px;
		}
		.submi {
			margin-left: 27%;
			margin-top: 20px;
		}
		li{
			list-style: none;
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
            <div class="mr-3 mt-1"></div>
            <div class="dropdown">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle btn-secondary btn text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						John Doe
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="<?php echo base_url()?>updateA/update">Update account</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url()?>updateA/displayUsers">Users</a></li>
						<li><a class="dropdown-item">Settings</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#">Log out</a></li>
					</ul>
				</li>
            </div>
        </div>
		
    </nav>

	<div class="col-12 p-3 container-fluid row justify-content-center">
	<a href="<?php base_url()?>">Search</a>
		<div class="col-6 shado p-5 mt-5">
        <?php
            echo $this->session->flashdata("admin_sent");
            echo form_open('/respAdmin/send_mail');
        ?>
			<form class="rounded mt-2 needs-validation" novalidate action="#" method="POST">
				<h2 class="text-success mb-3 text-center">Donnor response</h2>
				<div class="mb-3 mt-2 row">
					<label for="exampleFormControlInput1" class="form-label col-3">Sent to Email</label>
					<input type="email" class="form-control p-2  w-75" name="to_mail" id="exampleFormControlInput1" placeholder="name@example.com" required>
					<div class="invalid-feedback">
						Please enter a valid email!
					</div>
				</div>
				<div class="mb-3 mt-2 row">
					<label for="exampleFormControlInput2" class="form-label col-3">Sent By Doctor</label>
					<input type="text" class="form-control p-2 w-75" name="from_mail" id="exampleFormControlInput2" placeholder="dr. Donatien" required>
					<div class="invalid-feedback">
						Please enter a valid email!
					</div>
				</div>
				<div class="mb-3 mt-2 row">
					<label for="exampleFormControlInput3" class="form-label col-3">Message</label>
					<textarea type="text" class="form-control w-75 h" name="message" id="exampleFormControlInput3" placeholder="The response to the donnor...." required></textarea>
					<div class="invalid-feedback">
						Message is required!
					</div>
				</div>
				<div class="justify-content-center">
					<button class="btn btn-danger w-50 mb-2 submi" type="submit">Send</button>
				</div>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                </svg>

                <?php if($this->session->flashdata("admin_sent")){ ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        <?php echo $this->session->flashdata("admin_sent")?>
                    </div>
                </div>
                <?php }?>
			</form>
            <?php form_close(); ?>
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