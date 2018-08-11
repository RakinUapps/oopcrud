<?php
include ('../vendor/autoload.php');

//var_dump($_POST);
//die();

$objAdmin = new \App\Admin\Admin();

$objAdmin->setData($_POST);

$objAdmin->store();


