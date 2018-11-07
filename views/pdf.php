<?php
include ('../vendor/autoload.php');
include ('namespace.php');
include ('header.php');

$objData= new \App\Admin\Admin();
$objData->setData($_GET);
$viewData=$objData->view();
$serial=1;
$trs="";
$thead="";
?>

<div class="container">
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

            <?php
            if($_GET['id']=='book'){
               $thead="<tr class='text-center'><th>ID</th><th>Name</th><th>Author</th><th>DOP</th><th>ISBN</th><th>Category</th><th>Remarks</th><th>Price</th><th>Modified</th></tr>";
                foreach ($viewData as $oneData){
                    $id=$oneData->id;
                    $name=$oneData->name;
                    $authorid=$oneData->authorid;
                    $dop=$oneData->dop;
                    $isbn=$oneData->isbn;
                    $categoryid=$oneData->categoryid;
                    $remarks=$oneData->remarks;
                    $price=$oneData->price;
                    $modified=$oneData->modified;
                    $trs.="<tr class='text-center'>";
                    $trs.="<td class='text-right'>$id</td>";
                    $trs.="<td class='text-right'>$name</td>";
                    $trs.="<td class='text-right'>$authorid</td>";
                    $trs.="<td class='text-right'>$dop</td>";
                    $trs.="<td class='text-right'>$isbn</td>";
                    $trs.="<td class='text-right'>$categoryid</td>";
                    $trs.="<td class='text-right'>$remarks</td>";
                    $trs.="<td class='text-right'>$price</td>";
                    $trs.="<td class='text-right'>$modified</td>";
                    $trs.="</tr>";

                    $serial++;
                }
               // echo "</table>";
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



<?php
$html=<<<OOP
 <table border='solid 1 px' width='100%'>
 <thead>
$thead
 </thead>
 <tbody>
 $trs
 </tbody>
 </table>
 
 
OOP;

require_once ('../vendor/mpdf/mpdf/mpdf.php');

$mpdf=new mPDF();

$mpdf->WriteHTML($html);

$mpdf->Output('file.pdf','D');



include 'footer.php';
include 'footer_script.php';
?>
</body>
</html>