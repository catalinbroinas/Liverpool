<?php

function exception($data, $type)
{
	switch ($data) 
	{
		case '2019-08-04':
			$color = 'redScore';
			$addTime = '<br><span class="align-middle">5</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După loviturile de departajare"></i><span class="align-middle">4</span>';
			break;
		case '2019-08-14':
			$color = 'greenScore';
			$addTime = '<br><span class="align-middle">4</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După loviturile de departajare"></i><span class="align-middle">5</span>';
			break;
		case '2019-10-30':
			$color = 'greenScore';
			$addTime = '<br><span class="align-middle">5</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După loviturile de departajare"></i><span class="align-middle">4</span>';
			break;
		case '2019-12-21':
			$color = 'greenScore';
			$addTime = '<br><span class="align-middle">0</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După prelungiri"></i><span class="align-middle">1</span>';
			break;
		case '2020-03-11':
			$color = 'redScore';
			$addTime = '<br><span class="align-middle">2</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După prelungiri"></i><span class="align-middle">3</span>';
				break;
		case '2020-08-29':
			$color = 'redScore';
			$addTime = '<br><span class="align-middle">5</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După loviturile de departajare"></i><span class="align-middle">4</span>';
				break;
		case '2020-10-01':
			$color = 'redScore';
			$addTime = '<br><span class="align-middle">4</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După loviturile de departajare"></i><span class="align-middle">5</span>';
				break;
		case '2021-12-22':
			$color = 'greenScore';
			$addTime = '<br><span class="align-middle">4</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După loviturile de departajare"></i><span class="align-middle">3</span>';
				break;
		case '2022-02-27':
			$color = 'greenScore';
			$addTime = '<br><span class="align-middle">0</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După loviturile de departajare"></i><span class="align-middle">1</span>';
				break;
		case '2022-05-14':
			$color = 'greenScore';
			$addTime = '<br><span class="align-middle">0</span><i class="fas fa-exclamation-triangle mx-2 my-auto align-middle" title="După loviturile de departajare"></i><span class="align-middle">1</span>'; 
				break;
		default:
			$color = "";
			$addTime = "";
			break;
	}

	switch ($type) 
	{
		case 'color':
			$typeRturn = $color;
			break;
		case 'addTime':
			$typeRturn = $addTime;
			break;
		
		default:
			$typeRturn = "";
			break;
	}

	return $typeRturn;
}

function score($goalsH, $goalsA, $stadium)
{
	$color = "";
	if (is_numeric($goalsH))
	{
		if ($stadium == "Anfield Road")
		{
			if ($goalsH > $goalsA)
			{
				$color = "greenScore";
			}
			else
			{
				$color = "redScore";
			}
		}
		else
		{
			if ($goalsH < $goalsA)
			{
				$color = "greenScore";
			}
			else
			{
				$color = "redScore";
			}	
		}

		if ($goalsH == $goalsA)
		{
			$color = "yellowScore";
		}
	}

	return $color;
}

function statusMatch($status)
{
	if ($status == "disputed")
	{
		$statusMatch = '<i class="fas fa-minus mx-2 my-auto align-middle"></i>';
	}
	elseif ($status == "scheduled")
	{
		$statusMatch = '<span class="align-middle mx-2">VS</span>';
	}
	else
	{
		$statusMatch = '<span class="align-middle mx-2">AMAN</span>';	
	}

	return $statusMatch;
}

function calendarShow($year, $month, $type = "normal")
{
	$db = Db()->connection;

	$query = "SELECT * FROM calendar WHERE year = $year AND month = $month ORDER BY data";
	$result = $db->query($query);

	  	if ($result->num_rows > 0) 
	  	{
	  		$count = 0;
	    	// output data of each row  
	    	while($row = $result->fetch_assoc())
	    	{
			    $count++;
			    $day = substr($row["data"], 8);
			    $color = score($row["goalsH"], $row["goalsA"], $row["stadium"]);
				$status = statusMatch($row["status"]);
			    
				if ($count == 1) 
				{
					$border = 'calendarListItemDouble';
				}
				elseif ($count > 1) 
				{
					$border = 'calendarListItemSingle';
				}
				else
				{
					$border = '';
				}

				?>
				<li class="list-group-item calendarListItem <?php echo $border; ?>">
						  			<ul class="list-group list-group-horizontal calendarListItemContent">
						  				<li class="list-group-item my-auto calendarDay"><span class="calendarDayItem"><?php echo $day; ?></span></li>
						  				<li class="list-group-item my-auto calendarLocation"><i class="fas fa-city mr-2"></i><?php echo $row["city"]; ?><img class="stadiumIco ml-3" src="<?php echo site_img() . '/stadiumIco.png'; ?>"><span class="ml-2"><?php echo $row["stadium"]; ?></span></li>'
						  				<li class="list-group-item my-auto calendarCompetition"><img class="premierLeagueIcon" src="<?php echo site_img() . '/' . $row["iconC"]; ?>"></li>
						  				<li class="list-group-item my-auto calendarOpponent"><img src="<?php echo site_img() . '/' . $row["iconT"]; ?>" class="teamBrand mr-3"><span class="align-middle"><?php echo $row["team"]; ?></span></li>
						  				<li class="list-group-item my-auto mx-0 calendarScore <?php echo $color . " " . exception($row["data"], 'color'); ?>"><span class="align-middle"><?php echo $row["goalsH"]; ?></span><?php echo $status; ?><span class="align-middle"><?php echo $row["goalsA"]; ?></span><?php echo exception($row["data"], 'addTime'); ?></li>
						  				<li class="list-group-item my-auto calendarMore"><a href="<?php echo $row["link"]; ?>" class="btn btn-sm btnRW"><i class="fas fa-play mr-3"></i>Info</a></li>
						  				<?php if($type == 'Edit') { ?>
						  				<li class="list-group-item my-auto btnEdit">
						  					<div class="btn-group" role="group">
						  						<button id="calendarEditGroup" type="button" class="btn btn-sm btn-block btnRW dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							   					 <i class="fas fa-cog white-text mr-2"></i>Opțiuni
							    				</button>
							    				<div class="dropdown-menu dropdown-menuEdit" aria-labelledby="calendarEditGroup">
							    					<a href="<?php echo site_url() . '/view/calendarUpdate.php?id=' . $row['id']; ?>"  class="dropdown-item dropdown-itemEdit" target="_blank">Editează</a>
							    					<a href="<?php echo site_url() . '/deleteCalendar.php?id=' . $row['id']; ?>"  class="dropdown-item dropdown-itemEdit">Șterge</a>
							    				</div>
						  					</div>
						  				</li>
						  				<?php } ?> 
						  			</ul>
						  		</li>
						  		<?php
				}
			
		}
		else
		{
			include 'alert.php';
		}
}
