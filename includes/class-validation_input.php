<?php

class validationInput
{
	public $min_length, $max_length, $min_nr, $max_nr, $input_test, $input_name, $type_error, $start, $text;

	public function testInput($input) 
	{
		$this->input_test = $input;
	 	$this->input_test = trim($this->input_test);
	  	$this->input_test = stripslashes($this->input_test);
	  	$this->input_test = htmlspecialchars($this->input_test);
	  	return $this->input_test;
	}

	public function inputLengthTest($min, $max, $input)
	{
		$this->min_length = $min;
		$this->max_length = $max;
		$this->input_test = $input;
		if ((strlen($this->input_test) < $this->min_length) OR (strlen($this->input_test) > $this->max_length)) 
		{
			return "Trebuie să conțină cel puțin " . $this->min_length .  " caractere și cel mult " . $this->max_length . " de caractere.";
		}
		else
		{
			return "Success";
		}
	}

	public function inputWordTest($min, $max, $input)
	{
		$this->min_length = $min;
		$this->max_length = $max;
		$this->input_test = $input;
		if ((str_word_count($this->input_test) < $this->min_length) OR (str_word_count($this->input_test) > $this->max_length))  
		{
			return "Trebuie să conțină cel puțin " . $this->min_length .  " cuvinte și cel mult " . $this->max_length . " cuvinte.";
		}
		else
		{
			return "Success";
		}
	}

	public function inputMessage($input, $inputName, $type)
	{
		$this->input_test = $input;
		$this->input_name = $inputName;
		$this->type_error = $type;
		if (!empty($this->input_test) OR $this->input_test !== 0)
		{	
			if ($this->type_error === "danger")
			{
				$message = '<h5>' . 'Câmp necompletat corect: ' . '<span class="font-weight-bold">' . $this->input_name . '</span>' . '.' . '</h5>';
			}
			elseif ($this->type_error === "info")
			{
				$message = '<h4 class="font-weight-bold">Notă!</h4>' . '<h5>Câmpul nu este obligatoriu: <span class="font-weight-bold">' . $this->input_name . '</span></h5>';
			}
		}
		else
		{
			$message = '<h5>' . 'Câmp necompletat: ' . '<span class="font-weight-bold">' . $this->input_name . '</span>' . '.' . '</h5>';	
		}
		return $message;
	}

	public function verifyImg($input)
	{
		$this->input_test = $input;
		$messageError = "Success";

		$verifyLength = $this->inputLengthTest(5, 36, $this->input_test);
		if ($verifyLength !== "Success")
		{
			return $verifyLength;
		}
		else
		{
			// Continutul sirului
			if((substr_count($this->input_test, " ") > 0) OR (substr_count($this->input_test, ".") !== 1))
			{
				$messageError = "Numele imaginii trebuie să fie scris astfel: nume.extensie, sunt permise doar litere, cifre și/sau underscore. (Ex: liverpool_01.jpg)";
			}
			else
			{
				// extension
				$punct = strpos($this->input_test, ".");
				$extPos = $punct + 1;
				$extens_name = substr($this->input_test, $extPos);
				$valid = FALSE;
				$verifyLength = $this->inputLengthTest(3, 4, $extens_name);
				switch ($extens_name) 
					{
						case 'jpg':
							$valid = TRUE;
							break;
						case 'jpeg':
							$valid = TRUE;
							break;
						case 'png':
							$valid = TRUE;
							break;
						case 'ico':
							$valid = TRUE;
							break;
						default:
							$valid = FALSE;
							break;
					}
				// name
				

				// Verificare extensiei
				if($verifyLength !== "Success")
				{
					$messageError = "Introdu corect numele extensiei! (png, jpg, ico sau jpeg).";
				}
				elseif($valid === FALSE)
				{
					$messageError = "Introdu corect numele extensiei! (png, jpg, ico sau jpeg).";
				}
				// Verificare extensiei
				else
				{
				$this->input_test = $input;
				$extens = substr($this->input_test, $punct);
				$name_count = strlen($this->input_test) - strlen($extens);
				$name_img = substr($this->input_test, 0, $name_count);
				$pattern = "/^[a-zA-Z0-9_]*$/";
					// Verificare numelui
					if (!preg_match($pattern, $name_img)) 
					{
						$messageError = "Introdu corect numele imaginii (ex: liverpool_02a), sunt permise doar litere, cifre și/sau underscore.";

					}
					// Verificare numelui
				}

			}
			// Continutul sirului

			return $messageError;
		}

	}

	public function verifyURL($input)
	{
		$this->input_test = $input;

		if (!filter_var($this->input_test, FILTER_VALIDATE_URL)) 
		{
		 	$messageError = "Introdu o adresă URL validă.";
		}
		else
		{
			$messageError = "Success";
		}

		return $messageError;
	}

	public function verifyEmail($input)
	{
		$this->input_test = $input;
		$pattern = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";

		if(preg_match($pattern, $this->input_test) && filter_var($this->input_test, FILTER_VALIDATE_EMAIL))
		{
			$messageError = "Success";
		}
		else
		{
			$messageError = "Introdu o adresă de email validă.";
		}

		return $messageError;
	}

