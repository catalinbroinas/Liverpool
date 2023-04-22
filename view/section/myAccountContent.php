<!-- My Account Intro -->
<section id="myAccountContent">
	
	<!-- Container -->
	<div class="container">
		
		<!-- Grid row -->
		<div class="row">
			
			<!-- Grid col -->
			<div id="myAccountContentWrapp" class="col-12">
				
				<!-- Profile Dates -->
				<section id="myProfileDates">
					
					<!-- Title -->
					<h3 class="h3 title">Date personale</h3>
					<hr class="hrRed">

					<!-- Content -->
					<div class="myCotentWrapp">

						<!--Grid row-->
					    <div class="row text-center">

					        <!-- First Name -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					          <i class="fas fa-user contentIcon"></i>
					          <p class="contentTitle">Nume</p>
					          <p class="contetSubTitle text-capitalize"><?php echo $classUserAuth->callFunction('getUserDates', 'firstName'); ?></p>

					        </div>
					        <!-- First Name -->

					        <!-- Last Name -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					          <i class="fas fa-user contentIcon"></i>
					          <p class="contentTitle">Prenume</p>
					          <p class="contetSubTitle text-capitalize"><?php echo $classUserAuth->callFunction('getUserDates', 'lastName'); ?></p>

					        </div>
					        <!-- Last Name -->

					        <!-- Date of Birth -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					          <i class="fas fa-calendar-day contentIcon"></i>
					          <p class="contentTitle">Data de naștere</p>
					          <p class="contetSubTitle"><?php $dateOfBirth = $classUserAuth->callFunction('getUserDates', 'dateOfBirth'); echo $classCalendar->displayDate($dateOfBirth); ?></p>

					        </div>
					        <!-- Date of Birth -->

							<!-- Gender -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">
					        	<?php $gender = $classUserAuth->callFunction('getUserDates', 'gender'); ?>
					          <i class="fas fa-<?php echo myGenderIcon($gender); ?> contentIcon"></i>
					          <p class="contentTitle">Gen</p>
					          <p class="contetSubTitle text-capitalize"><?php echo myGender($gender); ?></p>

					        </div>
					        <!-- Gender -->

					        <!-- Date of Register -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					          <i class="fas fa-calendar-check contentIcon"></i>
					          <p class="contentTitle">Data de înscriere</p>
					          <p class="contetSubTitle">
					          	<?php $dateOfRegister = $classUserAuth->callFunction('getUserDates', 'dateOfRegister');
					          	$dateR = date_create($dateOfRegister);
					          	$dateH = date_format($dateR, "H:i");
					          	 echo $classCalendar->displayDate($dateOfRegister) . ' ora ' . $dateH; ?>
					          		
					          	</p>

					        </div>
					        <!-- Date of Register -->

					        <!-- User ID -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					          <i class="fas fa-id-card contentIcon"></i>
					          <p class="contentTitle">ID Client</p>
					          <p class="contetSubTitle"><?php echo $classUserAuth->callFunction('getUserDates', 'userId'); ?></p>

					        </div>
					        <!-- User ID -->					        

					      </div>
					      <!--Grid row-->

					  </div>
					  <!-- Content -->
		   
				</section>
				<!-- Profile Dates -->

				<!-- Address Dates -->
				<section id="myAddressDates">
					
					<!-- Title -->
					<h3 class="h3 title">Adresă</h3>
					<hr class="hrRed">

					<!-- Content -->
					<div class="myCotentWrapp">

						<!--Grid row-->
					    <div class="row text-center">

					        <!-- Country -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					        	<i class="fas fa-flag contentIcon"></i>
					          	<p class="contentTitle">Țară</p>
					          	<p class="contetSubTitle text-capitalize"><?php echo $classUserAuth->callFunction('getUserDates', 'country'); ?></p>

					        </div>
					        <!-- Country -->

					        <!-- City -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					        	<i class="fas fa-map-marker-alt contentIcon"></i>
					          	<p class="contentTitle">Localitate</p>
					          	<p class="contetSubTitle text-capitalize"><?php echo $classUserAuth->callFunction('getUserDates', 'city'); ?></p>

					        </div>
					        <!-- City -->

					    </div>
					    <!--Grid row-->

					</div>
					<!-- Content -->

				</section>
				<!-- Address Dates -->

				<!-- Auth Dates -->
				<section id="myAuthDates">
					
					<!-- Title -->
					<h3 class="h3 title">Date de autentificare</h3>
					<hr class="hrRed">

					<!-- Content -->
					<div class="myCotentWrapp">

						<!--Grid row-->
					    <div class="row text-center">

					        <!-- Email Address -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					        	<i class="fas fa-envelope contentIcon"></i>
					          	<p class="contentTitle">Adresă de email</p>
					          	<p class="contetSubTitle"><?php echo $classUserAuth->callFunction('getUserDates', 'emailAddress'); ?></p>

					        </div>
					        <!-- Email Address -->

					        <!-- Phone Number -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					        	<i class="fas fa-phone contentIcon"></i>
					          	<p class="contentTitle">Număr de telefon</p>
					          	<p class="contetSubTitle"><?php $phoneNumber = $classUserAuth->callFunction('getUserDates', 'phoneNumber'); echo myPhoneNumber($phoneNumber); ?></p>

					        </div>
					        <!-- Phone Number -->

					        <!-- Role -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					        	<i class="fas fa-user-clock contentIcon"></i>
					          	<p class="contentTitle">Privilegii</p>
					          	<p class="contetSubTitle text-capitalize"><?php $role = $classUserAuth->callFunction('getUserDates', 'role'); echo myRole($role); ?></p>

					        </div>
					        <!-- Role -->

					        <!-- Role -->
					        <div class="col-lg-4 col-sm-6 col-10 my-3">

					        	<i class="fas fa-key contentIcon"></i>
					          	<p class="contentTitle">Cheie</p>
					          	<p class="contetSubTitle"><?php echo $classUserAuth->callFunction('getUserDates', 'verificationKey'); ?></p>

					        </div>
					        <!-- Role -->

					    </div>
					    <!--Grid row-->

					</div>
					<!-- Content -->


				</section>
				<!-- Auth Dates -->

			</div>
			<!-- Grid col -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Container -->

</section>
<!-- My Account Intro -->