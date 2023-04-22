			<div class="tab-pane fade <?php echo $classSeason->tabsSeasonShow("2021-2022", $lastSeason); ?>" id="team2122" role="tabpanel" aria-labelledby="team2122Tab">		

				<section class="playersTeam">
					<div class="row">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Portari</h1>
							<hr>
						</div>
					</div>
					<div class="row d-flex justify-content-center justify-content-md-start">
						<?php echo $classTeam->teamShow('goalkeeper', '2021-2022', $showItem, $classTeam->nrRolesPlayers("2021-2022", "goalkeeper"), 0); ?>
					</div>
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Fundași</h1>
							<hr>
						</div>
					</div>
					<div class="row d-flex justify-content-md-start justify-content-center">
						<?php echo $classTeam->teamShow('defender', '2021-2022', $showItem, $classTeam->nrRolesPlayers("2021-2022", "defender"), 0); ?>
					</div>
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Mijlocași</h1>
							<hr>
						</div>
					</div>
					<div class="row d-flex justify-content-md-start justify-content-center">
						<?php echo $classTeam->teamShow('midfielder', '2021-2022', $showItem, $classTeam->nrRolesPlayers("2021-2022", "midfielder"), 0); ?>
					</div>
					<div class="row mt-5">
						<div class="col-12 text-center text-lg-left">
							<h1 class="h1-responsive">Atacanți</h1>
							<hr>
						</div>
					</div>
					<div class="row d-flex justify-content-md-start justify-content-center">
						<?php echo $classTeam->teamShow('forward', '2021-2022', $showItem, $classTeam->nrRolesPlayers("2021-2022", "forward"), 0); ?>
					</div>
				</section>

				<section class="py-3 mt-5 px-lg-0 px-md-5 px-0 generalTeam">

					<div class="row d-flex justify-content-center">
						<div class="col-lg-10 col-md-12 col-sm-8 col-10">
							<h1 class="h1-responsive text-center">Generalități</h1>
							<hr>
						</div>
					</div>

					<div class="row d-flex justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-8 col-10">
							<h4 class="d-inline d-flex justify-content-between">Total jucăcători:<span><?php echo $classTeam->nrPlayers('2021-2022'); ?></span></h4>
							<h4 class="d-inline d-flex justify-content-between">Portari:<span><?php echo $classTeam->nrRolesPlayers('2021-2022', 'goalkeeper'); ?></span></h4>
							<h4 class="d-inline d-flex justify-content-between">Fundași:<span><?php echo $classTeam->nrRolesPlayers('2021-2022', 'defender'); ?></span></h4>
							<h4 class="d-inline d-flex justify-content-between">Mijlocași:<span><?php echo $classTeam->nrRolesPlayers('2021-2022', 'midfielder'); ?></span></h4>
							<h4 class="d-inline d-flex justify-content-between">Atacanți:<span><?php echo $classTeam->nrRolesPlayers('2021-2022', 'forward'); ?></span></h4>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-8 col-10">
							<h4 class="d-inline d-flex justify-content-between">Media de vârstă:<span><?php echo $classTeam->ageAverage('2021-2022'); ?></span></h4>
							<h4 class="d-inline d-flex justify-content-between">Internaționali:<span><?php echo $classTeam->nrInternationalPlayers('2021-2022'); ?></span></h4>
							<h4 class="d-inline d-flex justify-content-between">Cota medie:<span class="fas fa-euro-sign mr-0"><?php echo $classTeam->averageMarket('2021-2022') . 'm'; ?></span></h4>
							<h4 class="d-inline d-flex justify-content-between">Cota maximă:<span class="fas fa-euro-sign mr-0"><?php echo $classTeam->maxMarket('2021-2022') . 'm'; ?></span></h4>
							<h4 class="d-inline d-flex justify-content-between">Cota minimă:<span class="fas fa-euro-sign mr-0"><?php echo $classTeam->minMarket('2021-2022') . 'm'; ?></span></h4>
						</div>
					</div>

					<div id="valTeam" class="row d-flex justify-content-center">
						<div class="col-8 mt-3">
							<h4 class="text-center">Valoarea totală a lotului<span class="fas fa-euro-sign ml-3"><?php echo $classTeam->totalMarket('2021-2022') . 'm'; ?></span></h4>
						</div>
					</div>
				</section>

			</div>