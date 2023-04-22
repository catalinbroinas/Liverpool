<?php
require_once ('bootloader.php'); 

$pageTitle = 'Liverpool';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('view/layout/head.php'); 

require_once ('view/components/transferView.php');
require_once ('calendar_function.php');
require_once ('view/components/class-news.php');
require_once ('view/components/class-team.php');

$classNews = new News();
$classTeam = new Team();
$classCalendar = new calendar();
$classDb = new LiverpoolDb();
?>

<header>
	<?php 
	require_once ('view/layout/navbar.php'); 
	include_once ('view/components/carouselIntro.php');
	?>	
</header>

<main>
	<div class="container">
		<?php
		 include_once ('view/section/mainCalendar.php');
		 include_once ('view/components/carouselTeam.php');
		 include_once ('view/section/mainTransfer.php');
		 include_once ('view/components/carouselVideo.php'); 
		 include_once ('view/section/news.php'); 
		?>
	</div>
</main>

<?php require_once ('view/layout/footer.php'); ?>

<script>
	const newsCover = '<?php echo $classDb->isRows('news', 'cover', 'yes'); ?>';
	const newsItems = '<?php echo $classDb->isRows('news'); ?>';

	let cover = (newsCover) ? 'block' : 'none';
	let items = (newsItems) ? 'flex' : 'none';
	
	document.getElementById("newsMainCover").style.display = cover;
	document.getElementById("newsLatest").style.display = items;
</script>

<?php $db->close(); ?>
