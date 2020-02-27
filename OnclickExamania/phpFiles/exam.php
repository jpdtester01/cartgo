<!DOCTYPE html>

<head>
<title>
Examsheet
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
</head>

<body>
<?php
session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b> ";
}
else
{
	$_SESSION["msg"]="Suspicious login attempt.";
	header("Location:logout.php");
}
?>
<center>
<img src="/OnclickExamania/imgFiles/upbanner.png" alt="banner cover" />
</center>

<h1 align="center">On-click Examania</h1>
<center><p style="color:red;font-size:30px; font-weight:bold;" id="xmTime"></p></center>

<script type="text/javascript">
	function timeShow()
	{
		var expTime = new Date().getTime();
		expTime = expTime + 120000;
		
		var lapse = setInterval ( function()
		{
			var newTime = new Date().getTime();
			var distance = expTime - newTime;
			var minute = Math.floor((distance % (1000*60*60)) / (1000*60));
			var sec = Math.floor((distance % (1000*60)) / 1000);
			document.getElementById("xmTime").innerHTML=minute+ " : " +sec;
			if(distance<1)
			{
				clearInterval(lapse);
				window.location.replace("homepage.php");
			}
		},1000 );
	}
</script>

<?php
if(isset($_SESSION["qAns"]))
{
	echo '<script type="text/javascript">
				timeShow();
           </script>';
			
	$qArray=array();
	$c1Array=array();
	$c2Array=array();
	$c3Array=array();
	$c4Array=array();
	
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
		}
	}
	?>
	<div>
	<form action="examinee.php" method="post">
	
	<?php
	for($i=0 ; $i<10; $i++)
	{
		$c=$i+1;
		echo $c.". ".$qArray[$i]."</br>";
		?><input type="radio" name="<?php echo $i; ?>" value="<?php echo $c1Array[$i]; ?>"> <?php echo "A. ".$c1Array[$i]."</br>";
		?><input type="radio" name="<?php echo $i; ?>" value="<?php echo $c2Array[$i]; ?>"> <?php echo "B. ".$c2Array[$i]."</br>";
		?><input type="radio" name="<?php echo $i; ?>" value="<?php echo $c3Array[$i]; ?>"> <?php echo "C. ".$c3Array[$i]."</br>";
		?><input type="radio" name="<?php echo $i; ?>" value="<?php echo $c4Array[$i]; ?>"> <?php echo "D. ".$c4Array[$i]."</br>";
		echo "</br>";
	}
	?>
	<input type="submit" value="Submit Answer">
	</form>
	</div>
	<?php
}
else
{
	$_SESSION["qAns"]="yes";
	?>
	<hr>
    <form action="exam.php" method="post">
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
