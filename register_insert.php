<?php
require_once 'bootloader.php';

function validation()
{
	$fName = $lName = $dateOfBirth = $country = $city = $gender = $emailAddress =
	$phoneNumber = $password = $confirmPassword = $role = $verificationKey = "";
	$isError = false;

	$validation = new validationInput();

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		// Verificare nume
		$fName = $_POST["fName"];
		if (empty($fName))  
		{
			$messageInput = $validation->inputMessage($fName, "nume", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 25, $fName);
			$messageInput = $validation->inputMessage($fName, "nume", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				// Numărul de cuvinte
				$resultTest = $validation->inputWordTest(1, 3, $fName);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
				else
				{
					// Verificare conțintul șirului
					$resultTestReg = $validation->verifyName($fName);
					if ($resultTestReg !== "Success")
					{
						Messages::setMessage('danger', $messageInput . $resultTestReg);
							$isError = true;
					}
				    // verificare conțintul șirului
				}
				// Numărul de cuvinte
			}
			// Lungimea sirului
		}
		// Verificare nume

		// Verificare prenume
		$lName = $_POST["lName"];
		if (empty($lName))  
		{
			$messageInput = $validation->inputMessage($lName, "prenume", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 30, $lName);
			$messageInput = $validation->inputMessage($lName, "prenume", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				// Numărul de cuvinte
				$resultTest = $validation->inputWordTest(1, 3, $lName);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
				else
				{
					// verificare conțintul șirului
					$resultTestReg = $validation->verifyName($lName);
					if ($resultTestReg !== "Success")
					{
						Messages::setMessage('danger', $messageInput . $resultTestReg);
							$isError = true;
					}
				    // verificare conțintul șirului
				}
				// Numărul de cuvinte
			}
			// Lungimea sirului
		}
		// Verificare nume

		// Verificare data de naștere
		$dateOfBirth = $_POST["dateOfBirth"];
		if (empty($dateOfBirth))  
		{
			$messageInput = $validation->inputMessage($dateOfBirth, "data de naștere", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Verificare vârstă
			$messageInput = $validation->inputMessage($dateOfBirth, "data de naștere", "danger");
			$resultTest = $validation->verifyDateOfBirth(13, 95, $dateOfBirth);
			if ($resultTest !== "Success")
			{	
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			// Verificare vârstă
		}
		// Verificare data de naștere

		// Verificare țară
		$country = $_POST["country"];
		if (empty($country))  
		{
			$messageInput = $validation->inputMessage($country, "țară", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 25, $country);
			$messageInput = $validation->inputMessage($country, "țară", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				// Numărul de cuvinte
				$resultTest = $validation->inputWordTest(1, 3, $country);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
				else
				{
					// verificare conțintul șirului
					$resultTestReg = $validation->verifyName($country);
					if ($resultTestReg !== "Success")
					{
						Messages::setMessage('danger', $messageInput . $resultTestReg);
							$isError = true;
					}
				    // verificare conțintul șirului
				}
				// Numărul de cuvinte
			}
			// Lungimea sirului
		}
		// Verificare țară

		// Verificare localitate
		$city = $_POST["city"];
		if (empty($city))  
		{
			$messageInput = $validation->inputMessage($city, "localitate", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(3, 30, $city);
			$messageInput = $validation->inputMessage($city, "localitate", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				// Numărul de cuvinte
				$resultTest = $validation->inputWordTest(1, 4, $city);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
				else
				{
					// verificare conțintul șirului
					$resultTestReg = $validation->verifyName($city);
					if ($resultTestReg !== "Success")
					{
						Messages::setMessage('danger', $messageInput . $resultTestReg);
							$isError = true;
					}
				    // verificare conțintul șirului
				}
				// Numărul de cuvinte
			}
			// Lungimea sirului
		}
		// Verificare localitate

		// Verificare gen
		$gender = $_POST['gender'];
		if(empty($gender))
		{
			$messageInput = $validation->inputMessage($gender, "gen", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(4, 11, $gender);
			$messageInput = $validation->inputMessage($gender, "gen", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			else
			{
				// Numărul de cuvinte
				$resultTest = $validation->inputWordTest(1, 1, $gender);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . $resultTest);
					$isError = true;
				}
				else
				{
					// verificare conțintul șirului
					$resultTestReg = $validation->verifyGender($gender);
					if ($resultTestReg !== "Success")
					{
						Messages::setMessage('danger', $messageInput . $resultTestReg);
							$isError = true;
					}
				    // verificare conțintul șirului
				}
				// Numărul de cuvinte
			}
			// Lungimea sirului
		}
		// Verificare gen	

		// Verificare Email
		$emailAddress = $_POST['emailAddress'];
		if(empty($emailAddress))
		{
			$messageInput = $validation->inputMessage($emailAddress, "adresa de email", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Validare email
			$resultTest = $validation->verifyEmail($emailAddress);
			if($resultTest !== "Success")
			{
				$messageInput = $validation->inputMessage($emailAddress, "adresa de email", "danger");
				Messages::setMessage("danger", $messageInput . $resultTest);
				$isError = true;
			}
			// Validare email
		}
		// Verificare Email

		// Verificare telefon
		$phoneNumber = $_POST['phoneNumber'];
		if(empty($phoneNumber))
		{
			$messageInput = $validation->inputMessage($phoneNumber, "număr de telefon", "danger");
			Messages::setMessage("danger", $messageInput);
			$isError = true;
		}
		else
		{
			// Validare telefon
			$resultTest = $validation->verifyPhone($phoneNumber);
			if($resultTest !== "Success")
			{
				$messageInput = $validation->inputMessage($phoneNumber, "număr de telefon", "danger");
				Messages::setMessage("danger", $messageInput . $resultTest);
				$isError = true;
			}
			// Validare telefon			
		}	
		// Verificare telefon

		// Verificare parolă
		$password = $_POST['password'];
		if(empty($password))
		{
			$messageInput = $validation->inputMessage($password, "parolă", "danger");
			Messages::setMessage("danger", $messageInput);
			$isError = true;
		}
		else
		{
			// Validare parolă
			$messageInput = $validation->inputMessage($password, "parolă", "danger");
			$resultTest = $validation->verifyPassword($password);
			if($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;
			}
			// Validare parolă
		}
		// Verificare parolă

		// Verificare confirmare parolă
		$confirmPassword = $_POST['confirmPassword'];
		if(empty($confirmPassword) || $confirmPassword !== $password)
		{
			$messageInput = $validation->inputMessage($password, "confirmare parolă", "danger");
			Messages::setMessage("danger", $messageInput . "Trebuie să introduci aceași parolă!");
			$isError = true;
		}
		// Verificare confirmare parolă

		// Verificare cheie de admin
		$role = $_POST['role'];
		if($role === "admin")
		{
			$verificationKey = $_POST['verificationKey'];
			$resultTest = $validation->verifyKey($verificationKey);
			if($resultTest !== "Success")
			{
				$messageInput = $validation->inputMessage($verificationKey, "cod de verificare", "danger");
				Messages::setMessage("danger", $messageInput . $resultTest);
				$isError = true;
			}
		}
		// Verificare cheie de admin
	}
	else
	{
		Messages::setMessage('danger', 'A apărut o eroare la metoda de trimitere a formularului!');
		$isError = true;
	}

	if($isError === true)
	{
		header('Location: view/contNou.php');
		exit;
	}
}

function insert()
{
	$db = Db()->connection;
	$validation = new validationInput();

	$fName = $validation->testInput($_POST['fName']);
	$lName = $validation->testInput($_POST['lName']);
	$dateOfBirth = $validation->testInput($_POST['dateOfBirth']);
	$country = $validation->testInput($_POST['country']);
	$city = $validation->testInput($_POST['city']);
	$gender = $validation->testInput($_POST['gender']);
	$emailAddress = $validation->testInput($_POST['emailAddress']);
	$phoneNumber = $validation->testInput($_POST['phoneNumber']);
	$password = $validation->testInput($_POST['password']);
	$role = $validation->testInput($_POST['role']);
	$verificationKey = $validation->testInput($_POST['verificationKey']);

	$fName = mysqli_real_escape_string($db, $fName);
	$lName = mysqli_real_escape_string($db, $lName);
	$dateOfBirth = mysqli_real_escape_string($db, $dateOfBirth);
	$country = mysqli_real_escape_string($db, $country);
	$cty = mysqli_real_escape_string($db, $cty);
	$gender = mysqli_real_escape_string($db, $gender);
	$emailAddress = mysqli_real_escape_string($db, $emailAddress);
	$phoneNumber = mysqli_real_escape_string($db, $phoneNumber);
	$password = mysqli_real_escape_string($db, $password);
	$role = mysqli_real_escape_string($db, $role);
	$verificationKey = mysqli_real_escape_string($db, $verificationKey);

	$password = md5($password);
	date_default_timezone_set('Europe/Athens');
	$dateOfRegister = date("Y-m-d H-i-s");
	$phoneNumber = filter_var($phoneNumber, FILTER_SANITIZE_NUMBER_INT);

	if($role != 'admin')
	{
		$role = 'user';
	}

	if(empty($verificationKey))
	{
		$verificationKey = "standard";
	}

	$query = "INSERT INTO users (fName, lName, dateOfBirth, country, city, gender, 
									emailAddress, phoneNumber, password, role, verificationKey, dateOfRegister) VALUES 
									('$fName', '$lName', '$dateOfBirth', '$country', '$city', 
									'$gender', '$emailAddress', '$phoneNumber', '$password', 
									'$role', '$verificationKey', '$dateOfRegister')";

	$result = mysqli_query($db, $query);

	if($result === TRUE)
	{
		Messages::setMessage('success', '<h5 class="font-weight-bold">Iți mulțumim că ni te-ai alăturat!</h5>', true);
		header('Location: view/contExistent.php');
		exit;
	}
	else
	{
		Messages::setMessage('danger', $query . ": " . $db->error, true);
		header('Location: view/contNou.php');
		exit;
	}

	$db->close();
}

validation();
insert();
