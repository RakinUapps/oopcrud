<?php
//var_dump($_REQUEST); die();

$id= $_REQUEST['id'];
$conn =new mysqli('localhost', 'root', '' , 'oopcrud');
$sql = $conn->prepare("DELETE  FROM user where id='$id'");
$result=$sql->execute();
$conn->close();

if($result){
    header('Location:view.php');
}

?>