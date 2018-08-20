<?php
include ('../vendor/autoload.php');
use App\Message\Message;
use App\Utility\Utility;


$objAdmin = new \App\Admin\Admin();

$msg = Message::getMessage();

//Utility::redirect('User/Profile/signup.php');


include 'header.php';
?>

<div class="text-center">
    <?php echo "<div style='height: 30px; text-align: center'> <div class='alert-success' id='message'> $msg</div> </div>"; ?>
</div>
<div id="tb" align="center">
    <?php
    if($_GET['id']=='addbook'){ ?>
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

                <input class="form-control form-group" name="name" type="text">
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="authorid">Author</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="authorid" type="text"></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="dop">DOP</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="dop" type="date" </div>
            <div class="col-sm-4"></div>
        </div>

        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="categoryid">Category</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="categoryid" type="text"></div>
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
            <div class="col-sm-1 text-left"><label for="price">Price</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="price" type="number"></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="isbn">ISBN</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="isbn" type="number"></div>
            <div class="col-sm-4"></div>
            </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-1 text-left"><label for="modified">Modified</label></div>
            <div class="col-sm-1 text-right">:</div>
            <div class="col-sm-3"><input class="form-control form-group" name="Modified" type="date"></div>
            <div class="col-sm-4"></div>
        </div>
        <tr> <td colspan="3" align="center"><input type="submit" class="ui-button" value="Save"></td>

    </div>
    <div class="col-sm-1"></div>
    </form>
</div>
<!-- authoe-->
    <?php }
    if($_GET['id']=='addauthor'){ ?>
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
                                <input class="form-control form-group" name="name" type="text">
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-1 text-left"><label for="dob">DOB</label></div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-3"><input class="form-control form-group" name="dob" type="date"></div>
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
                </div>
                <div class="col-sm-1"></div>
            </form>
        </div>
<!-- staff-->
    <?php }
    if($_GET['id']=='addstaff'){ ?>
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
                        <input class="form-control form-group" name="name" type="text">
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
    if($_GET['id']=='addstudent'){ ?>
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
    if($_GET['id']=='addcategory'){ ?>
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
                    <input class="form-control form-group" name="name" type="text">
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