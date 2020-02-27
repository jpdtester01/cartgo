<!doctype html>
<head>
<title>
Create A Lesson
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
</head>

<body background="imgFiles/absBackground.jpg" style="background-size:100%;">


<?php
session_start();
if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
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

<?php

$answer="";
if(isset($_SESSION["qAns"]))
{
	if($_POST["lessonName"]=="" || $_POST["nameGround"]=="" || $_POST["lessonGround"]=="")
	{
		echo "<p style='color:red; text-align:center;'>"."Some Fields are Missing."."</p>";
	}
	else
	{
		$files=fopen("lsnFiles/".$_REQUEST["lessonName"]."--".$_REQUEST["nameGround"].".txt","w") or die("Files Couldn't get Created");
		fwrite($files,$_REQUEST["lessonGround"]);
					
					echo "<p style='color:green; text-align:center;'>"."Lesson Has Been Added Successfully."."</p>";
	}
}
else
{
	$_SESSION["qAns"]="yes";
}
?>
<form action="make_lesson.php" method="post">
<pre>
	Course   : <select name="lessonName">
<option value=""></option>
<option value="Introduction to C">Introduction to C</option>
<option value="Introduction to Cpp">Introduction to C++</option>
<option value="Object Oriented Programming Csharp">Object Oriented Programming C#</option>
<option value="Object Oriented Programming JAVA">Object Oriented Programming JAVA</option>
<option value="PHP Hypertext Processor">PHP : Hypertext Processor</option>
</select></br>
	Lesson name :</br>
	<input type="text" name="nameGround" style="width:400px;"/> 
	
	Lesson :</br>
	<textarea rows="200" cols="250" name="lessonGround" style="width:800px; height:200px;"></textarea></br></br>
	<input type="submit" value="Save Note" name="saveButton" style="width:100px;"/>
</form>


<hr>	
</pre>
<?php

print_r($_POST);
?>

</body>
</html>