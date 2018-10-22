<?php
include ('../vendor/autoload.php');
include ('namespace.php');
include ('header.php');

use App\Message\Message;
use App\Utility\Utility;


if (isset($_POST['mark'])){
    $objData= new \App\Admin\Admin();

    //$objData->setData($_POST['deleteid']);
    $objData->recoverMultiple($_POST);
    Utility::redirect("view.php?id=".$_POST['recoverid']);
}
else
{
    Message::message("Empty Selection!");
    Utility::redirect($_SERVER['HTTP_REFERER']);
}

