<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: View
 * PARENT FOLDER: registration
 */
?>

<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>
<!-- content  -->
<style>
	@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');


	.afiliate_registration {
		width: 80%;
		align-items: center;
		margin: 0 auto;
		padding: 90px;
	}

	.afiliate_registration td {
		position: relative;
	}

	.subscribe {
		display: grid;
		width: 50%;
		grid-template-columns: 20px 500px;
	}

	#checksubscribe {
		padding: 20px;
		background: #ff0000;
		margin-top: 10px;
	}

	.button_reg {
		background: #7879F1;
		padding: 13px 25px;
		border: 1px solid #acacac;
		border-radius: 24px;
		outline: none;
		width: 745px;
		color: white;
		margin-top: 8px;
	}

	.join-now {
		font-size: 13px;
		margin-top: 7px;
	}

	.form-errors {
		position: absolute;
		top: 65px;
		left: 48;
	}
</style>




</head>

<body>
	<div class="affiliate registration">
		<center>
			<h3>Affiliate Marketer Registration</h3>
			<form action="<?php echo URLROOT; ?>/registration/affiliate" method="POST">
				<!-- this two same line -->
				<table>
					<thead>

					</thead>
					<tbody>
						<tr>
							<td>
								<div class="input-field"> <input type="text" name="firstname" id="firstname" required>
									<span class="placeholder">Firstname</span>
								</div>
								<span class="form-errors error fg-errors">
									<?php echo $data['firstnameError']; ?>
								</span>
							</td>
							<td>
								<div class="input-field"> <input type="text" name="lastname" id="lastname" required>
									<span class="placeholder">Lastname</span>
								</div>
								<span class="form-errors error fg-errors">
									<?php echo $data['lastnameError']; ?>
								</span>
							</td>
						</tr>


						<tr>
							<td>
								<div class="input-field"> <input type="text" name="username" id="username" required>
									<span class="placeholder">Username</span>
								</div>
								<span class="form-errors error fg-errors">
									<?php echo $data['usernameError']; ?>
								</span>
							</td>
							<td>

								<div class="input-field"> <input type="email" name="email" id="email" required>
									<span class="placeholder">Email</span>
								</div>
								<span class="form-errors error fg-errors">
									<?php echo $data['emailError']; ?>
								</span>
							</td>
						</tr>

						<tr>
							<td>
								<div class="input-field"> <input type="password" name="password" id="password" required>
									<span class="placeholder">Password</span>
								</div>
							<td>
								<div class="input-field"> <input type="password" name="confpassword" id="confpassword" required>
									<span class="placeholder">Confirm Password</span>
								</div>
								<span class="form-errors error fg-errors">
									<?php echo $data['confpasswordError']; ?>
								</span>
							</td>
						</tr>

						<tr>
							<td>
								<div class="input-field"> <input type="text" name="NIC" id="NIC" required>
									<span class="placeholder">NIC</span>
								</div>
								<span class="form-errors error fg-errors">
									<?php echo $data['NICError']; ?>
								</span>
							</td>
							<td>
								<div class="input-field"> <input type="text" name="city" id="city" required>
									<span class="placeholder">City</span>
								</div>
								<span class="form-errors error fg-errors">

								</span>
							</td>
						</tr>

					</tbody>
				</table>


				<button class="button_reg pointer btn-text" id="submit" value="submit" type="submit">Continue</button>

				</br>

				<div class="subscribe">

					<input type="checkbox" id="checksubscribe">

					<div class="join-now"><span>Subscribe to our flexGuru newsletters and agree to receive emails from FlexGuru</span></div>


				</div>

			</form>
		</center>
	</div>
</body>

</html>
<!-- content-end  -->
<!-- footer  -->
<?php
include APPROOT . '/views/includes/footer.php';
?>