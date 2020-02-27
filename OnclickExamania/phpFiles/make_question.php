<!doctype html>
<head>
<title>
Lesson Questionare
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
	if($_POST["ques"]=="" || $_POST["ans"]=="" || $_POST["courseName"]=="" || $_POST["c1"]=="" || $_POST["c2"]=="" || $_POST["c3"]=="" || $_POST["c4"]=="")
	{
		echo "<p style='color:red; text-align:center;'>"."Some Fields are Missing."."</p>";
	}
	else
	{
		if($_REQUEST["ans"]=="Choice1")
		{
			$answer=$_REQUEST["c1"];
		}
		else if($_REQUEST["ans"]=="Choice2")
		{
			$answer=$_REQUEST["c2"];
		}
		else if($_REQUEST["ans"]=="Choice3")
		{
			$answer=$_REQUEST["c3"];
		}
		else if($_REQUEST["ans"]=="Choice4")
		{
			$answer=$_REQUEST["c4"];
		}
		
		$file=fopen('questionfile.txt','a') or die("fle open error");
		$c=0;

					$c=$c+fwrite($file,$_POST["courseName"]);
					$c=$c+fwrite($file,"##");
					$c=$c+fwrite($file,$_POST["ques"]);
					$c=$c+fwrite($file,"##");
					$c=$c+fwrite($file,$_POST["c1"]);
					$c=$c+fwrite($file,"##");
					$c=$c+fwrite($file,$_POST["c2"]);
					$c=$c+fwrite($file,"##");
					$c=$c+fwrite($file,$_POST["c3"]);
					$c=$c+fwrite($file,"##");
					$c=$c+fwrite($file,$_POST["c4"]);
					$c=$c+fwrite($file,"##");
					$c=$c+fwrite($file,$answer);
					$c=$c+fwrite($file,"\r\n");
					
					echo "<p style='color:green; text-align:center;'>"."One Question Added Successfully."."</p>";
	}
}
else
{
	$_SESSION["qAns"]="yes";
}
?>
<form action="make_question.php" method="post">
<pre>
	Course   : <select name="courseName">
<option value=""></option>
<option value="Introduction to C">Introduction to C</option>
<option value="Introduction to C++">Introduction to C++</option>
<option value="Object Oriented Programming C# ">Object Oriented Programming C#</option>
<option value="Object Oriented Programming JAVA">Object Oriented Programming JAVA</option>
<option value="PHP : Hypertext Processor">PHP : Hypertext Processor</option>
</select></br>
	Question : <input type="text" value="" name="ques" style="width:500px"></br>
	Choice 1 : <input type="text" value="" name="c1" style="width:230px">
	Choice 2 : <input type="text" value="" name="c2" style="width:230px">
	Choice 3 : <input type="text" value="" name="c3" style="width:230px">
	Choice 4 : <input type="text" value="" name="c4" style="width:230px"></br>
	Answer   : <select name="ans">
<option value=""></option>
<option value="Choice1">Choice 1</option>
<option value="Choice2">Choice 2</option>
<option value="Choice3">Choice 3</option>
<option value="Choice4">Choice 4</option>
</select>


		   <input type="submit" value="Insert Question" name="submit">
</form>


<hr>	
</pre>
<?php

print_r($_POST);
?>

</body>
</html>