	public function verifyPassword($input)
	{
		$this->input_test = $input;
		$pattern = "/^(?=.*[!@#$%^&*-+])(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{6,36}$/";

		if(preg_match($pattern, $this->input_test))
		{
			$messageError = "Success";
		}
		else
		{
			$messageError = "Parola trebuie să fie formată din: o literă mică, o majusculă, o cifră, un simbol(!@#$%^&*+-) și să conțină între 6 și 36 de caractere.";
		}

		return $messageError;
	}

	public function verifyPhone($input)
	{
		$this->input_test = $input;
		$phone = filter_var($this->input_test, FILTER_SANITIZE_NUMBER_INT);
		$pattern = "/^[0-9\-\+]*$/";

		if(preg_match($pattern, $phone))
		{
			$messageError = "Success";
		}
		else
		{
			$messageError = "Numărul de telefon a fost introdus greșit.";
		}
		
		return $messageError;
	}

	public function verifyName($input)
	{
		$this->input_test = $input;
		$pattern = "/^([a-zA-Z'ăîșțâĂÎȘȚÂ -]+)$/";

		if (preg_match($pattern, $this->input_test)) 
		{
		 	$messageError = "Success";
		}
		else
		{
			$messageError =  "Sunt permise doar litere ale alfabetului român și " . "accent grav ( ' )" . " , acestea pot fi separate prin " . "-" . " sau spațiu alb.";
		}

		return $messageError;
	}

	public function verifyGender($input)
	{
		$this->input_test = $input;

		switch ($this->input_test) 
		{
			case 'male':
				$messageError = "Success";
				break;
			case 'female':
				$messageError = "Success";
				break;
			case 'unspecified':
				$messageError = "Success";
				break;
			default:
				$messageError = "Date invalide!";
				break;
		}

		return $messageError;
	}

	public function verifyKey($input)
	{
		$this->input_test = $input;

		if($this->input_test === 'liverpool19')
		{
			$messageError = "Success";
		}
		else
		{
			$messageError = "Trebuie să introduci o cheie de admnistrator validă!";
		}

		return $messageError;
	}

	public function verifyClub($input)
	{
		$this->input_test = $input;
		$messageError = "Success";
		$pattern = "/^[a-zA-Z0-9 -.`]*$/";
		if (!preg_match($pattern, $this->input_test)) 
		{
		 	$messageError =  "Sunt permise litere, cifre, " . "accent grav ( ` )" . " cratimă ( - )" . " , punct ( . )" . " sau spațiu alb (  ).";
		}

		return $messageError;
	}

	public function verifyRole($input)
	{
		$this->input_test = $input;
		$statusArray = array("goalkeeper", "defender", "midfielder", "forward");
		$messageError = "Date invalide! Trebuuie să alegi una dintre cele 4 opțiuni!";

		if(in_array($this->input_test, $statusArray))
		{
			$messageError = "Success";
		}

		return $messageError;
	}

	public function verifyStatusTransfer($input)
	{
		$this->input_test = $input;
		$statusArray = array("departure", "arrival", "in-loan", "on-loan");
		$messageError = "Date invalide! Trebuuie să alegi una dintre cele 4 opțiuni!";

		if(in_array($this->input_test, $statusArray))
		{
			$messageError = "Success";
		}

		return $messageError;
	}

	public function verifyStatusMatch($input)
	{
		$this->input_test = $input;
		$statusArray = array("disputed", "scheduled", "postponed");
		$messageError = "Date invalide! Trebuuie să alegi una dintre cele 3 opțiuni!";

		if(in_array($this->input_test, $statusArray))
		{
			$messageError = "Success";
		}

		return $messageError;
	}

	public function verifyYesOrNo($input)
	{
		$this->input_test = $input;
		$validArray = array("yes", "no");
		$messageError = "Date invalide! Trebuuie să bifezi una dintre cele 2 opțiuni!";

		$length = $this->inputLengthTest(2, 3, $this->input_test);
		if ($length === "Success")
		{
			if (in_array($this->input_test, $validArray))
			{
				$messageError = "Success";
			}
		}

		return $messageError;
	}

	public function verifyDateOfBirth($min, $max, $input)
	{
		$this->input_test = $input;
		$this->min_age = $min;
		$this->max_age = $max;

		$length = $this->inputLengthTest(10, 10, $this->input_test);
		if ($length !== "Success")
		{
			$messageError = "Date invalide!";
		}
		else
		{
			$today = date("Y-m-d");
			$diff = date_diff(date_create($this->input_test), date_create($today));
			$age = $diff->format('%y');

			if($age < $this->min_age)
			{
				$messageError = "Vârsta minimă acceptată este de " . $this->min_age . " ani! Iar vârsta maximă acceptată este de " . $this->max_age . " ani!";
			}
			else
			{
				if($age >= $this->max_age)
				{
					$messageError = "Vârsta minimă acceptată este de " . $this->min_age . " ani! Iar vârsta maximă acceptată este de " . $this->max_age . " ani!";
				}
				else 
				{
					$messageError = "Success";
				}
			}
		}

		return $messageError;
	}

