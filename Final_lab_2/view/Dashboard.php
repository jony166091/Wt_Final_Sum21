<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to Dashboard page.</h5>

<h5>Do you want to Show All Student<a href="Showstudent.php">Show All Student</a></h5><br>
<h5>Do you want to Edit Student <a href="pagetwo.php"> Edit Student</a></h5><br>
<h5>Do you want to Add Student<a href="addproduct.php"> ADD Student</a></h5>
<br/>
<h5>Do you want ADD Department <a href="Adddepartment.php">Add Department</a></h5>
<br/>
<h5>Do you want Show Department <a href="Showdepartment.php"> Show Department</a></h5>
<br/>
 <h5>Do you want to  <a href="../control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   


