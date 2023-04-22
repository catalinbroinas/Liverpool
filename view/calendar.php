<?php
require_once ('../bootloader.php');
require_once ('components/calendarView.php');  

$pageTitle = 'Calendar';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once ('layout/head.php'); 

$classCalendar = new Calendar();
$classDb = new liverpoolDb(); 
?>

<header>
	<?php require_once ('layout/navbar.php'); ?>
</header>

<main class="navbarM">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="h1-responsive mt-3 text-center">Calendar competițional</h1>
				<hr class="hrRed">
			</div>
		</div>
		<?php
		$lastSeason = $classDb->lastCalendarSeason();
		$lastYear =  $classDb->lastCalendarYear();
		$lastMonth = $classDb->lastCalendarMonth();

		$thisMonth = ($classDb->isRows('calendar', 'month', $classCalendar->thisMonth('n'))) ? 
				$classCalendar->thisMonth('n') : $classDb->lastCalendarMonth();
		$thisYear = ($classDb->isRows('calendar', 'year', $classCalendar->thisYear())) ? 
				$classCalendar->thisYear() : $classDb->lastCalendarYear();
		include_once ('section/navsMonths.php'); 
		?>
		<section class="calendarContent mb-5">
			<div class="row">
				<div class="col-12">
					<div class="tab-content" id="contentMonths">
					   <!-- Sezonul 2019-2020 -->	
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2019", "7", $thisYear, $thisMonth); ?>" id="jul19" role="tabpanel" aria-labelledby="btnJul19">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2019', '7'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2019", "8", $thisYear, $thisMonth); ?>" id="aug19" role="tabpanel" aria-labelledby="btnAug19">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2019', '8'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2019", "9", $thisYear, $thisMonth); ?>" id="sept19" role="tabpanel" aria-labelledby="btnSept19">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2019', '9'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2019", "10", $thisYear, $thisMonth); ?>" id="oct19" role="tabpanel" aria-labelledby="btnOct19">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2019', '10'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2019", "11", $thisYear, $thisMonth); ?>" id="nov19" role="tabpanel" aria-labelledby="btnNov19">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2019', '11'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2019", "12", $thisYear, $thisMonth); ?>" id="dec19" role="tabpanel" aria-labelledby="btnDec19">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2019', '12'); ?>	
					  	</ul>
					  </div>	
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "1", $thisYear, $thisMonth); ?>" id="jan20" role="tabpanel" aria-labelledby="btnJan20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '1'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "2", $thisYear, $thisMonth); ?>" id="feb20" role="tabpanel" aria-labelledby="btnFeb20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '2'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "3", $thisYear, $thisMonth); ?>" id="mar20" role="tabpanel" aria-labelledby="btnMar20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '3'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "6", $thisYear, $thisMonth); ?>" id="jun20" role="tabpanel" aria-labelledby="btnJun20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '6'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "7", $thisYear, $thisMonth); ?>" id="jul20" role="tabpanel" aria-labelledby="btnJul20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '7'); ?>	
					  	</ul>
					  </div>
					  <!-- Sezonul 2019-2020 -->	

					  <!-- Sezonul 2020-2021 -->	
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "8", $thisYear, $thisMonth); ?>" id="aug20" role="tabpanel" aria-labelledby="btnAug20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '8'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "9", $thisYear, $thisMonth); ?>" id="sept20" role="tabpanel" aria-labelledby="btnSept20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '9'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "10", $thisYear, $thisMonth); ?>" id="oct20" role="tabpanel" aria-labelledby="btnOct20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '10'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "11", $thisYear, $thisMonth); ?>" id="nov20" role="tabpanel" aria-labelledby="btnNov20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '11'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2020", "12", $thisYear, $thisMonth); ?>" id="dec20" role="tabpanel" aria-labelledby="btnDec20">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2020', '12'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "1", $thisYear, $thisMonth); ?>" id="jan21" role="tabpanel" aria-labelledby="btnJan21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '1'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "2", $thisYear, $thisMonth); ?>" id="feb21" role="tabpanel" aria-labelledby="btnFeb21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '2'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "3", $thisYear, $thisMonth); ?>" id="mar21" role="tabpanel" aria-labelledby="btnMar21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '3'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "4", $thisYear, $thisMonth); ?>" id="apr21" role="tabpanel" aria-labelledby="btnApr21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '4'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "5", $thisYear, $thisMonth); ?>" id="may21" role="tabpanel" aria-labelledby="btnMay21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '5'); ?>	
					  	</ul>
					  </div>
					  <!-- Sezonul 2020-2021 -->	

					  <!-- Sezonul 2021-2022 -->	
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "8", $thisYear, $thisMonth); ?>" id="aug21" role="tabpanel" aria-labelledby="btnAug21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '8'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "9", $thisYear, $thisMonth); ?>" id="sept21" role="tabpanel" aria-labelledby="btnSept21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '9'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "10", $thisYear, $thisMonth); ?>" id="oct21" role="tabpanel" aria-labelledby="btnOct21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '10'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "11", $thisYear, $thisMonth); ?>" id="nov21" role="tabpanel" aria-labelledby="btnNov21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '11'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2021", "12", $thisYear, $thisMonth); ?>" id="dec21" role="tabpanel" aria-labelledby="btnDec21">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2021', '12'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "1", $thisYear, $thisMonth); ?>" id="jan22" role="tabpanel" aria-labelledby="btnJan22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '1'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "2", $thisYear, $thisMonth); ?>" id="feb22" role="tabpanel" aria-labelledby="btnFeb22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '2'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "3", $thisYear, $thisMonth); ?>" id="mar22" role="tabpanel" aria-labelledby="btnMar22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '3'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "4", $thisYear, $thisMonth); ?>" id="apr22" role="tabpanel" aria-labelledby="btnApr22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '4'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "5", $thisYear, $thisMonth); ?>" id="may22" role="tabpanel" aria-labelledby="btnMay22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '5'); ?>	
					  	</ul>
					  </div>
					  <!-- Sezonul 2021-2022 -->

					  <!-- Sezonul 2022-2023 -->	
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "7", $thisYear, $thisMonth); ?>" id="jul22" role="tabpanel" aria-labelledby="btnJul22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '7'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "8", $thisYear, $thisMonth); ?>" id="aug22" role="tabpanel" aria-labelledby="btnAug22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '8'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "9", $thisYear, $thisMonth); ?>" id="sept22" role="tabpanel" aria-labelledby="btnSept22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '9'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "10", $thisYear, $thisMonth); ?>" id="oct22" role="tabpanel" aria-labelledby="btnOct22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '10'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "11", $thisYear, $thisMonth); ?>" id="nov22" role="tabpanel" aria-labelledby="btnNov22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '11'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2022", "12", $thisYear, $thisMonth); ?>" id="dec22" role="tabpanel" aria-labelledby="btnDec22">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2022', '12'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2023", "1", $thisYear, $thisMonth); ?>" id="jan23" role="tabpanel" aria-labelledby="btnJan23">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2023', '1'); ?>	
					  	</ul>
					  </div>
					   <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2023", "2", $thisYear, $thisMonth); ?>" id="feb23" role="tabpanel" aria-labelledby="btnFeb23">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2023', '2'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2023", "3", $thisYear, $thisMonth); ?>" id="mar23" role="tabpanel" aria-labelledby="btnMar23">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2023', '3'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2023", "4", $thisYear, $thisMonth); ?>" id="apr23" role="tabpanel" aria-labelledby="btnApr23">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2023', '4'); ?>	
					  	</ul>
					  </div>
					  <div class="tab-pane fade <?php echo $classCalendar->tabsMonthShow("2023", "5", $thisYear, $thisMonth); ?>" id="may23" role="tabpanel" aria-labelledby="btnMay23">
					  	<ul class="list-group calendarList">
					  	<?php echo calendarShow('2023', '5'); ?>	
					  	</ul>
					  </div>
					  <!-- Sezonul 2022-2023 -->

					</div>
				</div>
			</div>
		</section>
	</div>
	<?php $db->close(); ?>
</main>

<?php require_once ('layout/footer.php'); ?>
