					<div class="card cardTransfer hoverable">
						<div class="row">
							<div class="col-sm-4">
								<img src="<?php echo site_img() . '/' . $imgPlayer; ?>" class="card-img-top image">
							</div>
							<div class="col-sm-8">
								<div class="card-header text-sm-left text-center px-xl-5 px-lg-4 px-sm-5 py-lg-2 py-md-3 py-sm-2">
									<div class="d-inline-block">
										<h4 class="card-title font-weight-bold text-center"><?php echo $name; ?></h4>
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
					</div>