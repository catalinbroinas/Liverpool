<?php
require_once 'bootloader.php';

function validation()
{
	$imgPlayer = $img2Player = $imgClub = $img2Club = $name = $age = $role = $valueTransfer
	= $status = $club = $data = $sezon = "";
	$isError = false;

	$validation = new validationInput();

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$imgPlayer = $_POST["imgPlayer"];
		if (empty($imgPlayer)) 
		{
			$messageInput = $validation->inputMessage($imgPlayer, "imagine principală jucător", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($imgPlayer, "imagine principală jucător", "danger");
			$resultTest = $validation->verifyImg($imgPlayer);
			if($resultTest != "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;	
			}
		}

		$img2Player = $_POST["img2Player"];
		if (!empty($img2Player))
		{
			$messageInput = $validation->inputMessage($img2Player, "imagine secundară jucător", "danger");
			$messageInputInfo = $validation->inputMessage($img2Player, "imagine secundară jucător", "info");
			$resultTest = $validation->verifyImg($img2Player);
			if($resultTest != "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				Messages::setMessage('info', $messageInputInfo);
				$isError = true;	
			}
		}

		$imgClub = $_POST["imgClub"];
		if (empty($imgClub)) 
		{
			$messageInput = $validation->inputMessage($imgClub, "imagine principală club", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($imgClub, "imagine principală club", "danger");
			$resultTest = $validation->verifyImg($imgClub);
			if($resultTest != "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;	
			}
		}

		$img2Club = $_POST["img2Club"];
		if (!empty($img2Club))
		{
			$messageInput = $validation->inputMessage($img2Club, "imagine secundară club", "danger");
			$messageInputInfo = $validation->inputMessage($img2Club, "imagine secundară club", "info");
			$resultTest = $validation->verifyImg($img2Club);
			if($resultTest != "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				Messages::setMessage('info', $messageInputInfo);
				$isError = true;	
			}
		}

		$name = $_POST["name"];
		if (empty($name))  
		{
			$messageInput = $validation->inputMessage($name, "nume", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 20, $name);
			$messageInput = $validation->inputMessage($name, "nume", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(1, 3, $name);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului

			// Verificare nume
			$resultTestReg = $validation->verifyName($name);
			if ($resultTestReg !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTestReg);
					$isError = true;
			}
		    // verificare nume
		}

		$age = $_POST["age"];
		if (strlen($age) === 0) 
		{
			$messageInput = $validation->inputMessage($age, "vârstă", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($age, "vârstă", "danger");
			$resultTest = $validation->verifyInt(16, 45, $age);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . 'Ai introdus greșit vârsta jucătorului! ' . $resultTest);
				$isError = true;
			}
		}

		$role = $_POST["role"];
		if (empty($role))  
		{
			$messageInput = $validation->inputMessage($role, "rol", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($role, "rol", "danger");
			$resultTest = $validation->inputLengthTest(7, 10, $role);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->verifyRole($role);
				if ($resultTest !== "Success")
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
		}

		$valueTransfer = $_POST["valueTransfer"];
		if (strlen($valueTransfer) === 0) 
		{
			$messageInput = $validation->inputMessage($valueTransfer, "sumă de transfer", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($valueTransfer, "sumă de transfer", "danger");
			$resultTest = $validation->verifyFloat(0, 500, $valueTransfer);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$status = $_POST["status"];
		if (empty($status))  
		{
			$messageInput = $validation->inputMessage($status, "tip transfer", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($status, "tip transfer", "danger");
			$resultTest = $validation->inputLengthTest(7, 9, $status);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->verifyStatusTransfer($status);
				if ($resultTest !== "Success")
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
		}

		$club = $_POST["club"];
		if (empty($club))  
		{
			$messageInput = $validation->inputMessage($club, "club", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(4, 20, $club);
			$messageInput = $validation->inputMessage($club, "club", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(1, 4, $club);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului

			// Verificare nume
			$resultTestReg = $validation->verifyClub($club);
			if ($resultTestReg !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTestReg);
					$isError = true;
			}
		    // verificare nume
		}

		$data = $_POST["data"];
		if (empty($data))  
		{
			$messageInput = $validation->inputMessage($data, "data transferului", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($data, "data transferului", "danger");
			$resultTest = $validation->verifyDateTransfer($data);
			if ($resultTest !== "Success")
			{	
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$sezon = $_POST["sezon"];
		if (empty($sezon))  
		{
			$messageInput = $validation->inputMessage($sezon, "sezon competițional", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($sezon, "sezon competițional", "danger");
			$resultTest = $validation->verifySezon($sezon, "5-9", "Sunt permise transferuri începând cu sezonul 2015-2016 și până în sezonul curent.");
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
		Messages::setMessage('info', '<h4 class="font-weight-bold">Atenție!</h4>' . '<p class="h5">Modificările nu au fost efectuate. Erorile sunt afișate mai sus.</h5>');
		header('Location: view/AdminTransfer.php');
    	exit;
	}
}

function update()
{
	$db = Db()->connection;
	$validation = new validationInput();
			
	$id = $_POST['id'];		
	$imgPlayer = $validation->testInput($_POST['imgPlayer']);
	$img2Player = $validation->testInput($_POST['img2Player']);
	$imgClub = $validation->testInput($_POST['imgClub']);
	$img2Club = $validation->testInput($_POST['img2Club']);
	$name = $validation->testInput($_POST['name']);
	$age = $validation->testInput($_POST['age']);
	$role = $validation->testInput($_POST['role']);
	$valueTransfer = $validation->testInput($_POST['valueTransfer']);
	$birthday = $validation->testInput($_POST['birthday']);
	$valueMarket = $validation->testInput($_POST['valueMarket']);
	$status = $validation->testInput($_POST['status']);
	$club = $validation->testInput($_POST['club']);
	$data = $validation->testInput($_POST['data']);
	$sezon = $validation->testInput($_POST['sezon']);
	
	$id = mysqli_real_escape_string($db, $id);
	$imgPlayer = mysqli_real_escape_string($db, $imgPlayer);
	$img2Player = mysqli_real_escape_string($db, $img2Player);
	$imgClub = mysqli_real_escape_string($db, $imgClub);
	$img2Club = mysqli_real_escape_string($db, $img2Club);
	$name = mysqli_real_escape_string($db, $name);
	$age = mysqli_real_escape_string($db, $age);
	$role = mysqli_real_escape_string($db, $role);
	$valueTransfer = mysqli_real_escape_string($db, $valueTransfer);
	$birthday = mysqli_real_escape_string($db, $birthday);
	$valueMarket = mysqli_real_escape_string($db, $valueMarket);
	$status = mysqli_real_escape_string($db, $status);
	$club = mysqli_real_escape_string($db, $club);
	$data = mysqli_real_escape_string($db, $data);
	$sezon = mysqli_real_escape_string($db, $sezon);

	$query = "UPDATE Transfer SET imgPlayer = '$imgPlayer', img2Player = '$img2Player', imgClub = '$imgClub', img2Club = '$img2Club', name= '$name', age = $age, 
	role = '$role', valueTransfer = '$valueTransfer', status = '$status', club = '$club', 
	data = '$data', sezon = '$sezon' WHERE id = $id ";
		
	$result = mysqli_query($db, $query);

	if ($result === TRUE) 
	{
		Messages::setMessage('success', '<h5 class="font-weight-bold">Edit</h5>' . 'Modificările au fost finalizate cu succes!', true);
		header('Location: view/AdminTransfer.php');
		exit;
	}
	else 
	{
		Messages::setMessage('danger', $query . ": " . $db->error, true);
		header('Location: view/AdminTransfer.php');
		exit;
	} 

	$db->close();
}	

validation();
update();
