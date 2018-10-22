<?php
include ('../vendor/autoload.php');
use App\Message\Message;
use App\Utility\Utility;


$objAdmin = new \App\Admin\Admin();

$msg = Message::getMessage();

//Utility::redirect('User/Profile/signup.php');

include 'header.php';
?>


<div style="height: 300px" id="tb" align="center">

<!--<a href="view.php">View Book</a>-->
</div>
<?php
include 'footer.php';
include 'footer_script.php';
?>

</body>
</html>