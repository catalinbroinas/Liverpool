<?php
require_once 'bootloader.php';

function validation()
{
	$brand = $team = $games = $wins = $draws = $loss = $attack = $defensive = $goals = $points = $season = "";
	$isError = false;

	$validation = new validationInput();

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{

		$brand = $_POST["brand"];
		if (empty($brand)) 
		{
			$messageInput = $validation->inputMessage($brand, "nume pictogramă", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($brand, "nume pictogramă", "danger");
			$resultTest = $validation->verifyImg($brand);
			if($resultTest != "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;	
			}
		}

		$team = $_POST["team"];
		if (empty($team))  
		{
			$messageInput = $validation->inputMessage($team, "nume echipă", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{

			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(4, 20, $team);
			$messageInput = $validation->inputMessage($team, "nume echipă", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(1, 4, $team);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
				else
				{
					// Verificare nume
					$resultTestReg = $validation->verifyClub($team);
					if ($resultTestReg !== "Success")
					{
						Messages::setMessage('danger', $messageInput . $resultTestReg);
							$isError = true;
					}
				    // verificare nume
				}
			}
			// Lungimea sirului

		}

		$wins = $_POST["wins"];
		if (strlen($wins) === 0)  
		{
			$messageInput = $validation->inputMessage($wins, "victorii", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($wins, "victorii", "danger");
			$resultTest = $validation->verifyInt(0, 38, $wins);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$draws = $_POST["draws"];
		if (strlen($draws) === 0)  
		{
			$messageInput = $validation->inputMessage($draws, "egaluri", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($draws, "egaluri", "danger");
			$resultTest = $validation->verifyInt(0, 38, $draws);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$loss = $_POST["loss"];
		if (strlen($loss) === 0)  
		{
			$messageInput = $validation->inputMessage($loss, "înfrângeri", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($loss, "înfrângeri", "danger");
			$resultTest = $validation->verifyInt(0, 38, $loss);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$attack = $_POST["attack"];
		if (strlen($attack) === 0)  
		{
			$messageInput = $validation->inputMessage($attack, "goluri marcate", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($attack, "goluri marcate", "danger");
			$resultTest = $validation->verifyInt(0, 200, $attack);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$defensive = $_POST["defensive"];
		if (strlen($defensive) === 0)  
		{
			$messageInput = $validation->inputMessage($defensive, "goluri primite", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($defensive, "goluri primite", "danger");
			$resultTest = $validation->verifyInt(0, 200, $defensive);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$season = $_POST["season"];
		if (empty($season))  
		{
			$messageInput = $validation->inputMessage($season, "sezon competițional", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($season, "sezon competițional", "danger");
			$resultTest = $validation->verifySezon($season, "9", "Selectează una dintre opțiunile disponibile!");
			if ($resultTest !== "Success")
			{	
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

	}
	else
	{
		Messages::setMessage('danger', 'Error');
		$isError = true;
	}

	if ($isError) 
	{
		header('Location: view/AdminClasament.php');
    	exit;
	}
}

function validationInsert($games, $points, $goals)
{
	$validation = new validationInput();

	$gamesTest = $validation->verifyInt(0, 38, $games);
	$pointsTest = $validation->verifyInt(0, 114, $points);
	$goalsTest = $validation->verifyInt(-100, 120, $goals);

	$isError = false;

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if ($gamesTest !== "Success")
		{
			Messages::setMessage('danger', "Campionatul are 38 de etape! Ai introdus " . $games . " de meciuri (victorii + egaluri + înfrângeri).");
			$isError = true;
		}

		if ($pointsTest !== "Success")
		{
			Messages::setMessage('danger', "Se acordă 3 puncte la victorie, 1 punct la egal și 0 la înfrângeri. În total pot fi maxim 114 puncte în 38 de meciuri și de asemenea media puncte/meciuri poate fi maxim 3. Ai introdus  " . $points . " în " . $games . " meciuri.");
			 $isError = true;	
		}
		else
		{
			$average = $games * 3;
			if ($points > $average)
			{
				Messages::setMessage('danger', "Se acordă 3 puncte la victorie, 1 punct la egal și 0 la înfrângeri. În total pot fi maxim 114 puncte în 38 de meciuri și de asemenea media puncte/meciuri poate fi maxim 3. Ai introdus  " . $points . " în " . $games . " meciuri.");
			 	$isError = true;	
			}
		}

		if ($goalsTest !== "Success")
		{
			Messages::setMessage('danger', "Golaverajul a fost introdus greșit! Diferența dintre goluri marcate și goluri primite este prea mare sau prea mică.");
			$isError = true;
		}
	}
	else
	{
		Messages::setMessage('danger', "error");
		$isError = true;
	}

	if ($isError) 
	{
		header('Location: view/AdminClasament.php');
    	exit;
	}
}

function verifyNumberOfTeam($season)
{
	$db = Db()->connection;
	$isError = false;

	$query = "SELECT * FROM clasament WHERE season = '$season'";
	$result = $db->query($query);

	if ($result->num_rows > 19) 
	{
		Messages::setMessage('danger', '<h4 class="font-weight-bold">Atenție!</h4>' . '<h5>' . "Sunt permise maxim 20 de echipe!" . '</h5>');
		$isError = true;
	}
	
	if ($isError) 
	{
		header('Location: view/AdminClasament.php');
    	exit;
	}
}

function insert()
{
	$db = Db()->connection;
	$validation = new validationInput();
			
	$brand = $validation->testInput($_POST['brand']);
	$team = $validation->testInput($_POST['team']);
	$wins = $validation->testInput($_POST['wins']);
	$draws = $validation->testInput($_POST['draws']);
	$loss = $validation->testInput($_POST['loss']);
	$attack = $validation->testInput($_POST['attack']);
	$defensive = $validation->testInput($_POST['defensive']);
	$season = $validation->testInput($_POST['season']);
	
	$brand = mysqli_real_escape_string($db, $brand);
	$team = mysqli_real_escape_string($db, $team);
	$wins = mysqli_real_escape_string($db, $wins);
	$draws = mysqli_real_escape_string($db, $draws);
	$loss = mysqli_real_escape_string($db, $loss);
	$attack = mysqli_real_escape_string($db, $attack);
	$defensive = mysqli_real_escape_string($db, $defensive);
	$season = mysqli_real_escape_string($db, $season);

	$games = $wins + $draws + $loss;
	$points = (3* $wins) + (1*$draws);
	$goals = $attack - $defensive;

	validationInsert($games, $points, $goals);

	$games = $validation->testInput($games);
	$points = $validation->testInput($points);
	$goals = $validation->testInput($goals);

	$games = mysqli_real_escape_string($db, $games);
	$points = mysqli_real_escape_string($db, $points);
	$goals = mysqli_real_escape_string($db, $goals);

	$query = "INSERT INTO clasament (brand, team, games, wins, draws, loss,
	 attack, defensive, goals, points, season )
				VALUES ('$brand', '$team', $games, $wins, $draws, $loss,
				 $attack, $defensive, $goals, $points, '$season' )";
		
	$result = mysqli_query($db, $query);

	if ($result === TRUE) 
	{
		Messages::setMessage('success', '<h5 class="font-weight-bold">Insert</h5>' . 'Inserție finaizată cu succes!', true);
		header('Location: view/AdminClasament.php');
		exit;
	}
	else 
	{
		Messages::setMessage('danger', $query . ": " . $db->error, true);
		header('Location: view/AdminClasament.php');
		exit;
	} 

	$db->close();
}	

validation();
verifyNumberOfTeam($_POST["season"]);
insert();
