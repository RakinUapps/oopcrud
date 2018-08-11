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
        <form action="store.php" method="post">
            <input type="hidden" name="addbook" value="addbook">
            <table>
                <tr><td>Name</td>  <td>:</td><td><input type="text" name="name" required></td></tr>
                <tr> <td>Author</td>  <td>:</td><td><input type="number" name="authorid" required></td></tr>
                <tr> <td>DOP</td>  <td>:</td><td><input type="date" name="dop" required></td></tr>
                <tr> <td>ISBN</td>  <td>:</td><td><input type="number" name="isbn" required></td></tr>
                <tr> <td>Category</td>  <td>:</td><td><input type="number" name="categoryid" required></td></tr>
                <tr> <td>Remarks</td>  <td>:</td><td><input type="text" name="remarks" required></td></tr>
                <tr> <td>Price</td>  <td>:</td><td><input type="number" name="price" required></td></tr>
                <tr> <td>Modified</td>  <td>:</td><td><input type="date" name="modified" required></td></tr>
                <tr> <td colspan="3" align="center"><input type="submit" value="Save"></td>
                </tr>

            </table>
        </form>
    <?php }
    if($_GET['id']=='addauthor'){ ?>
        <form action="store.php" method="post">
            <table>
                <tr><td>Name</td>  <td>:</td><td><input type="text" name="fullName" required></td></tr>
                <tr> <td>DOB</td>  <td>:</td><td><input type="date" name="dob" required></td></tr>
                <tr> <td>Remarks</td>  <td>:</td><td><input type="text" name="remarks" required></td></tr>
                <tr> <td>Modified</td>  <td>:</td><td><input type="date" name="modified" required></td></tr>
                <tr> <td colspan="3" align="center"><input type="submit" value="Save"></td>
                </tr>
            </table>
        </form>
    <?php }?>
<a href="view.php">View Book</a>
</div>
<?php
include 'footer.php';
include 'footer_script.php';
?>

</body>
</html>