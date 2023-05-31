<?php
$Sr_No=$_POST['Sr_No'];

$con=@mysqli_connect("localhost","root","","trialzp_project");
if(mysqli_connect_error())
exit("Mysql Error :".mysqli_connect_error());

$query="delete from sub_division where Sr_No='$Sr_No'";

mysqli_query($con,$query) or die("Query Error: ".mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
	// auto-redirect n leave existing page
	header("location:sub_division.php");
	echo "Success: Record Deleted.";
}
else
	echo "Error: Cannot Delete Record";

echo "<p><a href='sub_division.php'>Back To List</a></p>";

?>




