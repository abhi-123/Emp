<?php
if(!isset($_COOKIE["id"]))
{
	header("location:admin1.php");
}
$c=$_COOKIE["id"];

?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Employee page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="jquery-2.1.4.min.js"></script>
	<link href="admin1.css" rel="stylesheet" />
	<script src="jquery-ui.min.js"></script>
<script src="jquery-ui.min.css"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#link').click(function(){
    $('.main').show({
		effect:"drop",
		direction:"left"
});
 $("body").css("background-color","#292421");
 $(".emp").css("background-color","#292421");
 $(".emp>a").css("background-color","#292421");
//event.stopPropagation();    
});
	 $('#formclose').click(function(){
	$('.main').hide({
		
		effect:"drop",
	   direction:"up"
});

$("body").css("background-color","lightblue");
 $(".emp").css("background-color","lightgreen");
 $(".emp>a").css("background-color","#B0171F");
$("#link1 #link2").css("background-color","red");
 });
	 $("#formclose").click(function(){
		 $("#n").show();
		 $("#n").load("select1.php");
		 
	 }); 
 $(".button").click(function(){
	var name= $("#name").val();
    var age=$("#age").val();
    var desig=$("#desig").val();
	var sal=$("#sal").val();
	var doj=$("#DOJ").val();
	var dob=$("#DOB").val();
	
$.ajax({url:"insert1.php",data:{name:name,age:age,desig:desig,sal:sal,doj:doj,dob:dob},type:"post",success:function(r){
	$("#d").html(r);
	}});
	 $("#d").show({
		effect:"drop",
	   direction:"up"
    

	});
    $(".main").addClass("focus");

	
 });
});

function show(){

document.getElementById("m").innerHTML=new Date();;
}
setInterval("show()",1000);
</script>

	</head>
<body id="body" onLoad="show();">
<h1>Employee Management Portal</h1>
<div id="m">
</div>
<div id="container">
<div id="d">

</div>

<a href="#" id="link">Add new Emp</a>
	<div class="main">
	<a  href="#"><i id="formclose" class="fa fa-times fa-2x" ></i></a>
	<div class="register">
      <h3>Insert the Details</h3>
      <form id="reg-form">
        <div>
          <label for="Name">Name:</label>
          <input type="text" id="name" spellcheck="false" placeholder="" />
        </div>
        <div>
          <label for="Age">Age:</label>
          <input type="text" id="age" spellcheck="false" placeholder="" />
        </div>
        <div>
          <label for="Desig">Desig:</label>
          <input type="text" id="desig" spellcheck="false" placeholder="" />
        </div>
        <div>
          <label for="Salary">Salary:</label>
          <input type="text" id="sal" />
        </div>
        <div>
          <label for="DOJ">DOJ:</label>
          <input type="text" id="DOJ" />
        </div>
		<div>
          <label for="DOB">DOB:</label>
          <input type="text" id="DOB" />
        </div>
        <div>
          <label></label>
          <input type="submit" value="Add Details" id="Adddetails" class="button" />
        </div>
      </form>
      </div>
	  </div>
<span class="adminname"><?php echo "Welcome ".$c;?></span>
<a class="logout" href="logout1.php">Logout</a>
<h4><a id="hemp1" href="#">Employee 1</a></h4><div id="emp1" class="emp">
<?php
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$sql= "select * from employee where ID=34";
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
   <span class="DOB1"> <?php echo "<b>DOB</b>:".$row["dob"];?></br></span>
	<a id="link1" href="delete1.php?id=<?php echo $row["ID"];?>">DELETE</a>
    <a id="link2" href="edit1.php?id=<?php echo $row["ID"];?>">EDIT</a>
    
    <?php 
}?>
</div>
<h4><a id="hemp2" href="#">Employee 2</a></h4><div id="emp2" class="emp">
<?php
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$sql= "select * from employee where ID=37";
$r= mysqli_query($con,$sql); // for OOP $r= $con-->($sql);
?>
<?php 
while($row=mysqli_fetch_array($r))// while ($row = $r-->fetch_assoc()) 
{
	?>
	<?php echo "<b>ID</b>:". $row["ID"]."</br><br>";?>
	<?php echo "<b>Empname</b>:".$row["empname"]."</br><br>";?>
	<?php echo "<b>Empage</b>:".$row["empage"]."</br><br>";?>
	<?php echo "<b>Empdesig</b>:".$row["empdesig"]."</br><br>";?>
	<?php echo "<b>Salary</b>:".$row["salary"]."</br><br>";?>
    <?php echo "<b>DATEOFJOIN</b>:".$row["dateofjoin"]."</br><br>";?>
   <span class="DOB2"> <?php echo "<b>DOB</b>:".$row["dob"];?></br></span>
	<a id="link3" href="delete1.php?id=<?php echo $row["ID"];?>">DELETE</a>
    <a id="link4" href="edit1.php?id=<?php echo $row["ID"];?>">EDIT</a>
    <!--<button type="button" id="link4">EDIT</button>!-->
    <?php 
}?>
</div>
<div>
<h4><a id="hemp3" href="#">Employee 3</a></h4><div id="emp3" class="emp">
<?php
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$sql= "select * from employee where ID=36";
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
   <span class="DOB3"> <?php echo "<b>DOB</b>:".$row["dob"];?></br></span>
	<a id="link5" href="delete1.php?id=<?php echo $row["ID"];?>">DELETE</a>
    <a id="link6" href="edit1.php?id=<?php echo $row["ID"];?>">EDIT</a>
    
    <?php 
}?>
</div>
</div>

<div id="n">
</div>
<!--<h4><a href="">Employee 4</a></h4><div class="emp">
/*<?php
$con=mysqli_connect("localhost","root","","ems");
if(!$con)// FOR object oreinted if($con-->connect_error)
{
	die("not connected");
}
$sql= "select * from employee where ID=1";
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
	<a id="link1" href="delete1.php?id=<?php echo $row["ID"];?>">DELETE</a>
    <a id="link2" href="edit1.php?id=<?php echo $row["ID"];?>">EDIT</a>
    
    <?php 
}?>
</div>!-->
</div>	
</body>
</html>