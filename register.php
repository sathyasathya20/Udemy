<! Doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title> PHP Registration Form </title>  
<style>  

* {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
body {  
    margin: 50px auto;  
    text-align: center;  
    width: 800px;  
}  
input {  
    border: 2px solid #ccc;  
    font-size: 1rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
}  
form {  
    margin: 20px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    
}  

</style>  
</head>  
<body>
<h2>Register Page</h2>
<form action="register.php" method="Post">
<table>
<tr><td>Username:</td><td><input type="text" name="t1"></td></tr>
<tr><td>Password:</td><td><input type="password" name="t2"></td></tr>
<tr><td>Emailid:</td><td><input type="email" name="t3"></td></tr>
<tr>
<tr><td><input type="submit" name="sub"></td></tr>
<tr><td><a href="login.php">I have an account</a></td></tr>
</tr>
</table>
</form>
<?php
if(isset($_POST['sub']))
{
$v1=$_POST['t1'];
$v2=$_POST['t2'];
$v3=$_POST['t3'];

$con=new mysqli("localhost","root","","register");
$sq="insert into students(Username,Password,Emailid) values('$v1','$v2','$v3')";

if($con->query($sq)==TRUE)
{
    echo "Created";
}
else{
  echo "error".$sq."<br>".$con->error;
}
$con->close();
}
?>
</body>
</html>