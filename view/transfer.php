<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Transferuri';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');
require_once ('components/transferView.php');

$classSeason = new Calendar();
$classDb = new liverpoolDb(); 
?>

<header>
	<?php
	 require_once ('layout/navbar.php');
	 include_once ('section/headerTransfer.php'); 
	 ?>
</header>

<main>
	<div class="container-fluid mt-0 mb-5 mx-0 px-0">
		<?php
		$lastSeason = $classDb->lastSeason('transfer', 'sezon'); 
		require_once 'section/transferNavs.php'; 
		?>
	</div>
	<div class="container">
		<section id="transfer" class="mb-5">
			<div class="tab-content"> 
				<?php
				$showItem = 'View';
				require_once 'section/transfer1920.php';
				require_once 'section/transfer2021.php';
				require_once 'section/transfer2122.php';
				require_once 'section/transfer2223.php';
				?>
			</div>
		</section>
	</div>
</main>

<?php 
$db->close();
require_once ('layout/footer.php'); 
?>
