<?php
require_once 'bootloader.php';

function validation()
{
	$img = $titleArticle = $textArticle = $data = $linkArticle = $cover = "";
	$isError = false;

	$validation = new validationInput();

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$img = $_POST["img"];
		if (empty($img)) 
		{
			$messageInput = $validation->inputMessage($img, "numele imaginii", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($img, "numele imaginii", "danger");
			$resultTest = $validation->verifyImg($img);
			if($resultTest != "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;	
			}
		}

		$linkArticle = $_POST["linkArticle"];
		if (empty($linkArticle))  
		{
			$messageInput = $validation->inputMessage($linkArticle, "adresa URL", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($linkArticle, "adresa URL", "danger");
			$resultTest = $validation->verifyURL($linkArticle);
			if($resultTest != "Success")
			{
				Messages::setMessage('danger', $messageInput . $resultTest);
				$isError = true;	
			}
		}

		$titleArticle = $_POST["titleArticle"];
		if (empty($titleArticle))  
		{
			$messageInput = $validation->inputMessage($titleArticle, "titlul postării", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(15, 150, $titleArticle);
			$messageInput = $validation->inputMessage($titleArticle, "titlul postării", "danger"); 
			if ($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . 'Introdu un titlu sugestiv! ' . $resultTest . ' De asemenea, trebuie să fie format din cel puțin 2 cuvinte.');
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(2, 50, $titleArticle);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . 'Introdu un titlu sugestiv! ' . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului
		}

		$textArticle = $_POST["textArticle"];
		if (empty($textArticle))  
		{
			$messageInput = $validation->inputMessage($textArticle, "descrierea", "danger");
			Messages::setMessage('danger', $messageInput);
			$isError = true;
		}
		else
		{
			// Lungimea sirului
			$resultTest = $validation->inputLengthTest(45, 450, $textArticle);
			$messageInput = $validation->inputMessage($textArticle, "descrierea", "danger");
			if($resultTest !== "Success")
			{
				Messages::setMessage('danger', $messageInput . 'Introdu o descriere sugestivă! ' . $resultTest . ' De asemenea, trebuie să fie format din cel puțin 9 cuvinte.');
				$isError = true;
			}
			else
			{
				$resultTest = $validation->inputWordTest(9, 100, $textArticle);
				if ($resultTest !== "Success") 
				{
					Messages::setMessage('danger', $messageInput . 'Introdu o descriere sugestivă! ' . $resultTest);
					$isError = true;
				}
			}
			// Lungimea sirului
		}

		$cover = $_POST["cover"];
		if (empty($cover))  
		{
			$messageInput = $validation->inputMessage($cover, "articol de copertă", "danger");
			Messages::setMessage('danger', $messageInput . 'Bifează căsuța corespunzătoare.');
			$isError = true;
		}
		else
		{
			$messageInput = $validation->inputMessage($cover, "international", "danger");
			$resultTest = $validation->verifyYesOrNo($cover);
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
		header('Location: view/AdminNews.php');
    	exit;
	}
}

function update()
{
	$db = Db()->connection;
	$validation = new validationInput();
	
	$id = $_POST['id'];		
	$img = $validation->testInput($_POST['img']);
	$titleArticle = $validation->testInput($_POST['titleArticle']);
	$textArticle = $validation->testInput($_POST['textArticle']);
	$cover = $validation->testInput($_POST['cover']);
	$linkArticle = $validation->testInput($_POST['linkArticle']);
	
	$id = mysqli_real_escape_string($db, $id);
	$img = mysqli_real_escape_string($db, $img);
	$titleArticle = mysqli_real_escape_string($db, $titleArticle);
	$textArticle = mysqli_real_escape_string($db, $textArticle);
	$cover = mysqli_real_escape_string($db, $cover);
	$linkArticle = mysqli_real_escape_string($db, $linkArticle);

	date_default_timezone_set('Europe/Athens');
	$data = date("Y-m-d H-i-s");

	$query = "UPDATE news SET img = '$img', titleArticle = '$titleArticle', 
	textArticle = '$textArticle', linkArticle = '$linkArticle', data = '$data', 
	cover = '$cover' WHERE id = $id ";
		
	$result = mysqli_query($db, $query);

	if ($result === TRUE) 
	{
		Messages::setMessage('success', '<h5 class="font-weight-bold">Edit</h5>' . 'Modificările au fost finalizate cu succes!', true);
		header('Location: view/AdminNews.php');
		exit;
	}
	else 
	{
		Messages::setMessage('danger', $query . ": " . $db->error, true);
		header('Location: view/AdminNews.php');
		exit;
	} 

	$db->close();
}	

validation();
update();
