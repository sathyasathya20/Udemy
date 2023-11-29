<?php
require('dashboard.php');
?>
<h2>update Page</h2>
<form action="update.php" method="Post">
<table>
<tr><td>Enter your Id:</td><td><input type="text" name="t0"></td></tr>
<tr><td>Update your Username:</td><td><input type="text" name="t1"></td></tr>
<tr><td>Update your Password:</td><td><input type="password" name="t2"></td></tr>
<tr><td>Update your Email id:</td><td><input type="email" name="t3"></td></tr>
<tr>
<tr><td></td><td rowspan="2"><input type="submit" name="sub"><input type="reset" name="cancel"></td></tr>
</tr>
</table>
</form>
<?php
if(isset($_POST['sub']))
{
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $c=$_POST['t3'];
    $d=$_POST['t0'];
    $con=new mysqli("localhost","root","","register");
    $sql="update students set Username='$a',Password='$b',Emailid='$c'";
    if($con->query($sql)==TRUE)
    {
        echo "updated";
    }
    else{
        echo "error =".$sql."<br>".$con->error;
    }
    $con->close();
}
?>