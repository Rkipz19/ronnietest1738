<?php
require_once "AutoLoad.php";

$ObjLayout -> header();
$ObjProcesses -> login_process();
$ObjUserForm -> login_form();
$ObjLayout -> footer();