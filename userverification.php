<?php
require_once "AutoLoad.php";

$ObjLsayout -> header();
$ObjProcesses -> verify_process();
$ObjUserForm ->verification_form();
$ObjLayout -> footer();
?>