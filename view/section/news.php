<section id="news" class="mb-5">
	<div class="row">
		<div class="col-12 d-flex justify-content-center justify-content-lg-start">
			<h1 class="h1-responsive">Noutăți</h1>
		</div>
	</div>
	<hr class="hrRed">
	<!-- News intro -->	
	<div id="newsMainCover" class="row">
		<div class="col-12">
			<div id="newsIntro" class="card">
				<div class="row no-gutters">
					<div class="col-lg-6 col-12">
						<div class="view">
							<img src="<?php echo site_img() . '/' .  $classNews->cover('img'); ?>" class="card-img">
							<div class="mask rgba-black-light d-flex align-items-end d-block d-lg-none">
								<div class="px-4 pb-4">
									<h4 class="h4"><a href="<?php echo $classNews->cover('link'); ?>" class="linkNewsIntro"><?php echo $classNews->cover('title'); ?></a></h4>
									<hr class="hr-light">
									<p class="p mt-4 white-text"><?php echo $classNews->cover('text'); ?></p>
									<a href="<?php echo $classNews->cover('link'); ?>" class="linkNewsIntro ml-5">Citește <i class="fas fa-angle-double-right ml-2"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12 colRedWhite pt-4 px-4 d-none d-lg-block">
						<h4 class="h4"><a href="<?php echo $classNews->cover('link'); ?>" class="linkNewsIntro"><?php echo $classNews->cover('title'); ?></a></h4>
						<hr class="hr-light">
						<p class="p mt-4"><?php echo $classNews->cover('text'); ?></p>
						<a href="<?php echo $classNews->cover('link'); ?>" class="linkNewsIntro ml-5">Citește <i class="fas fa-angle-double-right ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- News intro -->	
	<!-- News Body -->
	<div id="newsLatest" class="row mt-4">
		<?php echo $classNews->showNews(8, 'index'); ?>
	</div>	
	<!-- News Body -->		
	<!-- News Footer -->
	<div class="row d-flex justify-content-center mt-3">
		<div class="col-sm-3 d-flex justify-content-center mt-3">
			<a href="<?php echo site_url() . '/view/news.php'; ?>" class="btn btnVideos my-auto px-3 py-2">
						Mai mult
				<i class="fas fa-angle-right ml-4"></i>
			</a>
		</div>
	</div>
	<!-- News Footer -->
</section>