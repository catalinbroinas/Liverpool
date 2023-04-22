<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Editare Postare';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');

$classUserAuth->callFunction('authAccess'); 

function viewNewsEditForm()
{
		$db = Db()->connection;

		$query = "SELECT * FROM news WHERE id=".$_GET['id'];
		$result = $db->query($query);

		if ($result->num_rows > 0) 
		{
	    // output data of each row	
			while($row = $result->fetch_assoc()) 
			{
				include ('components/admin/formEditNews.php');
			}
		}
		else 
		{
			echo "error";
		}
		$db->close();
		
} 
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
</header>

<main class="navbarM py-3">
	<div class="container">
		<?php echo viewNewsEditForm(); ?>
	</div>
</main>

<div class="fix">
	<?php require_once ('layout/footer.php'); ?>
</div>
