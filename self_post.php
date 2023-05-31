<?php
$nm=isset($_POST["nm"])?$_POST['nm']:"";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="
    <?php
    echo $_SERVER['PHP_SELF'];
    ?>"  method="post">
Enter Name:<input type="text" name="nm" 
value="<?php
echo $nm;
?>"/>
<input type="submit" value="Submit"/>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(empty($nm))
    echo "<p style='color:red'> name Required</p>";

else
echo"<p>  Welcome $nm</p>";
}
?>
</form>
</body>
</html>