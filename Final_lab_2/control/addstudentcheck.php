<?php
include('../model/db.php');


 $error="";

if (isset($_POST['add'])) {
if (empty($_POST['name']) || empty($_POST['id']) || empty($_POST['dob'])|| empty($_POST['credit'])|| empty($_POST['cgpa']) || empty($_POST['dept_id']) ) {
$error = "input given is invalid";
} 
else
{
$connection = new db();
$conobj=$connection->OpenCon();



$userQuery=$connection->AddProduct($conobj,"student",$_POST['name'],$_POST['id'],$_POST['dob'],$_POST['credit'],$_POST["cgpa"],$_POST["dept_id"]);
if($userQuery==TRUE)
{
    if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $imageLocation)) {
       echo "data uploaded.";
    } else {
        echo "Sorry, data was not uploaded.";
    }
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>
