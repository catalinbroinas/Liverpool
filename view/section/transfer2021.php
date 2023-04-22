			<div class="tab-pane fade <?php echo $classSeason->tabsSeasonShow("2020-2021", $lastSeason); ?>" id="transfer2021" role="tabpanel" aria-labelledby="transfer2021Tab">

				<?php
				$isRows = $classDb->isRows('transfer', 'sezon', '2020-2021');
				if (!$isRows) 
				{
					include 'components/alert.php';
				}
				?>

				<section id="Arrival" class="<?php echo transferRows('2020-2021', 'arrival'); ?>">
					<div class="row">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători transferați</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2020-2021', 'arrival', $showItem); ?>
					</div>
				</section>
				<section id="departure" class="<?php echo transferRows('2020-2021', 'departure'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători vănduți</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2020-2021', 'departure', $showItem); ?>
					</div>
				</section>
				<section id="onLoan" class="<?php echo transferRows('2020-2021', 'on-loan'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători împrumutați (ON-LOAN)</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2020-2021', 'on-loan', $showItem); ?>
					</div>
				</section>
				<section id="inLoan" class="<?php echo transferRows('2020-2021', 'in-loan'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători în împrumut (IN-LOAN)</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2020-2021', 'in-loan', $showItem); ?>
					</div>
				</section>

			</div>
