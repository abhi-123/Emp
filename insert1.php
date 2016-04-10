<?php
$error=0;
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript">
	$('#popclose').click(function(){
	$('#d').hide({
		effect:"drop",
	   direction:"up"
});
$(".main").removeClass("focus")
	});

	</script>
	<style type="text/css">
	p{
		color:lightgreen;
		position:absolute;
	left:110px;
	top:20px;
	z-index:10000;
	}
	
	
	</style>
</head>
<body>
	<a  href="#"><i class="fa fa-times" id="popclose" ></i></a>
<?php
$name=$_REQUEST["name"];
$age=$_REQUEST["age"];
$sal=$_REQUEST["sal"];
$desig=$_REQUEST["desig"];
$doj=$_REQUEST["doj"];
$dob=$_REQUEST["dob"];
 if($name==""||$age==""||$sal==""||$desig==""||$doj==""||$dob=="")
{
	$error=1;
	echo "<p><b>Invalid Employee Details</b></p>";
      
	}
	else{
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$sql= "insert into employee(empname,empage,empdesig,salary,dateofjoin,dob)values('$name',$age,'$desig',$sal,'$doj','$dob')";
$b = mysqli_query($con,$sql);
if($b)
{
	echo "<p><b>You have Successfully registered</b></p>";
	
	}}
?>
</body>
</html>