			<div class="tab-pane fade <?php echo $classSeason->tabsSeasonShow("2019-2020", $lastSeason); ?>" id="transfer1920" role="tabpanel" aria-labelledby="transfer1920Tab">

				<?php
				$isRows = $classDb->isRows('transfer', 'sezon', '2019-2020');
				if (!$isRows) 
				{
					include 'components/alert.php';
				}
				?>

				<section id="Arrival" class="<?php echo transferRows('2019-2020', 'arrival'); ?>">
					<div class="row">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători transferați</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2019-2020', 'arrival', $showItem); ?>
					</div>
				</section>
				<section id="departure" class="<?php echo transferRows('2019-2020', 'departure'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători vănduți</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2019-2020', 'departure', $showItem); ?>
					</div>
				</section>
				<section id="onLoan" class="<?php echo transferRows('2019-2020', 'on-loan'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători împrumutați (ON-LOAN)</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2019-2020', 'on-loan', $showItem); ?>
					</div>
				</section>
				<section id="inLoan" class="<?php echo transferRows('2019-2020', 'in-loan'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători în împrumut (IN-LOAN)</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2019-2020', 'in-loan', $showItem); ?>
					</div>
				</section>

			</div>
