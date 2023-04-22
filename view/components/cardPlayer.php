<div id="cardPlayer" class="card hoverable">
	<img class="card-img-top img-fluid" src="<?php echo site_img() . '/' . $img; ?>">
	<div class="card-header py-3">
		<h4 class="py-2"><span class="nrPlayer"><?php echo $nr; ?></span></h4>
		<h4><?php echo $name; ?></h4>
	</div>
	<div class="card-body">
		<p class="card-text d-flex justify-content-between">Data nașteri:<span><?php echo $dateOfBirth . ' (' . $age . ')'; ?></span></p>
		<p class="card-text d-flex justify-content-between">Cotă de piață:<span><i class="fas fa-euro-sign mr-0"></i><?php echo $cota . 'm'; ?></span></p>
		<p class="card-text d-flex justify-content-between">Naționalitate:<span><img class="flag mr-2" src="<?php echo site_img() . '/' . $flagI; ?>"><?php echo $nat; ?></span></p>
	</div>
</div>
