<?php
include ('../vendor/autoload.php');
include ('namespace.php');
include ('header.php');


$objData= new \App\Admin\Admin();
$objData->setData($_GET);
$viewData=$objData->trashview();

$serial=1;
?>
    <form action="recovermultiple.php" method="post" id="multiple">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-9" style="text-align: right">
                    <button type="submit" class="btn btn-warning">Recover Selected</button>
                    <input type="hidden" name="recoverid" value="<?php echo $_GET['id']?>">
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>



<div class="container">
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

            <?php
            if($_GET['id']=='book'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th><th>SL</th><th>ID</th><th>Name</th><th>Author</th><th>DOP</th><th>ISBN</th><th>Category</th><th>Remarks</th><th>Price</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'></td><td>$serial</td><td>$oneData->id</td> <td>$oneData->name</td> <td> $oneData->authorid</td><td>$oneData->dop</td><td>$oneData->isbn</td><td>$oneData->categoryid</td><td>$oneData->remarks</td> <td>$oneData->price</td><td>$oneData->modified</td><td><a href=restore.php?id=$oneData->id&restoreid=".$_GET['id'].">Restore</a><a  href=harddelete.php?id=$oneData->id&deleteid=book> Delete</a></td></tr>";

                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='author'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th><th>SL</th><th>ID</th><th>Name</th><th>DOB</th><th>Remarks</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'><td> $serial</td><td>$oneData->id</td> <td>$oneData->name</td> <td> $oneData->dob</td><td>$oneData->remarks</td><td>$oneData->modified</td><td><a href=restore.php?id=$oneData->id&restoreid=".$_GET['id'].">Restore</a><a  href=harddelete.php?id=$oneData->id&deleteid=author> Delete</a></td></tr>";
                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='student'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th><th>SL</th><th>ID</th><th>Name</th><th>Student ID</th><th>Joined</th><th>Remarks</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'><td>$serial</td><td>$oneData->id</td>  <td>$oneData->name</td> <td> $oneData->studentid</td><td>$oneData->joined</td><td>$oneData->remarks</td><td>$oneData->modified</td><td><a href=restore.php?id=$oneData->id&restoreid=".$_GET['id'].">Restore</a><a  href=harddelete.php?id=$oneData->id&deleteid=student> Delete</a></td></tr>";
                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='category'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th><th>SL</th><th>ID</th><th>Name</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'><td>$serial</td><td>$oneData->id</td> <td>$oneData->name</td><td><a href=restore.php?id=$oneData->id&restoreid=".$_GET['id'].">Restore</a><a  href=harddelete.php?id=$oneData->id&deleteid=category>  Delete</a></td></tr>";
                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='staff'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th><th>SL</th><th>Name</th><th>Staff ID</th><th>Joined</th><th>Remarks</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'><td>$serial</td>  <td>$oneData->name</td><td>$oneData->staffid</td> <td> $oneData->doj</td><td>$oneData->remarks</td><td>$oneData->modified</td><a href=restore.php?id=$oneData->id&restoreid=".$_GET['id'].">Restore</a><a  href=harddelete.php?id=$oneData->id&deleteid=category>  Delete</a></tr>";
                    $serial++;
                }

                echo "</table>";
            }


            ?>
    </form>
    </div>
    <div class="col-sm-1"></div>
</div>
</div>
<?php
include 'footer.php';
include 'footer_script.php';
?>