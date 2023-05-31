<?php
$con=@mysqli_connect("localhost","root","","trialzp_project");
if(mysqli_connect_error())
exit("Mysql Error :".mysqli_connect_error());
$Sr_No=$_GET['Sr_No'];

$query="Select * from sub_division where Sr_No='$Sr_No' ";
$result=mysqli_query($con,$query) or die("Query Error");

if($row=mysqli_fetch_array($result))
{

$Region=$row['Region'];
$Circle=$row['Circle'];
$Division_Name=$row['Division_Name'];
$SubDivision_Name=$row['SubDivision_Name'];
$Address1=$row['Address1'];
$Address2=$row['Address2'];
$Place=$row['Place'];
$Email=$row['Email'];
$Phone_No=$row['Phone_No'];
$Designation=$row['Designation'];
}
else
{
	exit("Record Not Found");
}
?>


<html>
<head>
<title> Delete </title>
<style>
	.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 30%; /* Full width */
  height: 30%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: khaki;
  padding-top: 50px;
  text-align: center;
  margin-top: 200px;
  margin-left: 600px;
}
p
{
font-weight: bold;
font-size: 25px;
}
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
.btndelcan button
{
  font-size: 15px;
  background-color: lightslategray;
  font-weight: bold;
  margin-bottom: 20px;

}

	</style>
</head>
<body>
<center>

<form action='act_delete_subdivision.php' method='post'>

<input type="hidden" name="Sr_No"  value="<?php echo $Sr_No; ?>" />

<!-- <?php 
echo "<h2 style='color:red'>Delete Record: $Sr_No ?
</h2>"; 
?> -->

<div class="modal">
	  <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> -->

<p style='color:red' >Are you sure you want to delete your Record?</p>
<div class="btndelcan"> 
  <button>Confirm Delete</button> 
  <button><a href='sub_division.php'>Cancel</a></button>

</div>

<!-- <input type="submit" value='Confirm Delete' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

<!-- <a href='sub_division.php'>Cancel</a> -->
</div>

</form>
</center>
</body>
</html>