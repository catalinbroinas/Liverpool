<?php
	$info = 'info';
	$thisMessageAlert = 'Nu există informații de afișat!';
?>
<!-- Alert Wrapper -->
<div id="alertInfoUser" class="alert alert-<?php echo alert($info, 'alert', $thisMessageAlert) . ' ' . alert($info, 'border', $thisMessageAlert); ?>">
	
	<!-- Alert Content -->
	<div class="d-flex align-items-center">

		<!-- Alert Icon -->
		<div id="iconAlert" class="mr-5"><?php echo alert($info, 'icon', $thisMessageAlert) ?></div>

		<!-- Alert Text -->
		<div id="contentAlert">
			<div id="titlteAlert" class="<?php echo alert($info, 'titleStyle', $thisMessageAlert) ?> text-uppercase"><?php echo alert($info, 'title', $thisMessageAlert) ?>!</div>
			<div id="textAlert" class="<?php echo alert($info, 'textStyle', $thisMessageAlert) ?>"><?php echo alert($info, 'text', $thisMessageAlert) ?></div>
		</div>
		<!-- Alert Text -->

	</div>
	<!-- Alert Content -->

</div>
<!-- Alert Wrapper -->