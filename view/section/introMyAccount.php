<!-- My Account Intro -->
<section class="navbarM" id="myAccountIntro">
	
	<!-- Container -->
	<div class="container-fluid">
		
		<!-- Grid row -->
		<div class="row">
			
			<!-- Grid col -->
			<div class="col-12 p-0">
				
				<!-- Jumbotron -->
				<div class="jumbotron jumbotron-fluid">
					
					<!-- Jumbotron content -->
					<div class="container">

						<!-- Jumbotron Title -->
						<h1 class="h1 title">Bine ai venit la profilul tău, <?php echo  $classUserAuth->callFunction('getShortName', 'lastName'); ?>!</h1>

						<!-- Grid row -->
						<div class="row">
							
							<!-- Grid col -->
							<div class="col-auto mx-auto">

								<!-- Navs -->
								<ul class="list-group list-group-horizontal-md">
									<li class="list-group-item">
										<a class="nav-link" onclick="displayUserDates('myProfileDates');"><i class="fas fa-user-circle navsIcon"></i>
										<h6 class="h6 navsTitle">Informații</h6></a>
									</li>
									<li class="list-group-item">
										<a class="nav-link" onclick="displayUserDates('myAddressDates');"><i class="fas fa-map-marker-alt navsIcon"></i>
										<h6 class="h6 navsTitle">Adresă</h6></a>
									</li>
									<li class="list-group-item">
										<a class="nav-link" onclick="displayUserDates('myAuthDates');"><i class="fas fa-user-lock navsIcon"></i>
										<h6 class="h6 navsTitle">Autentificare</h6></a>
									</li>
									<li class="list-group-item">
										<a class="nav-link white-text" href="<?php echo site_url() . '/logout.php' ?>"><i class="fas fa-power-off navsIcon"></i>
										<h6 class="h6 navsTitle">Deconectare</h6></a>
									</li>
								</ul>
								<!-- Navs -->

							</div>
							<!-- Grid col -->

						</div>
						<!-- Grid row -->

					</div>
					<!-- Jumbotron content -->

				</div>
				<!-- Jumbotron -->

			</div>
			<!-- Grid col -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Container -->

</section>
<!-- My Account Intro -->