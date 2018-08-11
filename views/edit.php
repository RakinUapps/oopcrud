<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

    </style>
</head>
<body>
<?php
$id= $_REQUEST['id'];

$conn =new mysqli('localhost', 'root', '' , 'oopcrud');
$sql = $conn->prepare("SELECT * FROM book where id='$id'");
$sql->execute();
$result = $sql->get_result();
$row = mysqli_fetch_assoc($result);

$conn->close();

?>

<form action="update.php" method="post">
    <input name="id" type="hidden" value="<?php echo $id; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['name'];?>"> <br>
    Author: <input type="number" name="authorid" value="<?php echo $row['author'];  ?>"> <br>
    DOP: <input type="date" name="dop" value="<?php echo $row['dop'];  ?>"> <br>
    ISBN: <input type="number" name="isbn" value="<?php echo $row['isbn'];  ?>"> <br>
    Category: <input type="text" name="categoryid" value="<?php echo $row['category'];  ?>"> <br>
    Remarks: <input type="text" name="remarks" value="<?php echo $row['remarks'];  ?>"> <br>
    Price: <input type="number" name="price" value="<?php echo $row['price'];  ?>"> <br>
    Modified: <input type="date" name="modified" value="<?php echo $row['modified'];  ?>"> <br>

    <input type="submit" value="Save">
</form>
<a href="view.php">View Student</a>

</body>
</html>