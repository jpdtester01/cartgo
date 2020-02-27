<!DOCTYPE html>

<head>
<title>
Examsheet
</title>
<style>
.ansTab{
	display: none;
	color: green;
}
</style>
<script>
function showAnswer()
{
	document.getElementById("ans10").style.display= "block";
	document.getElementById("ans11").style.display= "block";
	document.getElementById("ans12").style.display= "block";
	document.getElementById("ans13").style.display= "block";
	document.getElementById("ans14").style.display= "block";
}
</script>
</head>

<body>
<?php
session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b>";?><input type="button" onclick="window.location.replace('homepage.php')" name="bckBtn" style="border:2px dashed black; font-size:10px; background-color:white; color:red; " value="	<< Back to Home		"> <?php
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

<h1 align="center">On-click Examania</h1>
<center><p style="color:red;" id="xmtime"></p></center>

<?php
if(isset($_SESSION["qAns"]))
{
			
	$qArray=array();
	$c1Array=array();
	$c2Array=array();
	$c3Array=array();
	$c4Array=array();
	$ansArray=array();
	
	$_SESSION["cName"]=$_REQUEST["courseName"];
	
	$file=fopen("questionfile.txt","r") or die("file error");
	while($c=fgets($file))
	{
		$ar=explode("##",$c);
		if($ar[0]==$_REQUEST["courseName"])
		{
			$qArray[]=$ar[1];
			$c1Array[]=$ar[2];
			$c2Array[]=$ar[3];
			$c3Array[]=$ar[4];
			$c4Array[]=$ar[5];
			$ansArray[]=$ar[6];
		}
	}
	?>
	<div>
	<table>
	<?php
	for($i=10 ; $i<15; $i++)
	{
		$c=$i+1;
		?>
		<tr><?php echo $c." . ".$qArray[$i]."</br>";?></tr>
		<tr><?php echo "A. ".$c1Array[$i]."</br>";?></tr>
		<tr><?php echo "B. ".$c2Array[$i]."</br>";?></tr>
		<tr><?php echo "C. ".$c3Array[$i]."</br>";?></tr>
		<tr><?php echo "D. ".$c4Array[$i]."</br>"."</br>";?></tr>
		<tr><span class="ansTab" id="<?php echo "ans".$i; ?>"><?php echo "Correct Answer : ".$ansArray[$i]."</br>"."</br>";?></span></tr>
	<?php
	}
	?>
	</table>
	<input type="button" onclick="showAnswer()" value="Show Answer">
	</div>
	<?php
}
else
{
	$_SESSION["qAns"]="yes";
	?>
	<hr>
    <form action="exercise.php" method="post">
	<center><b>select a Course : </b><select name="courseName">
	<option value=""></option>
	<option value="Introduction to C">Introduction to C</option>
	<option value="Introduction to C++">Introduction to C++</option>
	<option value="Object Oriented Programming C# ">Object Oriented Programming C#</option>
	<option value="Object Oriented Programming JAVA">Object Oriented Programming JAVA</option>
	<option value="PHP : Hypertext Processor">PHP : Hypertext Processor</option>
	</select></br></br>
	<input type="submit" onclick="timeShow()" value="select" name="select"></center>
	</form>
    <hr>
	<?php
}
?>	
	
</body>