<?php
$Sr_No=$_POST['Sr_No'];
$Region=$_POST['Region'];
$Circle=$_POST['Circle'];
$Division_Name=$_POST['Division_Name'];
$SubDivision_Name=$_POST['SubDivision_Name'];
$Address1=$_POST['Address1'];
$Address2=$_POST['Address2'];
$Place=$_POST['Place'];
$Email=$_POST['Email'];
$Phone_No=$_POST['Phone_No'];
$Designation=$_POST['Designation'];
$con=@mysqli_connect("localhost","root","","trialzp_project");
if(mysqli_connect_error())
exit("Mysql Error :".mysqli_connect_error());
$query=" INSERT INTO `sub_division` (`Sr_No`, `Region`, `Circle`, `Division_Name`, `SubDivision_Name`, `Address1`,
 `Address2`, `Place`, `Email`, `Phone_No`, `Designation`) 
VALUES ('$Sr_No','$Region', '$Circle', '$Division_Name','$SubDivision_Name','$Address1','$Address2', '$Place', '$Email', '$Phone_No', '$Designation')  ";

mysqli_query($con,$query)or die("Query Error:.....");

if(mysqli_affected_rows($con)>0)
{
    header("location:sub_division.php");
    echo "succcesss";
}
else
echo "Error";
echo "<a href='sub_division.php'> back to list</a>";
?>