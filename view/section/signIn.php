			<!-- Sign In -->
			<section id="signIn">	
				<?php
					require_once 'components/progressBar.php';
					require_once 'components/formSignIn.php';
				?>

				<!-- Next/Prev Buttons -->
				<div class="row">
					
					<!-- Grid col -->					
					<div class="col-auto mx-auto text-center">

						<!-- Alt Button -->
						<div class="accountAlt text whiteText" style="background-color: rgba(0, 0, 0, 0.2);margin-bottom: 0.25rem;">Ai deja un cont?<span class="ml-3"><a href="<?php echo site_url() . '/view/contExistent.php'; ?>" class="link whiteLink">Click aici</a></span></div>

						<!-- Step 1 -->
						<div id="step1" class="personal">
							<a id="nextSignInButton" href="#" class="btn signInButton" onclick="setTimeout(displayContent, 500, 'acount', 'personal')">Next</a>
						</div>
						<!-- Step 1 -->

						<!-- Step 2 -->
						<div id="step2" class="acount">
							<a id="prevSignInButton" href="#" class="btn signInButton mr-5" onclick="setTimeout(displayContent, 500, 'personal', 'acount')">Back</a>
							<a id="nextSignInButton" href="#" class="btn signInButton" onclick="setTimeout(displayContent, 500, 'finish', 'acount'); myDatesOfForms()">Next</a>
						</div>
						<!-- Step 2 -->

						<!-- Step 3 -->
						<div id="step3" class="finish">
							<a id="prevSignInButton" href="#" class="btn signInButton" onclick="setTimeout(displayContent, 500, 'acount', 'finish')">Back</a>
						</div>
						<!-- Step 3 -->

					</div>
					<!-- Grid col -->				

				</div>
				<!-- Next/Prev Buttons -->

			</section>
			<!-- Sign In -->
