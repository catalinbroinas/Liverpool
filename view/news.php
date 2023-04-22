<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Noutăți';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');
require_once ('components/class-news.php');

$classNews = new news();
$classDb = new LiverpoolDb();
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
	<section id="newsHeader" class="navbarM pb-5 px-5">
		<!-- News intro -->	
		<div class="row d-flex justify-content-center">
			<div class="col-xl-10">
				<div class="card">
					<div class="row no-gutters">
						<div class="col-lg-6 col-12">
							<div class="view">
								<img src="<?php echo site_img() . '/' .  $classNews->cover('img'); ?>" class="card-img">
								<div class="mask rgba-black-strong d-flex align-items-end d-block d-lg-none">
									<div class="px-sm-4 pb-sm-4 px-1 pb-1">
										<h4 class="newsTitle"><a href="<?php echo $classNews->cover("link"); ?>" class="linkNewsIntro"><?php echo $classNews->cover("title"); ?></a></h4>
										<hr class="hr-light hrNews">
										<p class="newsText mt-sm-4 mt-1 white-text"><?php echo $classNews->cover("text"); ?></p>
										<a href="<?php echo $classNews->cover("link"); ?>" class="linkNewsIntro ml-5"><span class="newsLink">Citește<<i class="fas fa-angle-double-right ml-2"></i></span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 colRedWhite pt-4 px-4 d-none d-lg-block">
							<h2 class="newsTitle"><a href="<?php echo $classNews->cover("link"); ?>" class="linkNewsIntro"><?php echo $classNews->cover("title"); ?></a></h2>
							<hr class="hr-light">
							<p class="newsText mt-4"><?php echo $classNews->cover("text"); ?></p>
							<a href="<?php echo $classNews->cover("link"); ?>" class="linkNewsIntro ml-5"><span class="newsLink">Citește<i class="fas fa-angle-double-right ml-2"></i></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- News intro -->	
	</section>
</header>

<main class="container-fluid">
	<!-- News Content -->
	<section id="newsContent" class="mb-5">
		<div class="row d-flex justify-content-center">
			<div class="col-xl-10 col-12">
				<div class="row mb-4">
					<?php
					$max = $classNews->numberOfRecords();
					echo $classNews->showNews($max, 'view');
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- News Content -->
</main>

<?php require_once ('layout/footer.php'); ?>

<script>
	const newsCover = '<?php echo $classDb->isRows('news', 'cover', 'yes'); ?>';
	const newsItems = '<?php echo $classDb->isRows('news'); ?>';

	let cover = (newsCover) ? 'block' : 'none';
	let items = (newsItems) ? 'flex' : 'none';
	
	document.getElementById("newsHeader").style.display = cover;
	document.getElementById("newsContent").style.display = items;
	
	if(cover == 'none')
	{
		document.getElementById("newsContent").style.marginTop = "58px";
	}
</script>

<?php $db->close(); ?>
