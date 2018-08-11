<?php
header('location:views/index.php');
/*
include_once('vendor/autoload.php');

########################### SESSION CODE STSRTED ################################################
if(!isset($_SESSION) ) session_start();
use App\User\User;
use App\User\Auth;
use App\Message\Message;
use App\Utility\Utility;
$obj= new User();
$obj->setData($_SESSION);
$singleUser = $obj->view();
$auth= new Auth();
$status = $auth->setData($_SESSION)->logged_in();
$sessionMinute=$auth->sessionPeriod;
$sessionMinuteMultiply=$auth->sessionPeriodMultiply;
if(!$status) {
    Utility::redirect('views/User/Profile/signup.php');
    return;
}
############################### Session time calculation #####################################
if(isset($_SESSION['expire'])) {
    $exp = $_SESSION['expire'];
    $now = time(); // Checking the time now when home page starts.
    $sub_exp = $now - $exp;
    if ($sub_exp > ($sessionMinute * $sessionMinuteMultiply)) {
        session_destroy();
        Utility::redirect('views/User/Profile/signup.php');
    }
    $_SESSION['expire'] = time();
    /* session timeout code end  */
//}
################################ End of Session time calculation ##############################
########################### SESSION CODE ENDED ################################################
//Utility::redirect('views/index.php');
?>