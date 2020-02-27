<!doctype html>
<head>
<title>
Register Check Page
</title>
</head>

<body>
<center>
<img src="/OnclickExamania/imgFiles/upbanner.png" alt="banner cover" />
</center>

<?php

session_start();
$accType="";
$goDir="";
if(isset($_SESSION["type"]) && $_SESSION["type"]=="Admin")
{
	$accType="Teacher";
	$goDir="location:homepage.php";
}
else
{ 
	$accType="Student";
	$goDir="location:login.php";
}

$reg_valid=1;

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

if($_REQUEST["pass1"]!="" || $_REQUEST["pass2"]!="")
{
	if($_REQUEST["pass1"]==$_REQUEST["pass2"])
	{
		if($_REQUEST["uname"]!="")
		{
			if($_REQUEST["phn"]!="")
			{
				if($_REQUEST["mail"]!="")
				{
					foreach($userData as $value)
					{
						if($value==$_REQUEST["uname"])
						{
							$reg_valid=0;
						}
					}
					if($_REQUEST["fname"]=="")
					{
						$_REQUEST["fname"]=="N/A";
					}
					else if($_REQUEST["lname"]=="")
					{
						$_REQUEST["lname"]=="N/A";
					}
					else if($reg_valid==1)
					{
						$file=fopen('accounts.txt','a') or die("fle open error");
						$c=0;

						$c=$c+fwrite($file,$_REQUEST["fname"]);
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,$_REQUEST["lname"]);
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,$_REQUEST["uname"]);
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,$_REQUEST["phn"]);
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,$_REQUEST["mail"]);
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,md5($_REQUEST["pass2"]));
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,$_REQUEST["gender"]);
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,$_REQUEST["bdate"]);
						$c=$c+fwrite($file,"-");
						// $c=$c+fwrite($file,$_REQUEST["month"]);
						// $c=$c+fwrite($file,"-");
						// $c=$c+fwrite($file,$_REQUEST["year"]);
						// $c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,$accType);
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,"0");
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,"0");
						$c=$c+fwrite($file,"-");
						$c=$c+fwrite($file,"Active");
						$c=$c+fwrite($file,"\r\n");
						
						
						$con = mysqli_connect("localhost","root","","onclickexamania");
						$sql = "insert into login values('".$_REQUEST["uname"]."','".md5($_REQUEST["pass2"])."','".$accType."','Active')";
						$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));
						
						$con = mysqli_connect("localhost","root","","onclickexamania");
						$sql2 = "insert into imglist values('".$_REQUEST["uname"]."','imgFiles/aanonymous.png')";
						$rsd2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
						
						
						$file=fopen("imgFiles/picList.txt","a") or die("fle open error");
						$d=0;

						$d=$d+fwrite($file,"\r\n");
						$d=$d+fwrite($file,$_REQUEST["uname"]);
						$d=$d+fwrite($file,"##");
						$d=$d+fwrite($file,"imgFiles/aanonymous.png");
						
						if(isset($_SESSION["type"]))
						{
							$_SESSION["firstIntro"]="A new teacher has been assigned.";
						}
						else
						{
							$_SESSION["msg"]="Successfully Registered !! Now Login";
						}
						header($goDir);
					}
					else if($reg_valid==0)
					{
						$_SESSION["reg_msg"]="This Username Has Already been taken !!";
						header("location:registration.php");
					}
				}
				else
				{
					$_SESSION["reg_msg"]="Email Field is Empty !!";
					header("location:registration.php");
				}
			}
			else
			{
				$_SESSION["reg_msg"]="Phone Number  Field is Empty !!";
				header("location:registration.php");
			}
		}
		else
		{
			$_SESSION["reg_msg"]="Username Field is Empty !!";
			header("location:registration.php");
		}
	}
	else
	{
		$_SESSION["reg_msg"]="Password Didn't Match !!";
		header("location:registration.php");
	}
}
else
{
	$_SESSION["reg_msg"]="Password Field is Empty";
	header("location:registration.php");
}

?>


<hr>
<ul>
<li>			<a href="login.php">Go Back Login Page</a></li>
<li>			<a href="registration.php">Refresh This Page</a></li>
</ul>
</body>
</html>