<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kavindhu Galagedara
 * CO-AUTHORS: Kesara Karannagoda
 * LAST UPDATE BY: Kavindhu Galagedara
 * LAST UPDATE DATE : Oct, 01, 2021
 * FILE TYPE: View
 * PARENT FOLDER: registration
 */
?>
<!-- header  -->
<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>
<!-- content  -->
<style>
	@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

	* {
		font-family: 'Open Sans', sans-serif;
	}


	.student_registration {

		width: 80%;
		align-items: center;
		margin: 0 auto;
		padding: 90px;


	}

	.input-field {
		margin: 20px 20px 20px 20px;
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



	input[type='text'] {
		border-radius: 24px;
		outline: none;
		border: 1px solid #acacac;
		width: 350px;
		padding: 13px 25px;
	}

	input[type='email'] {
		border-radius: 24px;
		outline: none;
		border: 1px solid #acacac;
		width: 350px;
		padding: 13px 25px;
	}

	input[type='password'] {
		border-radius: 24px;
		outline: none;
		border: 1px solid #acacac;
		width: 350px;
		padding: 13px 25px;
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
</style>




</head>

<body>
	<div class="student_registration">
		<center>
			<h1 style="font-weight:900;">Student Registration</h1>
			<form action="<?php echo URLROOT; ?>/registration/student" method="POST">
				<!-- this two same line -->
				<table>
					<thead>

					</thead>
					<tbody>
						<tr>
							<td>
								<div class="input-field"> <input type="text" name="firstname" id="firstname" placeholder="Firstname">
								</div>
								<span class="form-errors"></span>
							</td>
							<td>
								<div class="input-field"> <input type="text" name="lastname" id="lastName" placeholder="LastName">
								</div>
								<span class="form-errors"></span>
							</td>
						</tr>


						<tr>
							<td>
								<div class="input-field"> <input type="text" name="email" id="email" placeholder="Email">
								</div>
								<span class="form-errors"></span>
							</td>
							<td>
								<div class="input-field"> <input type="text" name="phoneno" id="phoneNo" placeholder="Phone Number">
								</div>
								<span class="form-errors"></span>
							</td>
						</tr>

						<tr>
							<td>
								<div class="input-field"> <input type="password" name="password" id="password" placeholder="Password">
								</div>
							<td>
								<div class="input-field"> <input type="password" name="confpassword" id="confirmPassword" placeholder="Confirm Password">
								</div>
								<span class="form-errors"></span>
							</td>
						</tr>

						<tr>
							<td>
								<div class="input-field"> <input type="text" name="gender" id="gender" placeholder="Gender">
								</div>
								<span class="form-errors"></span>
							</td>
							<td>
								<div class="input-field"> <input type="date" name="dob" id="dateofbirth" placeholder="Date of Birth">
								</div>
								<span class="form-errors"></span>
							</td>
						</tr>
						<td>
							<div class="input-field"> <input type="text" name="city" id="City" placeholder="City">
							</div>
							<span class="form-errors"></span>
						</td>
					</tbody>
				</table>


				<button class="button_reg" id="submit" value="submit" type="submit">REGISTER</button>

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