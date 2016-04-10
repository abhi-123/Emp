<html>
<head>
<link rel="stylesheet" href="admin1.css" />
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
 $sql1= "select max(ID) as id from employee";
 $rs=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($rs)){
	$id=$row["id"];
}

$sql= "select * from employee where ID=$id";
$r= mysqli_query($con,$sql); // for OOP $r= $con-->($sql);
?>
<?php 
while($row=mysqli_fetch_array($r))// while ($row = $r-->fetch_assoc()) 
{
	?>
	<?php echo "<b>ID</b>:". $row["ID"]."</br><br>";?>
	<?php echo "<b>Empname</b>:".$row["empname"]."</br><br>";?></>
	<?php echo "<b>Empage</b>:".$row["empage"]."</br><br>";?></>
	<?php echo "<b>Empdesig</b>:".$row["empdesig"]."</br><br>";?></>
	<?php echo "<b>Salary</b>:".$row["salary"]."</br><br>";?></>
    <?php echo "<b>DATEOFJOIN</b>:".$row["dateofjoin"]."</br><br>";?></>
   <span class="DOB"> <?php echo "<b>DOB</b>:".$row["dob"];?></br></span>
	<a id="link3" href="delete1.php?id=<?php echo $row["ID"];?>">DELETE</a>
    <a id="link4" href="edit1.php?id=<?php echo $row["ID"];?>">EDIT</a>
    
    <?php 
}?>
</body>
</html>
