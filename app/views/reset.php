<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Reset Password</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
</head>

<body>
		<h1 class="head">Hope Drops</h1>

		<?php
		?>
		<div class="form col-lg-4">
				<h1>Reset password </h1>
				<?php if (isset($_SESSION['success'])) {?>	
				<div class="alert alert-success"><?php echo $_SESSION["success"];?></div>
				<?php
				}?>
				<?php if (isset($_SESSION['error'])) {?>
					<div class="alert alert-danger"><?php echo $_SESSION["error"];?></div>
				<?php
				}?>
				<br>
				<a href="<?php echo base_url();?>user/profile">Profile</a>
				<br><br>
				<a href="<?php echo base_url();?>dashboard/index">Dashboard</a>
		</div>
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