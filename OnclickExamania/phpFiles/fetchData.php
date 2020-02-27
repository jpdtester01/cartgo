<?php
session_start();
$data=array();

$phn=array();
$mail=array();

$file=fopen("accounts.txt","r") or die("file error");

while($c=fgets($file))
{
	$ar=explode("-",$c);
	
	$phn[]=$ar[3];
	$mail[]=$ar[4];
}


if(isset($_REQUEST["uname"]))
{
	$con = mysqli_connect("localhost","root","","onclickexamania");
	$sql="select * from login where uname='".$_REQUEST["uname"]."'";
	$result = mysqli_query($con, $sql)or die(mysqli_error($con));
	
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$ar["uname"]=$row["uname"];
		$ar["pass"]=$row["pass"];
		$ar["type"]=$row["type"];
		$ar["status"]=$row["status"];
		$data[]=$ar;
	}
	
	if(sizeof($data)==0)
	{
		echo "";
	}
	else
	{
		echo "Username already taken";
	}
}

else if(isset($_REQUEST["phn"]))
{
	foreach($phn as $v)
	{
		if($v==$_REQUEST["phn"])
		{
			echo "Phone Number already taken";
		}
	}
}

else if(isset($_REQUEST["mail"]))
{
	foreach($mail as $v)
	{
		if($v==$_REQUEST["mail"])
		{
			echo "Mail Address already taken";
		}
	}
}

else
{
	$_SESSION["msg"]="Suspicious login attempt.";
	header("Location:logout.php");
}
?>