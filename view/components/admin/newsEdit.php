<?php

$db = Db()->connection;

$query = "SELECT * FROM news ORDER BY data DESC";
$result = $db->query($query);

if ($result->num_rows > 0) 
{
    // output data of each row  
    while($row = $result->fetch_assoc()) 
	{
		?>
		<!-- Grid col -->
		<div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-3">
			<!-- Card -->
			<div id="cardNewsEdit" class="card">
				<div class="view">
						<img src="<?php echo site_img() . '/' . $row["img"]; ?>" class="card-img-top">
						<div class="mask rgba-black-light d-flex align-items-end flex-column">
							<div class="text-right">
								<div class="btn-group dropleft" role="group">
									<button id="editNews" type="button" class="btn btn-sm btnEditPlayer dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									</button>
									<div class="dropdown-menu dropdown-EditPlayer" aria-labelledby="editNews">
										<a href="<?php echo site_url() . '/view/newsUpdate.php?id=' . $row["id"]; ?>"  class="dropdown-item dropdown-itemEdit" target="_blank">Editează</a>
										<a href="<?php echo site_url() . '/deleteNews.php?id=' . $row["id"]; ?>"  class="dropdown-item dropdown-itemEdit">Șterge</a>
									</div>
									<button type="button" class="btnEditPlayerBrand">
										<i class="fas fa-user-edit fa-lg"></i>
									</button>
								</div>
							</div>
							<div class="mt-auto d-lg-none d-block px-3">
								<h4 class="h4-responsive"><a href="<?php echo $row["linkArticle"]; ?>" class="linkNewsIntro"><?php echo $row["titleArticle"]; ?></a></h4>
							</div>
						</div>
				</div>
				<div class="card-body d-lg-block d-none px-3 py-3">
					<h6 class="h6-responsive mb-0"><a href="<?php echo $row["linkArticle"]; ?>" class="linkNews"><?php echo $row["titleArticle"]; ?></a></h6>
				</div>
				<div class="card-footer d-lg-block d-none text-right py-2">
					<small class="text-muted mb-0"><?php echo "Postat la " . $row["data"]; ?></small>
				</div>
			</div>
			<!-- Card -->
		</div>
		<!-- Grid col -->
		<?php
	}
}

$db->close();
