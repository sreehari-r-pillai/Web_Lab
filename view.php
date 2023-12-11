<html>
<head>
</head>
<body>
<?php
require('connection.php');
$sql="select * from item";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0) {
while($row=mysqli_fetch_assoc($result)) {
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
?>
</body>
</html>