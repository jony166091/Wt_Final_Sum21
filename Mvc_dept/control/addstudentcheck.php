<?php
include('../model/db.php');


 $error="";

if (isset($_POST['add_student'])) {
if (empty($_POST['name']) || empty($_POST['id']) || empty($_POST['dob'])|| empty($_POST['credit'])|| empty($_POST['cgpa']) || empty($_POST['dept_id']) ) {
$error = "input given is invalid";
} 
else
{
$connection = new db();
$conobj=$connection->OpenCon();



$userQuery=$connection->AddStudent($conobj,"student",$_POST['name'],$_POST['id'],$_POST['dob'],$_POST['credit'],$_POST['cgpa'],$_POST['dept_id']);
if($userQuery==TRUE)
{
   echo "data update successfully";
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>
