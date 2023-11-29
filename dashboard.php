<?php
session_start();
?>
<header style="background-color:gray; padding:10px;">
<h1>welcome <?php echo  $_SESSION['Username']; ?></h1>
<a href="update.php">Update Details</a>|
<a href="delete.php">Delete Record</a>|
<a href="diply.php">Display All</a>|
</header>