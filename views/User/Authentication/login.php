<?php
ini_set('MAX_EXECUTION_TIME', -1);
if(!isset($_SESSION) )session_start();
include_once('../../../vendor/autoload.php');
use App\User\Auth;
use App\Message\Message;
use App\Utility\Utility;


$auth= new Auth();
$status= $auth->setData($_POST)->is_registered();

if($status){
    $_SESSION['email']=$_POST['email'];
    ############### Session Expire Calculation ##########################
    $_SESSION['start'] = time(); // Taking now logged in time.
    // Ending a session in 20 minutes from the starting time for user inactivity.
    $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
    ################# End of Session Expire Calculation #################
    Message::message("
                <div class=\"alert alert-success\">
                            <strong>Welcome!</strong> You have successfully logged in.
                </div>");
     Utility::redirect('../../index.php');
}else{
    Message::message("
                <div class=\"alert alert-danger\">
                            <strong>Wrong information!</strong> Please try again.
                </div>");
    Utility::redirect('../Profile/signup.php');
}


