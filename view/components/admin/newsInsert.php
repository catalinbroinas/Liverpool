<form id="newsInsert" action="<?php echo htmlspecialchars(site_url() . '/news_insert.php'); ?>" method="POST" class="border border-light p-5">

	<!-- Title form -->
	<h4 class="h4-responsive text-center mb-4 font-weight-bolder text-dark">Adaugă postare</h4>
	<!-- Title form -->
	
	<!-- Grid row -->
	<div class="form-row">
		<div class="col text-center">
			<?php print_notices(); ?>
		</div>
	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row">
		<!-- Image -->
		<div class="col-md-4 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="img" name="img" minlength="5" maxlength="36" class="form-control validate" required>
				<label for="img" data-error="Invalid!">Numele imagini:</label>
			</div> 
		</div>
		<!-- Image -->

		<!-- Link -->
		<div class="col-md-8 col-12">
			<div class="md-form">
				<i class="fas fa-address-card prefix"></i>
				<input type="url" id="linkArticle" name="linkArticle" class="form-control validate" required>
				<label for="linkArticle" data-error="Invalid!">Adresa URL:</label>
			</div>
		</div>
		<!-- Link -->
	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="row d-flex flex-row">
		<!-- Title -->
		<div class="col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-tag prefix"></i>
				<textarea id="titleArticle" name="titleArticle" rows="3" minlength="15" maxlength="150" class="md-textarea form-control validate" required></textarea>
				<label for="titleArticle">Titlul postării:</label>
			</div>
		</div>
		<!-- Title -->

		<!-- Text -->
		<div class="col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-pencil-alt prefix"></i>
				<textarea id="textArticle" name="textArticle" rows="3" minlength="45" maxlength="450" class="md-textarea form-control validate" required></textarea>
				<label for="textArticle">Descrierea:</label>
			</div>
		</div>
		<!-- Text -->
	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row d-flex justify-content-center mb-3">
		<!-- Cover -->
		<div class="col-lg-4 col-md-6 col-12 my-auto text-center">

				<h6 class="d-inline">Articol de copertă?</h6>
				<div class="d-inline custom-control custom-radio ml-3">
				  <input type="radio" class="custom-control-input" id="yes" name="cover" value="yes">
				  <label class="custom-control-label" for="yes">Da</label>
				</div>

				<div class="d-inline custom-control custom-radio ml-2">
				  <input type="radio" class="custom-control-input" id="no" name="cover" value="no">
				  <label class="custom-control-label" for="no">Nu</label>
				</div>

		</div>
		<!-- Cover -->
	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row mt-md-0 mt-3">
		<div class="col text-center">
			<input type="submit" name="submit" value="Insert" class="btn btn-sm btnRW" onclick="inputButtonClick(this)">
			<input type="reset" name="reset" value="Resetează" class="btn btn-sm btn-outline-danger">
		</div>
	</div>
	<!-- Grid row -->
</form>
