	<form id="teamEdit" action="<?php echo htmlspecialchars(site_url() . '/' . 'team_update.php'); ?>" method="post" class="border border-light p-5">

			<!-- Title form -->
			<h4 class="h4-responsive text-center mb-4">Editează jucătorul</h4>
			<!-- Title form -->

			<div class="form-row">
				<div class="col">
					<?php print_notices(); ?>
				</div>
			</div>

		<!-- Grid row ID -->
		<div class="form-row d-none">
			<div class="col">
				<div class="md-form">
					<input type="number" id="id" name="id" class="form-control" value="<?=$_GET['id']?>">
					<label for="id">Id</label>
				</div>
			</div>
		</div>
		<!-- Grid row ID --> 

		<!-- Grid row -->
		<div class="form-row">
			<!-- Img I -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-image prefix"></i>
					<input type="text" id="img1" name="img1" minlength="5" maxlength="36" class="form-control validate" value="<?=$row["img1"]?>" required>
					<label data-error="Invalid" for="img1">Pictograma principală</label>
				</div>
			</div>
			<!-- Img I -->

			<!-- Img II -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-image prefix"></i>
					<input type="text" id="img2" name="img2" minlength="5" maxlength="36" class="form-control validate" value="<?=$row["img2"]?>">
					<label data-error="Invalid" for="img2">Pictograma secundară</label>
				</div>
			</div>
			<!-- Img II -->

			<!-- Img III -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-image prefix"></i>
					<input type="text" id="img3" name="img3" minlength="5" maxlength="36" class="form-control validate" value="<?=$row["img3"]?>">
					<label data-error="Invalid" for="img3">Pictograma alternativă</label>
				</div>
			</div>
			<!-- Img III -->

			<!-- Number -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-tshirt prefix"></i>
					<input type="number" id="nr" name="nr" min="1" max="99" class="form-control validate" value="<?=$row["nr"]?>" required>
					<label data-error="Invalid" for="nr">Număr tricou</label>
				</div>
			</div>
			<!-- Number -->

			<!-- Nume -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-user prefix"></i>
					<input type="text" id="fname" name="fname" minlength="3" maxlength="36" class="form-control validate" value="<?=$row["fname"]?>" required>
					<label data-error="Invalid" for="fname">Nume</label>
				</div>
			</div>
			<!-- Nume -->

			<!-- Prenume -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-user prefix"></i>
					<input type="text" id="lname" name="lname" minlength="3" maxlength="36" class="form-control validate" value="<?=$row["lname"]?>" required>
					<label data-error="Invalid" for="lname">Prenume</label>
				</div>
			</div>
			<!-- Prenume -->

			<!-- NickName -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-user prefix"></i>
					<input type="text" id="nickName" name="nickName" minlength="3" maxlength="36" class="form-control validate" value="<?=$row["nickName"]?>" required>
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
		            	<input type="text" id="birthday" name="birthday" class="datepicker form-control" minlength="10" maxlength="10" value="<?=$row["birthday"]?>" required>
		            	<label for="birthday">Data de naștere</label>
					</div>
				</div>
			</div>
			<!-- Birthday -->

			<!-- Value -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-dollar-sign prefix"></i>
					<input type="number" id="valueMarket" name="valueMarket" min="0" max="500" step="0.01" class="form-control validate" value="<?=$row["valueMarket"]?>" required>
					<label data-error="Invalid" for="valueMarket">Cotă</label>
				</div>
			</div>
			<!-- Value -->

			<!-- Img flag -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-image prefix"></i>
					<input type="text" id="imgFlag" name="imgFlag" minlength="5" maxlength="36" class="form-control validate" value="<?=$row["imgFlag"]?>" required>
					<label data-error="Invalid" for="imgFlag">Nume pictogramă (steag)</label>
				</div>
			</div>
			<!-- Img flag -->

			<!-- Country -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-flag prefix"></i>
					<input type="text" id="flag" name="flag" minlength="5" maxlength="20" class="form-control validate" value="<?=$row["flag"]?>" required>
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
				  <input type="radio" class="custom-control-input" id="yes" name="international" value="yes" <?php if($row["international"] == "yes") {echo 'checked';} else {echo '';} ?>>
				  <label class="custom-control-label" for="yes">Da</label>
				</div>

				<div class="d-inline custom-control custom-radio ml-2">
				  <input type="radio" class="custom-control-input" id="no" name="international" value="no" <?php if($row["international"] == "no") {echo 'checked';} else {echo '';} ?>>
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
				<input class="btn btn-sm btnRW" type="submit" name="Submit" value="Salvează">
			</div>
		</div>
		<!-- Grid row -->
	</form>

	<script>
		let role = '<?php echo $row["role"]; ?>';
		let season = '<?php echo $row["season"]; ?>';
		document.getElementById(role).selected = true;
		document.getElementById(season).selected = true;
	</script>
