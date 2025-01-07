<?php
require_once "AutoLoad.php";

$ObjLayout -> header();
$ObjProcesses -> verify_process();
$ObjUserForm ->verification_form();
$ObjLayout -> footer();
?>