<div id="cardPlayerEdit" class="card hoverable">
	<div class="view overlay">
		<img class="card-img-top img-fluid" src="<?php echo site_img() . '/' . $img; ?>">
		<div class="mask text-right">
			<div class="btn-group dropleft" role="group">
				<button id="editIcon" type="button" class="btn btn-sm btnEditPlayer dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-EditPlayer" aria-labelledby="editIcon">
					<?php
					echo 		'<a href="' . site_url() . '/view/teamUpdate.php?id=' . $id  . '"  class="dropdown-item dropdown-itemEdit" target="_blank">Editează</a>';
						echo 		'<a href="' . site_url() . '/deleteTeam.php?id=' . $id  . '"  class="dropdown-item dropdown-itemEdit">Șterge</a>';
					?>
				</div>
				<button type="button" class="btnEditPlayerBrand">
					<i class="fas fa-user-edit fa-lg"></i>
				</button>
			</div>
		</div>
	</div>
	<div class="card-header py-3">
		<h4 class="py-2"><span class="nrPlayer"><?php echo $nr; ?></span></h4>
		<h4><?php echo $name; ?></h4>
	</div>
	<div class="card-body">
		<p class="card-text d-flex justify-content-between">Data nașteri:<span><?php echo $dateOfBirth . ' (' . $age . ')'; ?></span></p>
		<p class="card-text d-flex justify-content-between">Cotă de piață:<span><i class="fas fa-euro-sign mr-0"></i><?php echo $cota . 'M'; ?></span></p>
		<p class="card-text d-flex justify-content-between">Naționalitate:<span><img class="flag mr-2" src="<?php echo site_img() . '/' . $flagI; ?>"><?php echo $nat; ?></span></p>
	</div>
</div>
