<?php
$con=@mysqli_connect("localhost","root","","trialzp_project");
if(mysqli_connect_error())
exit("Mysql Error :".mysqli_connect_error());
$filter=isset($_REQUEST['filter']) ? $_REQUEST['filter']: "";
if(empty($filter))


$query= " SELECT * FROM `sub_division` order by Sr_No ";
else
$query="select * from sub_division where Division_Name like '%$filter%' order by Sr_No  ";
$result=mysqli_query($con,$query) or die("Query Error .....".mysqli_error($con));
?>

<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .container
    {
        display:grid;
        grid-template-columns:repeat(1, 2fr);
        grid-gap: 20px;


    }
table {
  border-collapse: collapse;
  margin-top: 10px;
      }

tr {
border-bottom: 1px solid lightgray;
text-align: center;

   }

   th
   {
       background-color: lightcyan;
       font-size: 15px;
   }
   td
   {
    font-size: 18px;

   }
   .new
   {
       margin-left: 1100px;
       padding: 10px;
       background-color: lightcyan;
       font-weight: bold;

   }
   /* .find
   {
       padding: 10px;
       background-color: khaki;
       font-weight: bold;

   } */
   .view
   {
    background-color: lightcyan;
       font-weight: bold;
       padding: 10px;



   }
   .edit
   {
    background-color: lightcyan;
       font-weight: bold;
       padding: 10px;


   }
   .delete
   {
    background-color: lightcyan;
       font-weight: bold;
       padding: 10px;


   }


.delete-popup {
display: none;
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 300px;
padding: 20px;
background-color: #fff;
border: 1px solid #ccc;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
text-align: center;
}

.delete-popup h2 {
margin-top: 0;
}

.delete-popup p {
margin-bottom: 20px;
}

.delete-popup button {
margin-right: 10px;
}


















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



<div class="container">
<center>
<a href='new_subdivision.php' class="new">NEW</a> &nbsp;&nbsp;&nbsp;
<!-- <a href='new_subdivision.php'  class="find">SEARCH</a>  -->




<form action="sub_division.php" method="post">
Search Product:
<input type="text" name="filter" value="<?php
echo $filter;
?>"/>
<input type="submit" value="Submit">
</form>






<table   cellpadding='14' >
<table   cellpadding='14' >
 <tr >
 <th >Sr_No</th>
 <th>Region</th>
 <th>Circle</th>
 <th>Division_Name</th>
 <th>SubDivision_Name</th>
 <th>Address1</th>
 <th>Address2</th>
 <th>Place</th>
 <th>Email</th>
 <th>Phone_No</th>
 <th>Designation</th>
 <th>Action</th>


 </tr>
 <?php
 while($row=mysqli_fetch_array($result)):
 ?>

    
     <tr  >
    <td><?=$row["Sr_No"] ?> </td>
    <td>  <?=$row["Region"] ?> </td>
   <td>  <?=$row["Circle"]?> </td>
  <td>  <?=$row["Division_Name"]?> </td>
    <td>  <?=$row["SubDivision_Name"]?> </td>
    <td>  <?=$row["Address1"]?> </td>
   <td>  <?=$row["Address2"]?> </td>
    <td>  <?=$row["Place"]?> </td>
  <td>  <?=$row["Email"]?> </td>
   <td>  <?=$row["Phone_No"]?> </td>
    <td>  <?=$row["Designation"]?> </td>

    <td>
    <a href="view_subdivision.php   ?  Sr_No=<?=$row["Sr_No"] ?>" class="view">              View    </a>
<a href="edit_subdivision.php   ?  Sr_No=<?=$row["Sr_No"] ?>" class="edit">            Edit    </a>

&nbsp;<a href="popchat.php  ? Sr_No=<?=$row["Sr_No"] ?>" class="delete" > Delete </a> 



  
    </td>

</tr>
<?php
endwhile;
?>
</table>
</center>

</div>






































</body>
</html>