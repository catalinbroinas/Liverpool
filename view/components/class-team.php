<?php

class Team
{
	private $role, $name, $season;

	private function queryDb($mySQLcode)
	{
		$db = Db()->connection;

		$query = "$mySQLcode";
		$result = $db->query($query);

		return $result;
	}

	public function nrPlayers($season)
	{
		$code = "SELECT * FROM team WHERE season = '$season'";
		$result = $this->queryDb($code);

		$nrPlayers = $result->num_rows;

		return $nrPlayers;
	}

	public function nrRolesPlayers($season, $role)
	{
		$code = "SELECT * FROM team WHERE season = '$season' AND role = '$role'";
		$result = $this->queryDb($code);

		$roles = $result->num_rows;

		return $roles;
	}

	public function ageAverage($season)
	{
		$code = "SELECT birthday FROM team WHERE season = '$season'";
		$result = $this->queryDb($code);

		$nrPlayers = $result->num_rows;
		$totalAge = 0;

		if ($result->num_rows > 0) 
		{
			    	// output data of each row  
			    	while($row = $result->fetch_assoc()) 
				    {
						$dateOfBirth = $row['birthday'];
						$today = date("Y-m-d");
						$diff = date_diff(date_create($dateOfBirth), date_create($today));
						$age = $diff->format('%y');
						$int = (int)$age;
						$totalAge = $totalAge + $int;
					}
		}
				else
		{
			return 'Indisponibil';
		}
		$ageAverage = $totalAge / $nrPlayers;
		$ageAverageFormat = number_format($ageAverage, 2);
		return $ageAverageFormat;
	}

	public function totalMarket($season)
	{
		$code = "SELECT SUM(valueMarket) FROM team WHERE season = '$season'";
		$result = $this->queryDb($code);

		if ($result->num_rows > 0) 
		{
			// output data of each row  
			while($row = $result->fetch_assoc()) 
			{
				$totalMarket = number_format($row['SUM(valueMarket)'], 2);
				return $totalMarket;

			}
		}
		else
		{
			return 'Indisponibil';
		}
	}

	public function averageMarket($season)
	{
		$code = "SELECT AVG(valueMarket) FROM team WHERE season = '$season'";
		$result = $this->queryDb($code);

		if ($result->num_rows > 0) 
		{
			    	// output data of each row  
			    	while($row = $result->fetch_assoc()) 
				    {
						$avg = $row['AVG(valueMarket)'];
					}
		}
				else
		{
			return 'Indisponibil';
		}
		$averageMarket = number_format($avg, 2);
		return $averageMarket;
	}

	public function minMarket($season)
	{
		$code = "SELECT MIN(valueMarket) FROM team WHERE season = '$season'";
		$result = $this->queryDb($code);

		if ($result->num_rows > 0) 
		{
			    	// output data of each row  
			    	while($row = $result->fetch_assoc()) 
				    {
						$min = $row['MIN(valueMarket)'];
					}
		}
				else
		{
			return 'Indisponibil';
		}
		$minimMarket = number_format($min, 2);
		return $minimMarket;
	}

	public function maxMarket($season)
	{
		$code = "SELECT MAX(valueMarket) FROM team WHERE season = '$season'";
		$result = $this->queryDb($code);

		if ($result->num_rows > 0) 
		{
			    	// output data of each row  
			    	while($row = $result->fetch_assoc()) 
				    {
						$max = $row['MAX(valueMarket)'];
					}
		}
				else
		{
			return 'Indisponibil';
		}
		$maximMarket = number_format($max, 2);
		return $maximMarket;
	}

	public function nrInternationalPlayers($season)
	{
		$code = "SELECT * FROM team WHERE season = '$season' AND international = 'yes'";
		$result = $this->queryDb($code);

		$nrInternationalPlayers = $result->num_rows;

		return $nrInternationalPlayers;
	}

	public function showCard($showItem)
	{
		if ($showItem == 'Edit')
		{
			$include = 'components/cardPlayerEdit.php'; 	
		}
		elseif ($showItem == 'index') 
		{
			$include = 'view/components/cardPlayerIndex.php';
		}
		else
		{
			$include = 'components/cardPlayer.php'; 
		}

		return $include;
	}

	public function colLarge($showItem)
	{
		if ($showItem == "index") 
		{
			$col = '<div class="col-lg-3 col-md-6 col-10 mb-2 mb-lg-0">';
		}
		else
		{
			$col = '<div class="col-xl-3 col-lg-4 col-md-6 col-8 mb-3">';
		}

		return $col;
	}

