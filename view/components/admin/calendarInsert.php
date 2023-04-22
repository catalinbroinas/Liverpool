<form id="calendarInsert" action="<?php echo htmlspecialchars(site_url() . '/calendar_insert.php'); ?>" method="POST" class="border border-light p-5">

	<!-- Title form -->
	<h4 class="h4-responsive text-center mb-4 font-weight-bolder text-dark">Adaugă partidă</h4>
	<!-- Title form -->

	<!-- Grid row -->
	<div class="form-row">
		<div class="col text-center">
			<?php print_notices() ?>
		</div>
	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row d-flex justify-content-center">

		<!-- Date -->
		<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
			<div class="md-form">
				<div class="controls">
					<i class="fas fa-calendar prefix"></i>
	            	<input type="text" id="date" name="data" class="datepicker form-control" minlength="10" maxlength="10" required>
	            	<label for="date">Ziua meciului</label>
				</div>
			</div>
		</div>
		<!-- Date -->

		<!-- City -->
		<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
			<div class="md-form">
				<i class="fas fa-map-marker prefix"></i>
				<input type="text" id="city" name="city" minlength="3" maxlength="25" class="form-control validate" required>
				<label data-error="Invalid" for="city">Nume oraș:</label>
			</div>
		</div>
		<!-- City -->

		<!-- Stadium -->
		<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
			<div class="md-form">
				<i class="fas fa-home prefix"></i>
				<input type="text" id="stadium" name="stadium" minlength="3" maxlength="25" class="form-control validate" required>
				<label data-error="Invalid" for="stadium">Nume stadion:</label>
			</div>
		</div>
		<!-- Stadium -->

		<!-- Team -->
		<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
			<div class="md-form">
				<i class="fas fa-users prefix"></i>
				<input type="text" id="team" name="team" minlength="4" maxlength="20" class="form-control validate" required>
				<label data-error="Invalid" for="team">Nume echipă:</label>
			</div>
		</div>
		<!-- Team -->

		<!-- IconC -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="iconC" name="iconC" minlength="5" maxlength="36" class="form-control validate" required>
				<label data-error="Invalid" for="iconC">Pictogramă competiție:</label>
			</div>
		</div>
		<!-- IconC -->

		<!-- IconT -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="iconT" name="iconT" minlength="5" maxlength="36" class="form-control validate" required>
				<label data-error="Invalid" for="iconT">Pictogramă echipă:</label>
			</div>
		</div>
		<!-- IconT -->

		<!-- Status -->
		<div class="col-xl-2 col-lg-4 col-md-4 col-12">
			<div class="md-form">
				<select id="status" name="status" class="form-control browser-default custom-select" required>
					<option value="">--Status meci--</option>
					<option value="disputed">Disputat</option>
					<option value="scheduled">Programat</option>
					<option value="postponed">Amânat</option>
				</select>
			</div>
		</div>
		<!-- Status -->

		<!-- GoalsH -->
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
			<div class="md-form">
				<i class="fas fa-futbol prefix"></i>
				<input type="number" id="goalsH" name="goalsH" min="0" max="12" class="form-control validate">
				<label data-error="Invalid" for="goalsH">Goluri gazde:</label>
			</div>
		</div>
		<!-- GoalsH -->

		<!-- GoalsA -->
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
			<div class="md-form">
				<i class="fas fa-futbol prefix"></i>
				<input type="number" id="goalsA" name="goalsA" min="0" max="12" class="form-control validate">
				<label data-error="Invalid" for="goalsA">Goluri oaspeți:</label>
			</div>
		</div>
		<!-- GoalsA -->

		<!-- Link -->
		<div class="col-xl-7 col-lg-9 col-12 col-12">
			<div class="md-form">
				<i class="fas fa-address-card prefix"></i>
				<input type="url" id="link" name="link" class="form-control validate" required>
				<label data-error="Invalid" for="link">Adresa URL:</label>
			</div>
		</div>
		<!-- Link -->
	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row">
		<div class="col text-center">
			<input type="submit" name="submit" value="Insert" class="btn btn-sm btnRW" onclick="inputButtonClick(this)">
			<input type="reset" name="reset" value="Resetează" class="btn btn-sm btn-outline-danger">
		</div>
	</div>
	<!-- Grid row -->	
</form>

<script src="<?php echo site_url() . '/js/functions.js'; ?>"></script>
