<?php

function valueTranslate($valueTranslate)
{
	switch ($valueTranslate) 
				{
					case 'goalkeeper':
						$valueTranslate = "Portar";
						break;
					case 'defender':
						$valueTranslate = "Fundaș";
						break;
					case 'midfielder':
						$valueTranslate = "Mijlocaș";
						break;
					case 'forward':
					$valueTranslate = "Atacant";
						break;
					case 'arrival':
						$valueTranslate = "Cumpărat";
						break;
					case 'departure':
						$valueTranslate = "Vândut";
						break;
					case 'in-loan':
						$valueTranslate = "Împrumutat";
						break;
					case 'on-loan':
						$valueTranslate = "În împrumut";
						break;
					default:
						$valueTranslate = 'N/A';
				}

	return $valueTranslate;
}

function transferShow($season, $type, $showItem, $limit = "")
{
	$db = Db()->connection;

	if($limit)
	{
		$limitValue = " LIMIT " . $limit;
	}
	else
	{
		$limitValue = "";
	}

	$query = "SELECT * FROM transfer WHERE sezon = '$season' AND status = '$type' ORDER BY data DESC" . $limitValue; 
	$result = $db->query($query);

	if ($result->num_rows > 0) 
	{
		while ($row = $result->fetch_assoc()) 
		{
			echo '<div class="col-lg-6 col-md-10 col-sm-12 col-8 mx-auto mb-4">';
				$imgPlayer  = $row['imgPlayer'];
				$imgClub = $row['imgClub'];
				$name = $row['name']; $club = $row['club'];
				$value = $row['valueTransfer'];
				$age = $row['age'];
				$sezon = $row['sezon'];
				$role = valueTranslate($row['role']);
				$status = valueTranslate($row['status']);
				if($showItem == 'Edit')
				{
					include ('components/cardTransferEdit.php');
				}
				elseif($showItem == 'index')
				{
					include ('view/components/cardTransfer.php');	
				}
				else
				{
					include ('components/cardTransfer.php');
				}
			echo'</div>';
		}
	}

}

function transferRows($season, $type)
{
	$db = Db()->connection;

	$query = "SELECT * FROM transfer WHERE sezon = '$season' AND status = '$type'";
	$result = $db->query($query);

	if ($result->num_rows > 0) 
	{
		$record = '';
	}
	else
	{
		$record = 'd-none';
	}

	return $record;
}

function transferMax($type, $typeReturn)
{
	$db = Db()->connection;

	$query = "SELECT * FROM transfer WHERE valueTransfer = (SELECT MAX(valueTransfer) FROM transfer WHERE status='$type')";
	$result = $db->query($query);

	if ($result->num_rows > 0) 
	{
		// output data of each row  
		while($row = $result->fetch_assoc()) 
		{
			$max = $row['valueTransfer'];
			$maxBuyPlayer = $row['name'];
			$maxBuyClub = $row['club'];
			$maxBuyImgClub = $row['imgClub'];
			$maxBuyImgPlayer = $row['img2Player'];
		}
	}
	else
	{
		echo 'Nu există înregistrări în baza de date!';
	}

	$maxBuyTransfer = number_format($max, 2);
	switch ($typeReturn) 
	{
		case 'valueTransfer':
			return $maxBuyTransfer;
			break;
		case 'name':
			return $maxBuyPlayer;
			break;
		case 'club':
			return $maxBuyClub;
			break;
		case 'imgPlayer':
			return $maxBuyImgPlayer;
			break;
		case 'imgClub':
			return $maxBuyImgClub;
			break;
		default:
			return "A apărut o eroare!";
	}

}

function transferTotalValue($season, $type1, $type2)
{
	$db = Db()->connection;

	$query ="SELECT SUM(valueTransfer) FROM transfer WHERE sezon = '$season' AND status = '$type1' OR sezon = '$season' AND status = '$type2'";
	$result = $db->query($query);

	$totalValueTransfer = 0;

	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();
		$totalValueTransfer = $row['SUM(valueTransfer)'];
	}
	else
	{
		$totalValueTransfer = "N/A";
	}

		$totalValueTransfer = number_format($totalValueTransfer, 2);
		return $totalValueTransfer;
}

function transferNr($season, $type1, $type2)
{
	$db = Db()->connection;

	$query = "SELECT * FROM transfer WHERE sezon = '$season' AND status = '$type1' OR sezon = '$season' AND status='$type2'";
	$result = $db->query($query);

	$nrPlayers = $result->num_rows;

	return $nrPlayers;
}

function transferRecent($type, $limit, $typeReturn)
{
	$db = Db()->connection;

	$query = "SELECT * FROM transfer WHERE status = '$type' ORDER BY data DESC, id  DESC LIMIT $limit";
	$result = $db->query($query);

	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc())
		{
			$imgPlayer = $row['img2Player'];
			$pngPlayer = $row['imgPlayer'];
			$imgClub = $row['imgClub'];
			$name = $row['name'];
			$club = $row['club'];
			$valueTransfer = $row['valueTransfer'];
		}
	}
	else
	{
		echo 'Nu există înregistrări în baza de date!';
	}

	switch ($typeReturn) 
	{
		case 'imgClub':
			return $imgClub;
			break;
		case 'imgPlayer':
			return $imgPlayer;
			break;
		case 'pngPlayer':
			return $pngPlayer;
			break;
		case 'name':
			return $name;
			break;
		case 'club':
			return $club;
			break;
		case 'valueTransfer':
			return $valueTransfer;
			break;
		default:
			return "A apărut o eroare!";
	}

}
