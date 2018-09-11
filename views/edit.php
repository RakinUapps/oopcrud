<?php
include ('../vendor/autoload.php');
use App\Message\Message;
use App\Utility\Utility;
include ('namespace.php');

$objData= new \App\Admin\Admin();
$objData->setData($_GET);
$viewData=$objData->editview();
$msg = Message::getMessage();
$objToArray = json_decode(json_encode($viewData), True);
//Utility::redirect('User/Profile/signup.php');


include 'header.php';
?>

<div class="text-center">
    <?php echo "<div style='height: 30px; text-align: center'> <div class='alert-success' id='message'> $msg</div> </div>"; ?>
</div>
<div id="tb" align="center">
    <?php
    if($_GET['editid']=='book'){ ?>
<!-- Book page-->
<div class="row">
    <form  action="store.php" method="post">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="name">Name</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3">
                <input name="modified" type="text" hidden  value="<?php echo date('Y-m-d');?>">
                <input type="hidden" name="<?php echo $_GET['id']; ?>" value="<?php echo $_GET['id']; ?>" >
                <input type="hidden" name="editid" value="<?php echo $_GET['editid']; ?>" >
                <input type="hidden" name="update" value="update" >

                <input class="form-control form-group" name="name" type="text" value="<?php echo $objToArray[0]['name'];?>">
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="authorid">Author</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="authorid" type="text"value="<?php echo $objToArray[0]['authorid'];?>"></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="dop">DOP</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="dop" type="date" value="<?php echo $objToArray[0]['dop'];?>" </div>
            <div class="col-sm-4"></div>
        </div>

        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="categoryid">Category</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="categoryid" type="text" value="<?php echo $objToArray[0]['categoryid'];?>"></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="remarks">Remarks</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="remarks" type="text" value="<?php echo $objToArray[0]['remarks'];?>"></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="price">Price</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="price" type="number" value="<?php echo $objToArray[0]['price'];?>"></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="isbn">ISBN</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="isbn" type="number" value="<?php echo $objToArray[0]['isbn'];?>"></div>
            <div class="col-sm-4"></div>
            </div>

        <tr> <td colspan="3" align="center"><input type="submit" class="ui-button" value="Save"></td>

    </div>
    <div class="col-sm-1"></div>
    </form>
</div>
<!-- author-->
    <?php }
    if($_GET['editid']=='author'){ ?>
        <div class="row">
            <form action="store.php" method="post">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-1 text-left"><label for="name">Name</label></div>
                            <div class="col-sm-1 text-right">:</div>
                            <div class="col-sm-3">
                                <input name="modified" type="text" hidden  value="<?php echo date('Y-m-d');?>">
                                <input type="hidden" name="<?php echo $_GET['id']; ?>" value="<?php echo $_GET['id']; ?>" >
                                <input type="hidden" name="editid" value="<?php echo $_GET['editid']; ?>" >
                                <input type="hidden" name="update" value="update" >
                                <input class="form-control form-group" name="name" type="text" value="<?php echo $objToArray[0]['name'];?>">
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-1 text-left"><label for="dob">DOB</label></div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-3"><input class="form-control form-group" name="dob" type="date" value="<?php echo $objToArray[0]['dob'];?>"></div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-1 text-left"><label for="remarks">Remarks</label></div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-3"><input class="form-control form-group" name="remarks" type="text" value="<?php echo $objToArray[0]['remarks'];?>"></div>
                        <div class="col-sm-4"></div>
                    </div>

                    <tr> <td colspan="3" align="center"><input type="submit" class="ui-button" value="Save"></td>

                    </div>
                </div>
                <div class="col-sm-1"></div>
            </form>
        </div>
<!-- staff-->
    <?php }
    if($_GET['editid']=='staff'){
       // var_dump($viewData);
        ?>
    <div class="row">
        <form action="store.php" method="post">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-1 text-left"><label for="name">Name</label></div>
                    <div class="col-sm-1 text-right">:</div>
                    <div class="col-sm-3">
                        <input name="modified" type="text" hidden  value="<?php echo date('Y-m-d');?>">
                        <input type="hidden" name="<?php echo $_GET['id']; ?>" value="<?php echo $_GET['id']; ?>" >
                        <input type="hidden" name="editid" value="<?php echo $_GET['editid']; ?>" >
                        <input type="hidden" name="update" value="update" >
                        <input class="form-control form-group" name="name" type="text" value="<?php echo $objToArray[0]['name'];?>">
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-1 text-left"><label for="doj">DOJ</label></div>
                    <div class="col-sm-1 text-right">:</div>
                    <div class="col-sm-3"><input class="form-control form-group" name="doj" type="date"></div>
                    <div class="col-sm-4"></div>
            </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-1 text-left"><label for="remarks">Remarks</label></div>
                    <div class="col-sm-1 text-right">:</div>
                    <div class="col-sm-3"><input class="form-control form-group" name="remarks" type="text"></div>
                    <div class="col-sm-4"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-1 text-left"><label for="staffid">Staff</label></div>
                    <div class="col-sm-1 text-right">:</div>
                    <div class="col-sm-3"><input class="form-control form-group" name="staffid" type="text"></div>
                    <div class="col-sm-4"></div>
                </div>
                <tr> <td colspan="3" align="center"><input type="submit" class="ui-button" value="Save"></td>
            <div class="col-sm-1"></div>
        </form>
    </div>
    <?php }
    if($_GET['editid']=='student'){ ?>
        <div class="row">
            <form action="store.php" method="post">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-1 text-left"><label for="name">Name</label></div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-3">
                            <input name="modified" type="text" hidden  value="<?php echo date('Y-m-d');?>">
                            <input type="hidden" name="<?php echo $_GET['id']; ?>" value="<?php echo $_GET['id']; ?>" >
                            <input type="hidden" name="editid" value="<?php echo $_GET['editid']; ?>" >
                            <input type="hidden" name="update" value="update" >
                            <input class="form-control form-group" name="name" type="text">
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-1 text-left"><label for="joined">Joined</label></div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-3"><input class="form-control form-group" name="joined" type="date"></div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-1 text-left"><label for="studentid">Student</label></div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-3"><input class="form-control form-group" name="studentid" type="text"></div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-1 text-left"><label for="remarks">Remarks</label></div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-3"><input class="form-control form-group" name="remarks" type="text"></div>
                        <div class="col-sm-4"></div>
                    </div>
                    <tr> <td colspan="3" align="center"><input type="submit" class="ui-button" value="Save"></td>
                </div>
                <div class="col-sm-1"></div>
            </form>
        </div>
    <?php }
    if($_GET['editid']=='category'){ ?>
<div class="row">
    <form action="store.php" method="post">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-1 text-left"><label for="name">Name</label></div>
                <div class="col-sm-1 text-right">:</div>
                <div class="col-sm-3">
                    <input name="modified" type="text" hidden  value="<?php echo date('Y-m-d');?>">
                    <input type="hidden" name="<?php echo $_GET['id']; ?>" value="<?php echo $_GET['id']; ?>" >
                    <input type="hidden" name="editid" value="<?php echo $_GET['editid']; ?>" >
                    <input type="hidden" name="update" value="update" >
                    <input class="form-control form-group" name="name" type="text" value="<?php echo $objToArray[0]['name'];?>">
                </div>
                <div class="col-sm-4"></div>
            </div>
            <tr> <td colspan="3" align="center"><input type="submit" class="ui-button" value="Save"></td>
        </div>
        <div class="col-sm-1"></div>
    <?php }?>

</div>
<?php
include 'footer.php';
include 'footer_script.php';
?>

</body>
</html>