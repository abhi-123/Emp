<?php
 $error="";
IF($_SERVER["REQUEST_METHOD"]=="POST"){
	
$u=$_REQUEST["username"];
$p=$_REQUEST["pwd"];
$con=mysqli_connect("localhost","root","","ems");
if(!$con)
{
	die("not connected");
}
$sql= "select * from admin where user='$u' and password='$p'";
$r= mysqli_query($con,$sql);
$count=mysqli_num_rows($r);
if($count>0)
{
     setcookie("id",$u,time()+9999999999999);
      $c=$_COOKIE["id"];
	header("location:success1.php");
}
else{
	$error="Invalid username and password";
}
}
?>
<html>
<head>
<title>Admin page</title>
<style type="text/css">
body{
margin:0px;
padding:0px;
}
img{
	position:absolute;
	left:0px;
	right:0px;
	z-index:-1;
	width:1366px;
	height:702px;
}
.focus{
	-webkit-filter:blur(30px);
}
.inputfocus{
	background:black;
}

.error{
color:red;
position:absolute;
right:-217px;
top:89px;
}
#form{
z-index:20;
border:2px solid black;
margin:10px;
position:absolute;
top:250px;
left:550px;
width:300px;
border-radius:10px;
background-color:tansparent;

}
.formfocus{
background-color:#EEEFF2;	
}
#m{
	background-color:black;
	color:white;
	float:right;
	border:1px solid white;
	position:absolute;
	top:2px;
	right:0px;
}
input{
	background:transparent;
	color:white;
	border-radius:7px;
}
h1{
	font:30px bold Tahoma;
	color:black;
	position:absolute;
	z-index:1;
	left:450px;
	top:-20px;

}
</style>
<script src="jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){
$("input[type=text],[type=password]").focus(function(){
$("img").addClass("focus");
$("#form").addClass("formfocus");
$("input").addClass("inputfocus");
});
$("input[type=text],[type=password]").blur(function(){
$("img").removeClass("focus");
$("#form").removeClass("formfocus");
$("input").removeClass("inputfocus");
});
});
function show(){

document.getElementById("m").innerHTML=new Date();;
}
setInterval("show()",1000);

</script>
</head>
<body onLoad="show();">
<img src="bg.jpg"/>
<div id="m">
</div>
<h1>Employee Management Portal</h1>
<form id="form" method="post" action="<?php $_SERVER["PHP_SELF"];?>">
<h4 style="color:red"> *Required fields</h4><br>
<span  style="color:red">*</span>Admin Name:
<input type="text" name="username"  placeholder="Enter the username"><br><br>
&nbsp;<span style="color:red">*</span>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="pwd"  placeholder="Password">
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Login" value="submit">
<span class="error"><?php echo $error ?></span>
</form>
</body>
</html>