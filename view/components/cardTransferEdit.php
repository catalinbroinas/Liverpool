					<div class="card cardTransfer hoverable">
						<div class="row">
							<div class="col-sm-4">
								<img src="<?php echo site_img() . '/' . $imgPlayer; ?>" class="card-img-top image">
							</div>
							<div class="col-sm-8">
								<div class="card-header px-xl-5">
									<div class="d-inline-block">
										<h4 class="card-title font-weight-bold"><?php echo $name; ?></h4>
										<h6 class="card-subtitle text-center"><?php echo $role . ' (' . $age . ' ani)'; ?></h6>
									</div>
								</div>
								<div class="card-body d-flex align-items-center py-lg-3 py-sm-3">
									<h5 class="h5-responsive font-weight-bolder my-auto mr-auto">Suma:<i class="fas fa-euro-sign mr-1"></i><?php echo $value . ' m'; ?></h5>		
									<h5 class="h5-responsive font-weight-bolder my-auto">Club:</h5>
									<img src="<?php echo site_img() . '/' . $imgClub; ?>" alt="<?php echo $club; ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $club; ?>" class="rounded-circle brandTeam">
								</div>
							</div>
						</div>
						<div class="row card-footer d-flex justify-content-between py-2 mx-2">
							<p class="card-text my-auto">Tip transfer: <?php echo $status; ?></p>
							<div class="btn-group btnEdit my-auto" role="group">
								<button id="editGroup" type="button" class="btn btn-sm btnRW dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				   					 Opțiuni
				    			</button>
				    			<div class="dropdown-menu dropdown-menuEdit" aria-labelledby="editGroup">
				    					<?php
				    					echo 		'<a href="' . site_url() . '/view/transferUpdate.php?id=' . $row['id']  . '"  class="dropdown-item dropdown-itemEdit" target="_blank">Editează</a>';
										echo 		'<a href="' . site_url() . '/deleteTransfer.php?id=' . $row['id']  . '"  class="dropdown-item dropdown-itemEdit">Șterge</a>';
				    					?>
				    			</div>
							</div>
							<p class="card-text my-auto">Sezon: <?php echo $sezon; ?></p>
						</div>
					</div>