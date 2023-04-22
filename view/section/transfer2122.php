			<div class="tab-pane fade <?php echo $classSeason->tabsSeasonShow("2021-2022", $lastSeason); ?>" id="transfer2122" role="tabpanel" aria-labelledby="transfer2122Tab">

				<?php
				$isRows = $classDb->isRows('transfer', 'sezon', '2021-2022');
				if (!$isRows) 
				{
					include 'components/alert.php';
				}
				?>

				<section id="Arrival" class="<?php echo transferRows('2021-2022', 'arrival'); ?>">
					<div class="row">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători transferați</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2021-2022', 'arrival', $showItem); ?>
					</div>
				</section>
				<section id="departure" class="<?php echo transferRows('2021-2022', 'departure'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători vănduți</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2021-2022', 'departure', $showItem); ?>
					</div>
				</section>
				<section id="onLoan" class="<?php echo transferRows('2021-2022', 'on-loan'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători împrumutați (ON-LOAN)</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2021-2022', 'on-loan', $showItem); ?>
					</div>
				</section>
				<section id="inLoan" class="<?php echo transferRows('2021-2022', 'in-loan'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători în împrumut (IN-LOAN)</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2021-2022', 'in-loan', $showItem); ?>
					</div>
				</section>

			</div>
