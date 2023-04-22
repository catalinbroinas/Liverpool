<?php

function locStatus($season, $loc)
{

	switch ($loc) 
	{
		case 1:
		case 2:
		case 3:
		case 4:
			$locTable = 'green text-white';
			break;
		case 5:
		case 6:
			$locTable = 'blue text-white';
			break;
		case 7:
			if ($season != '2019-2020')
				{
					$locTable = 'orange text-white';
				}
			else
			{
				$locTable = '';
			}
			break;
		case 18:
		case 19:
		case 20:
			$locTable = 'red text-white';
			break;
		default:
			$locTable = '';
			break;
	}

	return $locTable;
}

function clasamentShow($season, $type = "Normal")
{
	$loc = 1;
	$db = Db()->connection;

	$query = "SELECT * FROM clasament WHERE season = '$season' ORDER BY points DESC, goals DESC, attack DESC";
	$result = $db->query($query);

	  	if ($result->num_rows > 0) 
	  	{
	    	// output data of each row  
	    	while($row = $result->fetch_assoc()) 
		    {
		    
	?>
			<tr>
				<th scope="row" class="loc <?php echo locStatus($season, $loc); ?>"><?=$loc?></th>
				<td class="team my-auto">
					<img src="<?php echo site_img() . '/' . $row["brand"]; ?>" class="teamBrand mr-3">
					<span class="align-middle"><?=$row["team"];?></span> 
				</td>
				<td class="mp"><?=$row["games"];?></td>
				<td class="w"><?=$row["wins"];?></td>
				<td class="d"><?=$row["draws"];?></td>
				<td class="l"><?=$row["loss"];?></td>
				<td class="gw"><?=$row["attack"];?></td>
				<td class="ga"><?=$row["defensive"];?></td>
				<td class="g"><?=$row["goals"];?></td>
				<td class="pt"><?=$row["points"];?></td>
				<?php if ($type == "Edit") 
				{ ?>
					<td class="btnEdit">
						<div class="btn-group" role="group">
							<button id="editGroup" type="button" class="btn btn-sm btnRW dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   					 Opțiuni
		    				</button>
		    				<div class="dropdown-menu dropdown-menuEdit" aria-labelledby="editGroup">
		    					<a href="<?php echo site_url() . '/view/clasamentUpdate.php?id=' . $row['id']; ?>"  class="dropdown-item dropdown-itemEdit" target="_blank">Editează</a>
		    					<a href="<?php echo site_url() . '/deleteClasament.php?id=' . $row['id'];?>"  class="dropdown-item dropdown-itemEdit">Șterge</a>
		    				</div>
						</div>
					</td>
				<?php
				} ?> 
			</tr>
			<?php
			$loc+=1;
			}
		}
		else
		{
			?>
			<tr>
				<td colspan="10">
					<h4 class="text-center h4-responsive">Nu există informații</h4>
				</td>
			</tr>
			<?php
		}
}
