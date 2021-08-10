<?php
include ('../control/addstudentcheck.php');
 session_start(); 
if(empty($_SESSION["username"])) 
 {
 header("Location: ../control/login.php"); // Redirecting To Home Page
 }

?>


<!DOCTYPE html>
<html>
<body>
<h2>Add Student</h2>
<form action="" method="post" enctype="multipart/form-data">
Name :
<input type="text" name="name"><br><br>
Id :
<input type="text" name="id"><br><br>
Dath of Birth : 
<input type="text" name="dob"><br><br>
Credit : 
<input type="number" name="credit"><br><br>
CGPA : 
<input type="text" name="cgpa"><br><br>
Department Id : 
<input type ="number" name = "dept_id"><br><br><br>

<input type="submit" name="add_student" value="Addstudent"><br>
<a href="Dashboard.php">back</a>
</form>

</body>
</html>