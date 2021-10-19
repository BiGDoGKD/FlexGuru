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



<style>
	.tutor_registration {

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

<body>
	<div class="tutor_registration">
		<center>
			<h3 class="gray">Tutor Registration</h3>
			<!-- Tutor registration starts here  -->
			<form action="<?php echo URLROOT; ?>/registration/tutor" method="POST">
				<?php include APPROOT . '/views/registration/components/form.php' ?>
			</form>
		</center>
	</div>
</body>

</html>


<?php
include APPROOT . '/views/includes/footer.php';
?>