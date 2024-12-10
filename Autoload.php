<?php
//Method Auto Load 
function classAutoLoad(){
    $directories =["classes","contents","forms","processes","global","menus"];//array of dirctories

foreach($directories AS $dir){
    $filename = dirname(FILE). DIRECTORY_SEPARATOR.$dir . 
    DIRECTORY_SEPARATOR.$classname." .php";// path where the files are stored
    if(file_exists($filename) AND is_readable($filename)){
        require_once($filename);// require_once is bring the files once 
    }
}
}
spl_autoload_register('classAutoLoad');

// Creating an instance of a class
$ObjLayout = new layout();
$ObjContent = new contents();