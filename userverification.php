<?php
require_once "AutoLoad.php";
$Objlayout -> header("verify");
$ObjProcesses -> verify_process();
$ObjUserForm ->verification_form();
$Objlayout -> footer();
?>