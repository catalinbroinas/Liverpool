<?php
require_once 'bootloader.php';

function validation()
{
	$img1 = $img2 = $img3 = $nr = $fname = $lname = $nickName = $role = $birthday = $valueMarket = $imgFlag = $flag = $season = "";
	$isError = false;

	$validation = new validationInput();

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$img1 = $_POST["img1"];
		if (empty($img1)) 
		{
			$messageInput = $validation->inputMessage($img1, "pictogramă princială", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($img1, "pictogramă princială", "danger");
			$resultTest = $validation->verifyImg($img1);
			if ($resultTest !== "Success") 
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$img2 = $_POST["img2"];
		if (!empty($img2)) 
		{
			$messageInput = $validation->inputMessage($img2, "pictogramă secundară", "danger");
			$messageInputInfo = $validation->inputMessage($img2, "pictogramă secundară", "info");
			$resultTest = $validation->verifyImg($img2);
			if ($resultTest !== "Success") 
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				Messages::setMessage('info', $messageInputInfo);
				$isError = true;
			}
		}

		$img3 = $_POST["img3"];
		if (!empty($img3)) 
		{
			$messageInput = $validation->inputMessage($img3, "pictogramă alternativă", "danger");
			$messageInputInfo = $validation->inputMessage($img3, "pictogramă alternativă", "info");
			$resultTest = $validation->verifyImg($img3);
			if ($resultTest !== "Success") 
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				Messages::setMessage('info', $messageInputInfo);
				$isError = true;
			}
		}

		$nr = $_POST["nr"];
		if (strlen($nr) === 0) 
		{
			$messageInput = $validation->inputMessage($nr, "număr tricou", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($nr, "număr tricou", "danger");
			$resultTest = $validation->verifyInt(1, 99, $nr);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$fname = $_POST["fname"];
		if (empty($fname))  
		{
			$messageInput = $validation->inputMessage($fname, "nume", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 36, $fname);
			$messageInput = $validation->inputMessage($fname, "nume", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(1, 4, $fname);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului

			// Verificare nume
			$resultTestReg = $validation->verifyName($fname);
			if ($resultTestReg !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTestReg);
					$isError = true;
			}
		    // verificare nume
		}

		$lname = $_POST["lname"];
		if (empty($lname))  
		{
			$messageInput = $validation->inputMessage($lname, "prenume", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 36, $lname);
			$messageInput = $validation->inputMessage($lname, "prenume", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(1, 4, $lname);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului

			// Verificare nume
			$resultTestReg = $validation->verifyName($lname);
			if ($resultTestReg !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTestReg);
					$isError = true;
			}
		    // verificare nume
		}

		$nickName = $_POST["nickName"];
		if (empty($nickName))  
		{
			$messageInput = $validation->inputMessage($nickName, "nume de scenă", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 20, $nickName);
			$messageInput = $validation->inputMessage($nickName, "nume de scenă", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(1, 3, $nickName);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului

			// Verificare nume
			$resultTestReg = $validation->verifyName($nickName);
			if ($resultTestReg !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTestReg);
					$isError = true;
			}
		    // verificare nume
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

		$birthday = $_POST["birthday"];
		if (empty($birthday))  
		{
			$messageInput = $validation->inputMessage($birthday, "data de naștere", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($birthday, "data de naștere", "danger");
			$resultTest = $validation->verifyDateOfBirth(16, 45, $birthday);
			if ($resultTest !== "Success")
			{	
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$valueMarket = $_POST["valueMarket"];
		if (strlen($valueMarket) === 0) 
		{
			$messageInput = $validation->inputMessage($valueMarket, "cotă", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($valueMarket, "cotă", "danger");
			$resultTest = $validation->verifyFloat(0, 500, $valueMarket);
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$imgFlag = $_POST["imgFlag"];
		if (empty($imgFlag)) 
		{
			$messageInput = $validation->inputMessage($imgFlag, "nume pictogramă steag", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($imgFlag, "nume pictogramă steag", "danger");
			$resultTest = $validation->verifyImg($imgFlag);
			if ($resultTest !== "Success") 
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
		}

		$flag = $_POST["flag"];
		if (empty($flag))  
		{
			$messageInput = $validation->inputMessage($flag, "naționalitate", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 20, $flag);
			$messageInput = $validation->inputMessage($flag, "naționalitate", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(1, 3, $flag);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului

			// Verificare nume
			$resultTestReg = $validation->verifyName($flag);
			if ($resultTestReg !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTestReg);
					$isError = true;
			}
		    // verificare nume
		}

		$international = $_POST["international"];
		if (empty($international))  
		{
			$messageInput = $validation->inputMessage($international, "international", "danger");
			Messages::setMessage('danger', $messageInput . 'Jucătorul este sau nu international? Bifează casuța corespunzătoare.');
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($international, "international", "danger");
			$resultTest = $validation->verifyYesOrNo($international);
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
		Messages::setMessage('info', '<h4 class="font-weight-bold">Atenție!</h4>' . '<p class="h5">Modificările nu au fost efectuate. Erorile sunt afișate mai sus.</h5>');
		header('Location: view/AdminTeam.php');
    	exit;
	}
}

function update()
{
	$db = Db()->connection;
	$validation = new validationInput();
	
	$id = $_POST['id'];		
	$img1 = $validation->testInput($_POST['img1']);
	$img2 = $validation->testInput($_POST['img2']);
	$img3 = $validation->testInput($_POST['img3']);
	$nr = $validation->testInput($_POST['nr']);
	$fname = $validation->testInput($_POST['fname']);
	$lname = $validation->testInput($_POST['lname']);
	$nickName = $validation->testInput($_POST['nickName']);
	$role = $validation->testInput($_POST['role']);
	$birthday = $validation->testInput($_POST['birthday']);
	$valueMarket = $validation->testInput($_POST['valueMarket']);
	$imgFlag = $validation->testInput($_POST['imgFlag']);
	$flag = $validation->testInput($_POST['flag']);
	$international = $validation->testInput($_POST['international']);
	$season = $validation->testInput($_POST['season']);
	
	$id = mysqli_real_escape_string($db, $id);
	$img1 = mysqli_real_escape_string($db, $img1);
	$img2 = mysqli_real_escape_string($db, $img2);
	$img3 = mysqli_real_escape_string($db, $img3);
	$nr = mysqli_real_escape_string($db, $nr);
	$fname = mysqli_real_escape_string($db, $fname);
	$lname = mysqli_real_escape_string($db, $lname);
	$nickName = mysqli_real_escape_string($db, $nickName);
	$role = mysqli_real_escape_string($db, $role);
	$birthday = mysqli_real_escape_string($db, $birthday);
	$valueMarket = mysqli_real_escape_string($db, $valueMarket);
	$imgFlag = mysqli_real_escape_string($db, $imgFlag);
	$flag = mysqli_real_escape_string($db, $flag);
	$international = mysqli_real_escape_string($db, $international);
	$season = mysqli_real_escape_string($db, $season);

	$query = "UPDATE team SET img1 = '$img1', img2 = '$img2', img3 = '$img3', 
	nr = $nr, fname = '$fname', lname = '$lname', nickName = '$nickName', role = '$role', 
	birthday = '$birthday', valueMarket = $valueMarket, imgFlag = '$imgFlag', flag = '$flag', 
	international = '$international', season = '$season' 
	WHERE id = $id ";
		
	$result = mysqli_query($db, $query);

	if ($result === TRUE) 
	{
		Messages::setMessage('success', '<h5 class="font-weight-bold">Edit</h5>' . 'Modificările au fost finalizate cu succes!', true);
		header('Location: view/AdminTeam.php');
		exit;
	}
	else 
	{
		Messages::setMessage('danger', $query . ": " . $db->error, true);
		header('Location: view/AdminTeam.php');
		exit;
	} 

	$db->close();
}	

validation();
update();
