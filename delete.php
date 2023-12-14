<html>
<head>
<title></title>
<form method="POST">
<body>
<?php
require('connection.php');
if(isset($_POST['sub']))
{
$id=$_POST['inp'];
$sql="delete from item where id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "Record Successfully deleted";
}
else
{
echo "Deletion Failed";
}
mysqli_close($conn);
}
else
{
?>
<form method="POST">
<table>
<tr>
<th>Enter ID :</th>
<td><input type="text" name="inp"></td>
</tr>
<tr>
<td></td>
<td><button name="sub">Submit</button>
<?php
}
?>
</table>
</form>
</body>
</html>
</head>
</html>
