<?php
require_once 'bootloader.php';

$db= Db()->connection;

$query = "DELETE FROM clasament WHERE id = ".$_GET['id'];
$result = mysqli_query($db, $query);

if ($result === TRUE) 
{
	$db->close();
   	 Messages::setMessage('success', '<h5 class="font-weight-bold">Delete</h5>' . 'Modificarea a fost finalizată cu succes!');
   	 header('Location: view/AdminClasament.php');
   	 exit;
}
else 
{
	$db->close();
   	hMessages::setMessage('danger',  $query . ": " . $db->error );
    header('Location: view/AdminClasament.php');
   	exit;
}
