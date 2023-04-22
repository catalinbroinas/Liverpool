		<section class="navMonths my-5">
			<!-- Grid row -->
			<div class="row">
				<!-- Grid col -->
				<div class="col-12">
					<!-- Navs Seasons -->
					<div id="navsSeason" class="nav nav-pills btn-group btn-block" role="tablist" aria-label="navsSeason">
						<!-- Season 2019-2020 -->
						<a class="btn btn-sm btnRW <?php echo $classCalendar->navsSeason("2019-2020", $lastSeason); ?>" id="btn1920" data-toggle="pill" href="#s1920" role="tab" aria-controls="s1920" aria-selected="<?php echo $classCalendar->navsSeasonTrue("2019-2020", $lastSeason); ?>">Sezonul 2019-2020</a>
						<!-- Season 2019-2020 -->
						<!-- Season 2020-2021 -->
						<a class="btn btn-sm btnRW <?php echo $classCalendar->navsSeason("2020-2021", $lastSeason); ?>" id="btn2021" data-toggle="pill" href="#s2021" role="tab" aria-controls="s2021" aria-selected="<?php echo $classCalendar->navsSeasonTrue("2020-2021", $lastSeason); ?>">Sezonul 2020-2021</a>
						<!-- Season 2020-2021 -->
						<!-- Season 2021-2022 -->
						<a class="btn btn-sm btnRW <?php echo $classCalendar->navsSeason("2021-2022", $lastSeason); ?>" id="btn2122" data-toggle="pill" href="#s2122" role="tab" aria-controls="s2122" aria-selected="<?php echo $classCalendar->navsSeasonTrue("2021-2022", $lastSeason); ?>">Sezonul 2021-2022</a>
						<!-- Season 2021-2022 -->
						<!-- Season 2022-2023 -->
						<a class="btn btn-sm btnRW <?php echo $classCalendar->navsSeason("2022-2023", $lastSeason); ?>" id="btn2223" data-toggle="pill" href="#s2223" role="tab" aria-controls="s2223" aria-selected="<?php echo $classCalendar->navsSeasonTrue("2022-2023", $lastSeason); ?>">Sezonul 2022-2023</a>
						<!-- Season 2022-2023 -->
					</div>
					<!-- Navs Seasons -->
				</div>
				<!-- Grid col -->
			</div>
			<!-- Grid row -->

			<!-- Grid row -->
			<div class="row">
				<!-- Grid col -->
				<div class="col-12">
					<!-- Tab content -->
					<div class="tab-content" id="contentSeasons">
					<!-- Season 2019-2020 -->
					 <div class="tab-pane fade <?php echo $classCalendar->tabsSeasonShow("2019-2020", $lastSeason); ?>" id="s1920" role="tabpanel" aria-labelledby="btn1920">
						<div id="navMonths2019-2020" class="nav nav-pills btn-group btn-block" role="tablist" aria-label="navMonths2019-2020">
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2019", "7", $thisYear, $thisMonth); ?>" id="btnJul19" data-toggle="pill" href="#jul19" role="tab" aria-controls="jul19" aria-selected="<?php echo $classCalendar->navsMonthTrue("2019", "7", $thisYear, $thisMonth); ?>">IUL</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2019", "8", $thisYear, $thisMonth); ?>" id="btnAug19" data-toggle="pill" href="#aug19" role="tab" aria-controls="aug19" aria-selected="<?php echo $classCalendar->navsMonthTrue("2019", "8", $thisYear, $thisMonth); ?>">AUG</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2019", "9", $thisYear, $thisMonth); ?>" id="btnSept19" data-toggle="pill" href="#sept19" role="tab" aria-controls="sept19" aria-selected="<?php echo $classCalendar->navsMonthTrue("2019", "9", $thisYear, $thisMonth); ?>">SEPT</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2019", "10", $thisYear, $thisMonth); ?>" id="btnOct19" data-toggle="pill" href="#oct19" role="tab" aria-controls="oct19" aria-selected="<?php echo $classCalendar->navsMonthTrue("2019", "10", $thisYear, $thisMonth); ?>">OCT</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2019", "11", $thisYear, $thisMonth); ?>" id="btnNov19" data-toggle="pill" href="#nov19" role="tab" aria-controls="nov19" aria-selected="<?php echo $classCalendar->navsMonthTrue("2019", "11", $thisYear, $thisMonth); ?>">NOI</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2019", "12", $thisYear, $thisMonth); ?>" id="btnDec19" data-toggle="pill" href="#dec19" role="tab" aria-controls="dec19" aria-selected="<?php echo $classCalendar->navsMonthTrue("2019", "12", $thisYear, $thisMonth); ?>">DEC</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "1", $thisYear, $thisMonth); ?>" id="btnJul20" data-toggle="pill" href="#jan20" role="tab" aria-controls="jan20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "1", $thisYear, $thisMonth); ?>">IAN</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "2", $thisYear, $thisMonth); ?>" id="btnFeb20" data-toggle="pill" href="#feb20" role="tab" aria-controls="feb20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "2", $thisYear, $thisMonth); ?>">FEB</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "3", $thisYear, $thisMonth); ?>" id="btnMar20" data-toggle="pill" href="#mar20" role="tab" aria-controls="mar20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "3", $thisYear, $thisMonth); ?>">MAR</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "6", $thisYear, $thisMonth); ?>" id="btnJun20" data-toggle="pill" href="#jun20" role="tab" aria-controls="jun20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "6", $thisYear, $thisMonth); ?>">IUN</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "7", $thisYear, $thisMonth); ?>" id="btnJul20" data-toggle="pill" href="#jul20" role="tab" aria-controls="jul20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "7", $thisYear, $thisMonth); ?>">IUL</a>
						</div>
					</div>
					<!-- Season 2019-2020 -->

					<!-- Season 2020-2021 -->
					<div class="tab-pane fade <?php echo $classCalendar->tabsSeasonShow("2020-2021", $lastSeason); ?>" id="s2021" role="tabpanel" aria-labelledby="btn2021">
						<div id="navMonths2020-2021" class="nav nav-pills btn-group btn-block" role="tablist" aria-label="navMonths2020-2021">
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "8", $thisYear, $thisMonth); ?>" id="btnAug20" data-toggle="pill" href="#aug20" role="tab" aria-controls="aug20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "8", $thisYear, $thisMonth); ?>">AUG</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "9", $thisYear, $thisMonth); ?>" id="btnSept20" data-toggle="pill" href="#sept20" role="tab" aria-controls="sept20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "9", $thisYear, $thisMonth); ?>">SEPT</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "10", $thisYear, $thisMonth); ?>" id="btnOct20" data-toggle="pill" href="#oct20" role="tab" aria-controls="oct20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "10", $thisYear, $thisMonth); ?>">OCT</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "11", $thisYear, $thisMonth); ?>" id="btnNov20" data-toggle="pill" href="#nov20" role="tab" aria-controls="nov20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "11", $thisYear, $thisMonth); ?>">NOI</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2020", "12", $thisYear, $thisMonth); ?>" id="btnDec20" data-toggle="pill" href="#dec20" role="tab" aria-controls="dec20" aria-selected="<?php echo $classCalendar->navsMonthTrue("2020", "12", $thisYear, $thisMonth); ?>">DEC</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "1", $thisYear, $thisMonth); ?>" id="btnJan21" data-toggle="pill" href="#jan21" role="tab" aria-controls="jan21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "1", $thisYear, $thisMonth); ?>">IAN</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "2", $thisYear, $thisMonth); ?>" id="btnFeb21" data-toggle="pill" href="#feb21" role="tab" aria-controls="feb21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "2", $thisYear, $thisMonth); ?>">FEB</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "3", $thisYear, $thisMonth); ?>" id="btnMar21" data-toggle="pill" href="#mar21" role="tab" aria-controls="mar21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "3", $thisYear, $thisMonth); ?>">MAR</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "4", $thisYear, $thisMonth); ?>" id="btnApr21" data-toggle="pill" href="#apr21" role="tab" aria-controls="apr21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "4", $thisYear, $thisMonth); ?>">APR</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "5", $thisYear, $thisMonth); ?>" id="btnMay21" data-toggle="pill" href="#may21" role="tab" aria-controls="may21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "5", $thisYear, $thisMonth); ?>">MAI</a>
						</div>
					</div>
					<!-- Season 2020-2021 -->

					<!-- Season 2021-2022 -->
					<div class="tab-pane fade <?php echo $classCalendar->tabsSeasonShow("2021-2022", $lastSeason); ?>" id="s2122" role="tabpanel" aria-labelledby="btn2122">
						<div id="navMonths2021-2022" class="nav nav-pills btn-group btn-block" role="tablist" aria-label="navMonths2021-2022">
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "8", $thisYear, $thisMonth); ?>" id="btnAug21" data-toggle="pill" href="#aug21" role="tab" aria-controls="aug21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "8", $thisYear, $thisMonth); ?>">AUG</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "9", $thisYear, $thisMonth); ?>" id="btnSept21" data-toggle="pill" href="#sept21" role="tab" aria-controls="sept21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "9", $thisYear, $thisMonth); ?>">SEPT</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "10", $thisYear, $thisMonth); ?>" id="btnOct21" data-toggle="pill" href="#oct21" role="tab" aria-controls="oct21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "10", $thisYear, $thisMonth); ?>">OCT</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "11", $thisYear, $thisMonth); ?>" id="btnNov21" data-toggle="pill" href="#nov21" role="tab" aria-controls="nov21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "11", $thisYear, $thisMonth); ?>">NOI</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2021", "12", $thisYear, $thisMonth); ?>" id="btnDec21" data-toggle="pill" href="#dec21" role="tab" aria-controls="dec21" aria-selected="<?php echo $classCalendar->navsMonthTrue("2021", "12", $thisYear, $thisMonth); ?>">DEC</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "1", $thisYear, $thisMonth); ?>" id="btnJan22" data-toggle="pill" href="#jan22" role="tab" aria-controls="jan22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "1", $thisYear, $thisMonth); ?>">IAN</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "2", $thisYear, $thisMonth); ?>" id="btnFeb22" data-toggle="pill" href="#feb22" role="tab" aria-controls="feb22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "2", $thisYear, $thisMonth); ?>">FEB</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "3", $thisYear, $thisMonth); ?>" id="btnMar22" data-toggle="pill" href="#mar22" role="tab" aria-controls="mar22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "3", $thisYear, $thisMonth); ?>">MAR</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "4", $thisYear, $thisMonth); ?>" id="btnApr22" data-toggle="pill" href="#apr22" role="tab" aria-controls="apr22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "4", $thisYear, $thisMonth); ?>">APR</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "5", $thisYear, $thisMonth); ?>" id="btnMay22" data-toggle="pill" href="#may22" role="tab" aria-controls="may22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "5", $thisYear, $thisMonth); ?>">MAI</a>
						</div>
					</div>
					<!-- Season 2021-2022 -->

					<!-- Season 2022-2023 -->
					<div class="tab-pane fade <?php echo $classCalendar->tabsSeasonShow("2022-2023", $lastSeason); ?>" id="s2223" role="tabpanel" aria-labelledby="btn2223">
						<div id="navMonths2022-2023" class="nav nav-pills btn-group btn-block" role="tablist" aria-label="navMonths2022-2023">
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "7", $thisYear, $thisMonth); ?>" id="btnJul22" data-toggle="pill" href="#jul22" role="tab" aria-controls="jul22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "7", $thisYear, $thisMonth); ?>">IUL</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "8", $thisYear, $thisMonth); ?>" id="btnAug22" data-toggle="pill" href="#aug22" role="tab" aria-controls="aug22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "8", $thisYear, $thisMonth); ?>">AUG</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "9", $thisYear, $thisMonth); ?>" id="btnSept22" data-toggle="pill" href="#sept22" role="tab" aria-controls="sept22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "9", $thisYear, $thisMonth); ?>">SEPT</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "10", $thisYear, $thisMonth); ?>" id="btnOct22" data-toggle="pill" href="#oct22" role="tab" aria-controls="oct22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "10", $thisYear, $thisMonth); ?>">OCT</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "11", $thisYear, $thisMonth); ?>" id="btnNov22" data-toggle="pill" href="#nov22" role="tab" aria-controls="nov22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "11", $thisYear, $thisMonth); ?>">NOI</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2022", "12", $thisYear, $thisMonth); ?>" id="btnDec22" data-toggle="pill" href="#dec22" role="tab" aria-controls="dec22" aria-selected="<?php echo $classCalendar->navsMonthTrue("2022", "12", $thisYear, $thisMonth); ?>">DEC</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2023", "1", $thisYear, $thisMonth); ?>" id="btnJan23" data-toggle="pill" href="#jan23" role="tab" aria-controls="jan23" aria-selected="<?php echo $classCalendar->navsMonthTrue("2023", "1", $thisYear, $thisMonth); ?>">IAN</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2023", "2", $thisYear, $thisMonth); ?>" id="btnFeb23" data-toggle="pill" href="#feb23" role="tab" aria-controls="feb23" aria-selected="<?php echo $classCalendar->navsMonthTrue("2023", "2", $thisYear, $thisMonth); ?>">FEB</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2023", "3", $thisYear, $thisMonth); ?>" id="btnMar23" data-toggle="pill" href="#mar23" role="tab" aria-controls="mar23" aria-selected="<?php echo $classCalendar->navsMonthTrue("2023", "3", $thisYear, $thisMonth); ?>">MAR</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2023", "4", $thisYear, $thisMonth); ?>" id="btnApr23" data-toggle="pill" href="#apr23" role="tab" aria-controls="apr23" aria-selected="<?php echo $classCalendar->navsMonthTrue("2023", "4", $thisYear, $thisMonth); ?>">APR</a>
							<a class="btn btn-sm btnRW <?php echo $classCalendar->navsMonth("2023", "5", $thisYear, $thisMonth); ?>" id="btnMay23" data-toggle="pill" href="#may23" role="tab" aria-controls="may23" aria-selected="<?php echo $classCalendar->navsMonthTrue("2023", "5", $thisYear, $thisMonth); ?>">MAI</a>
						</div>
					</div>
					<!-- Season 2022-2023 -->

					</div>
					<!-- Tab content -->
				</div>
				<!-- Grid col -->
			</div>
			<!-- Grid row -->
		</section>