<?php
require_once ('../bootloader.php');

$pageTitle = 'Administrare Noutăți';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php'); 

$classUserAuth->callFunction('authAccess', $pageTitle);  
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
	<section class="navbarM">
		<?php
		$title = "Noutăți";
		$icon = "fa-newspaper";
		$linkInsert = "AdminNews.php#insertN";
		$linkEdit = "AdminNews.php#editN";
		$linkPage = "news.php";
		include_once ('section/headerAdmin.php'); 
		?>
	</section>
</header>

<main>
	<div id="insertN" class="container">
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
				<?php include_once ('components/admin/newsInsert.php'); ?>
			</div>
		</div>
		<div id="editN" class="row pt-5">
			<div class="col-12">
				<h1 class="h1-responsive text-center mt-3">Edit</h1>
				<hr class="hrRed mb-5">
			</div>
		</div>
		<div class="row mb-5">
				<?php include_once ('components/admin/newsEdit.php'); ?>
		</div>
	</div>
</main>

<?php require_once ('layout/footer.php'); ?>
