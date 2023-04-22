<?php
function site_url()
{
	return sprintf
	(
	    "%s://%s/Liverpool",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME']
  	);
}

function site_img()
{
	return sprintf
	(
	    "%s://%s/Liverpool/img",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME']
  	);
}

function print_notices() {
	if (Messages::getMessages()):
		foreach (Messages::getMessages() as $message):
			echo '<div class="alert alert-' . $message['code'] . '">' . $message['message'] . '</div>';
		endforeach;
		Messages::clearMessages();
	endif;
}

function alertInfo($valueReturn, $message)
{
	$alert = 'info';
	$border = 'borderAlertInfo';
	$icon = '<i class="fas fa-2x fa-info-circle iconAertInfo"></i>';
	$titleStyle = 'titlteAlertInfo';
	$textStyle = 'textAlertInfo';
	$title = "atenție";
	$text = $message;

	switch ($valueReturn) 
	{
		case 'alert':
			return $alert;
			break;
		case 'border':
			return $border;
			break;
		case 'icon':
			return $icon;
			break;
		case 'titleStyle':
			return $titleStyle;
			break;
		case 'textStyle':
			return $textStyle;
			break;
		case 'title':
			return $title;
			break;
		case 'text':
			return $text;
			break;
	}
}

function alert($typeAlert, $valueReturn, $message)
{

	switch ($typeAlert) 
	{
		case 'info':
			$alert = alertInfo($valueReturn, $message);
			break;

	}

	return $alert;
}

function thisYear()
{
	date_default_timezone_set('Europe/Athens');
	$year = date("Y");
	return $year;
}

function thisMonth()
{
	date_default_timezone_set('Europe/Athens');
	$month = date("M");
	return $month;
}
function navsStatusActiveYear($status)
{
	$year = thisYear(); 
	if ($year == $status) 
	{
		echo "active";	
	}
	else
	{
		echo "";
	}
}
function navsStatusActive($status)
{
	$month = thisMonth(); if($month == $status) { echo "active";} else {echo ""; }
}
function navsStatusTrue($status)
{
	$month = thisMonth(); if($month == $status) { echo "true";} else {echo "false"; }	
}
function tabsStatus($status)
{
	$month = thisMonth(); if($month == $status) { echo "show active";} else {echo ""; }	
}
function dataOra()
{
	date_default_timezone_set('Europe/Athens');
	$dataOra = date("Y-m-d H-i-s");
	return $dataOra;
}

function myGender($gender)
{
  switch($gender)
  {
    case 'male':
      $myGender = "masculin";
      break;
    case 'female':
      $myGender = "feminin";
      break;
    default:
      $myGender = "nespecificat";
      break;
  }

  return $myGender;
} 

function myGenderIcon($gender)
{
	$genderIcon = ($gender == 'male' || $gender == 'masculin') ? $genderIcon = 'mars' : $genderIcon = 'venus';

	return $genderIcon;
}

function myPhoneNumber($phoneNumber)
{
	return substr($phoneNumber, 0, 4) . ' ' . substr($phoneNumber, 4, 2) . ' ' .
	 substr($phoneNumber, 6, 2) . ' ' . substr($phoneNumber, 8, 2);
}

function myRole($role)
{
	switch ($role) 
	{
	 	case 'user':
	 		$myRole = 'utilizator';
	 		break;
	 	case 'admin':
	 		$myRole = 'administrator';
	 		break;
	 	default:
	 		$myRole = $role;
	 		break;
	 }

	 return $myRole; 
}
