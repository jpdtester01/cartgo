<head>
<title>
Login to Account
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
</head>
<?php
session_start();
// include("logout.php");
?>
<body background="imgFiles/absBackground.jpg" style="background-size:100%;">

<center>
<img src="/OnclickExamania/imgFiles/upbanner.png" alt="banner cover" />
</center>

<script language="javascript" type="text/javascript">
function valfunc(elName)
{
	var flag=true;
	if(elName=="uname" || elName=="all")
	{
		// alert(elName);
		var eleValue = regi.uname.value;
	
		if(eleValue.length==0)
		{
			flag=false;
			document.getElementById("untext").innerHTML="Required Field !";
			document.regi.uname.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else if(eleValue.length<5)
		{
			flag=false;
			document.getElementById("untext").innerHTML="Username Must Contain 5 Characters";
			document.regi.uname.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			//flag=true;
			document.getElementById("untext").innerHTML="";
			document.regi.uname.style="background-color:rgb(192, 255, 184)";
		}
	}
	else if(elName=="pass" || elName=="all")
	{
		var eleValue = regi.pass.value;
		if(eleValue.length==0)
		{
			flag=false;
			document.getElementById("ptext").innerHTML="Password must not be Empty.";
			document.regi.pass.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			//flag=true;
			document.getElementById("ptext").innerHTML="";
			document.regi.pass.style="background-color:rgb(192, 255, 184)";
		}
	}
	return flag;
}
</script>

<div style="width: 35%; float:left; height:300px; border:1px solid black; border-radius:25px; margin:50px 0px 0px 200px; font-family:verdana; font-size:12px" align="center">
<form action="login_check.php" name="regi" method="post">
<br/>
<?php
if(isset($_SESSION["msg"]))
{
?>
	<p style='color:red'><?php echo $_SESSION["msg"]; ?></p>
<?php
	unset($_SESSION["msg"]);
}
else
{
	echo "</br>";
}
?>
<h1 align="center">Login to Your Account</h1>
<pre align="center">User name : <input value="" type="text" onkeyup="valfunc('uname')" name="uname" >
	    <span id="untext" style="color:red; font-size:10px;"></span>
<p align="center">Password:   <input type="password" onkeyup="valfunc('pass')" name="pass">
	     <span id="ptext" style="color:red;font-size:10px"></span>
</pre>
<br>
<input type="submit" name="sbt" onkeyup="valfunc('all')" value="Login" style="color:green; width:200px; height:25px"> <input type="reset" style="color:gray; width:50px; height:25px"><br>
<br>
<p align="center">Don't have an account? Create an account,<a href="registration.php">Click here</a> </p>
</form>
</div>

<div style="width: 45%; float:right; height:300px; margin:0px 0px 0px 0px; font-family:verdana; font-size:12px"></br></br>
<?php
$con = mysqli_connect("localhost","root","","onclickexamania");
$sql = "select * from login where type='Student'";
$sql2 = "select * from login where type='Teacher'";
$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));
$rsd2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
$stuNo=mysqli_num_rows($rsd);
$tchNo=mysqli_num_rows($rsd2);
?>
<span style="font-size:130px; font-family:Algerian;">0<?php echo $stuNo; ?></span>Students are Registered</br>
<span style="font-size:130px; font-family:Algerian;">0<?php echo $tchNo; ?></span>Teachers are Online
</div>

</body>