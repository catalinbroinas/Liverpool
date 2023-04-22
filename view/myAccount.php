<?php

$pageTitle = "Contul meu";

require_once '../bootloader.php';

$classUserAuth = new userAuth();
$role = $classUserAuth->callFunction('getUserDates', 'role');

require_once 'layout/head.php';
require_once '../includes/class-validation_input.php';
require_once '../includes/class-calendar.php';

$classCalendar = new calendar();

$classUserAuth->callFunction('authAccess', $pageTitle);
?>

<header>
	<?php require_once 'layout/navbar.php'; ?>
	<?php require_once 'section/introMyAccount.php'; ?>
</header>

<main>

	<?php require_once 'section/myAccountContent.php'; ?>

</main>

<?php require_once 'layout/footer.php'; ?>
