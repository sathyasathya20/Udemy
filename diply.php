<?php
require('dashboard.php');
        $con=mysqli_connect("localhost","root","","register");
        $sq="select * from students";
        //$chk=mysqli_query($con,$sq);
        if ($result = $con->query($sq)) {

            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
              
               echo $field1name = $row["Username"]." ";
               echo $field2name = $row["Password"]." ";
               echo $field3name = $row["Emailid"]."<br>";
            }
           // echo $field1name;
        }

?>
        