<section id="mainTransfer" class="mb-5">
	
	<!-- Grid row -->
	<div class="row">
		
		<!-- Grid col -->
		<div class="col-12">
			<div class="d-flex justify-content-between">
				<h1 class="h1-responsive">Transferuri</h1>
				<a href="<?php echo site_url() . '/view/transfer.php'; ?>" class="btn btnVideos my-auto px-3 py-2">
				Mai mult
					<i class="fas fa-angle-right ml-4"></i>
				</a>
			</div>
			<hr class="hrRed">
		</div>
		<!-- Grid col -->

	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="row">

		<?php
		$thisSeason = ($classDb->isSeason('transfer', 'sezon', $classCalendar->thisSeason()))
			? $classCalendar->thisSeason() : $classDb->lastSeason('transfer', 'sezon');
		$isRows = $classDb->isRows('transfer', 'sezon', $thisSeason);
		if($isRows)
		{
			echo transferShow($thisSeason, 'arrival', 'index', 1);
			echo transferShow($thisSeason, 'departure', 'index', 1);
		}
		else
		{
			echo '<div class="col-12">';
				include 'view/components/alert.php';
			echo '</div>';
		}
		?>

	</div>
	<!-- Grid row -->
</section>