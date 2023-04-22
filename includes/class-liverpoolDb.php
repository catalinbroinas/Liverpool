<?php

class liverpoolDb
{
	private $table, $row, $query, $result, $boolean, $season, $season_value, $year, $month, 
	$lastSeason;

	private function dbConnection($query)
	{
		$db = Db()->connection;

		$this->query = $query;
		$this->result = $db->query($this->query);

		$this->row = ($this->result->num_rows > 0) ? $this->result->fetch_assoc() : false;

		return $this->row;
	}

	public function isCalendarSeason($year, $month)
	{
		$this->year = $year;
		$this->month = $month;
		$this->query = "SELECT year, month FROM calendar WHERE year = '$this->year' AND
		 month = '$this->month'";
		$this->row = $this->dbConnection($this->query);

		$this->boolean = ($this->row) ? TRUE : FALSE;

		return $this->boolean;
	}

	public function isSeason($table, $season, $season_value)
	{
		$this->table = $table;
		$this->season = $season;
		$this->season_value = $season_value;

		$this->query = "SELECT $this->season FROM $this->table 
		WHERE $this->season = '$this->season_value'";

		$this->row = $this->dbConnection($this->query);

		$this->boolean = ($this->row) ? TRUE : FALSE;

		return $this->boolean;
	}

	public function lastSeason($table, $season = "season")
	{
		$this->table = $table;
		$this->season = $season;

		$this->query = "SELECT $this->season FROM $this->table ORDER BY $this->season DESC
		LIMIT 1";

		$this->row = $this->dbConnection($this->query);
		$this->lastSeason = $this->row[$this->season];

		return $this->lastSeason;	
	}

	public function lastCalendarSeason()
	{
		$this->query = "SELECT year, month, data FROM calendar ORDER BY data DESC LIMIT 1";

		$this->row = $this->dbConnection($this->query);
		$this->year = $this->row['year'];
		$this->month = $this->row['month'];

		$this->season = ($this->month > 6) ? $this->year . '-' . $this->year + 1 : 
			 $this->year - 1 . '-' . $this->year;

		return $this->season;
	}

	public function lastCalendarYear()
	{
		$this->query = "SELECT year FROM calendar ORDER BY year DESC LIMIT 1";

		$this->row = $this->dbConnection($this->query);
		$this->year = $this->row['year'];

		return $this->year;
	}

	public function lastCalendarMonth()
	{
		$this->query = "SELECT month, data FROM calendar ORDER BY data DESC LIMIT 1";

		$this->row = $this->dbConnection($this->query);
		$this->month = $this->row['month'];

		return $this->month;
	}

	public function isRows($table, $col = "", $colValue = "")
	{
		$this->table = $table;
		$this->col = $col;
		$this->colValue = $colValue;
		
		if($this->col != "")
		{
			$where = "WHERE $col = '$colValue'";
		}
		else
		{
			$where = "";
		}

		$this->query = "SELECT * FROM $this->table " . $where;
		$this->row = $this->dbConnection($this->query);

		$this->boolean = ($this->row) ? TRUE : FALSE;

		return $this->boolean;
	} 
}