<?php
require_once 'bootloader.php';

function validation()
{
	$data = $city = $stadium = $iconC = $iconT = $team = $goalsH = $goalsA = $link = "";
	$isError = false;

	$validation = new validationInput();

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$data = $_POST["data"];
		if (empty($data))  
		{
			$messageInput = $validation->inputMessage($data, "dată", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($data, "dată", "danger");
			$resultTest = $validation->verifyMatchDay($data);
			if ($resultTest !== "Success")
			{	
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$city = $_POST["city"];
		if (empty($city))  
		{
			$messageInput = $validation->inputMessage($city, "nume oraș", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 25, $city);
			$messageInput = $validation->inputMessage($city, "nume oraș", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(1, 4, $city);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului

			// Verificare nume
			$resultTestReg = $validation->verifyName($city);
			if ($resultTestReg !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTestReg);
					$isError = true;
			}
		    // verificare nume
		}

		$stadium = $_POST["stadium"];
		if (empty($stadium))  
		{
			$messageInput = $validation->inputMessage($stadium, "nume stadion", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 25, $stadium);
			$messageInput = $validation->inputMessage($stadium, "nume stadion", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(1, 4, $stadium);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului

			// Verificare nume
			$resultTestReg = $validation->verifyClub($stadium);
			if ($resultTestReg !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTestReg);
					$isError = true;
			}
		    // verificare nume
		}

		$iconC = $_POST["iconC"];
		if (empty($iconC)) 
		{
			$messageInput = $validation->inputMessage($iconC, "pictogramă competiție", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($iconC, "pictogramă competiție", "danger");
			$resultTest = $validation->verifyImg($iconC);
			if ($resultTest !== "Success") 
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$iconT = $_POST["iconT"];
		if (empty($iconT)) 
		{
			$messageInput = $validation->inputMessage($iconT, "pictogramă echipă", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($iconT, "pictogramă echipă", "danger");
			$resultTest = $validation->verifyImg($iconT);
			if ($resultTest !== "Success") 
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
			}
			// Lungimea sirului

			// Verificare nume
			$resultTestReg = $validation->verifyClub($team);
			if ($resultTestReg !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTestReg);
					$isError = true;
			}
		    // verificare nume
		}

		$status = $_POST['status'];
		if (empty($status))  
		{
			$messageInput = $validation->inputMessage($status, "status meci", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($status, "status meci", "danger");
			$resultTest = $validation->inputLengthTest(8, 9, $status);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->verifyStatusMatch($status);
				if ($resultTest !== "Success")
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
		}

		$goalsH = $_POST['goalsH'];
		$goalsA = $_POST['goalsA'];
		if ($status === "disputed")
		{
			if (strlen($goalsH) === 0) 
			{
				$messageInput = $validation->inputMessage($goalsH, "goluri gazde", "danger");
				Messages::setMessage('danger', $messageInput);
				$isError = true;
			}
			else
			{
				$messageInput = $validation->inputMessage($goalsH, "goluri gazde", "danger");
				$resultTest = $validation->verifyInt(0, 12, $goalsH);
				if ($resultTest !== "Success")
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
				
			if (strlen($goalsA) === 0) 
			{
				$messageInput = $validation->inputMessage($goalsA, "goluri oaspeți", "danger");
				Messages::setMessage('danger', $messageInput);
				$isError = true;
			}
			else
			{
				$messageInput = $validation->inputMessage($goalsA, "goluri oaspeți", "danger");
				$resultTest = $validation->verifyInt(0, 12, $goalsA);
				if ($resultTest !== "Success")
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}

			$totalGoals = $goalsH + $goalsA;
			$resultTest = $validation->verifyInt(0, 15, $totalGoals);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', '<h4 class="font-weight-bold">Atenție!</h4>' . 'Din datele introduse rezultă ca s-au marcat ' . $totalGoals . ' goluri! Cel mai probabil a fost o greșeală, te rugăm să încerci din nou!');
					$isError = true;
			}
		}
		elseif (($status === "scheduled") OR ($status === "postponed")) 
		{
			if ((strlen($goalsH) !== 0) OR (strlen($goalsA) !== 0))
			{
				Messages::setMessage('danger', '<h4 class="font-weight-bold">Atenție!</h4>' . '<h5>' . 'Dqacă meciul nu s-a jucat, nu trebuie completate câmpurile: ' . '<span class="font-weight-bold">' . 'goluri gazde și goluri oaspeți' .'</span>' . '.' . '</h5>');
				$isError = true;
			}
		}

		$link = $_POST['link'];
		if (empty($link))  
		{
			$messageInput = $validation->inputMessage($link, "adresa URL", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($link, "adresa URL", "danger");
			$resultTest = $validation->verifyURL($link);
			if($resultTest != "Success")
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
		Messages::setMessage('info', '<h4 class="font-weight-bold">Atenție!</h4>' . '<p class="h5">Modificările nu au fost efectuate. Erorile sunt afișate mai sus.</h5>');
		header('Location: view/AdminCalendar.php');
    	exit;
	}
}

function update()
{
	$db = Db()->connection;
	$validation = new validationInput();
	
	$id = $_POST['id'];		
			
	$data = $validation->testInput($_POST['data']);
	$city = $validation->testInput($_POST['city']);
	$stadium = $validation->testInput($_POST['stadium']);
	$iconC = $validation->testInput($_POST['iconC']);
	$iconT = $validation->testInput($_POST['iconT']);
	$team = $validation->testInput($_POST['team']);
	$status = $validation->testInput($_POST['status']);
	$goalsA = $validation->testInput($_POST['goalsA']);
	$goalsH = $validation->testInput($_POST['goalsH']);
	$link = $validation->testInput($_POST['link']);
	
	$id = mysqli_real_escape_string($db, $id);
	$month = mysqli_real_escape_string($db, $month);
	$day = mysqli_real_escape_string($db, $day);
	$data = mysqli_real_escape_string($db, $data);
	$city = mysqli_real_escape_string($db, $city);
	$stadium = mysqli_real_escape_string($db, $stadium);
	$iconC = mysqli_real_escape_string($db, $iconC);
	$iconT = mysqli_real_escape_string($db, $iconT);
	$team = mysqli_real_escape_string($db, $team);
	$status = mysqli_real_escape_string($db, $status);
	$goalsA = mysqli_real_escape_string($db, $goalsA);
	$goalsH = mysqli_real_escape_string($db, $goalsH);
	$link = mysqli_real_escape_string($db, $link);

	if (!is_numeric($goalsH)) 
	{
		$goalsH = 'NULL';
	}
	if (!is_numeric($goalsA)) 
	{
		$goalsA = 'NULL';
	}

	$year = substr($data, 0, 4);
	$month = substr($data, 5);
	$month = substr($month, 0, 2);

	$query = "UPDATE calendar SET month = $month, year = $year, data = '$data', city = '$city', stadium = '$stadium' ,
			iconC = '$iconC', iconT = '$iconT', team = '$team', 
			status = '$status',
			goalsH = $goalsH, goalsA = $goalsA, link = '$link' WHERE id = $id ";
		
	$result = mysqli_query($db, $query);

	if ($result === TRUE) 
	{
		Messages::setMessage('success', '<h5 class="font-weight-bold">Edit</h5>' . 'Modificările au fost finalizate cu succes!', true);
		header('Location: view/AdminCalendar.php');
		exit;
	}
	else 
	{
		Messages::setMessage('danger', $query . ": " . $db->error, true);
		header('Location: view/AdminCalendar.php');
		exit;
	} 

	$db->close();
}	

validation();
update();
