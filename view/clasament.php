<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Clasament';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');
require_once ('section/clasamentView.php');

$classSeason = new Calendar();  
$classDb = new liverpoolDb(); 
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
</header>

<main class="navbarM">
	<div class="container">

		<!-- Clasament Tite -->
		<div class="row">
			<div class="col-12">
				<h1 class="h1-responsive text-center mt-3">Clasament Premier League</h1>
				<hr class="hrRed mb-0">
			</div>
		</div>
		<!-- Clasament Tite -->

		<!-- Clasament Navs & Content -->
		<?php
		$type = 'Normal';
		$lastSeason = $classDb->lastSeason('clasament');
		include_once 'section/clasamentNavs.php';
		include_once 'section/clasamentContent.php';
		?>
		<!-- Clasament Navs & Content -->

	</div>	
</main>

<?php
$db->close();
require_once ('layout/footer.php'); 
?>