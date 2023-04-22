<form id="clasamentInsert" action="<?php echo htmlspecialchars(site_url() . '/clasament_insert.php'); ?>" method="POST" class="border border-light p-5">

	<!-- Title form -->
	<h4 class="h4-responsive text-center mb-4 font-weight-bolder text-dark">Adaugă echipă</h4>
	<!-- Title form -->

	<!-- Grid row -->
	<div class="form-row">
		<div class="col text-center">
			<?php print_notices() ?>
		</div>
	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row">
		<!-- Brand -->
		<div class="col-sm-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="brand" name="brand" minlength="5" maxlength="36" class="form-control validate" required>
				<label data-error="Invald" for="brand">Nume pictogramă</label>
			</div>
		</div>
		<!-- Brand -->

		<!-- Team -->
		<div class="col-sm-6 col-12">
			<div class="md-form">
				<i class="fas fa-users prefix"></i>
				<input type="text" id="team" name="team" minlength="3" maxlength="25" class="form-control validate" required>
				<label data-error="Invald" for="team">Nume echipă</label>
			</div>
		</div>
		<!-- Team -->

		<!-- Wins -->
		<div class="col-lg-2 col-sm-4 col-12">
			<div class="md-form">
				<i class="fas fa-check-circle prefix"></i>
				<input type="number" id="wins" name="wins" min="0" max="38" class="form-control validate" required>
				<label data-error="Invald" for="wins">Victorii</label>
			</div>
		</div>
		<!-- Wins -->

		<!-- Draws -->
		<div class="col-lg-2 col-sm-4 col-12">
			<div class="md-form">
				<i class="fas fa-equals prefix"></i>
				<input type="number" id="draws" name="draws" min="0" max="38" class="form-control validate" required>
				<label data-error="Invald" for="draws">Egaluri</label>
			</div>
		</div>
		<!-- Draws -->

		<!-- Loss -->
		<div class="col-lg-2 col-sm-4 col-12">
			<div class="md-form">
				<i class="fas fa-times-circle prefix"></i>
				<input type="number" id="loss" name="loss" min="0" max="38" class="form-control validate" required>
				<label data-error="Invald" for="loss">Înfrângeri</label>
			</div>
		</div>
		<!-- Loss -->

		<!-- Attak -->
		<div class="col-lg-3 col-sm-6 col-12">
			<div class="md-form">
				<i class="fas fa-futbol prefix"></i>
				<input type="number" id="attack" name="attack" min="0" max="200" class="form-control validate" required>
				<label data-error="Invald" for="attack">Goluri marcate</label>
			</div>
		</div>
		<!-- Attak -->

		<!-- Defensive -->
		<div class="col-lg-3 col-sm-6 col-12">
			<div class="md-form">
				<i class="fas fa-futbol prefix"></i>
				<input type="number" id="defensive" name="defensive" min="0" max="200" class="form-control validate" required>
				<label data-error="Invald" for="defensive">Goluri primite</label>
			</div>
		</div>
		<!-- Defensive -->

	</div>
	<!-- Grid row -->

	<!-- Grid row  -->
	<div class="form-group row d-flex justify-content-center">
			<!-- Sezon label -->
    		<label for="season" class="col-auto col-form-label h5 font-weight-bold mr-3 mt-1">Sezon Competițional:</label>
    		<!-- Sezon label -->
    		<!-- Sezon input -->
			<div class="col-sm-4 col-md-3 col-12">
				<div class="md-form my-auto">
					<select id="season" name="season" class="form-control browser-default custom-select" required>
						<option id="2019-2020" value="2019-2020">2019-2020</option>
						<option id="2020-2021" value="2020-2021">2020-2021</option>
						<option id="2021-2022" value="2021-2022">2021-2022</option>
						<option id="2022-2023" value="2022-2023">2022-2023</option>
					</select>
				</div>
			</div>
			<!-- Sezon  input -->
	</div>
	<!-- Grid row  -->

	<!-- Grid row -->
	<div class="form-row">
		<div class="col text-center">
			<input type="submit" name="submit" value="Insert" class="btn btn-sm btnRW" onclick="inputButtonClick(this)">
			<input type="reset" name="reset" value="Resetează" class="btn btn-sm btn-outline-danger">
		</div>
	</div>
	<!-- Grid row -->	
</form>

<script>
	const season = '<?php echo $classSeason->thisSeason(); ?>';
	document.getElementById(season).selected = true;
</script>
