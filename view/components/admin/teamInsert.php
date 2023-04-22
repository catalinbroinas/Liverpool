<form id="teamInsert" action="<?php echo htmlspecialchars(site_url() . '/team_insert.php'); ?>" method="POST" class="border border-light p-5">

	<!-- Title form -->
	<h4 class="h4-responsive text-center mb-4 font-weight-bolder text-dark">Adaugă jucător</h4>
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
		<!-- Img I -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="img1" name="img1" minlength="5" maxlength="36" class="form-control validate" required>
				<label data-error="Invalid" for="img1">Pictograma principală</label>
			</div>
		</div>
		<!-- Img I -->

		<!-- Brand II -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="img2" name="img2" minlength="5" maxlength="36" class="form-control validate">
				<label data-error="Invalid" for="img2">Pictograma secundară</label>
			</div>
		</div>
		<!-- Brand II -->

		<!-- Brand III -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="img3" name="img3" minlength="5" maxlength="36" class="form-control validate">
				<label data-error="Invalid" for="img3">Pictograma alternativă</label>
			</div>
		</div>
		<!-- Brand III -->

		<!-- Number -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-tshirt prefix"></i>
				<input type="number" id="nr" name="nr" min="1" max="99" class="form-control validate" required>
				<label data-error="Invalid" for="nr">Număr tricou</label>
			</div>
		</div>
		<!-- Number -->

		<!-- Nume -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-user prefix"></i>
				<input type="text" id="fname" name="fname" minlength="3" maxlength="36" class="form-control validate" required>
				<label data-error="Invalid" for="fname">Nume</label>
			</div>
		</div>
		<!-- Nume -->

		<!-- Prenume -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-user prefix"></i>
				<input type="text" id="lname" name="lname" minlength="3" maxlength="36" class="form-control validate" required>
				<label data-error="Invalid" for="lname">Prenume</label>
			</div>
		</div>
		<!-- Prenume -->

		<!-- NickName -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-user prefix"></i>
				<input type="text" id="nickName" name="nickName" minlength="3" maxlength="20" class="form-control validate" required>
				<label data-error="Invalid" for="nickName">Nume de scenă</label>
			</div>
		</div>
		<!-- NickName -->

		<!-- Role -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<select id="role" name="role" class="form-control browser-default custom-select" required>
    				<option value="" id="undefined">--Rol--</option>
     				<option value="goalkeeper" id="goalkeeper">Portar</option>
					<option value="defender" id="defender">Fundaș</option>
					<option value="midfielder" id="midfielder">Mijlocaș</option>
					<option value="forward" id="forward">Atacant</option>
     			</select>
			</div>
		</div>
		<!-- Role -->

		<!-- Birthday -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<div class="controls">
					<i class="fas fa-calendar prefix"></i>
	            	<input type="text" id="birthday" name="birthday" class="datepicker form-control" minlength="10" maxlength="10" required>
	            	<label for="birthday">Data de naștere</label>
				</div>
			</div>
		</div>
		<!-- Birthday -->

		<!-- Value -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-dollar-sign prefix"></i>
				<input type="number" id="valueMarket" name="valueMarket" step="0.01" min="0" max="500" class="form-control validate" required>
				<label data-error="Invalid" for="valueMarket">Cotă</label>
			</div>
		</div>
		<!-- Value -->

		<!-- IMG fLAG -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="imgFlag" name="imgFlag" minlength="5" maxlength="36" class="form-control validate" required>
				<label data-error="Invalid" for="imgFlag">Nume pictogramă (steag)</label>
			</div>
		</div>
		<!-- IMG fLAG -->

		<!-- nATIONALITATE -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-flag prefix"></i>
				<input type="text" id="flag" name="flag" minlength="5" maxlength="20" class="form-control validate" required>
				<label data-error="Invalid" for="flag">Naționalitate</label>
			</div>
		</div>
		<!-- Country -->
	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row mb-3">
		<div class="col-12 text-center">
			<h6 class="d-inline">Internațional?</h6>
			<div class="d-inline custom-control custom-radio ml-3">
			  <input type="radio" class="custom-control-input" id="yes" name="international" value="yes">
			  <label class="custom-control-label" for="yes">Da</label>
			</div>

			<div class="d-inline custom-control custom-radio ml-2">
			  <input type="radio" class="custom-control-input" id="no" name="international" value="no">
			  <label class="custom-control-label" for="no">Nu</label>
			</div>
		</div>
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
