<?php 
session_start();
?>
<head>
<title>
Assesment Result
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
<script type="text/javascript">
function rateCourse()
{
	document.getElementById("rateID").style.display= "block";
}
</script>
<style>
.rate
{
	position:absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	width:500px;
	height:300px;
	box-sizing:border-box;
	background:rgba(0,0,0,0.8);
	padding:40px;
	display: none;
}
</style>
</head>

<body background="imgFiles/absBackground.jpg" style="background-size:100%;">
<center>
<div class="rate" id="rateID">>
<p style="color:white; font-weight:bold;"> How you will rate "" <?php echo $_SESSION["cName"]; ?> "" course ?</p>
<br/><p style="color:white; font-weight:bold;"> 😑 &nbsp  ☹  &nbsp 😞  &nbsp ☺  &nbsp 😍</p><form action="courseEvaluation.php" name="fmRate">
<input type="range" name="points" min="1" max="5"><br/>
<br/><input type="submit" name="hmBtn" style="border-radius:10px; font-size:10px; background-color:green; height:30px; color:white;" value="    	Home	">
</center>
</form>
</div>

<?php

if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b>";
	unset($_SESSION["qAns"]);
}
else
{
	$_SESSION["msg"]="Suspicious login attempt.";
	header("Location:/OnclickExamania/phpFiles/logout.php");
}
?>
<center>
<img src="/OnclickExamania/imgFiles/upbanner.png" onclick="" alt="banner cover" />
</center>
<?php
// print_r($_POST);
if(count($_POST)==0)
{
	unset($_SESSION["qAns"]);
	header("location:exam.php");
}
else
{
	for($i=0; $i<count($_POST)-1; $i++)
	{
		if($_POST[$i]=="")
		{
			unset($_SESSION["qAns"]);
			header("location:exam.php");
		}
	}
}
$point=0;
$score=0;
$ansArray=array();
$file=fopen("questionfile.txt","r") or die("file error");

while($c=fgets($file))
{
	$ar=explode("##",$c);
	if($ar[0]==$_SESSION["cName"])
	{
		$ansArray[]=$ar[6];
	}
}

for($i=0; $i<count($_POST)-1; $i++)
{
	$var1="$_POST[$i]"."\r\n";
	$var2="$ansArray[$i]";
	
	if($var1==$var2)
	{
		// echo "</br>"."Right Answer";
		$point++;
	}
	else
	{
		// echo "</br>"."Wrong Answer! "." Answer You Have Submitted : ".$var1." || Right answer is : ".$var2;
	}
}
$point=round($point*100/(count($_POST)-1));
?><center><?php
echo "</br>"."</br>"."You have scored : "."<h3>".$point."%"."</h3>"." on last assesment."."</br>";


$userData=array();

$file=fopen("accounts.txt","r") or die("file error");
while($c=fgets($file))
{
	$ar=explode("-",$c);
	if($_SESSION["user"]==$ar[2])
	{
		$score=$ar[11];
	}	
	$userData[]=$ar[0];
	$userData[]=$ar[1];
	$userData[]=$ar[2];
	$userData[]=$ar[3];
	$userData[]=$ar[4];
	$userData[]=$ar[5];
	$userData[]=$ar[6];
	$userData[]=$ar[7];
	$userData[]=$ar[8];
	$userData[]=$ar[9];
	$userData[]=$ar[10];
	$userData[]=$ar[11];
	$userData[]=$ar[12];
	$userData[]=$ar[13];
}

$score=round(($score+$point)/2);

for ($i = 0; $i < count($userData); $i++) {
    if($_SESSION["user"]==$userData[$i])
	{
		$userData[$i+9]=$score;
		$userData[$i+10]=$point;
		if($score<=25)
		{
			$userData[$i+11]="Inactive\r\n";
			unset($_SESSION["Status"]);
			
			$con = mysqli_connect("localhost","root","","onclickexamania");
			$sql = "UPDATE login SET status='Inactive' where uname='".$_SESSION["user"]."'";
			$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));
		}
		break;
	}
}

$file=fopen('accounts.txt','w') or die("fle open error");
$c=0;
$cnt=1;
	foreach($userData as $w){
		if($cnt%14==0)
		{
			$c=$c+fwrite($file,$w);
			$cnt++;
		}
		else
		{
			$c=$c+fwrite($file,$w);
			$c=$c+fwrite($file,"-");	
			$cnt++;
		}
}

echo "</br>"."</br>"."Your Total CAP : "."<h3>".$score."p"."</h3>"." ."."</br>";
?>
<input type="button" onclick="rateCourse()" name="bckBtn" style="border-radius:10px; font-size:10px; background-color:red; height:30px; color:white;" value="    	Close		">
</center>
</body>