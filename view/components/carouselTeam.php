<section id="team" class="mb-5">
	<div class="row">
		<div class="col-12 d-flex justify-content-between">
			<h1 class="h1-responsive">Jucători</h1>
			<a href="<?php echo site_url() . '/view/team.php'; ?>" class="btn btnVideos my-auto px-3 py-2">
				Mai mult
				<i class="fas fa-angle-right ml-4"></i>
			</a>
		</div>
	</div>
	<hr class="hrRed">
	<div class="row">
		<div class="col-12">
			<!-- Carousel Wrapper -->
			<div id="carouselTeam" class="carousel slide carousel-fade" data-ride="carousel">

				<!--Indicators-->
				<?php
					$thisSeason = ($classDb->isSeason('team','season', $classCalendar->thisSeason())) 
					? $classCalendar->thisSeason() : $classDb->lastSeason('team');
					$classTeam->carouselIndicators($thisSeason); 
				?>
				<!--/.Indicators-->

				<!-- Carousel slides -->
				<div class="carousel-inner px-5" role="listbox">
					<?php $classTeam->showCarouselPlayers($thisSeason, "items"); ?>
				</div>
				<!-- Carousel slides -->

				 <!-- Controls -->
				<?php $classTeam->carouselButtons($thisSeason); ?>
				 <!-- Controls -->

			</div>
			<!-- Carousel Wrapper -->
		</div>
	</div>
</section>
