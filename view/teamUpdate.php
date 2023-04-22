<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Editare Echipă';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');

$classUserAuth->callFunction('authAccess'); 

function viewTeamEditForm()
{
	$db = Db()->connection;

	$query = "SELECT * FROM team WHERE id=".$_GET['id'];
	$result = $db->query($query);

	if ($result->num_rows > 0) 
	{
	// output data of each row	
		while($row = $result->fetch_assoc()) 
		{
			include ('components/admin/formEditTeam.php');
		}
	}
	$db->close();
} 
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
</header>

<main class="navbarM py-4 pb-lg-5">
	<div class="container">
		<?php echo viewTeamEditForm(); ?> 
	</div>
</main>

<div class="fixXlTeam">
	<?php require_once ('layout/footer.php'); ?>
</div>
