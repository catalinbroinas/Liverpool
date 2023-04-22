<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Editare Clasament';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php'); 

$classUserAuth->callFunction('authAccess'); 

function viewEditClasamentForm()
{
		$db = Db()->connection;

		$query = "SELECT * FROM clasament WHERE id=".$_GET['id'];
		$result = $db->query($query);

		if ($result->num_rows > 0) 
		{
	    // output data of each row	
			while($row = $result->fetch_assoc()) 
			{
				$id = $_GET['id'];
				$brand = $row['brand'];
				$team = $row['team'];
				$wins = $row["wins"];
				$draws = $row["draws"];
				$loss = $row["loss"];
				$attack = $row["attack"];
				$defensive = $row["defensive"];
				include ('components/admin/formEditClasament.php');
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

<main class="navbarM pt-4 pb-5 py-lg-3 pb-lg-0">
	<div class="container">
		<?php echo viewEditClasamentForm(); ?>
	</div>
</main>

<div class="fixLg mt-sm-5">
	<?php require_once ('layout/footer.php'); ?>
</div>
