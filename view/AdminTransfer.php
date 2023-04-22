<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Administrare Transferuri';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');
require_once ('components/transferView.php');

$classSeason = new Calendar();
$classDb = new liverpoolDb(); 

$classUserAuth->callFunction('authAccess', $pageTitle); 
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
	<section class="navbarM">
		<?php
		$title = "Transferuri";
		$icon = "fa-shopping-cart";
		$linkInsert = "AdminTransfer.php#insertTr";
		$linkEdit = "AdminTransfer.php#editTr";
		$linkPage = "transfer.php";
		include_once ('section/headerAdmin.php'); 
		?>
	</section>
</header>

<main>
	<div id="insertTr" class="container">
		<div class="row">
			<div class="col-12 text-center mt-5">
				<?php print_notices(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h1 class="h1-responsive text-center mt-3">Insert</h1>
				<hr class="hrRed mb-5">
			</div>
		</div>
		<div class="row mb-0">
			<div class="col-12">
				<?php include_once ('components/admin/transferInsert.php'); ?>
			</div>
		</div>
		<section id="transferEdit" class="mb-5">
			<div id="editTr" class="row">
				<div class="col-12">
					<h1 class="h1-responsive text-center mt-5 pt-3">Edit</h1>
					<hr class="hrRed mb-0">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-12">
					<?php 
					$lastSeason = $classDb->lastSeason('transfer', 'sezon'); 
					include_once 'section/transferNavs.php'; 
					?>
				</div>
			</div>
			<div class="row d-flex justify-content-center justify-content-md-start">
				<div id="transfers" class="tab-content"> 
					<?php
					$showItem = 'Edit';
					require_once 'section/transfer1920.php';
					require_once 'section/transfer2021.php';
					require_once 'section/transfer2122.php';
					require_once 'section/transfer2223.php';
					?>
				</div>
			</div>
		</section>
	</div>	
</main>

<?php require_once ('layout/footer.php'); ?>