	public function verifyDateTransfer($input)
	{
		$this->input_test = $input;
		$yearCurrent = date("y");
		$year = substr($yearCurrent, 1);
		$mil = substr($yearCurrent, 0, 1);
		$pattern ="/^(201[5-9]|20[2-$mil][0-$year])-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
		$messageError = "Date invalide!";

		$length = $this->inputLengthTest(10, 10, $this->input_test);
		if ($length !== "Success")
		{
			$messageError = "Date invalide!";
		}
		else
		{
			if (preg_match($pattern, $this->input_test))
			{
				$messageError = "Success";
			}
			else
			{
				$messageError = "Data la care s-a efectuat transferul a fost introdusă greșit! Sunt permise transferuri începând cu anul 2015 și până în anul curent.";
			}
		}

		return $messageError;
	}

	public function verifyMatchDay($input)
	{
		$this->input_test = $input;
		$yearCurrent = date("y");
		$yearMax = date("Y");
		$yearMax +=1;
		$year = substr($yearCurrent, 1);
		$yearS = $year + 1;
		$mil = substr($yearCurrent, 0, 1);
		if ($year == 9)
		{
			$mil+=1;
		}
		$pattern ="/^(2019|20[2-$mil][0-$yearS])-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
		$messageError = "Date invalide!";

		$length = $this->inputLengthTest(10, 10, $this->input_test);
		if ($length !== "Success")
		{
			$messageError = "Date invalide!";
		}
		else
		{
			if (preg_match($pattern, $this->input_test))
			{
				$messageError = "Success";
			}
			else
			{
				$messageError = "Data disputări meciului a fost introdusă greșit! Nu sunt permise meciuri jucate înainte de anul 2019 sau după anul " . $yearMax . ".";
			}
		}

		return $messageError;
	}

	public function verifySezon($input, $start, $text)
	{
		$this->input_test = $input;
		$this->start = $start;
		$this->text = $text;
		$yearCurrent = date("y");
		$year = substr($yearCurrent, 1, 1);
		$mil = substr($yearCurrent, 0, 1);
		$milS = $mil + 1;
		$yearS = $year + 1;
		$start = substr($this->input_test, 0, 4);
		$end = substr($this->input_test, 5, 9);
		$diff = $end - $start;
		$pattern = "/^(201[$this->start]|20[2-$mil][0-$year])-(201[$this->start]|20[2-$milS][0-$yearS])$/";

		$length = $this->inputLengthTest(9, 9, $this->input_test);
		if ($length !== "Success")
		{
			$messageError = "Date invalide! Sezonul competițional trebuie scris de forma: Y-Y+1 (exemplu 2019-2020).";
		}
		else
		{
			if (preg_match($pattern, $this->input_test))
			{
				if ($diff === 1)
				{
					$messageError = "Success";
				}
				else
				{
					$messageError = "Nu există sezonul competioțional pe care la-i introdus! Introdu un sezon valid.";
				}
			}
			else
			{
				$messageError = "Date invalide! Sezonul competițional trebuie scris de forma: Y-Y+1 (exemplu 2021-2022). " . $this->text;
			}
		}

		return $messageError;
	}

	public function verifyInt($min, $max, $input)
	{
		$this->min_nr = $min;
		$this->max_nr = $max;
		$this->input_test = $input;
		$intval = array("options" =>
		 array("min_range" => $this->min_nr,
		  "max_range" => $this->max_nr)
		);
		if (strlen($this->input_test) < 11)
		{
			if ($this->input_test == 0)
			{
				$messageError = "Success";
			}
			else
			{
				if (filter_var($this->input_test, FILTER_VALIDATE_INT, $intval))
				{
					$messageError = "Success";
				}
				else
				{
					$messageError = "Numărul trebuie să fie întreg și să fie cuprins în intervalul " . $this->min_nr . " și " . $this->max_nr . ".";
				}
			}
		}
		else
		{
			$messageError = "Numărul trebuie să fie întreg și să fie cuprins în intervalul " . $this->min_nr . " și " . $this->max_nr . ".";
		}

		return $messageError;
	}

	public function verifyFloat($min, $max, $input)
	{
		$this->min_nr = $min;
		$this->max_nr = $max;
		$this->input_test = $input;
		if (strlen($this->input_test) < 11)
		{
			if ($this->input_test == 0)
			{
				$messageError = "Success";
			}
			else
			{
				if (filter_var($this->input_test, FILTER_VALIDATE_FLOAT))
				{
					if (($this->input_test < $this->min_nr) OR ($this->input_test > $this->max_nr))
					{
						$messageError = "Numărul trebuie să fie real și să fie cuprins în intervalul " . $this->min_nr . " și " . $this->max_nr . ".";
					}
					else
					{
						$messageError = "Success";
					}
				}
				else
				{
					$messageError = "Numărul trebuie să fie real și să fie cuprins în intervalul " . $this->min_nr . " și " . $this->max_nr . ".";
				}
			}
		}
		else
		{
			$messageError = "Numărul trebuie să fie real și să fie cuprins în intervalul " . $this->min_nr . " și " . $this->max_nr . ".";
		}

		return $messageError;
	}
}
