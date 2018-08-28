<?php
include ('../vendor/autoload.php');
include ('namespace.php');


$objData= new \App\Admin\Admin();
$objData->setData($_GET);
$viewData=$objData->delete();
//var_dump($_REQUEST); die();
/*
$id= $_REQUEST['id'];
$conn =new mysqli('localhost', 'root', '' , 'oopcrud');
$sql = $conn->prepare("DELETE  FROM book where id='$id'");
$result=$sql->execute();
$conn->close();

if($result){
    header('Location:view.php');
}
*/


?>