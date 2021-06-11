<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/index.css">
</head>

<body>

		<?php
			echo $this->session->flashdata('email_sent');
			echo form_open('/emai_sent/send_mail');
		?>
		<a href="<?php echo base_url();?>index.php/Welcome/index">Send response</a>
		<div class="form col-4 p-3 h-25" style="margin-left: auto;">
				<h1 class="text-dark mb-3">Reset password </h1>
				<div class="mb-3 mt-3">
					<label for="exampleFormControlInput1" class="form-label">Email address</label>
					<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
					<div class="invalid-feedback">
						Please enter a valid email!
					</div>
				</div>
				<button class="btn btn-blood w-25 mb-3" type="submit">Send</button>
		</div>
		<?php echo form_close();?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
	(function() {
		'use strict'

		var forms = document.querySelectorAll('.needs-validation')

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