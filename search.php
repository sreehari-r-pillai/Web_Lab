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
$sql="select * from item where id='$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result)) 
{
echo "<br>Item Name :".$row["item_name"]."<br>";
echo "Item Price :".$row["item_price"]."<br>";
echo "Quantity :".$row["quantity"]."<br>";
echo "Seller Name :".$row["seller_name"]."<br>";
}
}
else
{
echo "No result";
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
