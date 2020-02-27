<!doctype html>
<head>
<title>
Note Preview
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
</head>

<body background="imgFiles/absBackground.jpg" style="background-size:100%;">
<?php
session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]=="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b> "; ?><input type="button" onclick="window.location.replace('homepage.php')" name="bckBtn" style="border:2px dashed black; font-size:10px; background-color:white; color:red; " value="	<< Back to Home		"> <?php
}
else
{
	$_SESSION["msg"]="Suspicious login attempt.";
	header("Location:logout.php");
}
?>
<center>
<img src="/OnclickExamania/imgFiles/upbanner.png" onclick="window.location.replace('homepage.php')" alt="banner cover" />
</center>
<div style="width: 70%; height:900px; background:rgb(202, 204, 204); margin:0px 0px 30px 200px; font-family:verdana; font-size:12px">
<p style="margin:15px;font-family:verdana; font-size:12px">
<script>
function editpage()
{
	alert("Successfull");
}
</script>
<?php

	echo "</br>";
	echo " ~ "." Reading File from : <b>".$_GET["fname"]."</b>";
	?>
	<input type="button" onclick="editpage()" name="editBtn" style="border:2px dashed black; font-size:10px; background-color:white; color:red; " value="	Edit Note ">
	<?php
	echo "</br>"."</p>"."<hr>";?><p style="margin:15px;font-family:verdana; font-size:12px"><?php
	echo "</br>";
	
	$files=fopen("noteFiles/".$_SESSION["user"]."--".$_GET["fname"],"r") or die("Unable to open Lesson File");

	while($c=fgets($files))
	{
		echo $c."</br>";
	}
?>
</p>
</div>
</body>
</html>