<?php

class News
{
	private function queryDb($mySQLcode)
	{
		$db = Db()->connection;

		$query = "$mySQLcode";
		$result = $db->query($query);

		return $result;
	}

	public function numberOfRecords()
	{
		$code = 'SELECT * FROM news';
		$result = $this->queryDb($code);
		
		$numberOfRecords = $result->num_rows;
		return $numberOfRecords;
	}

	public function showNews($limit, $path)
	{
		$code = "SELECT * FROM news WHERE cover = 'no' ORDER BY data DESC LIMIT " . $limit;
		$result = $this->queryDb($code);

		if ($result->num_rows > 0) 
		{
			while ($row = $result->fetch_assoc()) 
			{
				if ($path == 'view')
				{
					include ('components/newsItem.php');				
				}
				else
				{
					include ('newsItem.php');
				}
			}
		}
		else
		{
			echo '<div class="col-12">';
				echo '<h2 class="text-center">Nu există postări!</h2>';
			echo '</div>';
		}
	}

	public function cover($section)
	{
		$code = "SELECT * FROM news WHERE cover = 'yes' ORDER BY data";
		$result = $this->queryDb($code);

		if ($result->num_rows > 0) 
	  	{
	    	// output data of each row  
	    	while($row = $result->fetch_assoc()) 
		    {
		    	$title = $row["titleArticle"];
		    	$text = $row["textArticle"];
		    	$link = $row["linkArticle"];
		    	$img = $row["img"];
		    }
		    switch ($section) 
		    {
		    	case 'title':
		    		return $title;
		    		break;
		    	case 'text':
		    		return $text;
		    		break;
		    	case 'link':
		    		return $link;
		    		break;
		    	case 'img':
		    		return $img;
		    		break;
		    }
		}
	}

}