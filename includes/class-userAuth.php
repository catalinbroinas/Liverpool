<?php

class userAuth
{
	private $entry, $invokeFuction, $isAuth, $par1, $pageTitle, $role, $shortName;
	private $adminPage = array(
		"Administrare Calendar",
		"Administrare Clasament",
		"Administrare Noutăți",
		"Administrare Echipă",
		"Administrare Transferuri"
	);
	private $notAuthPage = array("Cont Nou", "Cont Existent");

	private function dbConnection()
	{
		if (isset($_SESSION['emailAddress']))
		{
			$db = Db()->connection;
		  	$emailAuth = $_SESSION['emailAddress'];

		  	$query = "SELECT * FROM users WHERE emailAddress = '$emailAuth'";
		  	$result = $db->query($query);

		  	if ($result->num_rows == 1) 
		  	{
		    	$row = $result->fetch_assoc();
		    }

		    return $row;
		}
	}

	private function getUserDates($entry)
	{
		$this->entry = $entry;
		$row = $this->dbConnection();
		
		switch ($this->entry) 
		{
	    	case 'firstName':
	    		$entryRequested = $row['fName'];
	    		break;
	    	case 'lastName':
	    		$entryRequested = $row['lName'];
	    		break;
	    	case 'dateOfBirth':
	    		$entryRequested = $row['dateOfBirth'];
	    		break;
	    	case 'dateOfRegister':
	    		$entryRequested = $row['dateOfRegister'];
	    		break;
	    	case 'country':
	    		$entryRequested = $row['country'];
	    		break;
	    	case 'city':
	    		$entryRequested = $row['city'];
	    		break;
	    	case 'gender':
	    		$entryRequested = $row['gender'];
	    		break;
	    	case 'emailAddress':
	    		$entryRequested = $row['emailAddress'];
	    		break;
	    	case 'phoneNumber':
	    		$entryRequested = $row['phoneNumber'];
	    		break;
	    	case 'role':
	    		if (isset($_SESSION['emailAddress']))
				{
	    			$entryRequested = $row['role'];
	    		}
	    		else
	    		{
	    			$entryRequested = 'notAuth';
	    		}
	    		break;
	    	case 'verificationKey':
	    		$entryRequested = $row['verificationKey'];
	    		break;
	    	case 'userId':
	    		$entryRequested = $row['id'];
	    		break;
	    	default:
	    		$entryRequested = "Solicitare invalidă!";
	    		break;
	    }

		return $entryRequested;
	}

	private function authAccess($pageTitle)
	{
		$this->pageTitle = $pageTitle;
		$this->role = $this->getUserDates('role');

		if (!isset($_SESSION['emailAddress'])) 
		{
	    	header('Location: contExistent.php');
	  	}
	  	else
	  	{
	    	 if(in_array($this->pageTitle, $this->adminPage))
	    	 {
	    	 	if($this->role != 'admin')
	    	 	{
	    	 		header('Location: myAccount.php');
	    	 	}
	    	 }
	  	}
	  	
	  	if (isset($_GET['logout'])) 
	  	{
	    	session_destroy();
	    	unset($_SESSION['emailAddress']);
	    	header("location: contExistent.php");
	  	}
	}

	private function authNavbar($role)
	{
		if (isset($_SESSION['emailAddress']))
		{
			$this->isAuth = $role;
		}
		else
		{
			$this->isAuth = 'none';
		}

		return $this->isAuth;
	}

	private function getAuthName()
	{
		$row = $this->dbConnection();
		$fname = $row['fName'];
		$lname = $row['lName'];

		if(str_word_count($fname) > 1)
		{
			$fName = explode(" ", $fname);
			$firstName = $fName[0];

			if(str_contains($firstName, "-"))
			{
				$fName = explode("-", $firstName);
				$firstName = $fName[0];
			}
			else
			{
				$firstName = $fName[0];
			}
		}
		else
		{
			if(str_contains($fname, "-"))
			{
				$fName = explode("-", $fname);
				$firstName = $fName[0];
			}
			else
			{
				$firstName = $fname;
			}
		}

		if(str_word_count($lname) > 1)
		{
			$lName = explode(" ", $lname);
			$lastName = $lName[0];

			if(str_contains($lastName, "-"))
			{
				$lName = explode("-", $lastName);
				$lastName = $lName[0];
			}
			else
			{
				$lastName = $lName[0];
			}
		}
		else
		{
			if(str_contains($lname, "-"))
			{
				$lName = explode("-", $lname);
				$lastName = $lName[0];
			}
			else
			{
				$lastName = $lname;
			}
		}

		$name = $lastName . " " . $firstName;

		return $name;
	}

	private function getShortName($shortName)
	{
		$this->shortName = $shortName;
		$name = explode(" ", $this->getAuthName());
		$firstName = $name[1];
		$lastName = $name[0];

		switch ($this->shortName) 
		{
			case 'firstName':
				return $firstName;
				break;
			case 'lastName':
				return $lastName;
				break;
			default:
				return "utilizator";
				break;
		}
	}

	public function callFunction($invokeFuction, $par1 = "")
	{
		$this->invokeFuction = $invokeFuction;
		$this->par1 = $par1;

		switch ($this->invokeFuction) 
		{
			case 'authAccess':
				return $this->authAccess($this->par1);
				break;
			case 'authNavbar':
				return $this->authNavbar($this->par1);
				break;
			case 'getUserDates':
				return $this->getUserDates($this->par1);
				break;
			case 'getAuthName':
				return $this->getAuthName();
				break;
			case 'getShortName':
				return $this->getShortName($this->par1);
				break;	
			default:
				return "Solicitare invalidă!";
				break;
		}
	}
}