	public function roleIsDeffined($role)
	{
		if ($role === 0)
		{
			$role = "";
		}
		else
		{
			$role = "AND role = '$role'";
		}

		return $role;
	}

	public function teamShow($role, $season, $showItem, $limit, $offsetValue)
	{
		$this->role = $this->roleIsDeffined($role);

		$code = "SELECT * FROM team WHERE season = '$season' " . $this->role . " ORDER BY nr LIMIT " . $limit . " OFFSET " . $offsetValue;
		$result = $this->queryDb($code);

		if ($result->num_rows > 0) 
		{
		    // output data of each row  
		    while($row = $result->fetch_assoc()) 
			{
				$col = $this->colLarge($showItem);
				echo $col;
					$id = $row['id'];
					$nr = $row['nr'];
					$img = $row['img1'];
					$img2 = $row['img2'];
					$name = $row['nickName'];
					$fname = $row['fname'];
					$nickFName = $this->editNamePlayers($fname);
					$dateOfBirth = $row['birthday'];
					$today = date("Y-m-d");
					$diff = date_diff(date_create($dateOfBirth), date_create($today));
					$age = $diff->format('%y');
					$cota = $row['valueMarket'];
					$flagI = $row['imgFlag']; $nat = $row['flag'];

					$includeCard = $this->showCard($showItem);
					include ($includeCard);
				echo '</div>';
			}
		}
		else
		{
			echo '<div class="col-12">';
				include 'alert.php';
			echo '</div>';
		}
	}

	public function editNamePlayers($name)
	{
		$this->name = $name;

		switch ($this->name) 
		{
			case 'Oxlade-Chamberlain':
				$this->name = 'Chamberlain';
				break;
			case 'Alexander-Arnold':
				$this->name = 'TAA';
				break;
		}

		return $this->name;
	}
	
	public function showCarouselPlayers($season, $show)
	{
		$this->season = $season;
		$totalRecords = $this->nrPlayers($this->season);
		$numberOfSlides = $totalRecords / 4;
		$start = 0; $count = 0; 
		if ($show == 'items')
		{
			if ($totalRecords)
			{
				for ($i = 0; $i < $numberOfSlides; $i++) 
				{
					if($count === 0)
					{
						echo '<div class="carousel-item active">';
							echo '<div class="container">';
								echo '<div class="row">';
									echo $this->teamShow(0, $season, "index", 4, $start);
								echo '</div>';
							echo '</div>';	
						echo '</div>';
					}
					else
					{
						echo '<div class="carousel-item">';
							echo '<div class="container">';
								echo '<div class="row">';
									echo $this->teamShow(0, $season, "index", 4, $start);
								echo '</div>';
							echo '</div>';	
						echo '</div>';	
					}

					$start += 4;
					$count++;
				}
			}
			else
			{
				echo '<div class="carousel-item active">';
					echo '<div class="container">';
						include_once 'alert.php';
					echo '</div>';	
				echo '</div>';
			}
		}
		else
		{
			if ($totalRecords)
			{	
				for ($i = 0; $i < $numberOfSlides; $i++) 
				{ 
					if ($count === 0)
					{
						echo '<li data-target="#carouselTeam" data-slide-to="0" class="active"></li>';
					}
					else
					{
						echo '<li data-target="#carouselTeam" data-slide-to="' . $count . '"></li>';
					}

					$count++;
				}
			}
			else
			{
				echo '<li data-target="#carouselTeam" data-slide-to="0" class="active"></li>';
			}
		}
	}

	public function carouselButtons($season)
	{
		$this->season = $season;
		$totalRecords = $this->nrPlayers($this->season);

		if ($totalRecords > 0) 
		{
			echo '<a class="carousel-control-prev d-flex justify-content-start my-auto" href="#carouselTeam" role="button" data-slide="prev">
				   <span class="fas fa-2x fa-chevron-left" aria-hidden="true"></span>
				   <span class="sr-only">Previous</span>
				 </a>
				 <a class="carousel-control-next d-flex justify-content-end my-auto" href="#carouselTeam" role="button" data-slide="next">
				   <span class="fas fa-2x fa-chevron-right" aria-hidden="true"></span>
				   <span class="sr-only">Next</span>
				 </a>';
		}
	}

	public function carouselIndicators($season)
	{
		$this->season = $season;
		$totalRecords = $this->nrPlayers($this->season);

		if ($totalRecords > 0) 
		{
			echo '<ol class="carousel-indicators">';
				echo $this->showCarouselPlayers($this->season, 'indicators');
			echo '</ol>';
		}
	}

}