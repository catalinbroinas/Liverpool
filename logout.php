<?php
require_once 'bootloader.php';
Session::destroy();

header("location: index.php");
exit;
