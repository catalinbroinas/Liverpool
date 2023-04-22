<?php

$pageTitle = "Cont Nou";

require_once '../bootloader.php';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once 'layout/head.php';
require_once '../includes/class-validation_input.php';

if(isset($_SESSION['emailAddress']))
{
	header('Location: myAccount.php');
}
?>

<header>
	<?php require_once 'layout/navbar.php'; ?>
</header>

<main>

	<!-- Background Image -->
	<section class="accountWrapp">
		
		<!-- Background Mask -->
		<div class="view d-flex justify-content-center align-items-center">
			
			<!-- Content -->
			<div class="container containerSignIn" style="background-color: rgba(255, 255, 255, 0.2);">
				<?php 
					require_once 'section/signIn.php';
				?>
			</div>
			<!-- Content -->

		</div>
		<!-- Background Mask -->

	</section>
	<!-- Background Image -->

</main>

<?php require_once 'layout/footer.php'; ?>
<script>
	footerHide();
	const myNavbarColor = window.matchMedia("(min-width: 1200px)");
	signInNavbar(myNavbarColor);
	myNavbarColor.addListener(signInNavbar);
</script>
