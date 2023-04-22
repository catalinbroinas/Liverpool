	<div class="jumbotron jumbotron-fluid navbarM jumbotronTeamIntro py-3 mb-0">
		<section id="transferIntro" class="px-xl-5 mx-xl-5 mx-lg-3">
			<!-- Grid row -->
			<div class="row d-flex justify-content-xl-start justify-content-center">
				<!-- Grid col RECORD -->
				<div class="col-xl-4 col-lg-6 col-md-8 col-10 order-1">
					<h3 class="h3-responsive text-center">Record ALL-TIME</h3>
					<hr class="hrWhite">
					<!-- Grid row -->
					<div class="row">
						<!-- Grid col -->
						<div class="col-sm-6 mb-sm-0 mb-3">
							<div class="card cardTransferIntro">
								<img src="<?php echo site_img() . '/' . transferMax('arrival', 'imgPlayer'); ?>" class="card-img-top">
								<h5 class="h5-responsive card-header">Sosit</h5>
								<!-- Card Body -->
								<div class="card-body px-3 py-2">
									<div class="d-flex card-text h6-responsive my-1">
										<div class="mr-auto">Jucător:</div>
										<div class="font-weight-bold"><?php echo transferMax('arrival', 'name'); ?></div>
									</div>
									<div class="d-flex card-text h6-responsive mb-1">
										<div class="mr-auto text-left">Sumă transfer:</div>
										<div class="font-weight-bold"><i class="fas fa-euro-sign mr-1"></i><?php echo transferMax('arrival', 'valueTransfer') . ' m'; ?></div>
									</div>
								</div>
								<!-- Card Body -->
								<!-- Card Footer -->
								<div class="card-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo transferMax('arrival', 'club'); ?>">
									<img src="<?php echo site_img() . '/' . transferMax('arrival', 'imgClub'); ?>" alt="<?php echo transferMax('arrival', 'club'); ?>" class="card-img rounded-circle brandTeam">
								</div>
								<!-- Card Footer -->
							</div>
						</div>
						<!-- Grid col -->
						<!-- Grid col -->
						<div class="col-sm-6">
							<div class="card cardTransferIntro">
								<img src="<?php echo site_img() . '/' . transferMax('departure', 'imgPlayer'); ?>" class="card-img-top">
								<h5 class="h5-responsive card-header">Plecat</h5>
								<!-- Card Body -->
								<div class="card-body px-3 py-2">
									<div class="d-flex card-text h6-responsive my-1">
										<div class="mr-auto">Jucător:</div>
										<div class="font-weight-bold"><?php echo transferMax('departure', 'name'); ?></div>
									</div>
									<div class="d-flex card-text h6-responsive mb-1">
										<div class="mr-auto text-left">Sumă transfer:</div>
										<div class="font-weight-bold"><i class="fas fa-euro-sign mr-1"></i><?php echo transferMax('departure', 'valueTransfer') . ' m'; ?></div>
									</div>
								</div>
								<!-- Card Body -->
								<!-- Card Footer -->
								<div class="card-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo transferMax('departure', 'club'); ?>">
									<img src="<?php echo site_img() . '/' . transferMax('departure', 'imgClub'); ?>" alt="<?php echo transferMax('departure', 'club'); ?>" class="card-img rounded-circle brandTeam">
								</div>
								<!-- Card Footer -->
							</div>
						</div>
						<!-- Grid col -->
					</div>
					<!-- Grid row -->
				</div>
				<!-- Grid col RECORD -->
				<!-- Grid col Sezon -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-7 col-8 order-xl-2 order-3 mt-xl-0 mt-3">
					<h3 class="h3-responsive text-center">Sezonul <?php echo $classSeason->thisSeason(); ?></h3>
					<hr class="hrWhite">
					<div class="text-center mb-3">
						<img id="teamI" class="img-fluid rounded-circle white my-auto" src="<?php echo site_img() . '/icon.png'; ?>" alt="Liverpool">
					</div>
					<div id="sezonContent">
						<div class="d-flex text-right item">
							<h4 class="h4-responsive text-left">Suma platită:</h4>
							<h4 class="h4-responsive font-weight-bold ml-auto"><i class="fas fa-euro-sign mr-1"></i><?php echo transferTotalValue($classSeason->thisSeason(), 'arrival', 'in-loan') . ' m'; ?></h4>
						</div>
						<div class="d-flex text-right item">
							<h4 class="h4-responsive text-left">Suma incasată:</h4>
							<h4 class="h4-responsive font-weight-bold ml-auto"><i class="fas fa-euro-sign mr-1"></i><?php echo transferTotalValue($classSeason->thisSeason(), 'departure', 'on-loan') . ' m'; ?></h4>
						</div>
						<div class="d-flex text-right item">
							<h4 class="h4-responsive text-left">Jucători transferați:</h4>
							<h4 class="h4-responsive font-weight-bold ml-auto"><?php echo transferNr($classSeason->thisSeason(), 'arrival', 'in-loan'); ?></h4>
						</div>
						<div class="d-flex text-right item">
							<h4 class="h4-responsive text-left">Jucători cedați:</h4>
							<h4 class="h4-responsive font-weight-bold ml-auto"><?php echo transferNr($classSeason->thisSeason(), 'departure', 'on-loan'); ?></h4>
						</div>
					</div>
				</div>
				<!-- Grid col Sezon -->
				<!-- Grid col Nou -->
				<div class="col-xl-4 col-lg-6 col-md-8 col-10 order-xl-3 order-2 mt-lg-0 mt-3">
					<h3 class="h3-responsive text-center">Nou</h3>
					<hr class="hrWhite">
					<!-- Grid row -->
					<div class="row">
						<!-- Grid col -->
						<div class="col-sm-6 mb-sm-0 mb-3">
							<div class="card cardTransferIntro">
								<img src="<?php echo site_img() . '/' . transferRecent('arrival', 1, 'imgPlayer'); ?>" class="card-img-top">
								<h5 class="h5-responsive card-header">Sosit</h5>
								<!-- Card Body -->
								<div class="card-body px-3 py-2">
									<div class="d-flex card-text h6-responsive my-1">
										<div class="mr-auto">Jucător:</div>
										<div class="font-weight-bold"><?php echo transferRecent('arrival', 1, 'name'); ?></div>
									</div>
									<div class="d-flex card-text h6-responsive mb-1">
										<div class="mr-auto text-left">Sumă transfer:</div>
										<div class="font-weight-bold"><i class="fas fa-euro-sign mr-1"></i><?php echo transferRecent('arrival', 1, 'valueTransfer') . ' m'; ?></div>
									</div>
								</div>
								<!-- Card Body -->
								<!-- Card Footer -->
								<div class="card-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo transferRecent('arrival', 1, 'club'); ?>">
									<img src="<?php echo site_img() . '/' . transferRecent('arrival', 1, 'imgClub'); ?>" alt="<?php echo transferRecent('arrival', 1, 'club'); ?>" class="card-img rounded-circle brandTeam">
								</div>
								<!-- Card Footer -->
							</div>
						</div>
						<!-- Grid col -->
						<!-- Grid col -->
						<div class="col-sm-6">
							<div class="card cardTransferIntro">
								<img src="<?php echo site_img() . '/' . transferRecent('departure', 1, 'imgPlayer'); ?>" class="card-img-top">
								<h5 class="h5-responsive card-header">Plecat</h5>
								<!-- Card Body -->
								<div class="card-body px-3 py-2">
									<div class="d-flex card-text h6-responsive my-1">
										<div class="mr-auto">Jucător:</div>
										<div class="font-weight-bold"><?php echo transferRecent('departure', 1, 'name'); ?></div>
									</div>
									<div class="d-flex card-text h6-responsive mb-1">
										<div class="mr-auto text-left">Sumă transfer:</div>
										<div class="font-weight-bold"><i class="fas fa-euro-sign mr-1"></i><?php echo transferRecent('departure', 1, 'valueTransfer') . ' m'; ?></div>
									</div>
								</div>
								<!-- Card Body -->
								<!-- Card Footer -->
								<div class="card-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo transferRecent('departure', 1, 'club'); ?>">
									<img src="<?php echo site_img() . '/' . transferRecent('departure', 1, 'imgClub'); ?>" alt="<?php echo transferRecent('departure', 1, 'club'); ?>" class="card-img rounded-circle brandTeam">
								</div>
								<!-- Card Footer -->
							</div>
						</div>
						<!-- Grid col -->
					</div>
					<!-- Grid row -->
				</div>
				<!-- Grid col Nou -->
			</div>
			<!-- Grid row -->
		</section>
	</div>