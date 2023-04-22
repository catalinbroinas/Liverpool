<?php

class calendar
{
	private $day, $month, $monthInt, $year, $season, $status, $myDate, $dateFormated;
	private $monthFormated, $lastSeason, $lastYear, $lastMonth;

	function thisDateTime()
	{
		date_default_timezone_set('Europe/Athens');
		$dateTime = date("Y-m-d H-i-s");
		return $dateTime;
	}

	public function thisYear($format = "Y")
	{
		date_default_timezone_set('Europe/Athens');
		$year = date($format);
		return $year;
	}

	public function thisMonth($format = "M")
	{
		date_default_timezone_set('Europe/Athens');
		$month = date($format);
		return $month;
	}

	public function thisSeason()
	{
		date_default_timezone_set('Europe/Athens');
		$year = date("Y");
		$monthInt = date("m");

		if ($year < 2021)
		{

			if ($monthInt < 8)
			{
				$yearS = $year - 1;
				$yearE = $year;
				$season = $yearS . "-" . $yearE;
			}
			else
			{
				$yearS = $year;
				$yearE = $year +1;
				$season = $yearS . "-" . $yearE;	
			}

		}
		elseif ($year >= 2021)
		{
			
			if ($monthInt < 7)
			{
				$yearS = $year - 1;
				$yearE = $year;
				$season = $yearS . "-" . $yearE;
			}
			else
			{
				$yearS = $year;
				$yearE = $year +1;
				$season = $yearS . "-" . $yearE;	
			}			

		}

		return $season;
	}	

	public function navsMonth($year, $month, $lastYear, $lastMonth)
	{
		$this->year = $year;
		$this->month = $month;
		$this->lastYear = $lastYear;
		$this->lastMonth = $lastMonth;
		
		$mes = ($this->year == $this->lastYear AND $this->month == $this->lastMonth) ? "active" : "";

		return $mes;
	}

	public function navsMonthTrue($year, $month, $lastYear, $lastMonth)
	{
		$this->year = $year;
		$this->month = $month;
		$this->lastYear = $lastYear;
		$this->lastMonth = $lastMonth;
		
		$mes = ($this->year == $this->lastYear AND $this->month == $this->lastMonth) ? "true" : "false";

		return $mes;
	}

	public function navsSeason($season, $lastSeason)
	{
		$this->season = $season;
		$this->lastSeason = $lastSeason;
		$mes = $this->season == $this->lastSeason ? "active" : "";
		return $mes;
	}	

	public function navsSeasonTrue($season, $lastSeason)
	{
		$this->season = $season;
		$this->lastSeason = $lastSeason;
		$mes = $this->season == $this->lastSeason ? "true" : "false";
		return $mes;
	}

	public function tabsSeasonShow($season, $lastSeason)
	{
		$this->season = $season;
		$this->lastSeason = $lastSeason; 
		$mes = $this->season == $this->lastSeason ? "show active" : "";
		return $mes;	
	}	

	public function tabsMonthShow($year, $month, $lastYear, $lastMonth)
	{
		$this->year = $year;
		$this->month = $month;
		$this->lastYear = $lastYear;
		$this->lastMonth = $lastMonth;

		$mes = ($this->year == $this->lastYear AND $this->month == $this->lastMonth) ? "show active" : "";

		return $mes;
	}

	public function displayDte($myDate)
	{
		$this->myDate = $myDate;

		$this->year = substr($this->myDate, 0, 4);
		$this->month = substr($this->myDate, 5, 2);
		$this->day = substr($this->myDate, 8, 2);

		$this->day = (substr($this->day, 0, 1) == '0') ? $this->day = 
			substr($this->myDate, 9, 1) : $this->day = substr($this->myDate, 8, 2);

		$this->dateFormated = $this->day . ' ' . $this->month . ' ' . $this->year;

		return $this->dateFormated;
	}

	public function displayMonth($month)
	{
		$this->month = $month;

		switch ($this->month) 
		{
			case 'Jan':
				$this->monthFormated = "Ianuarie";
				break;
			case 'Feb':
				$this->monthFormated = "Februarie";
				break;
			case 'Mar':
				$this->monthFormated = "Martie";
				break;
			case 'Apr':
				$this->monthFormated = "Aprilie";
				break;
			case 'May':
				$this->monthFormated = "Mai";
				break;
			case 'Jun':
				$this->monthFormated = "Iunie";
				break;
			case 'Jul':
				$this->monthFormated = "Iulie";
				break;
			case 'Aug':
				$this->monthFormated = "August";
				break;
			case 'Sep':
				$this->monthFormated = "Septembrie";
				break;
			case 'Oct':
				$this->monthFormated = "Octombrie";
				break;
			case 'Nov':
				$this->monthFormated = "Noiembrie";
				break;
			case 'Dec':
				$this->monthFormated = "Decembrie";
				break;
			default:
				$this->monthFormated = $this->month;
				break;
		}

		return $this->monthFormated;
	}

	public function displayDate($myDate)
	{
		$this->myDate = $myDate;

		$this->myDate = date_create($this->myDate);
		$this->dateFormated = date_format($this->myDate, "d M Y");

		$this->day = substr($this->dateFormated, 0, 2);
		$this->month = $this->displayMonth(substr($this->dateFormated, 3, 3));
		$this->year = substr($this->dateFormated, 7, 4);

		$this->day = (substr($this->dateFormated, 0, 1) == '0') ? $this->day = 
			substr($this->dateFormated, 1, 1) : $this->day = substr($this->dateFormated, 0, 2);
		$this->dateFormated = $this->day . ' ' . $this->month . ' ' . $this->year;

		return $this->dateFormated;
	}

}