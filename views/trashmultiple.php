<?php
include ('../vendor/autoload.php');
include ('namespace.php');
include ('header.php');

use App\Message\Message;
use App\Utility\Utility;


if (isset($_POST['mark'])){
    $objData= new \App\Admin\Admin();

    //$objData->setData($_POST['deleteid']);
    $objData->trashMultiple($_POST);
    Utility::redirect("trashview.php".$_POST['deleteid']);
}
else
{
    Message::message("Empty Selection!");
    Utility::redirect("index.php");
}

