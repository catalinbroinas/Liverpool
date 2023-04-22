				<!-- Forms -->
				<div class="row">
					
					<!-- Grid col -->					
					<div class="col-12">
						 
						<!-- Form Wrapp --> 
						<form id="userInsert" action="<?php echo htmlspecialchars(site_url() . '/register_insert.php'); ?>" method="POST" class="acountForm">
							
							<!-- Print Notices -->
							<div class="form-row">
								<div class="col text-center">
									<?php print_notices() ?>
								</div>
							</div>
							<!-- Print Notices -->

							<!-- Form Content Wrapp -->
							<div id="userInsertContent">

								<!-- Personale Date -->
								<div id="personaleDates" class="personal">

									<!-- Grid row -->
									<div class="form-row d-flex justify-content-center">

										<!-- First Name -->
										<div class="col-lg-3 mx-2 col-md-5 col-10 order-1">
											<div class="md-form mt-lg-28px">
												<i class="fas fa-user prefix"></i>
									            <input type="text" id="fName" name="fName" minlength="3" maxlength="25" class="form-control validate" required>
									            <label data-error="Invalid" for="fName">Nume:</label>
											</div>
										</div>
										<!-- First Name -->

										<!-- Last Name -->
										<div class="col-lg-3 mx-2 col-md-5 col-10 order-2">
											<div class="md-form mt-lg-28px">
												<i class="fas fa-user prefix"></i>
									            <input type="text" id="lName" name="lName" minlength="3" maxlength="30" class="form-control validate" required>
									            <label data-error="Invalid" for="lName">Prenume:</label>
											</div>
										</div>
										<!-- Last Name -->

										<!-- Date of birth -->
										<div class="col-lg-3 mx-2 col-md-5 col-10 order-lg-3 order-5">
											<label id="dateLabel" for="dateOfBirth">Data nașterii:</label>
									        <input type="date" id="dateOfBirth" name="dateOfBirth" class="form-control" minlength="10" maxlength="10" required>
										</div>
										<!-- Date of birth -->

										<!-- Grid row -->
										<div class="w-100 displayLarge"></div>

										<!-- Country -->
										<div class="col-lg-3 mx-2 col-md-5 col-10 order-lg-4 order-3">
											<div class="md-form">
												<i class="fas fa-flag prefix"></i>
									            <input type="text" id="country" name="country" minlength="3" maxlength="25" class="form-control validate" required>
									            <label data-error="Invalid" for="country">Țară:</label>
											</div>
										</div>
										<!-- Country -->

										<!-- City -->
										<div class="col-lg-3 mx-2 col-md-5 col-10 order-lg-5 order-4">
											<div class="md-form">
												<i class="fas fa-map-marker-alt prefix"></i>
									            <input type="text" id="city" name="city" minlength="3" maxlength="30" class="form-control validate" required>
									            <label data-error="Invalid" for="city">Localtate:</label>
											</div>
										</div>
										<!-- City -->

										<!-- Gender -->
										<div class="col-lg-3 mx-2 col-md-5 col-10 order-6">
											<div class="md-form selectSign mt-lg-28px mt-32px">
												<select id="gender" name="gender" class="form-control" required>
													<option value="">--Gen--</option>
													<option value="male">Masculin</option>
													<option value="female">Feminin</option>
													<option value="unspecified">Nespecificat</option>
												</select>
											</div>
										</div>
										<!-- Gender -->

									</div>
									<!-- Grid row -->

								</div>
								<!-- Personale Date -->

								<!-- Acount Date -->
								<div id="acountDates" class="acount">
									
									<!-- Grid row -->
									<div class="form-row d-flex justify-content-center">
										
										<!-- Email address -->
										<div class="col-lg-4 mx-2 col-md-5 col-10 order-1">
											<div class="md-form">
												<i class="fas fa-envelope prefix"></i>
												<input type="email" id="emailAddress" name="emailAddress" minlength="11" maxlength="50" class="form-control validate" required>
												<label data-error="Invalid" for="emailAddress">Adresa de email:</label>
											</div>
										</div>
										<!-- Email address -->

										<!-- Phone number -->
										<div class="col-lg-4 mx-2 col-md-5 col-10 order-2">
											<div class="md-form">
												<i class="fas fa-phone prefix"></i>
												<input type="tel" id="phoneNumber" name="phoneNumber" class="form-control validate" minlength="9" maxlength="20" required>
												<label data-error="Invalid" for="phoneNumber">Număr de telefon:</label>
											</div>
										</div>
										<!-- Phone number -->

										<!-- Role -->
										<div class="col-lg-3 col-md-5 col-10 text-center order-lg-3 order-5">
											<div class="checkbox-container">
											    <input class="checkbox-input" type="checkbox" id="role" name="role" value="admin" onchange="setTimeout(handleChange, 500, this);">
											    <label id="roleLabel" class="checkbox-label" for="role">Admnistrator</label>
											</div>
										</div>
										<!-- Role -->

										<!-- Grid row -->
										<div class="w-100 displayLarge"></div>

										<!-- Password -->
										<div class="col-lg-4 mx-2 col-md-5 col-10 order-lg-4 order-3">
											<div class="md-form">
												<i class="fas fa-key prefix"></i>
												<input type="password" id="password" name="password" class="form-control validate" minlength="6" maxlength="36" required>
												<label data-error="Invalid" for="password">Parola:</label>
											</div>
										</div>
										<!-- Password -->

										<!-- Repeat password -->
										<div class="col-lg-4 mx-2 col-md-5 col-10 order-lg-5 order-4">
											<div class="md-form">
												<i class="fas fa-key prefix"></i>
												<input type="password" id="confirmPassword" name="confirmPassword" class="form-control validate" minlength="6" maxlength="36" required>
												<label data-error="Invalid" for="confirmPassword">Confirmare parolă:</label>
											</div>
										</div>
										<!-- Repeat password -->

										<!-- Verification Key -->
										<div class="col-lg-3 col-md-5 col-10 order-6">
											<div id="keyInput" class="md-form">
												<i class="fas fa-key prefix"></i>
												<input type="text" id="key" name="verificationKey" class="form-control validate" minlength="3" maxlength="30" disabled>
												<label data-error="Invalid" for="key">Cod de verificare:</label>
											</div>
										</div>
										<!-- Verification Key -->

									</div>
									<!-- Grid row -->

								</div>
								<!-- Acount Date -->

								<!-- Finish -->
								<div id="finishSignIn" class="finish">

									<!-- Grid row -->	
									<div class="form-row">
										
										<!-- Grid col -->
										<div class="col-lg-6 col-md-8 col-10 mx-auto">
											<ul class="list-group">
												<li class="list-group-item">
													<span class="inputName">Nume:</span>
													<span id="myfName" class="inputValue"></span>
												</li>
												<li class="list-group-item">
													<span class="inputName">Prenume:</span>
													<span id="mylName" class="inputValue"></span>
												</li>
												<li class="list-group-item">
													<span class="inputName">Data nașterii:</span>
													<span id="mydateOfBirth" class="inputValue"></span>
												</li>
												<li class="list-group-item">
													<span class="inputName">Țară:</span>
													<span id="mycountry" class="inputValue"></span>
												</li>
												<li class="list-group-item">
													<span class="inputName">Email:</span>
													<span id="myemailAddress" class="inputValue"></span>
												</li>
											</ul>
										</div>
										<!-- Grid col -->

										<!-- Grid col -->
										<div class="col-lg-6 col-md-8 col-10 mx-auto">
											<ul class="list-group">
												<li class="list-group-item">
													<span class="inputName">Localitate:</span>
													<span id="mycity" class="inputValue"></span>
												</li>
												<li class="list-group-item">
													<span class="inputName">Gen:</span>
													<span id="mygender" class="inputValue"></span>
												</li>
												<li class="list-group-item">
													<span class="inputName">Telefon:</span>
													<span id="myphoneNumber" class="inputValue"></span>
												</li>
												<li class="list-group-item">
													<span class="inputName">Rol:</span>
													<span id="myrole" class="inputValue"></span>
												</li>
												<li class="list-group-item">
													<span class="inputName">Cod de verificare:</span>
													<span id="myKey" class="inputValue"></span>
												</li>
											</ul>
										</div>
										<!-- Grid col -->

									</div>
									<!-- Grid row -->

									<!-- Grid row -->	
									<div class="form-row">
										
										<!-- Grid col -->
										<div class="col-auto mx-auto">
											<!-- Submit Button -->
											<input id="submitButton" type="submit" name="submit" value="Trimite datele" class="btnGigant gradientColor-5 waves-effect" 
											onclick="submitSignIn(); alert('Mulțumim că ni te-ai alăturat!');">
										</div>
										<!-- Grid col -->

									</div>
									<!-- Grid row -->

								</div>
								<!-- Finish -->

							</div>
							<!-- Form Content Wrapp -->

						</form>
						<!-- Form Wrapp -->

					</div>
					<!-- Grid col -->

				</div>
				<!-- Forms -->