<?php
require_once 'bootloader.php';

function validation()
{
	$emailAddress = $password = "";
	$isError = false;

	$validation = new validationInput();

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
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
				Messages::setMessage('danger', $messageInput . "Parola a fost introdusă greșit!");
				$isError = true;
			}
			// Validare parolă
		}
		// Verificare parolă
	}
	else
	{
		Messages::setMessage('danger', 'A apărut o eroare la metoda de trimitere a formularului!');
		$isError = true;
	}

	if($isError === true)
	{
		header('Location: view/contExistent.php');
		exit;
	}
}

function userLogin()
{
	$db = Db()->connection;
	$validation = new validationInput();

	$emailAddress = $validation->testInput($_POST['emailAddress']);
	$password = $validation->testInput($_POST['password']);

	$emailAddress = mysqli_real_escape_string($db, $emailAddress);
	$password = mysqli_real_escape_string($db, $password);

	$password = md5($password);

    $query = "SELECT * FROM users WHERE emailAddress = '$emailAddress' AND password = '$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) 
    {
        $_SESSION['emailAddress'] = $emailAddress;
        header('location: view/myAccount.php');
    } 
    else
    {
        Messages::setMessage('danger', 'Adresă de email sau parolă greșită!.');
        header('Location: view/contExistent.php');
        exit;
    }

    
}

validation();
userLogin();
