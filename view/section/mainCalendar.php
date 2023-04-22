<section id="mainCalendar" class="mb-5">
	
	<!-- Title -->
	<div class="row">
		
		<!-- Grid col -->
		<div class="col-12">
			<div class="d-flex justify-content-between">
				<h1 class="h1-responsive">Meciuri & Rezultate</h1>
				<a href="<?php echo site_url() . '/view/calendar.php'; ?>" class="btn btnVideos my-auto px-3 py-2">
				Mai mult
					<i class="fas fa-angle-right ml-4"></i>
				</a>
			</div>
			<hr class="hrRed">
		</div>
		<!-- Grid col -->

	</div>
	<!-- Title -->

	<!-- Content -->
	<div class="row">
		
		<!-- Grid col -->
		<div class="col-lg-12">
			
			<!-- Card -->
			<div class="card">
				<!-- Card Background  -->
				<div class="view">
					<!-- Image Background  -->
					<img class="d-block w-100" src="<?php echo site_img() . '/anfield2.png'; ?>" alt="Anfield">
					<!-- Mask Background  -->
		        	<div class="mask rgba-black-strong">
				
						<!-- Card Header -->
						<div id="mainCalendarHeader" class="card-header d-flex justify-content-between">
							<div class="competitionInfo">
								<div class="dateOfMatch mb-1">
									<div class="dateIco"><i class="fas fa-calendar-day"></i></div>
									<span class="ml-4 competitionText"><?php
										$data = nextMatch('data');
										$data = date_create($data);
										$dataNewFormat = date_format($data, "d M Y");
										echo $dataNewFormat;
									?></span>
								</div>
								<div class="placeOfMatch mb-1">
									<div class="placeIco"><i class="fas fa-map-marker-alt"></i></div>
									<span class="ml-4 competitionText"><?php echo nextMatch('city'); ?></span>
								</div>
								<div class="stadiumOfMatch">
									<div class="stadium"><img src="<?php echo site_img() . '/stadiumIco.png'; ?>" class="stadiumIco"></div>
									<span class="ml-4 competitionText"><?php echo nextMatch('stadium'); ?></span>
								</div>
							</div>
							<img src="<?php echo site_img() . '/' . nextMatch('competitionIco'); ?>" class="competitionImage my-auto">
						</div>
						<!-- Card Header -->

						<!-- Card Body -->
						<div class="card-body px-md-5 px-2 py-xl-4 py-lg-3 py-md-2 py-2 py-sm-5">
							<div class="row d-flex justify-content-around">
								<div class="col-sm-auto col-12 d-flex justify-content-sm-between justify-content-center align-items-center">
									<img src="<?php echo site_img() . '/' . nextMatch('homeTeamIco'); ?>" class="teamIco my-auto">
									<h3 class="teamText mr-sm-0 ml-3"><?php echo nextMatch('homeTeam'); ?></h3>
								</div>
								<div class="col-auto d-flex align-items-center">
									<?php 
									if(calendarRecords('calendar', 'status', 'scheduled'))
									{
									?>
									<img src="<?php echo site_img() . '/against.png'; ?>" class="teamIco">
									<?php
									}
									else
									{
									?>
									<h1 class="resultText mx-auto my-auto"><?php echo nextMatch('goalsH'); ?><i class="fas fa-minus white-text mx-3"></i><?php echo nextMatch('goalsA'); ?></h1>
									<?php
									}
									?>
								</div>
								<div class="col-sm-auto col-12 d-flex justify-content-sm-between justify-content-center align-items-center flex-sm-row flex-row-reverse">
									<h3 class="teamText ml-sm-0 mr-3"><?php echo nextMatch('awayTeam'); ?></h3>
									<img src="<?php echo site_img() . '/' . nextMatch('awayTeamIco'); ?>" class="teamIco my-auto">
								</div>
							</div>
						</div>
						<!-- Card Body -->

					</div>
					<!-- Mask Background  -->
				</div>
				<!-- Card Background  -->
			</div>
			<!-- Card -->

		</div>
		<!-- Grid col -->

	</div>
	<!-- Content -->

	<!-- Buttons -->
	<div class="row mt-3">
		
		<!-- Grid col -->
		<div class="col-md-6 col-12 mb-md-0 mb-3">
			<a class="mainButton uclButton d-flex flex-center" href="<?php echo site_url() . '/view/clasament.php'; ?>">
			<i class="d-flex align-items-center"><img src="<?php echo site_img() . '/plIcon1.png'; ?>" class="plIcon"><span class="text">Premier League</span></i>
			</a>
		</div>
		<!-- Grid col -->

		<!-- Grid col -->
		<div class="col-md-6 col-12">
			<a class="mainButton plButton d-flex flex-center" href="#">
				<i class="d-flex align-items-center"><img src="<?php echo site_img() . '/uclIcon.png'; ?>" class="uclIcon"><span class="text">Champions League</span></i>
			</a>
		</div>
		<!-- Grid col -->

	</div>
	<!-- Buttons -->

</section>