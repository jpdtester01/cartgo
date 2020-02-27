<!doctype html>
<head>
<title>
Lessons
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
</head>

<body background="imgFiles/absBackground.jpg" style="background-size:100%;">
<?php
session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]=="Active")
{
	echo " 	Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]." 	</b>  "; ?><input type="button" onclick="window.location.replace('homepage.php')" name="bckBtn" style="border:2px dashed black; font-size:10px; background-color:white; color:red; " value="	<< Back to Home		"> <?php 
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
<pre>
Course Name :

<table border="5px" style="width:100%; height:50px">
<tr>
<th>  <a href="lesson.php?cname=Introduction to C&fname=">Introduction to C</a> </th>
<th>  <a href="lesson.php?cname=Introduction to Cpp&fname=">Introduction to C++</a> </th>
<th>  <a href="lesson.php?cname=Object Oriented Programming Csharp&fname=">Object Oriented Programming C#</a> </th>
<th>  <a href="lesson.php?cname=Object Oriented Programming JAVA&fname=">Object Oriented Programming JAVA</a> </th>
<th>  <a href="lesson.php?cname=PHP Hypertext Processor&fname=">PHP : Hypertext Processor</a> </th>
</tr>
</table>
</pre>




<div style="width: 25%; float:left; height:100%; background:rgb(176, 227, 168); margin:10px; font-family:verdana; font-size:12px">
<?php

echo "</br>"." ~ <b>".$_GET["cname"]."</b>	Lessons :"."</br>";
$tmpList = scandir("lsnFiles/",0);
$fileList=array();
$finalList=array();

for($i=0; $i<count($tmpList)-2; $i++)
{
	$fileList[$i]=$tmpList[$i+2];
	// echo $fileList[$i]."</br>";
}

// echo "....................";

for($i=0; $i<count($fileList); $i++)
{
	$ar=explode("--",$fileList[$i]);
	if($_GET["cname"]==$ar[0])
	{
		// echo $ar[0]."</br>";
		$arr=explode(".",$ar[1]);
		$finalList[]=$arr[0];
		// echo $finalList[$i]."</br>";
	}
}


?>
<ul style="display: block;list-style-type: square;">

<?php
for($i=0; $i<count($finalList); $i++)
{
?>
	<li> <a style="text-decoration:none;" href="lesson.php?cname=<?php echo $_GET["cname"]; ?>&fname=<?php echo $finalList[$i].".txt"; ?>"><?php echo $finalList[$i]; ?></a></li><br/>
<?php	
}
?>
</ul>
</div>






<div style="width: 70%; float:right; height:100%; background:rgb(202, 204, 204); margin:10px; font-family:verdana; font-size:12px">
<p style="margin:15px;font-family:verdana; font-size:12px">
<?php
if($_GET["fname"]=="")
{
	echo "</br>";
	echo " !!! "." Nothing to preview, Please select a lesson to read.";
}
else
{
	echo "</br>";
	echo " ~ "." Reading File from : <b>".$_GET["fname"]."</b>";
	echo "</br>"."</p>"."<hr>";?><p style="margin:15px;font-family:verdana; font-size:12px"><?php
	echo "</br>";
	
	$files=fopen("lsnFiles/".$_GET["cname"]."--".$_GET["fname"],"r") or die("Unable to open Lesson File");
	while($c=fgets($files))
	{
		echo $c."</br>";
	}
	
}
?>
</p>
</div>
</body>