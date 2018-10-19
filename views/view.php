<?php
include ('../vendor/autoload.php');
include ('namespace.php');
include ('header.php');

$objData= new \App\Admin\Admin();
$objData->setData($_GET);
$viewData=$objData->view();
//var_dump($viewData);
/*$conn =new mysqli('localhost', 'root', '' , 'oopcrud');
$sql = $conn->prepare("SELECT * FROM USER");
$sql->execute();
$result = $sql->get_result();
$conn->close();
if ($result->num_rows > 0) {

    echo "<table id='resulttable' border='3' width='500px' style='border-spacing: inherit'> <tr><th>ID</th><th>Name</th><th>Author</th><th>DOP</th><th>ISBN</th><th>Category</th><th>Remarks</th><th>Price</th><th>Modified</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['id']." </td> <td>".$row['name']."</td> <td> ".$row['author']."</td><td>".$row['dop']."</td><td>".$row['category']."</td><td>".$row['isbn']."</td><td>".$row['remarks']."</td> <td>".$row['price']."</td><td>".$row['modified']."</td><td><a href=edit.php?id=".$row['id'].">Edit</a> <a  href=delete.php?id=".$row['id'].">Delete</a></td></tr>";
    }
    echo "</table>";
}*/
$serial=1;
?>
<form action="trashmultiple.php" id="multiple" method="post">
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-9 text-right">
            <a href="trashview.php?id=<?php echo $_GET['id']?>"   class="btn btn-info role="button"> View Trashed List</a>
            <button type="submit" class="btn btn-warning">Trash Selected</button>
            <input type="hidden" name="deleteid" value="<?php echo $_GET['id']?>">
        </div>
        <div class="col-sm-1"></div>
    </div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

            <?php
            if($_GET['id']=='book'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th><th>SL</th><th>ID</th><th>Name</th><th>Author</th><th>DOP</th><th>ISBN</th><th>Category</th><th>Remarks</th><th>Price</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'></td><td>$serial</td><td>$oneData->id</td> <td>$oneData->name</td> <td> $oneData->authorid</td><td>$oneData->dop</td><td>$oneData->isbn</td><td>$oneData->categoryid</td><td>$oneData->remarks</td> <td>$oneData->price</td><td>$oneData->modified</td><td><a href=edit.php?id=$oneData->id&editid=".$_GET['id'].">Edit</a><a  href=delete.php?id=$oneData->id&deleteid=book> Delete</a></td></tr>";

                    $serial++;
                }
                echo "</table>";
            }
            if($_GET['id']=='author'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th><th>SL</th><th>ID</th><th>Name</th><th>DOB</th><th>Remarks</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'>
                     <td> $serial</td><td>$oneData->id</td> <td>$oneData->name</td> <td> $oneData->dob</td><td>$oneData->remarks</td><td>$oneData->modified</td><td><a href=edit.php?id=$oneData->id&editid=".$_GET['id'].">Edit</a><a  href=delete.php?id=$oneData->id&deleteid=author> Delete</a></td></tr>";
                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='student'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th><th>SL</th><th>ID</th><th>Name</th><th>Student ID</th><th>Joined</th><th>Remarks</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'>
                   <td>$serial</td><td>$oneData->id</td>  <td>$oneData->name</td> <td> $oneData->studentid</td><td>$oneData->joined</td><td>$oneData->remarks</td><td>$oneData->modified</td><td><a href=edit.php?id=$oneData->id&editid=".$_GET['id'].">Edit</a><a  href=delete.php?id=$oneData->id&deleteid=student> Delete</a></td></tr>";
                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='category'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'><table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th> <th>SL</th><th>ID</th><th>Name</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'>
                    <td>$serial</td><td>$oneData->id</td> <td>$oneData->name</td><td><a href=edit.php?id=$oneData->id&editid=".$_GET['id'].">Edit</a><a  href=delete.php?id=$oneData->id&deleteid=category>  Delete</a></td></tr>";
                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='staff'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <th style='text-align: center'><input id='select_all' type='checkbox' value='select all'> Select All</th><th>SL</th><th>ID</th><th>Name</th><th>Staff ID</th><th>Joined</th><th>Remarks</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td style='padding-left:6%'><input type='checkbox' class='checkbox' name='mark[]' value='$oneData->id'>
                    <td>$serial</td><td>$oneData->id</td>  <td>$oneData->name</td><td>$oneData->staffid</td> <td> $oneData->doj</td><td>$oneData->remarks</td><td>$oneData->modified</td><td><a href=edit.php?id=$oneData->id&editid=".$_GET['id'].">Edit</a><a  href=delete.php?id=$oneData->id&deleteid=staff> Delete</a></td></tr>";
                    $serial++;
                }

                echo "</table>";
            }


            ?>

    </div>
    <div class="col-sm-1"></div>
</div>
</div>

</form>

<?php
include 'footer.php';
include 'footer_script.php';
?>
</body>
</html>