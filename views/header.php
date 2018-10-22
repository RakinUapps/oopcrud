<?php
########################### SESSION CODE STSRTED ################################################
ob_start();
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
    Utility::redirect('User/Profile/signup.php');
    return;
}
############################### Session time calculation #####################################
if(isset($_SESSION['expire'])) {
    $exp = $_SESSION['expire'];
    $now = time(); // Checking the time now when home page starts.
    $sub_exp = $now - $exp;
    if ($sub_exp > ($sessionMinute * $sessionMinuteMultiply)) {
        session_destroy();
        Utility::redirect('User/Profile/signup.php');
    }
    $_SESSION['expire'] = time();
    /* session timeout code end  */
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <?php header('Content-Type:text/html; charset=UTF-8'); ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="#">
     <title>::BOOK REC::</title>
      <!-- Bootstrap core CSS -->
      <link href="../resource/css/style.css" rel="stylesheet" type="text/css">
      <link href="../resource/css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap Dropdown Hover CSS -->
      <link href="../resource/css/animate.min.css" rel="stylesheet">
      <link href="../resource/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
     <!-- Include Date Range Picker -->
      <script type="text/javascript" src="../resource/bootstrap/js/daterangepicker.js"></script>
      <link rel="stylesheet" type="text/css" href="../resource/bootstrap/css/daterangepicker.css" />
      <!-- Required for Datepicker ended -->
      <!-- required for search, block3 of 5 start -->
      <link rel="stylesheet" href="../resource/bootstrap/css/jquery-ui.css">
      <script src="../resource/bootstrap/js/jquery.js"></script>
     <script src="../resource/bootstrap/js/jquery-ui.js"></script>
      <!--   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
          <!-- required for search, block3 of 5 end -->
      <script src="../resource/js/index.js"></script>
  </head>
  <body id="body">
	<div class="container headSection">
		<div class="row">
				<div class="row">
					<div class="col-md-9">
                        <a href="index.php"><h3>Library Management System</h3></a>
					</div>
					<div class="col-md-3 text-right">
                        <p>Hi ! <b><?php echo "<b>$singleUser->first_name $singleUser->last_name</b>"?>!</b> &nbsp; <a href="User/Authentication/logout.php">[ Log Out ]</a></p>
					</div>
				</div>
				<nav  class="navbar navbar-default navbar-static">
						<div style="padding-left:0px; padding-right:0px;" class="container">
							<div style="padding-top:0px; margin:0px;" class="">
							</div>
							<div style="padding-top:0px; margin-top:0px;" class="navbar-header">
							  <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							  </button>
							  <!--<a class="navbar-brand" href="#myPage"><h4>BSBL</h4></a>-->
							</div>
							<div style="padding-top:0px; margin-top:0px;"  class="collapse navbar-collapse" id="myNavbar">
								<div style="padding-left:0px; padding-right:0px;" class="container">
								  <ul class="nav navbar-nav navbar-left">
									<li class="backg"><a href="index.php">HOME</a></li>
									<li class="dropdown">
										<a id="menu" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false" data-animations="zoomIn zoomIn zoomIn zoomIn">Records<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li class="backg"><a id="menu" href="create.php?id=addbook">Add new book</a></li>
											<li class="backg"><a id="menu" href="create.php?id=addauthor">Add Author</a></li>
											<li class="backg"><a id="menu" href="create.php?id=addstaff">Add Staff</a></li>
											<li class="backg"><a id="menu" href="create.php?id=addstudent">Add Student</a></li>
											<li class="backg"><a id="menu" href="create.php?id=addcategory">Add Category</a></li>
											<li class="divider"></li>


										</ul>
									</li>
									<li class="dropdown">
										<a id="menu" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false" data-animations="zoomIn zoomIn zoomIn zoomIn">Book Reports<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li class="backg"><a id="menu" href="view.php?id=book">Book Data</a></li>
											<li class="backg"><a id="menu" href="view.php?id=staff">Staff Data</a></li>
											<li class="backg"><a id="menu" href="view.php?id=category">Category Data</a></li>
											<li class="backg"><a id="menu" href="view.php?id=author">Author Data</a></li>
											<li class="backg"><a id="menu" href="view.php?id=student">Student Data</a></li>

											<li class="backg"><a id="menu" href=""></a></li>
											<li class="divider"></li>

										</ul>
									</li>

									<li class="dropdown">
										<a id="menu" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false" data-animations="zoomIn zoomIn zoomIn zoomIn">USER <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li class="backg"><a id="menu" href="createUser.php">Create User</a></li>
										</ul>
									</li>
								  </ul>
								</div>
							</div>
						</div>
				</nav>
		</div>
	</div>
    <div class="text-center">
        <?php echo "<div style='height: 30px; text-align: center'> <div class='alert-success' id='message'> $msg</div> </div>"; ?>
    </div>