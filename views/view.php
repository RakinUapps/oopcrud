<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database</title>
    <style>
            td{
                text-align: center;

            }
        table,th,tr{
          border: 4px solid black;


        }
        table{
            border-collapse: collapse;
        }


    </style>
</head>
<body>
<div align="center">


<?php
$conn =new mysqli('localhost', 'root', '' , 'oopcrud');
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
}

?>
    <a href="index.php">Add</a>
<?php 



?>


</div>
</body>
</html>