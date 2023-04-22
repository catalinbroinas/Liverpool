<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Administrare Echipă';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');
require_once ('components/class-team.php');

$classSeason = new calendar(); 
$classTeam = new team();
$classDb = new liverpoolDb(); 

$classUserAuth->callFunction('authAccess', $pageTitle);  
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
	<section class="navbarM">
		<?php
		$title = "Echipă";
		$icon = "fa-users";
		$linkInsert = "AdminTeam.php#insertTe";
		$linkEdit = "AdminTeam.php#editTe";
		$linkPage = "team.php";
		include_once ('section/headerAdmin.php'); 
		?>
	</section>
</header>

<main>
	<div id="insertTe" class="container">
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
				<?php include_once ('components/admin/teamInsert.php'); ?>
			</div>
		</div>
		<div id="editTe" class="row mb-3 pt-5">
			<div class="col-12">
				<h1 class="h1-responsive text-center mt-3">Edit</h1>
				<hr class="hrRed mb-0">
				<?php
				$lastSeason = $classDb->lastSeason('team');  
				require_once 'section/teamNavs.php';
				?>
			</div>
		</div>
		<div class="row d-flex justify-content-center justify-content-md-start mb-5">
			<div id="Players" class="tab-content"> 
				<?php
				$showItem = 'Edit';
				require_once 'section/team1920.php';
				require_once 'section/team2021.php';
				require_once 'section/team2122.php';
				require_once 'section/team2223.php';
				?>
			</div>
		</div>
	</div>	
</main>

<?php require_once ('layout/footer.php'); ?>
