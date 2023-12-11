<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db_item";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Could'nt connect mysql".mysqli_connect_error());
}
?>