<?php
require_once ('../bootloader.php'); 

$pageTitle = 'Editare Calendar';
$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');
require_once ('../calendar_function.php');

$classUserAuth->callFunction('authAccess'); 

function viewEditCalendarForm()
{
	$db = Db()->connection;

		$query = "SELECT * FROM calendar WHERE id=".$_GET['id'];
		$result = $db->query($query);

		if ($result->num_rows > 0) 
		{
	    // output data of each row	
			while($row = $result->fetch_assoc()) 
			{
				$id = $_GET['id'];
				$month = $row["month"];
				$year = $row['year'];
				$data = $row['data'];
				$city = $row['city'];
				$stadium = $row['stadium'];
				$iconC = $row['iconC'];
				$iconT = $row['iconT'];
				$team = $row['team'];
				$status = $row['status'];
				$goalsH = $row['goalsH'];
				$goalsA = $row['goalsA'];
				$link = $row['link'];
				include ('components/admin/formEditCalendar.php');
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

<main class="navbarM pb-xl-0 pt-xl-3 py-5">
	<div class="container">
		<?php echo viewEditCalendarForm(); ?>
	</div>
</main>

<div class="fixXl">
	<?php require_once ('layout/footer.php'); ?>
</div>
