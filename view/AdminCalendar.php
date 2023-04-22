<?php
require_once ('../bootloader.php');
require_once ('components/calendarView.php');  

$pageTitle = 'Administrare Calendar';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php');

$classCalendar = new Calendar();
$classDb = new liverpoolDb();

$lastSeason = $classDb->lastCalendarSeason();

$classUserAuth->callFunction('authAccess', $pageTitle); 
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
	<section class="navbarM">
		<?php
		$title = "Calendar";
		$icon = "fa-calendar-alt";
		$linkInsert = "AdminCalendar.php#insertCa";
		$linkEdit = "AdminCalendar.php#editCa";
		$linkPage = "calendar.php";
		include_once ('section/headerAdmin.php'); 
		?>
	</section>
</header>

<main>
	<div id="insertCa" class="container">

		<!-- Notifications -->
		<div class="row">
			<div class="col-12 text-center mt-5">
				<?php print_notices(); ?>
			</div>
		</div>
		<!-- Notifications -->

		<!-- Insert Title -->
		<div class="row">
			<div class="col-12">
				<h1 class="h1-responsive text-center mt-3">Insert</h1>
				<hr class="hrRed mb-5">
			</div>
		</div>
		<!-- Insert Title -->

		<!-- Insert Forms -->
		<div class="row mb-0">
			<div class="col-12">
				<?php include_once ('components/admin/calendarInsert.php'); ?>
			</div>
		</div>
		<!-- Insert Forms -->

		<!-- Edit Title -->
		<div id="editCa" class="row pt-5">
			<div class="col-12">
				<h1 class="h1-responsive text-center mt-3">Edit</h1>
				<hr class="hrRed mb-0">
			</div>
		</div>
		<!-- Edit Title -->

		<!-- Calendar Navs -->
		<section class="calendarNavs">
			<div class="row mb-3">
				<div class="col-12">
					<ul id="seNavs" class="nav grey lighten-3 py-4" role="tablist">
					  <!-- Season 2019-2020 -->
					  <li class="nav-item">
					    <a id="se1920Tab" class="nav-link <?php echo $classCalendar->navsSeason("2019-2020", $lastSeason); ?>" href="#se1920" data-toggle="pill" role="tab" aria-controls="se1920" aria-selected="<?php echo $classCalendar->navsSeasonTrue("2019-2020", $lastSeason); ?>">Sezonul 2019-2020</a>
					  </li>
					  <!-- Season 2019-2020 -->
					  <!-- Season 2020-2021 -->
					  <li class="nav-item">
					    <a id="se2021Tab" class="nav-link <?php echo $classCalendar->navsSeason("2020-2021", $lastSeason); ?>" href="#se2021" data-toggle="pill" role="tab" aria-controls="se2021" aria-selected="<?php echo $classCalendar->navsSeasonTrue("2020-2021", $lastSeason); ?>">Sezonul 2020-2021</a>
					  </li>
					  <!-- Season 2020-2021 -->
					  <!-- Season 2021-2022 -->
					  <li class="nav-item">
					    <a id="se2122Tab" class="nav-link <?php echo $classCalendar->navsSeason("2021-2022", $lastSeason); ?>" href="#se2122" data-toggle="pill" role="tab" aria-controls="se2122" aria-selected="<?php echo $classCalendar->navsSeasonTrue("2021-2022", $lastSeason); ?>">Sezonul 2021-2022</a>
					  </li>
					  <!-- Season 2021-2022 -->
					  <!-- Season 2022-2023 -->
					  <li class="nav-item">
					    <a id="se2223Tab" class="nav-link <?php echo $classCalendar->navsSeason("2022-2023", $lastSeason); ?>" href="#se2223" data-toggle="pill" role="tab" aria-controls="se2223" aria-selected="<?php echo $classCalendar->navsSeasonTrue("2022-2023", $lastSeason); ?>">Sezonul 2022-2023</a>
					  </li>
					  <!-- Season 2022-2023 -->
					</ul>
				</div>
			</div>
		</section>
		<!-- Calendar Navs -->

		<!-- Calendar Content -->
		<section class="calendarContent mb-5">
			<!-- Tab Content -->
			<div class="tab-content">

				<!-- Sezonul 2019-2020 -->
				<div class="tab-pane fade <?php echo $classCalendar->tabsSeasonShow("2019-2020", $lastSeason); ?>" id="se1920" role="tabpanel" aria-labelledby="se1920Tab">
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Iulie 2019</h4>
							<hr class="hrBlack1px mb-3">
							<ul class="list-group calendarList">
								<?php echo calendarShow('2019', '7', 'Edit'); ?>
							</ul>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">August 2019</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2019', '8', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Septembrie 2019</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2019', '9', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Octombrie 2019</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2019', '10', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Noiembrie 2019</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2019', '11', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Decembrie 2019</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2019', '12', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Ianuarie 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '1', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Februarie 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '2', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Martie 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '3', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Iunie 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '6', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Iulie 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '7', 'Edit'); ?>
						</div>
					</div>
				</div>
				<!-- Sezonul 2019-2020 -->

				<!-- Sezonul 2020-2021 -->
				<div class="tab-pane fade <?php echo $classCalendar->tabsSeasonShow("2020-2021", $lastSeason); ?>" id="se2021" role="tabpanel" aria-labelledby="se2021Tab">
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">August 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '8', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Septembrie 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '9', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Octombrie 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '10', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Noiembrie 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '11', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Decembrie 2020</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2020', '12', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Ianuarie 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '1', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Februarie 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '2', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Martie 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '3', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Aprilie 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '4', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Mai 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '5', 'Edit'); ?>
						</div>
					</div>
				</div>
				<!-- Sezonul 2020-2021 -->

				<!-- Sezonul 2021-2022 -->
				<div class="tab-pane fade <?php echo $classCalendar->tabsSeasonShow("2021-2022", $lastSeason); ?>" id="se2122" role="tabpanel" aria-labelledby="se2122Tab">
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">August 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '8', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Septembrie 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '9', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Octombrie 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '10', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Noiembrie 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '11', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Decembrie 2021</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2021', '12', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Ianuarie 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '1', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Februarie 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '2', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Martie 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '3', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Aprilie 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '4', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Mai 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '5', 'Edit'); ?>
						</div>
					</div>
				</div>
				<!-- Sezonul 2021-2022 -->

				<!-- Sezonul 2022-2023 -->
				<div class="tab-pane fade <?php echo $classCalendar->tabsSeasonShow("2022-2023", $lastSeason); ?>" id="se2223" role="tabpanel" aria-labelledby="se2223Tab">
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Iulie 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '7', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">August 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '8', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Septembrie 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '9', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Octombrie 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '10', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Noiembrie 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '11', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Decembrie 2022</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2022', '12', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Ianuarie 2023</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2023', '1', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Februarie 2023</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2023', '2', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Martie 2023</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2023', '3', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Aprilie 2023</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2023', '4', 'Edit'); ?>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12">
							<h4 class="ml-3 mt-1">Mai 2023</h4>
							<hr class="hrBlack1px mb-3">
							<?php echo calendarShow('2023', '5', 'Edit'); ?>
						</div>
					</div>
				</div>
				<!-- Sezonul 2022-2023 -->

			</div>
			<!-- Tab Content -->
		</section>
		<!-- Calendar Content -->

	</div>	<?php $db->close(); ?>
</main>

<?php require_once ('layout/footer.php'); ?>
