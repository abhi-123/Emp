<html>
<head>
<script src="jquery-2.1.4.min.js"></script>
</head>
<body>
<?php
if(!isset($_COOKIE["id"]))
{
	header("location:admin1.php");
}
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$id = $_REQUEST["id"];

if(!isset($id))
{
	header("location:success1.php");
}
$sql = "delete from employee where ID=$id";
$b=mysqli_query($con,$sql); 
?>
</body>
</html>