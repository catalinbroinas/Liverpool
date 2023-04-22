<section class="mb-5 navbarM">
		<!-- Carousel Wrapper -->
		<div id="carouselIntro" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="10000">
		  <!--Indicators-->
		  <ol class="carousel-indicators pb-3">
		    <li data-target="#carouselIntro" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselIntro" data-slide-to="1"></li>
		    <li data-target="#carouselIntro" data-slide-to="2"></li>
		    <li data-target="#carouselIntro" data-slide-to="3"></li>
		  </ol>
		  <!--/.Indicators-->
		  <!--Slides-->
		  <div class="carousel-inner" role="listbox">
		  	<!-- First slide -->
		    <div class="carousel-item active">
		      <!--Mask -->
		      <div class="view">
		        <img class="d-block w-100" src="<?php echo site_img() . '/anfield2.jpg'; ?>" alt="Anfield">
		        <div class="mask rgba-black-strong">
		        	<!-- Content -->
		        	<div id="newsIntro" class="container-fluid">
				      	<div class="row py-xl-5 py-md-2 d-flex justify-content-center ml-3">
				      		<div id="textIntro" class="col-xl-4 col-lg-6 col-md-10 py-lg-5 my-md-auto text-xl-left text-center">
				      			<h1 class="h1-responsive text-center mb-lg-5 mb-md-4 mb-2 mt-md-0 mt-3">Noutăți</h1>
				      			<p class="h5 mx-3 mb-lg-3 mb-md-2 mb-1"><span class="ml-5">Aici</span> găsești ultimele noutăți despre echipa ta preferată. Cele mai noi știri, cele mai proaspete transferuri, cele mai interesante declarații, toate acestea, și nu numai, la un singur click distanță!</p>
				      				<a href="<?php echo site_url() . '/view/news.php'; ?>" class="ml-5 btn btn-sm btnIntro mb-0 mb-lg-5">Noutăți</a>
				      		</div>
				      		<div class="col-lg-5 py-5 my-auto ml-5 d-fle d-none d-lg-block">
				      			<div class="row">
				      				<div class="col-4 mt-5">
					      				<img class="img-fluid" src="<?php echo site_img() . '/alisson.png'; ?>">
					      			</div>
					      			<div class="col-4 mb-5">
					      				<img class="img-fluid" src="<?php echo site_img() . '/vanDijk.png'; ?>">
					      			</div>
					      			<div class="col-4 mt-5">
					      				<img class="img-fluid" src="<?php echo site_img() . '/salah.png'; ?>">
					      			</div>
				      			</div>
				      		</div>
				      	</div>
				    </div>
				    <!-- Content -->
		        </div>
		      </div>
		      <!-- Mask -->
		    </div>
		    <!-- First slide -->
		    <!-- Second slide -->
		    <div class="carousel-item">
		      <!--Mask -->
		      <div class="view">
		        <img class="d-block w-100" src="<?php echo site_img() . '/anfield2.jpg'; ?>" 
		          alt="Third slide">
		        <div class="mask rgba-black-strong d-flex flex-center">
		        	<!-- Content -->
		        	<div class="container-fluid">
			        	<div class="row d-flex flex-center">
			        		<div class="col-xl-10 col-md-8 col-10">
					       		<img class="img-fluid" src="<?php echo site_img() . '/players.png'; ?>">
					       		<div class="mask text-center">
					       			<div class="h-100 d-flex align-items-end">
					       				<div class="text-center w-100">
					       					<a href="<?php echo site_url() . '/view/team.php'; ?>" class="btn btn-sm btnIntroTeam mb-3">Echipă</a>
					        			</div>
					        		</div>
					        	</div>
					       	</div>
					    </div>
				    </div>
		        	<!-- Content -->
		        </div>
		      </div>
		      <!-- Mask -->
		    </div>
		    <!-- Second slide -->
		    <!-- Thrid slide -->
		    <div class="carousel-item">
		      <!--Mask -->
		      <div class="view">
		        <img class="d-block w-100" src="<?php echo site_img() . '/anfield2.jpg'; ?>" 
		          alt="Third slide">
		        <div class="mask rgba-black-strong d-flex flex-center">
		        	<!-- Content -->
		        	<div id="containerTransfer" class="container-fluid pb-lg-0 pb-5">
		        		<div class="row mb-5 d-none d-xl-block">
		        			<div class="col-12">
		        				<h1 class="h1-responsive white-text text-center font-weight-bold">Transferuri</h1>
		        			</div>
		        		</div>
		        		<div class="row d-flex justify-content-center mt-md-0 mt-3">
		        			<div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-8 py-2  pb-sm-5 pt-sm-2 py-lg-5 py-xl-0 mb-sm-4">
				        		<section class="transferIntro py-3 px-5">
					        		<div class="row mb-2">
					        			<div class="col-12">
					        				<h5 class="text-center white-text font-weight-bold"><?php echo transferRecent('arrival', 1, 'name'); ?></h5>
					        			</div>
					        		</div>
					        		<div class="row">
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('arrival', 1, 'pngPlayer'); ?>" alt="<?php echo transferRecent('arrival', 1, 'name'); ?>">
					        			</div>
					        			<div class="col-4 my-auto  d-flex justify-content-center">
					        				<div class="white d-inline-block text-center">
					        					<img class="img-fluid" src="<?php echo site_img() . '/left.png'; ?>" alt="Arrivals">
					        				</div>
					        			</div>
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('arrival', 1, 'imgClub'); ?>" alt="<?php echo transferRecent('arrival', 1, 'club'); ?>">
					        			</div>
					        		</div>
					        	</section>
					        </div>
					        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 pb-5 pt-2 py-lg-5 py-xl-0 mb-4 d-none d-sm-block">
				        		<section class="transferIntro py-3 px-5">
					        		<div class="row mb-2">
					        			<div class="col-12">
					        				<h5 class="text-center white-text font-weight-bold"><?php echo transferRecent('arrival', 2, 'name'); ?></h5>
					        			</div>
					        		</div>
					        		<div class="row">
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('arrival', 2, 'pngPlayer'); ?>" alt="<?php echo transferRecent('arrival', 2, 'name'); ?>">
					        			</div>
					        			<div class="col-4 my-auto  d-flex justify-content-center">
					        				<div class="white d-inline-block text-center">
					        					<img class="img-fluid" src="<?php echo site_img() . '/left.png'; ?>" alt="Arrivals">
					        				</div>
					        			</div>
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('arrival', 2, 'imgClub'); ?>" alt="<?php echo transferRecent('arrival', 2, 'club'); ?>">
					        			</div>
					        		</div>
					        	</section>
					        </div>
					        <div class="col-xl-3 col-lg-4 py-5 py-xl-0 mb-4 d-none d-lg-block">
				        		<section class="transferIntro py-3 px-5">
					        		<div class="row mb-2">
					        			<div class="col-12">
					        				<h5 class="text-center white-text font-weight-bold"><?php echo transferRecent('arrival', 3, 'name'); ?></h5>
					        			</div>
					        		</div>
					        		<div class="row">
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('arrival', 3, 'pngPlayer'); ?>" alt="<?php echo transferRecent('arrival', 3, 'name'); ?>">
					        			</div>
					        			<div class="col-4 my-auto  d-flex justify-content-center">
					        				<div class="white d-inline-block text-center">
					        					<img class="img-fluid" src="<?php echo site_img() . '/left.png'; ?>" alt="Arrivals">
					        				</div>
					        			</div>
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('arrival', 3, 'imgClub'); ?>" alt="<?php echo transferRecent('arrival', 3, 'club'); ?>">
					        			</div>
					        		</div>
					        	</section>
					        </div>
					    </div>
					    <div class="row d-flex justify-content-center">
					        <div class="col-xl-3 col-lg-4 col-md-5 py-5 py-xl-0 mb-4 d-none d-md-block">
				        		<section class="transferIntro py-3 px-5">
					        		<div class="row mb-2">
					        			<div class="col-12">
					        				<h5 class="text-center white-text font-weight-bold"><?php echo transferRecent('departure', 1, 'name'); ?></h5>
					        			</div>
					        		</div>
					        		<div class="row">
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('departure', 1, 'pngPlayer'); ?>" alt="<?php echo transferRecent('departure', 1, 'name'); ?>">
					        			</div>
					        			<div class="col-4 my-auto  d-flex justify-content-center">
					        				<div class="white d-inline-block text-center">
					        					<img class="img-fluid" src="<?php echo site_img() . '/right.jpg'; ?>" alt="Departures">
					        				</div>
					        			</div>
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('departure', 1, 'imgClub'); ?>" alt="<?php echo transferRecent('departure', 1, 'club'); ?>">
					        			</div>
					        		</div>
					        	</section>
					        </div>
					        <div class="col-xl-3 col-lg-4 col-md-5 py-5 py-xl-0 mb-4 d-none d-md-block">
				        		<section class="transferIntro py-3 px-5">
					        		<div class="row mb-2">
					        			<div class="col-12">
					        				<h5 class="text-center white-text font-weight-bold"><?php echo transferRecent('departure', 2, 'name'); ?></h5>
					        			</div>
					        		</div>
					        		<div class="row">
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('departure', 2, 'pngPlayer'); ?>" alt="<?php echo transferRecent('departure', 2, 'name'); ?>">
					        			</div>
					        			<div class="col-4 my-auto  d-flex justify-content-center">
					        				<div class="white d-inline-block text-center">
					        					<img class="img-fluid" src="<?php echo site_img() . '/right.jpg'; ?>" alt="Departures">
					        				</div>
					        			</div>
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('departure', 2, 'imgClub'); ?>" alt="<?php echo transferRecent('departure', 2, 'club'); ?>">
					        			</div>
					        		</div>
					        	</section>
					        </div>
					        <div class="col-xl-3 col-lg-4 py-5 py-xl-0 mb-4 d-none d-lg-block">
				        		<section class="transferIntro py-3 px-5">
					        		<div class="row mb-2">
					        			<div class="col-12">
					        				<h5 class="text-center white-text font-weight-bold"><?php echo transferRecent('departure', 3, 'name'); ?></h5>
					        			</div>
					        		</div>
					        		<div class="row">
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('departure', 3, 'pngPlayer'); ?>" alt="<?php echo transferRecent('departure', 3, 'name'); ?>">
					        			</div>
					        			<div class="col-4 my-auto  d-flex justify-content-center">
					        				<div class="white d-inline-block text-center">
					        					<img class="img-fluid" src="<?php echo site_img() . '/right.jpg'; ?>" alt="Departures">
					        				</div>
					        			</div>
					        			<div class="col-4">
					        				<img class="img-fluid" src="<?php echo site_img() . '/' . transferRecent('departure', 3, 'imgClub'); ?>" alt="<?php echo transferRecent('departure', 3, 'club'); ?>">
					        			</div>
					        		</div>
					        	</section>
					        </div>
					    </div>
					    <div class="row mt-md-5 mt-xl-0">
					    	<div class="text-center w-100">
				        		<a href="<?php echo site_url() . '/view/transfer.php'; ?>" class="btn btn-sm btnIntro mt-lg-0 mt-sm-0 mt-md-4 mb-xl-3 mb-sm-0 mb-3">Transferuri</a>
				        	</div>
					    </div>
		        	</div>
		        	<!-- Content -->
		        </div>
		      </div>
		      <!-- Mask -->
		    </div>
		    <!-- Thrid slide -->
		    <!-- Last slide -->
		    <div class="carousel-item">
		    	<!--Mask-->
			    <div class="view">
			        <img class="d-block w-100" src="<?php echo site_img() . '/anfield2.jpg'; ?>" 
			          alt="Third slide">
			        <div class="mask rgba-black-strong d-flex flex-center">
			        	<!-- Content -->
			        	<div id="containerCalendar" class="container">
			        		<!-- Grid row -->
			        		<div class="row d-flex justify-content-xl-between justify-content-lg-center mr-lg-0 mr-md-2">
			        			<div class="col-lg-9 col-md-8 col-sm-7">
			        				<!-- Ultimele 3 meciuri -->
			        				<div class="row">
			        					<div class="col-12 text-center">
			        						<h1 class="h1-responsive mb-3 d-none d-xl-block">Ultimele 3 meciuri</h1>
			        					</div>
			        				</div>
			        		<?php 
			        		$display = calendarRecords('calendar', 'status', 'disputed');
			        		if($display)
			        			{ ?>
			        				<div class="row d-flex justify-content-sm-start justify-content-center">
			        					<div class="col-4 d-none d-lg-block">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarBackHome('icon', 3); ?>" alt="<?php echo calendarBackHome('team', 3); ?>">
				        						<h5 class="result my-auto p-1"><?php echo calendarBack('goalsH', 3); ?><span class="mx-1">-</span><?php echo calendarBack('goalsA', 3); ?>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarBackAway('icon', 3); ?>" alt="<?php echo calendarBackAway('team', 3); ?>">
				        					</div>
				        				</div>
				        				<div class="col-lg-4 col-6 d-none d-md-block">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarBackHome('icon', 2); ?>" alt="<?php echo calendarBackHome('team', 2); ?>">
				        						<h5 class="result my-auto p-1"><?php echo calendarBack('goalsH', 2); ?><span class="mx-1">-</span><?php echo calendarBack('goalsA', 2); ?>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarBackAway('icon', 2); ?>" alt="<?php echo calendarBackAway('team', 2); ?>">
				        					</div>
				        				</div>
				        				<div class="col-lg-4 col-md-6 col-sm-12 col-8">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarBackHome('icon', 1); ?>" alt="<?php echo calendarBackHome('team', 1); ?>">
				        						<h5 class="result my-auto p-1"><?php echo calendarBack('goalsH', 1); ?><span class="mx-1">-</span><?php echo calendarBack('goalsA', 1) ?>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarBackAway('icon', 1); ?>" alt="<?php echo calendarBackAway('team', 1); ?>">
				        					</div>
				        				</div>
			        				</div>
			        		<?php
			        			}
			        		else 
			        			{ ?>
			        				<div class="row d-flex justify-content-sm-start justify-content-center">
			        					<div class="col-4 d-none d-lg-block">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/icon.png'; ?>" alt="Liverpool">
				        						<h5 class="result my-auto p-1">
				        							<span class="mx-2">VS</span>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/free.png'; ?>" alt="Nestabilit">
				        					</div>
				        				</div>
				        				<div class="col-lg-4 col-6 d-none d-md-block">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/icon.png'; ?>" alt="Liverpool">
				        						<h5 class="result my-auto p-1">
				        							<span class="mx-2">VS</span>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/free.png'; ?>" alt="Nestabilit">
				        					</div>
				        				</div>
				        				<div class="col-lg-4 col-md-6 col-sm-12 col-8">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/icon.png'; ?>" alt="Liverpool">
				        						<h5 class="result my-auto p-1">
				        							<span class="mx-2">VS</span>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/free.png'; ?>" alt="Nestabilit">
				        					</div>
				        				</div>
			        				</div>
			        		<?php 
			        					 		
			        			} 
			        		?>
			        				
			        				<!-- Utlimele 3 meciuri -->
			        			</div>
			        			<div class="col-xl-2 col-md-4 col-sm-5 mr-xl-5 mr-0">
			        				<div class="h-100 d-flex flex-center">
			        					<a href="<?php echo site_url() . '/view/calendar.php'; ?>" class="btn btn-sm btnIntro mt-xl-5 mt-lg-3">Rezultate</a>
			        				</div>
			        			</div>
			        		</div>
			        		<!-- Grid row -->
			        		<hr class="mr-5 my-xl-5 my-lg-4 my-md-2 d-none d-sm-block">
			        		<!-- Grid row -->
			        		<div class="row d-flex justify-content-xl-between justify-content-lg-center">
			        			<div class="col-lg-9 col-md-8 col-sm-7">
			        				<!-- Urmatoarele 3 meciuri -->
			        				<div class="row">
			        					<div class="col-12 text-center">
			        						<h1 class="h1-responsive mb-3 d-none d-xl-block">Următoarele 3 meciuri</h1>
			        					</div>
			        				</div>
			        	<?php 
			        		$display = calendarRecords('calendar', 'status', 'scheduled');
			        		if($display)
			        			{ ?>
			        				<div class="row">
			        					<div class="col-lg-4 col-md-6 col-12 d-none d-sm-block">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarNextHome('icon', 1); ?>" alt="<?php echo calendarNextHome('team', 1); ?>">
				        						<h5 class="result my-auto p-1">
				        							<span class="mx-2">VS</span>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarNextAway('icon', 1); ?>" alt="<?php echo calendarNextAway('team', 1); ?>">
				        					</div>
				        				</div>
				        				<div class="col-lg-4 col-6 d-none d-md-block d-sm-none">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarNextHome('icon', 2); ?>" alt="<?php echo calendarNextHome('team', 2); ?>">
				        						<h5 class="result my-auto p-1">
				        							<span class="mx-2">VS</span>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarNextAway('icon', 2); ?>" alt="<?php echo calendarNextAway('team', 2); ?>">
				        					</div>
				        				</div>
				        				<div class="col-4 d-none d-lg-block">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarNextHome('icon', 3); ?>" alt="<?php echo calendarNextHome('team', 3); ?>">
				        						<h5 class="result my-auto p-1">
				        							<span class="mx-2">VS</span>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/' . calendarNextAway('icon', 3); ?>" alt="<?php echo calendarNextAway('team', 3); ?>">
				        					</div>
				        				</div>
			        				</div>
			        		<?php
			        			}
			        		else 
			        			{ ?>
			        				<div class="row">
			        					<div class="col-lg-4 col-md-6 col-12 d-none d-sm-block">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/icon.png'; ?>" alt="Liverpool">
				        						<h5 class="result my-auto p-1">
				        							<span class="mx-2">VS</span>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/free.png'; ?>" alt="Nestabilit">
				        					</div>
				        				</div>
				        				<div class="col-lg-4 col-6 d-none d-md-block d-sm-none">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/icon.png'; ?>" alt="Liverpool">
				        						<h5 class="result my-auto p-1">
				        							<span class="mx-2">VS</span>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/free.png'; ?>" alt="Nestabilit">
				        					</div>
				        				</div>
				        				<div class="col-4 d-none d-lg-block">
				        					<div class="match d-flex d-inline py-3 px-4">
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/icon.png'; ?>" alt="Liverpool">
				        						<h5 class="result my-auto p-1">
				        							<span class="mx-2">VS</span>
				        						</h5>
				        						<img class="img-fluid iconTeam" src="<?php echo site_img() . '/free.png'; ?>" alt="Nestabilit">
				        					</div>
				        				</div>
				        			</div>
				        	<?php 
			        					 		
			        			} 
			        		?>
			        				<!-- Urmatoarele 3 meciuri -->
			        			</div>
			        			<div class="col-xl-2 col-md-4 col-sm-5 mr-xl-5 mr-0 d-none d-sm-block">
			        				<div class="h-100 d-flex flex-center">
			        					<a href="<?php echo site_url() . '/view/calendar.php'; ?>" class="btn btn-sm btnIntro mt-xl-5 mt-lg-3">Meciuri</a>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<!-- Content -->
			        </div>
			    </div>
			    <!-- Mask -->
		    </div>
		    <!-- Last slide -->
		  </div>
		  <!-- Slides -->
		  
		  <!-- Controls -->
		  <a class="carousel-control-prev" href="#carouselIntro" role="button" data-slide="prev">
		    <span class="fas fa-2x fa-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselIntro" role="button" data-slide="next">
		    <span class="fas fa-2x fa-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		  <!-- Controls -->
		</div>
		<!-- Carousel Wrapper -->
	</section>