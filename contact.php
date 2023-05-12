<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'u392818579_contact_form
', '4DzH/iggxk:','u392818579_contact_sa');

// get the post records

$txtName = $_POST['txtName'];
$txtLName = $_POST['txtLName'];
$txtEmail = $_POST['txtEmail'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldLName`,`fldEmail`,  `fldMessage`) VALUES ('0', '$txtName', '$txtLName', '$txtEmail','$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
