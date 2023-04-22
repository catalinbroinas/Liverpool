		<section id="clasamentContent">
			<!-- Tab Content -->
			<div class="tab-content">

				<!-- Clasament 2019-2020 -->
				<div class="tab-pane fade <?php echo $classSeason->tabsSeasonShow("2019-2020", $lastSeason); ?>" id="clasament1920" role="tabpanel" aria-labelledby="clasament1920Tab">

					<?php
					$isRows = $classDb->isRows('clasament', 'season', '2019-2020');
					if (!$isRows) 
					{
						include 'components/alert.php';
					}
					else
					{
					?>

					<div class="row mb-5">
						<div class="col-12">
							<table class="table table-hover tableUcl">
								<thead>
									<tr>
										<th scope="col">Loc</th>
										<th scope="col">Echipă</th>
										<th scope="col">Meciuri</th>
										<th scope="col">Victorii</th>
										<th scope="col">Egaluri</th>
										<th scope="col">Înfrângeri</th>
										<th scope="col">Goluri marcate</th>
										<th scope="col">Goluri primite</th>
										<th scope="col">Golaveraj</th>
										<th scope="col" class="ptH">Puncte</th>
									</tr>
								</thead>
								<tbody>
									<?php echo clasamentShow("2019-2020", $type); ?>
								</tbody>
								<caption>
									<section class="infoGrupa">
										<h6 class="h6-responsive"><i class="fas fa-square green-text mr-2"></i>Calificare în Uefa Champions League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square blue-text mr-2"></i>Calificare în Uefa Europa League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square red-text mr-2"></i>Retrogradare în Championship</h6>
									</section>
								</caption>
							</table>
						</div>
					</div>
					<?php } ?>
				</div>
				<!-- Clasament 2019-2020 -->

				<!-- Clasament 2020-2021 -->
				<div class="tab-pane fade <?php echo $classSeason->tabsSeasonShow("2020-2021", $lastSeason); ?>" id="clasament2021" role="tabpanel" aria-labelledby="clasament2021Tab">

					<?php
					$isRows = $classDb->isRows('clasament', 'season', '2020-2021');
					if (!$isRows) 
					{
						include 'components/alert.php';
					}
					else
					{
					?>

					<div class="row mb-5">
						<div class="col-12">
							<table class="table table-hover tableUcl">
								<thead>
									<tr>
										<th scope="col">Loc</th>
										<th scope="col">Echipă</th>
										<th scope="col">Meciuri</th>
										<th scope="col">Victorii</th>
										<th scope="col">Egaluri</th>
										<th scope="col">Înfrângeri</th>
										<th scope="col">Goluri marcate</th>
										<th scope="col">Goluri primite</th>
										<th scope="col">Golaveraj</th>
										<th scope="col" class="ptH">Puncte</th>
									</tr>
								</thead>
								<tbody>
									<?php echo clasamentShow("2020-2021", $type); ?>
								</tbody>
								<caption>
									<section class="infoGrupa">
										<h6 class="h6-responsive"><i class="fas fa-square green-text mr-2"></i>Calificare în Uefa Champions League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square blue-text mr-2"></i>Calificare în Uefa Europa League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square orange-text mr-2"></i>Calificare în Uefa Conference League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square red-text mr-2"></i>Retrogradare în Championship</h6>
									</section>
								</caption>
							</table>
						</div>
					</div>
					<?php } ?>
				</div>
				<!-- Clasament 2020-2021 -->

				<!-- Clasament 2021-2022 -->
				<div class="tab-pane fade <?php echo $classSeason->tabsSeasonShow("2021-2022", $lastSeason); ?>" id="clasament2122" role="tabpanel" aria-labelledby="clasament2122Tab">

					<?php
					$isRows = $classDb->isRows('clasament', 'season', '2021-2022');
					if (!$isRows) 
					{
						include 'components/alert.php';
					}
					else
					{
					?>

					<div class="row mb-5">
						<div class="col-12">
							<table class="table table-hover tableUcl">
								<thead>
									<tr>
										<th scope="col">Loc</th>
										<th scope="col">Echipă</th>
										<th scope="col">Meciuri</th>
										<th scope="col">Victorii</th>
										<th scope="col">Egaluri</th>
										<th scope="col">Înfrângeri</th>
										<th scope="col">Goluri marcate</th>
										<th scope="col">Goluri primite</th>
										<th scope="col">Golaveraj</th>
										<th scope="col" class="ptH">Puncte</th>
									</tr>
								</thead>
								<tbody>
									<?php echo clasamentShow("2021-2022", $type); ?>
								</tbody>
								<caption>
									<section class="infoGrupa">
										<h6 class="h6-responsive"><i class="fas fa-square green-text mr-2"></i>Calificare în Uefa Champions League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square blue-text mr-2"></i>Calificare în Uefa Europa League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square orange-text mr-2"></i>Calificare în Uefa Conference League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square red-text mr-2"></i>Retrogradare în Championship</h6>
									</section>
								</caption>
							</table>
						</div>
					</div>
					<?php } ?>
				</div>
				<!-- Clasament 2021-2022 -->

				<!-- Clasament 2022-2023 -->
				<div class="tab-pane fade <?php echo $classSeason->tabsSeasonShow("2022-2023", $lastSeason); ?>" id="clasament2223" role="tabpanel" aria-labelledby="clasament2223Tab">

					<?php
					$isRows = $classDb->isRows('clasament', 'season', '2022-2023');
					if (!$isRows) 
					{
						include 'components/alert.php';
					}
					else
					{
					?>

					<div class="row mb-5">
						<div class="col-12">
							<table class="table table-hover tableUcl">
								<thead>
									<tr>
										<th scope="col">Loc</th>
										<th scope="col">Echipă</th>
										<th scope="col">Meciuri</th>
										<th scope="col">Victorii</th>
										<th scope="col">Egaluri</th>
										<th scope="col">Înfrângeri</th>
										<th scope="col">Goluri marcate</th>
										<th scope="col">Goluri primite</th>
										<th scope="col">Golaveraj</th>
										<th scope="col" class="ptH">Puncte</th>
									</tr>
								</thead>
								<tbody>
									<?php echo clasamentShow("2022-2023", $type); ?>
								</tbody>
								<caption>
									<section class="infoGrupa">
										<h6 class="h6-responsive"><i class="fas fa-square green-text mr-2"></i>Calificare în Uefa Champions League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square blue-text mr-2"></i>Calificare în Uefa Europa League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square orange-text mr-2"></i>Calificare în Uefa Conference League</h6>
										<h6 class="h6-responsive"><i class="fas fa-square red-text mr-2"></i>Retrogradare în Championship</h6>
									</section>
								</caption>
							</table>
						</div>
					</div>
				<?php } ?>
				</div>
				<!-- Clasament 2022-2023 -->

			</div>
			<!-- Tab Content -->	
		</section>