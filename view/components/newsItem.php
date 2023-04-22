							<!-- Grid col -->
							<div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-3">
								<!-- Card -->
								<div class="card">
									<div class="view">
										<a href="<?php echo $row["linkArticle"]; ?>" class="overlay">
											<img src="<?php echo site_img() . '/' . $row["img"]; ?>" class="card-img-top">
											<div class="mask rgba-black-light flex-center white-text font-weight-bold">
												Citește<i class="fas fa-angle-double-right ml-2"></i>
											</div>
										</a>
										<div class="mask rgba-black-light d-flex align-items-end d-lg-none d-block px-3">
											<h4 class="h4-responsive"><a href="<?php echo $row["linkArticle"]; ?>" class="linkNewsIntro"><?php echo $row["titleArticle"]; ?></a></h4>
										</div>
									</div>
									<div class="card-body d-lg-block d-none px-3 py-3">
										<h6 class="h6-responsive mb-0"><a href="<?php echo $row["linkArticle"]; ?>" class="linkNews"><?php echo $row["titleArticle"]; ?></a></h6>
									</div>
									<div class="card-footer d-lg-block d-none text-right py-2">
										<small class="text-muted mb-0"><?php $data = date_create($row["data"]);  $dataD = date_format($data, "d M Y"); $dataH = date_format($data, "H:i"); echo "Postat la " . $dataD . " ora " . $dataH; ?></small>
									</div>
								</div>
								<!-- Card -->
							</div>
							<!-- Grid col -->