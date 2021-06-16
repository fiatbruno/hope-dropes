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

		<div class="form col-lg-4">
				<h2>Change Password</h2>
                <?php if($this->session->flashdata("confPass")){ ?>
					<div class="alert alert-primary" role="alert">
						<?= $this->session->flashdata("confPass") ?>
					</div>
				<?php } ?>	
                
				<form action="<?php echo base_url()?>Auth/changePassword" method="POST" novalidate>
				<div class="form-group">
					<label for="password" class="label-default">New Password</label>
					<input name="password" class="form-control" id="password" type="password">
                    <input name="email" value="<?=$_GET['email']?>" type="email" hidden>
				</div>
                <div class="form-group">
					<label for="confPass" class="label-default">Confirm Password</label>
					<input name="confPassword" class="form-control" id="confPass" type="password">
				</div>
				<button type="submit" class="btn btn-blood">Send</button>
				</form>
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