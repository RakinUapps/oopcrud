<?php
include ('../vendor/autoload.php');
include ('namespace.php');


$objData= new \App\Admin\Admin();
$objData->setData($_GET);
$viewData=$objData->harddelete();

?>