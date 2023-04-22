<form id="newsEdit" action="<?php echo htmlspecialchars(site_url() . '/' . 'news_update.php'); ?>" method="post" class="border border-light p-5">

	<!-- Title form -->
	<h4 class="h4-responsive text-center mb-4">Editează postare</h4>
	<!-- Title form -->

	<div class="form-row">
		<div class="col">
			<?php print_notices(); ?>
		</div>
	</div>

	<!-- Grid row ID -->
	<div class="row d-none">
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
		<!-- Image -->
		<div class="col-md-4 col-12">
			<div class="md-form">
				<i class="fas fa-image prefix"></i>
				<input type="text" id="img" name="img" minlength="5" maxlength="36" class="form-control validate" value="<?=$row["img"]?>" required>
				<label for="img">Numele imagini</label>
			</div>
		</div>
		<!-- Image -->

		<!-- Link -->
		<div class="col-md-8 col-12">
			<div class="md-form">
				<i class="fas fa-address-card prefix"></i>
				<input type="url" id="linkArticle" name="linkArticle" class="form-control validate" value="<?=$row["linkArticle"]?>" required>
				<label for="linkArticle">Adresa URL:</label>
			</div>
		</div>
		<!-- Link -->

	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row">
		<!-- Title -->
		<div class="col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-pencil-alt prefix"></i>
				<textarea id="titleArticle" name="titleArticle" minlength="15" maxlength="150" rows="3" class="md-textarea form-control validate" required><?php echo $row['titleArticle']; ?></textarea>
				<label for="titleArticle">Titlul articolului</label>
			</div>
		</div>
		<!-- Title -->

		<!-- Text -->
		<div class="col-md-6 col-12">
			<div class="md-form">
				<i class="fas fa-pencil-alt prefix"></i>
				<textarea type="text" id="textArticle" name="textArticle" minlength="45" maxlength="450" rows="3" class="md-textarea form-control validate" required><?php echo $row['textArticle']; ?></textarea>
				<label for="textArticle">Descrierea:</label>
			</div>
		</div>
		<!-- Text -->

	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row d-flex justify-content-center">
		<!-- Cover -->
		<div class="col-lg-5 col-md-6 col-12 text-center my-auto">
			<h6 class="d-inline">Postare de copertă?</h6>
			<div class="d-inline custom-control custom-radio ml-3">
			  <input type="radio" class="custom-control-input" id="yes" name="cover" value="yes" <?php if($row["cover"] == "yes") {echo 'checked';} else {echo '';} ?>>
			  <label class="custom-control-label" for="yes">Da</label>
			</div>

			<div class="d-inline custom-control custom-radio ml-2">
			  <input type="radio" class="custom-control-input" id="no" name="cover" value="no" <?php if($row["cover"] == "no") {echo 'checked';} else {echo '';} ?>>
			  <label class="custom-control-label" for="no">Nu</label>
			</div>
		</div>
		<!-- Cover -->
	</div>
	<!-- Grid row -->

	<!-- Grid row -->
	<div class="form-row mt-md-0 mt-3">
		<div class="col text-center">
			<input type="submit" name="submit" value="Salvează" class="btn btn-sm btnRW" onclick="inputButtonClick(this)">
		</div>
	</div>
	<!-- Grid row -->
</form>
