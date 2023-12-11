<html>
<head>
</head>
<body>
<?php
require('connection.php');
if(isset($_POST['sub']))
{
$name=$_POST["iname"];
$price=$_POST["price"];
$item_quantity=$_POST["quantity"];
$sel_name=$_POST["sname"];
$sql="insert into item(item_name,item_price,quantity,seller_name)VALUES('$name','$price','$item_quantity','$sel_name')";
$result=mysqli_query($conn,$sql);
if($result){
echo "New records successfully created";
}
mysqli_close($conn);
} else {
?>

<form method="POST" action="">
<h2 align="center">REGISTRATION OF ITEMS</h2>
<table align="center" cellspacing="5" cellpadding="5">
<tr>
<th align="left">Enter item name : </th>
<th><input type="text" name="iname"></th>
</tr>
<tr>
<th align="left">Enter item price : </th>
<th><input type="text" name="price"></th>
</tr>
<tr>
<th align="left">Enter quantity : </th>
<th><input type="text" name="quantity"></th>
</tr>
<tr>
<th align="left">Enter seller name : </th>
<th><input type="text" name="sname"></th>
</tr>
<tr>
<td align="center">
<td><button name="sub">Submit</button></td>
<td></td>
<td></td>
</td>
</tr>
</table>
<?php
}
?>
</form>
</body>
</html>