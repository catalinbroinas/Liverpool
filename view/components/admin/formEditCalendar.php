	<form id="calendarEdit" action="<?php echo htmlspecialchars(site_url() . '/' . 'calendar_update.php'); ?>" method="post" class="border border-light p-5">

		<!-- Title form -->
		<h4 class="h4-responsive text-center mb-4">Editează meciul</h4>
		<!-- Title form -->

		<!-- Print Notices -->
		<div class="form-row">
			<div class="col">
				<?php print_notices(); ?>
			</div>
		</div>
		<!-- Print Notices -->


		<!-- Grid row ID -->
		<div class="form-row d-none">
			<div class="col">
				<div class="md-form">
					<input type="number" id="id" name="id" class="form-control" value="<?=$id?>">
					<label for="id">Id</label>
				</div>
			</div>
		</div>
		<!-- Grid row ID -->

		<!-- Grid row -->
		<div class="form-row d-flex justify-content-center">

			<!-- Date -->
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
				<div class="md-form">
					<div class="controls">
						<i class="fas fa-calendar prefix"></i>
		            	<input type="text" id="date" name="data" class="datepicker form-control" minlength="10" maxlength="10" value="<?=$row['data'];?>" required>
		            	<label for="date">Ziua meciului</label>
					</div>
				</div>
			</div>
			<!-- Date -->

			<!-- City -->
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
				<div class="md-form">
					<i class="fas fa-map-marker prefix"></i>
					<input type="text" id="city" name="city" minlength="3" maxlength="25" class="form-control validate" value="<?=$city?>" required>
					<label data-error="Invalid" for="city">Nume oraș:</label>
				</div>
			</div>
			<!-- City -->

			<!-- Stadium -->
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
				<div class="md-form">
					<i class="fas fa-home prefix"></i>
					<input type="text" id="stadium" name="stadium" minlength="3" maxlength="25" class="form-control validate" value="<?=$stadium?>" required>
					<label data-error="Invalid" for="stadium">Nume stadion:</label>
				</div>
			</div>
			<!-- Stadium -->

			<!-- Team -->
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
				<div class="md-form">
					<i class="fas fa-users prefix"></i>
					<input type="text" id="team" name="team" minlength="3" maxlength="25" class="form-control validate" value="<?=$team?>" required>
					<label data-error="Invalid" for="team">Nume echipă:</label>
				</div>
			</div>
			<!-- Team -->

			<!-- IconC -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-image prefix"></i>
					<input type="text" id="iconC" name="iconC" minlength="5" maxlength="36" class="form-control validate" value="<?=$iconC?>" required>
					<label data-error="Invalid" for="iconC">Pictogramă competiție:</label>
				</div>
			</div>
			<!-- IconC -->

			<!-- IconT -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-12">
				<div class="md-form">
					<i class="fas fa-image prefix"></i>
					<input type="text" id="iconT" name="iconT" minlength="5" maxlength="36" class="form-control validate" value="<?=$iconT?>" required>
					<label data-error="Invalid" for="iconT">Pictogramă echipeă:</label>
				</div>
			</div>
			<!-- IconT -->

			<!-- Status -->
			<div class="col-xl-2 col-lg-4 col-md-4 col-12">
				<div class="md-form">
					<select id="status" name="status" class="form-control browser-default custom-select" required>
						<option value="">--Status meci--</option>
						<option value="disputed" id="disputed">Disputat</option>
						<option value="scheduled" id="scheduled">Programat</option>
						<option value="postponed" id="postponed">Amânat</option>
					</select>
				</div>
			</div>
			<!-- Status -->

			<!-- GoalsH -->
			<div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="md-form">
					<i class="fas fa-futbol prefix"></i>
					<input type="number" id="goalsH" name="goalsH" min="0" max="12" class="form-control validate" value="<?=$goalsH?>">
					<label data-error="Invalid" for="goalsH">Goluri gazde:</label>
				</div>
			</div>
			<!-- GoalsH -->

			<!-- GoalsA -->
			<div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="md-form">
					<i class="fas fa-futbol prefix"></i>
					<input type="number" id="goalsA" name="goalsA"  min="0" max="12" class="form-control validate" value="<?=$goalsA?>">
					<label data-error="Invalid" for="goalsA">Goluri oaspeți:</label>
				</div>
			</div>
			<!-- GoalsA -->

			<!-- Link -->
			<div class="col-xl-7 col-lg-9 col-12 col-12">
				<div class="md-form">
					<i class="fas fa-address-card prefix"></i>
					<input type="url" id="link" name="link" class="form-control validate" value="<?=$link?>" required>
					<label data-error="Invalid" for="link">Adresa URL:</label>
				</div>
			</div>
			<!-- Link -->
		</div>
		<!-- Grid row -->

		<!-- Grid row -->
		<div class="form-row">
			<div class="col text-center">
				<input type="submit" name="submit" value="Salvează" class="btn btn-sm btnRW" onclick="inputButtonClick(this)">
			</div>
		</div>
		<!-- Grid row -->	
	</form>

	<script>
		var y = "<?php echo $status; ?>";
		document.getElementById(y).selected = true;
	</script>
