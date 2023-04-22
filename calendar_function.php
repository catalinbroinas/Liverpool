<?php

function calendarRecords($table, $col = "", $colValue = "")
{
	$db = Db()->connection;

	if($col AND $colValue)
	{
		$where = "WHERE " . $col . " = " . "'$colValue'";
	}
	else
	{
		$where = "";
	}

	$query = "SELECT * FROM $table " . $where;

	$result = $db->query($query);

	if($result->num_rows > 0)
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

function calendarBack($section, $limit)
{
	$db = Db()->connection;

	$query = "SELECT * FROM calendar WHERE status = 'disputed' ORDER BY data DESC LIMIT $limit";
	$result = $db->query($query);
	
	if ($result->num_rows > 0) 
	{
		while ($row = $result->fetch_assoc()) 
		{
			$icon = $row['iconT'];
			$stadium = $row['stadium'];
			$team = $row['team'];
			$goalsH = $row['goalsH'];
			$goalsA = $row['goalsA'];
		}
	}
	switch ($section) 
	{
		case 'icon':
			return $icon;
			break;
		case 'stadium':
			return $stadium;
			break;	
		case 'team':
			return $team;
			break;
		case 'goalsH':
			return $goalsH;
			break;
		case 'goalsA':
			return $goalsA;
			break;	
	}
}

function calendarBackStadium($limit)
{
	$stadium = calendarBack('stadium', $limit);
	if ($stadium == 'Anfield Road') 
	{
		return 'Da';
	}
	else
	{
		return 'Nu';
	}
}

function calendarBackHome($section, $limit)
{
	$status = calendarBackStadium($limit);
	if ($status == 'Da') 
	{
		switch ($section) 
		{
			case 'icon':
				return 'icon.png';
				break;
			case 'team':
				return 'Liverpool';
				break;
		}
	}
	else
	{
		switch ($section) 
		{
			case 'icon':
				return calendarBack('icon', $limit);
				break;
			case 'team':
				return calendarBack('team', $limit);
				break;
		}
	}
}

function calendarBackAway($section, $limit)
{
	$status = calendarBackStadium($limit);
	if ($status == 'Nu') 
	{
		switch ($section) 
		{
			case 'icon':
				return 'icon.png';
				break;
			case 'team':
				return 'Liverpool';
				break;
		}
	}
	else
	{
		switch ($section) 
		{
			case 'icon':
				return calendarBack('icon', $limit);
				break;
			case 'team':
				return calendarBack('team', $limit);
				break;
		}
	}
}

function calendarNext($section, $limit)
{
	$db = Db()->connection;

	$query = "SELECT * FROM calendar WHERE status = 'scheduled' ORDER BY data LIMIT $limit";
	$result = $db->query($query);
	
	if ($result->num_rows > 0) 
	{
		while ($row = $result->fetch_assoc()) 
		{
			$icon = $row['iconT'];
			$stadium = $row['stadium'];
			$team = $row['team'];
		}
	}
	switch ($section) 
	{
		case 'icon':
			return $icon;
			break;
		case 'stadium':
			return $stadium;
			break;	
		case 'team':
			return $team;
			break;
	}
}
function calendarNextStadium($limit)
{
	$stadium = calendarNext('stadium', $limit);
	if ($stadium == 'Anfield Road') 
	{
		return 'Da';
	}
	else
	{
		return 'Nu';
	}
}

function calendarNextHome($section, $limit)
{
	$status = calendarNextStadium($limit);
	if ($status == 'Da') 
	{
		switch ($section) 
		{
			case 'icon':
				return 'icon.png';
				break;
			case 'team':
				return 'Liverpool';
				break;
		}
	}
	else
	{
		switch ($section) 
		{
			case 'icon':
				return calendarNext('icon', $limit);
				break;
			case 'team':
				return calendarNext('team', $limit);
				break;
		}
	}
}

function calendarNextAway($section, $limit)
{
	$status = calendarNextStadium($limit);
	if ($status == 'Nu') 
	{
		switch ($section) 
		{
			case 'icon':
				return 'icon.png';
				break;
			case 'team':
				return 'Liverpool';
				break;
		}
	}
	else
	{
		switch ($section) 
		{
			case 'icon':
				return calendarNext('icon', $limit);
				break;
			case 'team':
				return calendarNext('team', $limit);
				break;
		}
	}
}

function nextMatch($section)
{
	$db = Db()->connection;

	$nextMatch = calendarRecords('calendar', 'status', 'scheduled');

	if ($nextMatch)
	{
		$query = "SELECT * FROM calendar WHERE status = 'scheduled' ORDER BY data LIMIT 1";
	}
	else
	{
		$query = "SELECT * FROM calendar WHERE status = 'disputed' ORDER BY data DESC LIMIT 1";
	}

	$result = $db->query($query);

	while ($row = $result->fetch_assoc()) 
	{
		$iconT = $row['iconT'];
		$stadium = $row['stadium'];
		$city = $row['city'];
		$team = $row['team'];
		$data = $row['data'];
		$iconC = $row['iconC'];
		$goalsH = $row['goalsH'];
		$goalsA = $row['goalsA'];
	}

	if($stadium === 'Anfield Road')
	{
		$homeTeam = "Liverpool";
		$homeTeamIco = "icon.png";
		$awayTeam = $team;
		$awayTeamIco = $iconT;
	}
	else
	{
		$homeTeam = $team;
		$homeTeamIco = $iconT;
		$awayTeam = "Liverpool";
		$awayTeamIco = "icon.png";
	}
	if($iconC === 'plIcon.png')
	{
		$iconC = 'plIcon1.png';
	}

	switch ($section) 
	{
		case 'competitionIco':
			return $iconC;
			break;
		case 'stadium':
			return $stadium;
			break;
		case 'city':
			return $city;
			break;
		case 'data':
			return $data;
			break;
		case 'homeTeam':
			return $homeTeam;
			break;
		case 'homeTeamIco':
			return $homeTeamIco;
			break;
		case 'awayTeam':
			return $awayTeam;
			break;
		case 'awayTeamIco':
			return $awayTeamIco;
			break;
		case 'goalsH':
			return $goalsH;
			break;
		case 'goalsA':
			return $goalsA;
			break;
		default:
			return '?';	
			break;	
	}

}

function selectMonth($thisMonth)
{
	if ($thisMonth == $month) 
	{
		return "selected";
	}
	else
	{
		return "";
	}
}
