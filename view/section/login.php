<!-- Login -->
<section id="login" class="row">
	
	<!-- Grid col -->
	<div class="col-lg-6 col-md-8 col-10 mx-auto" style="background-color: rgba(0, 0, 0, 0.5);">
	
		<!-- Form Wrapp -->
		<form id="login" action="<?php echo htmlspecialchars(site_url() . '/login.php'); ?>" method="POST" class="px-5 pb-4 pt-0 acountForm">
								
			<!-- Form Content Wrapp -->
			<div id="loginContent">

				<!-- Login Ico-->
				<div class="form-row d-flex justify-content-center">
					
					<!-- Grid col -->
					<div class="col-auto">
						
						<!-- Icon -->
						<div class="text-center mb-4 wrappLoginIco">
							<i class="fas fa-user loginIco"></i>
							<h4 class="loginText">Logare</h4>
						</div>
						<!-- Icon -->

					</div>
					<!-- Grid col -->

				</div>
				<!-- Login Ico-->

				<!-- Print Notices -->
				<div class="form-row">
					<div class="col text-center">
						<?php print_notices() ?>
					</div>
				</div>
				<!-- Print Notices -->

				<!-- Grid row -->
				<div class="form-row">
					
					<!-- Email address -->
					<div class="col-12">
						<div class="md-form">
							<i class="fas fa-envelope prefix"></i>
							<input type="email" id="emailAddress" name="emailAddress" minlength="11" maxlength="50" class="form-control validate" required>
							<label data-error="Invalid" for="emailAddress">Adresa de email:</label>
						</div>
					</div>
					<!-- Email address -->

					<!-- Password -->
					<div class="col-12">
						<div class="md-form">
							<i class="fas fa-key prefix"></i>
							<input type="password" id="password" name="password" class="form-control validate" minlength="6" maxlength="36" required>
							<label data-error="Invalid" for="password">Parola:</label>
						</div>
					</div>
					<!-- Password -->

				</div>
				<!-- Grid row -->

				<!-- Alt Button Wrapp -->
				<div class="row">
					
					<!-- Grid col -->
					<div class="col-auto mx-auto">
						
						<!-- Alt Button -->
						<div class="accountAlt text whiteText">Nu ai cont?<span class="ml-3"><a href="<?php echo site_url() . '/view/contNou.php'; ?>" class="link whiteLink">Click aici</a></span></div>

					</div>
					<!-- Grid col -->

				</div>
				<!-- Alt Button Wrapp -->

				<!-- Grid row -->
				<div class="form-row d-flex justify-content-center">
					
					<!-- Login Button-->
					<div class="col-auto">
						<input id="loginSubmitButton" type="submit" name="submit" class="btnGigant gradientColor-5 waves-effect" value="Logare">
					</div>
					<!-- Login Button-->

				</div>				
				<!-- Grid row -->

			</div>
			<!-- Form Content Wrapp -->

		</form>
		<!-- Login Form -->

	</div>
	<!-- Grid col -->

</section>
<!-- Login -->