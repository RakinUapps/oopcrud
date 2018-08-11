<?php
$name=$_POST['name'];
$authorid=$_POST['authorid'];
$id=$_POST['id'];
$dop=$_POST['dop'];
$categoryid=$_POST['categoryid'];
$isbn=$_POST['isbn'];
$remarks=$_POST['remarks'];
$price=$_POST['price'];
$modified=$_POST['modified'];
include 'config.php';

$qry="UPDATE book SET name='$name', author='$authorid' WHERE id='$id'";
$result=mysql_query($qry) or die("Query Error:".mysql_error());
if($result) {

    //echo "Data inserted successfully.";
    header('Location:view.php');
}

?>