<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Uefa Champions League 2004-2005';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php'); 
?>

<header>
	<?php 
	require_once ('layout/navbar.php'); 
	include_once ('components/carouselUcl2005.php'); 
	?>
</header>

<main class="my-5">
	<div class="container">
		<?php
		include_once ('section/grupe2005.php');
		include_once ('section/rezultate2005.php');
		?>
	</div>
</main>

<?php require_once ('layout/footer.php'); ?>
