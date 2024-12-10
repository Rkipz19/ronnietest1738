<?php


//Method Auto Load

function classAutoLoad(){
    $directories = ["classes","contents","forms","processes","global","menus"];

    foreach($directories AS $dir){
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir .
        DIRECTORY_SEPARATOR . $classname . ".php";
        if(file_exists($filename) AND is_readable($filename)){
            require_once($filename);
        }
    }
}
spl_autoload_register('classAutoLoad');

$ObjLayout = new layout();
$ObjContent = new contents();