<?php
include ('../vendor/autoload.php');
include ('namespace.php');


$objData= new \App\Admin\Admin();
if (isset($_POST['mark'])){
    $objData->setData($_POST);
    $viewData=$objData->permanentDelete();
}
else {
    $objData->setData($_GET);
    $viewData = $objData->harddelete();
}
?>