<?php
if(!isset($_COOKIE["id"]))
{
	header("location:admin1.php");
}
$c=$_COOKIE["id"];
echo "Welcome ".$c;
?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Employee page</title>
	<link href="admin1.css" rel="stylesheet" />
<script>
function show(){

document.getElementById("m").innerHTML=new Date();;
}
setInterval("show()",1000);
</script>
	</head>
<body onLoad="show();">
<h1>Employee Management Portal</h1>
<div id="m">
</div>
<a href="logout1.php">Logout</a>
<h4>Employee 1</h4><div class="empedit">
<?php
$id=$_REQUEST["id"];
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$sql= "select * from employee where ID=$id";
$r= mysqli_query($con,$sql); // for OOP $r= $con-->($sql);
?>
<?php 
while($row=mysqli_fetch_array($r))// while ($row = $r-->fetch_assoc()) 
{
	?>
	<form action="update1.php">
	ID:&nbsp;&nbsp;&nbsp;<input style="color:black;" type="text" name="id" value="<?php echo  $row["ID"];?>" readonly><br>
	Ename:<input style="color:black;" type="text" name="ename" value="<?php echo $row["empname"];?>"><br><br>
	Eage:&nbsp;&nbsp;<input style="color:black;" type="text" name="eage" value="<?php echo $row["empage"];?>"><br><br>
	Edesig:<input style="color:black;" type="text" name="edesig" value="<?php echo $row["empdesig"];?>"><br><br>
	Sal:&nbsp;&nbsp;<input style="color:black;" type="text" name="sal" value="<?php echo $row["salary"];?>"><br><br>
    DOJ:&nbsp;&nbsp;<input style="color:black;" type="text" name="doj" value="<?php echo $row["dateofjoin"];?>">
   <span class="DOB">DOB:<input style="color:black;" type="text" name="dob" value="<?php echo $row["dob"];?>"></br></span>
	<input style="color:black;"  class="submit" type="submit" value="UPDATE">
	</form>
<?php
	}?>
	
	</div>
<h4>Employee 2</h4><div class="empedit">
<?php
$id=$_REQUEST["id"];
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$sql= "select * from employee where ID=$id";
$r= mysqli_query($con,$sql); // for OOP $r= $con-->($sql);
?>
<?php 
while($row=mysqli_fetch_array($r))// while ($row = $r-->fetch_assoc()) 
{
	?>
	<form action="update1.php">
	ID:&nbsp;&nbsp;&nbsp;<input style="color:black;" type="text" name="id" value="<?php echo  $row["ID"];?>" readonly><br>
	Ename:<input style="color:black;" type="text" name="ename" value="<?php echo $row["empname"];?>"><br><br>
	Eage:&nbsp;&nbsp;<input style="color:black;" type="text" name="eage" value="<?php echo $row["empage"];?>"><br><br>
	Edesig:<input style="color:black;" type="text" name="edesig" value="<?php echo $row["empdesig"];?>"><br><br>
	Sal:&nbsp;&nbsp;<input style="color:black;" type="text" name="sal" value="<?php echo $row["salary"];?>"><br><br>
    DOJ:&nbsp;&nbsp;<input style="color:black;" type="text" name="doj" value="<?php echo $row["dateofjoin"];?>">
   <span class="DOB">DOB:<input style="color:black;" type="text" name="dob" value="<?php echo $row["dob"];?>"></br></span>
	<input style="color:black;" class="submit" type="submit" value="UPDATE">
	</form>
<?php
	}
	?>
	</div>
<h4>Employee 3</h4><div class="empedit">
<?php 
$id=$_REQUEST["id"];
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$sql= "select * from employee where ID=$id";
$r= mysqli_query($con,$sql); // for OOP $r= $con-->($sql);
?>
<?php 
while($row=mysqli_fetch_array($r))// while ($row = $r-->fetch_assoc()) 
{
	?>
	<form action="update1.php">
	ID:&nbsp;&nbsp;&nbsp;<input style="color:black;" type="text" name="id" value="<?php echo  $row["ID"];?>" readonly><br>
	Ename:<input style="color:black;" type="text" name="ename" value="<?php echo $row["empname"];?>"><br><br>
	Eage:&nbsp;&nbsp;<input style="color:black;" type="text" name="eage" value="<?php echo $row["empage"];?>"><br><br>
	Edesig:<input style="color:black;" type="text" name="edesig" value="<?php echo $row["empdesig"];?>"><br><br>
	Sal:&nbsp;&nbsp;<input style="color:black;" type="text" name="sal" value="<?php echo $row["salary"];?>"><br><br>
    DOJ:&nbsp;&nbsp;<input style="color:black;" type="text" name="doj" value="<?php echo $row["dateofjoin"];?>">
   <span class="DOB">DOB:<input style="color:black;" type="text" name="dob" value="<?php echo $row["dob"];?>"></br></span>
	<input class="submit" type="submit" value="UPDATE">
	</form>
<?php
	} 
	?>
</div>	
</body>
</html>