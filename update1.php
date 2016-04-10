<?php
/*if(!isset($_COOKIE["id"]))
{
	header("location:admin1.php");
}
$id=$_REQUEST["id"];
if(!isset($id))
{
	header("location:success1.php");
} */
$id=$_REQUEST["id"];
$n = $_REQUEST["ename"];
$p= $_REQUEST["eage"];
$c= $_REQUEST["edesig"];
$f= $_REQUEST["sal"];
$opt= $_REQUEST["doj"];
$dob= $_REQUEST["dob"];

$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$sql= "update employee set empname='$n',empage=$p,empdesig='$c',salary=$f,dateofjoin='$opt',dob='$dob' where ID=$id"; 
$b=mysqli_query($con,$sql);
if($b)
{ 
	header("location:success1.php");
}
?>