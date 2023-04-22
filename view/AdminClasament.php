<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Administrare Clasament';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');
require_once ('section/clasamentView.php');

$classSeason = new Calendar();
$classDb = new liverpoolDb(); 

$classUserAuth->callFunction('authAccess', $pageTitle);  
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
	<!-- Header -->
	<section class="navbarM">
		<?php
		$title = "Clasament";
		$icon = "fa-trophy";
		$linkInsert = "AdminClasament.php#insertCl";
		$linkEdit = "AdminClasament.php#editCl";
		$linkPage = "clasament.php";
		include_once ('section/headerAdmin.php'); 
		?>
	</section>
	<!-- Header -->
</header>

<main>
	<div id="insertCl" class="container">

		<!-- Notification -->
		<div class="row">
			<div class="col-12 text-center mt-5">
				<?php print_notices(); ?>
			</div>
		</div>
		<!-- Notification -->

		<!-- Insert Title -->
		<div class="row">
			<div class="col-12">
				<h1 class="h1-responsive text-center mt-3">Insert</h1>
				<hr class="hrRed mb-5">
			</div>
		</div>
		<!-- Insert Title -->

		<!-- Insert Forms -->
		<div class="row mb-0">
			<div class="col-12">
				<?php include_once ('components/admin/clasamentInsert.php'); ?>
			</div>
		</div>
		<!-- Insert Forms -->

		<!-- Edit Title -->
		<div id="editCl" class="row pt-5">
			<div class="col-12">
				<h1 class="h1-responsive text-center mt-3">Edit</h1>
				<hr class="hrRed mb-0">
			</div>
		</div>
		<!-- Edit Title -->

		<!-- Edit Content -->
		<?php
		$type = "Edit";
		$lastSeason = $classDb->lastSeason('clasament'); 
		include_once 'section/clasamentNavs.php'; 
		include_once 'section/clasamentContent.php';
		?>
		<!-- Edit Content -->

	</div>	
</main>

<?php require_once ('layout/footer.php'); ?>
