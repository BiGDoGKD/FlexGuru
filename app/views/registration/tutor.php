<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Tutor Registration</title>
	<?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
	<?php
	include APPROOT . '/views/includes/navbar.php';
	?>

	<!-- Tutor Registration  -->
	<div class="container student-registration pt-lg-4 pt-xs-2 pb-4">
		<div class="row">
			<div class="col-12-xs">
				<p class="text-center font-lg-xxl font-xs-lg mb-xs-1 mb-lg-2">
					Tutor Registration
				</p>
			</div>

			<form action="<?php echo URLROOT; ?>/registration/tutor" method="POST" class="form-control row" style="width: 100%">
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="firstname">First Name</label>
					<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="<?php echo $data['firstname'] ?>" required />
					<p class="form-control form-feedback text-error">
						<?php echo $data['firstnameError']; ?>
					</p>
				</div>
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="lastname">Last Name</label>
					<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo $data['lastname'] ?>" required />
					<p class="form-control form-feedback text-error">
						<?php echo $data['lastnameError']; ?>
					</p>
				</div>
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="username">Username</label>
					<input type="username" class="form-control" name="username" id="username" placeholder="Username" id="username" value="<?php echo $data['username'] ?>" required />
					<p class="form-control form-feedback text-error">
						<?php echo $data['usernameError']; ?>
					</p>
				</div>
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $data['email'] ?>" required />
					<p class="form-control form-feedback text-error">
						<?php echo $data['emailError']; ?>
					</p>
				</div>
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $data['password'] ?>" required />
					<p class="form-control form-feedback text-error">
						<?php echo $data['passwordError']; ?>
					</p>
				</div>
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="confirm-password">Confirm Password</label>
					<input type="password" class="form-control" name="confpassword" id="confpassword" placeholder="Confirm Password" value="<?php echo $data['confpassword'] ?>" required />
					<p class="form-control form-feedback text-error">
						<?php echo $data['confpasswordError']; ?>
					</p>
				</div>
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="gender">Gender</label>
					<select name="gender" name="gender" id="gender" value="<?php echo $data['gender'] ?>" required>
						<option value="" disabled selected>Select Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
					<p class="form-control form-feedback text-error">
						<?php echo $data['genderError']; ?>
					</p>
				</div>
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="dob"> Date of Birth </label>
					<input type="date" name="dob" id="dob" onfocus="(this.type='date')" value="<?php echo $data['dob'] ?>" required />
					<p class="form-control form-feedback text-error">
						<?php echo $data['dobError']; ?>
					</p>
				</div>
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="ciry">City</label>
					<select name="city" id="city" value="<?php echo $data['city'] ?>" required>
						<option class="select-option" value="" disabled selected>Select City</option>
						<option value="colombo">Colombo</option>
						<option value="kandy">Kandy</option>
						<option value="galle">Galle</option>
						<option value="matara">Matara</option>
						<option value="kurunegala">Kurunegala</option>
						<option value="badulla">Badulla</option>
						<option value="hambantota">Hambantota</option>
						<option value="jaffna">Jaffna</option>
						<option value="gampaha">Gampaha</option>
						<option value="kalutara">Kalutara</option>
						<option value="nuwara eliya">Nuwara Eliya</option>
						<option value="polonnaruwa">Polonnaruwa</option>
						<option value="trincomalee">Trincomalee</option>
						<option value="badulla">Badulla</option>
					</select>
					<p class="form-control form-feedback text-error">
					</p>
				</div>
				<div class="form-group col-12-xs col-6-lg pr-lg-2 pl-lg-2">
					<label for="phone">Phone</label>
					<input type="phone" class="form-control" name="phoneno" id="phoneno" placeholder="Phone" value="<?php echo $data['phoneno'] ?>" required />
					<p class="form-control form-feedback text-error">
						<?php echo $data['phonenoError']; ?>
					</p>
				</div>
				<div class="form-group col-12-xs">
					<div class="display-f align-items-center justify-content-center mt-1">
						<input class="pointer" type="checkbox" id="sub" name="sub" value="<?php echo $data['sub']  ?>" />
						<p class="text-gray">Subscribe to our flexguru newsletter.</p>
					</div>
				</div>
				<div class="form-group col-12-xs">
					<button type="submit" id="submit" name="submit" value="submit" class="form-control mr-lg-2 ml-lg-2">
						Register
					</button>
				</div>
			</form>
		</div>
	</div>
	<!-- End of Tutor Registration  -->

	<?php
	include APPROOT . '/views/includes/footer.php';
	?>
</body>

</html>