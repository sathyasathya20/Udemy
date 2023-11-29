<?php
require('dashboard.php');
?>
<h2>Delete Record</h2>
<form action="delete.php" method="Post">
<table>
<tr><td>Enter your Id:</td><td><input type="text" name="t1"></td></tr>
<tr>
<tr><td></td><td rowspan="2"><input type="submit" name="delete"><input type="reset" name="cancel"></td></tr>
</tr>
</table>
</form>
<?php
if(isset($_POST['delete']))
{
    $x=$_POST['t1'];
    $con=mysqli_connect("localhost","root","","register");

    mysqli_query($con,"delete from students where sno='$x'");
    echo "Deleted!";
}
?>