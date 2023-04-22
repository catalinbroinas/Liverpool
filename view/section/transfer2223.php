			<div class="tab-pane fade <?php echo $classSeason->tabsSeasonShow("2022-2023", $lastSeason); ?>" id="transfer2223" role="tabpanel" aria-labelledby="transfer2223Tab">

				<?php
				$isRows = $classDb->isRows('transfer', 'sezon', '2022-2023');
				if (!$isRows) 
				{
					include 'components/alert.php';
				}
				?>

				<section id="Arrival" class="<?php echo transferRows('2022-2023', 'arrival'); ?>">
					<div class="row">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători transferați</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2022-2023', 'arrival', $showItem); ?>
					</div>
				</section>
				<section id="departure" class="<?php echo transferRows('2022-2023', 'departure'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători vănduți</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2022-2023', 'departure', $showItem); ?>
					</div>
				</section>
				<section id="onLoan" class="<?php echo transferRows('2022-2023', 'on-loan'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători împrumutați (ON-LOAN)</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2022-2023', 'on-loan', $showItem); ?>
					</div>
				</section>
				<section id="inLoan" class="<?php echo transferRows('2022-2023', 'in-loan'); ?>">
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Jucători în împrumut (IN-LOAN)</h1>
							<hr class="hrRed">
						</div>
					</div>
					<div class="row">
						<?php echo transferShow('2022-2023', 'in-loan', $showItem); ?>
					</div>
				</section>

			</div>
