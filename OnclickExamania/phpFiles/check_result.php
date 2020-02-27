<!doctype html>
<head>
<title>
Check Result
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
</head>

<body background="imgFiles/absBackground.jpg" style="background-size:100%;">
<?php
session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b> ";?><input type="button" onclick="window.location.replace('homepage.php')" name="bckBtn" style="border:2px dashed black; font-size:10px; background-color:white; color:red; " value="	<< Back to Home		"> <?php
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

	<div style="width: 30%; float:left; height:200px; border: 1px dashed black; margin:80px 0px 0px 200px; font-family:verdana; font-size:12px" align="center">
	</br><a href="homepage.php" style="font-family:Comic Sans MS; color:red;">Back to Homepage</a>

	<?php
	if($_SESSION["type"]=="Teacher" || $_SESSION["type"]=="Admin")
	{
		echo "</br>"."</br>"."</br>"."Select an inactive student : "."</br>"."</br>";
		?>
		<form action="check_result.php" method="post">
		<select name="stuName"  style="width:200px;">
		<option value=""></option>
		<?php
		// $file=fopen("accounts.txt","r") or die("file error");
		// $data=array();
		// while($c=fgets($file))
		// {
			// $ar=explode("-",$c);
			
			// if($ar[13]=="Inactive\r\n")
			// {
				?>
				<!--<option value="<?php //echo $ar[2]; ?>"><?php //echo $ar[2]; ?></option>-->
				<?php
			// }
		// }
		
		$con = mysqli_connect("localhost","root","","onclickexamania");
		$sql = "select * from login where status='Inactive'";
		$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));

		while($row = mysqli_fetch_assoc($rsd))
		{
			$temp["uname"]=$row["uname"];
			?>
			<option value="<?php echo $temp["uname"]; ?>"><?php echo $temp["uname"]; ?></option>
			<?php
		}
		
		?>
		</select>
		</br></br><input type="submit" value="Activate" name="submit" style="color:green;">
		</form>
		<?php

		if(isset($_SESSION["qAns"]))
		{
			if($_POST["stuName"]=="")
			{
				echo "No Student Has Been Selected.";
				unset($_SESSION["qAns"]);
				header("location:check_result.php");
			}
			else
			{
				$userData=array();
				$file=fopen("accounts.txt","r") or die("file error");
				while($c=fgets($file))
				{
					$ar=explode("-",$c);	
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
				for ($i = 0; $i < count($userData); $i++) 
				{
					if($_POST["stuName"]==$userData[$i])
					{
						$userData[$i+11]="Active\r\n";
						break;
					}
				}
				$file=fopen('accounts.txt','w') or die("fle open error");
				$c=0;
				$cnt=1;
				foreach($userData as $w)
				{
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
				
				$con = mysqli_connect("localhost","root","","onclickexamania");
				$sql = "update login SET status='Active' where uname='".$_POST["stuName"]."'";
				$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));
			}
		}
		else
		{
			$_SESSION["qAns"]="yes";
		}
	}
	?>
</div>

<div style="width: 50%; float:right; height:700px; margin:0px 0px 0px 0px; font-family:verdana; font-size:12px" align="center">
<b>Student Result Information : </b></br>
</br>
<table border="1px">
<tr>
<th>Student Name</th><th>Total CAP</th><th>Recent Exam Result Percentage</th><th>Status</th>
</tr>
<?php

	$file=fopen("accounts.txt","r") or die("file error");
	$data=array();
	$dar=array();
	
	while($c=fgets($file))
	{
		$ar=explode("-",$c);
		
		if($ar[10]=="Student")
		{
			$dar["fname"]=$ar[0];
			$dar["lname"]=$ar[1];
			$dar["uname"]=$ar[2];
			$dar["phn"]=$ar[3];
			$dar["mail"]=$ar[4];
			$dar["pass"]=$ar[5];
			$dar["gender"]=$ar[6];
			$dar["year"]=$ar[7];
			$dar["month"]=$ar[8];
			$dar["day"]=$ar[9];
			$dar["type"]=$ar[10];
			$dar["cap"]=$ar[11];
			$dar["mark"]=$ar[12];
			$dar["status"]=$ar[13];
			$data[]=$dar;
			// echo $ar[0].$ar[2].$ar[5].$ar[9].$ar[13];
		}
	}


if($_SESSION["type"]=="Student")
{
	$file=fopen("accounts.txt","r") or die("file error");
	while($c=fgets($file))
	{
		$ar=explode("-",$c);
		if($_SESSION["user"]==$ar[2])
		{
			$dar["uname"]=$ar[2];
			$dar["cap"]=$ar[11];
			$dar["mark"]=$ar[12];
			$dar["status"]=$ar[13];
		}
	}
?>
	
	<tr>
	<td><?php echo $dar["uname"]; ?></td>
	<td><?php echo $dar["cap"]; ?>p</td>
	<td><center><?php echo $dar["mark"]; ?>%</center></td>
	<td><?php echo $dar["status"]; ?></td>
	</tr>
	
<?php
}
if($_SESSION["type"]=="Teacher")
{
	foreach($data as $v){ ?>
	
	<tr>
	<td><?php echo $v["uname"]; ?></td>
	<td><?php echo $v["cap"]; ?>p</td>
	<td><center><?php echo $v["mark"]; ?>%</center></td>
	<td><?php echo $v["status"]; ?></td>
	</tr>
	
<?php
		}
}
if($_SESSION["type"]=="Admin")
{
	foreach($data as $v){ ?>
	
	<tr>
	<td><?php echo $v["uname"]; ?></td>
	<td><?php echo $v["cap"]; ?>p</td>
	<td><center><?php echo $v["mark"]; ?>%</center></td>
	<td><?php echo $v["status"]; ?></td>
	</tr>
	
<?php
		}
}
?>
</table>
</div>

</body>
</html>