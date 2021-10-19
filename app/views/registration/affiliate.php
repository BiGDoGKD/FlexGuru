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

	.affiliate_registration {
		width: 80%;
		align-items: center;
		margin: 0 auto;
		padding: 90px;
	}

	.affiliate_registration td {
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
		margin-top: 9px;
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

<body>
	<div class="affiliate_registration">
		<center>
			<h3 class="gray">Affiliate Registration</h3>
			<!-- Affiliate marketer registration starts here  -->
			<form action="<?php echo URLROOT; ?>/registration/affiliate" method="POST">
				<?php include APPROOT . '/views/registration/components/form.php' ?>
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