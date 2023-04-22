<form id="transferInsert" action="<?php echo htmlspecialchars(site_url() . '/transfer_insert.php'); ?>" method="POST" class="border border-light p-5">

	<!-- Title form -->
	<h4 class="h4-responsive text-center mb-4 font-weight-bolder text-dark">Adaugă transfer</h4>
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
		<!-- Img Player I -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="imgPlayer" name="imgPlayer" minlength="5" maxlength="36" class="form-control validate" required>
				<label data-error="Invalid" for="imgPlayer">Imagine principală jucător</label>
			</div>
		</div>
		<!-- Img Player I -->

		<!-- Img Player II -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="img2Player" name="img2Player" minlength="5" maxlength="36" class="form-control validate">
				<label data-error="Invalid" for="img2Player">Imagine secundară jucător</label>
			</div>
		</div>
		<!-- Img Player II -->

		<!-- Img Club I -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="imgClub" name="imgClub" minlength="5" maxlength="36" class="form-control validate" required>
				<label data-error="Invalid" for="imgClub">Pictogramă principală club</label>
			</div>
		</div>
		<!-- Img Club I -->

		<!-- Img Club II -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="img2Club" name="img2Club" minlength="5" maxlength="36" class="form-control validate">
				<label data-error="Invalid" for="img2Club">Pictogramă secundară club</label>
			</div>
		</div>
		<!-- Img Club II -->

		<!-- Nume -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-user prefix"></i>
				<input type="text" id="name" name="name" minlength="3" maxlength="20" class="form-control validate" required>
				<label data-error="Invalid" for="name">Nume</label>
			</div>
		</div>
		<!-- Nume -->

		<!-- Vârstă -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-calendar prefix"></i>
				<input type="number" id="age" name="age" min="16" max="45" class="form-control validate" required>
				<label data-error="Invalid" for="age">Vârstă</label>
			</div>
		</div>
		<!-- Vârstă -->

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

		<!-- Transfer fee -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-dollar-sign prefix"></i>
				<input type="number" step=".01" min="0" max="500" id="valueTransfer" name="valueTransfer" class="form-control validate" required>
				<label data-error="Invalid" for="valueTransfer">Sumă transfer</label>
			</div>
		</div>
		<!-- Transfer fee -->

		<!-- Transfer tip -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<select id="status" name="status" class="form-control browser-default custom-select" required>
					<option value="" id="undefined">--Tip transfer--</option>
    				<option value="departure">Vândut</option>
					<option value="arrival">Cumpărat</option>
					<option value="on-loan">Împrumutat</option>
					<option value="in-loan">În împrumut</option>
     			</select>
			</div>
		</div>
		<!-- Transfer tip -->

		<!-- Club -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-users prefix"></i>
				<input type="text" id="club" name="club" minlength="4" maxlength="20" class="form-control validate" required>
				<label data-error="Invalid" for="club">Club</label>
			</div>
		</div>
		<!-- Club -->

		<!-- Data -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<div class="controls">
					<i class="fas fa-calendar prefix"></i>
	            	<input type="text" id="data" name="data" class="datepicker form-control" minlength="10" maxlength="10" required>
	            	<label for="data">Data transferului</label>
				</div>
			</div>
		</div>
		<!-- Data -->

		<!-- Sezon -->
		<div class="col-xl-3 col-lg-4 col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-calendar-check prefix"></i>
				<input type="text" id="sezon" name="sezon" minlength="9" maxlength="9" class="form-control validate" required>
				<label data-error="Invalid" for="sezon">Sezon competițional</label>
			</div>
		</div>
		<!-- Sezon -->
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