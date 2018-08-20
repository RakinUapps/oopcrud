<?php

if(!isset($_SESSION) ) session_start();


use App\User\User;
use App\User\Auth;
use App\Message\Message;
use App\Utility\Utility;

/* User Authentication */

/*$obj= new User();
$obj->setData($_SESSION);

$singleUser = $obj->view();

$auth= new Auth();
$status = $auth->setData($_SESSION)->logged_in();

$sessionMinute=$auth->sessionPeriod;
$sessionMinuteMultiply=$auth->sessionPeriodMultiply;

if(!$status) {
Utility::redirect('User/Profile/signup.php');
return;
}*/
/* User Authentication  Ended*/
############################### Session time calculation #####################################
/*if(isset($_SESSION['expire'])) {
$exp = $_SESSION['expire'];
$now = time(); // Checking the time now when home page starts.
$sub_exp = $now - $exp;
if ($sub_exp > ($sessionMinute * $sessionMinuteMultiply)) {
session_destroy();
Utility::redirect('User/Profile/signup.php');
}
$_SESSION['expire'] = time();*/
/* session timeout code end  */
//}
################################ End of Session time calculation ##############################

##################### Checking Page Name started ########################
/*$url ="http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$urlMatch="http://".$_SERVER['SERVER_NAME'].'/www/cmpi/views/namespace.php';
if($url==$urlMatch){
    Utility::redirect('index.php');
}*/
##################### Checking Page Name ended   ########################

$msg = Message::getMessage();
if(isset($_SESSION['mark']))  unset($_SESSION['mark']);
?>