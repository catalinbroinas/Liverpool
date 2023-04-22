<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Lot';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');
require_once ('components/class-team.php');

$classSeason = new Calendar();
$classTeam = new Team();
$classDb = new liverpoolDb(); 
?>

<header>
	<?php 
	require_once ('layout/navbar.php');
	include_once 'section/headerTeam.php'; 
	?>
</header>

<main class="mb-5 mt-0">
	<div class="container-fluid mt-0 mb-5 mx-0 px-0">
		<?php 
		$lastSeason = $classDb->lastSeason('team');
		require_once 'section/teamNavs.php'; 
		?>
	</div>
	<div id="Players" class="container">
		<div class="tab-content"> 
			<?php
			$showItem = 'View';
			require_once 'section/team1920.php';
			require_once 'section/team2021.php';
			require_once 'section/team2122.php';
			require_once 'section/team2223.php';
			?>
		</div>
	</div>
</main>

<?php 
$db->close();
require_once ('layout/footer.php'); 
?>
