<!doctype html>
<head>
<title>
Update Information
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
</head>

<body background="imgFiles/absBackground.jpg" style="background-size:100%;">
<?php
session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b> ";?><input type="button" onclick="window.location.replace('homepage.php')" name="bckBtn" style="border:2px dashed black; font-size:10px; background-color:white; color:red; " value="	<< Back to Home		"> <?php
	//unset($_SESSION["qAns"]);
}
else
{
	$_SESSION["msg"]="Suspicious login attempt.";
	header("Location:logout.php");
}
?>

<center>
<img src="/OnclickExamania/imgFiles/upbanner.png" onclick="window.location.replace('homepage.php')" alt="banner cover" />

	<form action="upload.php" method="post" enctype="multipart/form-data" name="mfm">
	Change Profile Picture : <input type="file" name="proPicLoad"></br>
	<input type="submit" value="Upload File" name="sbt"></br>
	</form>
	<hr style="width: 500px">
</center>
	
<?php

if(isset($_SESSION["qAns"]))
{
	if($_POST["fname"]=="" ||$_POST["lname"]=="" ||$_POST["phn"]=="" ||$_POST["mail"]=="")
	{
		unset($_SESSION["qAns"]);
		header("location:edit_profile.php");
	}
	else
	{
		$file=fopen("accounts.txt","r") or die("file error");
		$userData=array();
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
			if($_SESSION["user"]==$userData[$i])
			{
				$userData[$i-2]=$_POST["fname"];
				$userData[$i-1]=$_POST["lname"];
				$userData[$i+1]=$_POST["phn"];
				$userData[$i+2]=$_POST["mail"];
			}
		}
		
		$fileRead=fopen('accounts.txt','w') or die("fle open error");
		$c=0;
		$cnt=1;

		foreach($userData as $w)
		{
			if($cnt%14==0)
			{
				$c=$c+fwrite($fileRead,$w);
				$cnt++;
			}
			else
			{
				$c=$c+fwrite($fileRead,$w);
				$c=$c+fwrite($fileRead,"-");	
				$cnt++;
			}
		}
		$_SESSION["firstIntro"]="Information Has Been Updated.";
		header("location:homepage.php");
	}
}
else
{
	$_SESSION["qAns"]="yes";
}

$file=fopen("accounts.txt","r") or die("file error");
$data=array();

	while($c=fgets($file))
	{
		$ar=explode("-",$c);
		if($_SESSION["user"]==$ar[2])
		{
		$data[]=$ar[0];
		$data[]=$ar[1];
		$data[]=$ar[2];
		$data[]=$ar[3];
		$data[]=$ar[4];
		
		}
	}
?>

<form action="edit_profile.php" method="post">
<center>
<pre style="font-family:calibri">
First Name :         <input type="text" value="<?php echo $data[0]; ?>" name="fname"><br/>
Last Name :          <input type="text" value="<?php echo $data[1]; ?>" name="lname"><br/>
<hr style="width: 500px">

Phone :                <input type="tel" value="<?php echo $data[3]; ?>" name="phn" pattern="[0]{1}[1]{1}[0-9]{9}" required><br/>
Email :                 <input type="email" value="<?php echo $data[4]; ?>" name="mail"><br/></br><hr style="width: 500px">
   <input type="Submit" value="Update Information" />  <input type="button" onclick="window.location.replace('homepage.php')" value="Go Back !!" /></form>
</pre>
<hr style="width: 500px">

</center>
</body>
</html>