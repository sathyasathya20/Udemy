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


<?php
session_start();
?>
<form action="login.php" method="post">
       <b>Username:</b><input type="text" name="Username"/><br>
        <b>Password:</b><input type="password" name="Password"><br>
       
        <input type="submit" name="s1"><br>
        <a href="register.php">I am new here so sign in</a>
    
    </form>

    <?php
    if(isset($_POST['s1']))
    {
        $a=$_POST['Username'];
        $b=$_POST['Password'];

        $con=mysqli_connect("localhost","root","","register");
        $sq="select * from students where Username='$a' && Password='$b'";
        $chk=mysqli_query($con,$sq);
        $_SESSION['Username']=$a;
        if(mysqli_num_rows($chk)==1)
        {
            //echo "welcome";
            header('location:dashboard.php');
          
        }
        else{
            echo "invalid username and invalid password!";
        }
    }
    ?>
</body>
</html>