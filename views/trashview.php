<?php
include ('../vendor/autoload.php');
include ('namespace.php');
include ('header.php');


$objData= new \App\Admin\Admin();
$objData->setData($_GET);
$viewData=$objData->trashview();
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
<div class="container">
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

            <?php
            if($_GET['id']=='book'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th>SL</th><th>Name</th><th>Author</th><th>DOP</th><th>ISBN</th><th>Category</th><th>Remarks</th><th>Price</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td>$serial</td> <td>$oneData->name</td> <td> $oneData->authorid</td><td>$oneData->dop</td><td>$oneData->isbn</td><td>$oneData->categoryid</td><td>$oneData->remarks</td> <td>$oneData->price</td><td>$oneData->modified</td><td>";

                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='author'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th>SL</th><th>Name</th><th>DOB</th><th>Remarks</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td> $serial</td> <td>$oneData->name</td> <td> $oneData->dob</td><td>$oneData->remarks</td><td>$oneData->modified</td><td>";
                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='student'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th>SL</th><th>Name</th><th>Student ID</th><th>Joined</th><th>Remarks</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td>$serial</td>  <td>$oneData->name</td> <td> $oneData->studentid</td><td>$oneData->joined</td><td>$oneData->remarks</td><td>$oneData->modified</td><td>";
                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='category'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th>SL</th><th>Name</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td>$serial</td> <td>$oneData->name</td><td>";
                    $serial++;
                }

                echo "</table>";
            }
            if($_GET['id']=='staff'){
                echo "<table id='resulttable' border='5' width='900px' style='border-spacing: 50px; border: deepskyblue; text-align: center;'> <tr><th>SL</th><th>Name</th><th>Staff ID</th><th>Joined</th><th>Remarks</th><th>Modified</th><th>Action</th></tr>";
                foreach ($viewData as $oneData){
                    echo "<tr><td>$serial</td>  <td>$oneData->name</td><td>$oneData->staffid</td> <td> $oneData->doj</td><td>$oneData->remarks</td><td>$oneData->modified";
                    $serial++;
                }

                echo "</table>";
            }


            ?>

    </div>
    <div class="col-sm-1"></div>
</div>
</div>


<?php
include 'footer.php';
include 'footer_script.php';
?>
</body>
</html>