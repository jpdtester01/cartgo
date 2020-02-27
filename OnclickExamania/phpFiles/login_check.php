<?php
session_start();

// $cred=array();
// $type=array();
// $valid=array();

// $file=fopen("accounts.txt","r") or die("file error");
// while($c=fgets($file)){
	// $ar=explode("-",$c);
	
	// $cred[$ar[2]]=$ar[5];
	// $type[$ar[2]]=$ar[10];
	// $valid[$ar[2]]=$ar[13];
// }

// $flag=0;
// foreach($cred as $k=>$v)
// {
	// if($_REQUEST["uname"]==$k && md5($_REQUEST["pass"])==$v)
	// {
		
		// foreach($valid as $k=>$v)
		// {
			// if($_REQUEST["uname"]==$k)
			// {
				// if($v=="Active\r\n")
				// {
					// foreach($type as $k=>$v)
					// {
						// if($_REQUEST["uname"]==$k)
						// {
							// $_SESSION["Status"]="Active";
							// $_SESSION["user"]=$k;
							// $_SESSION["type"]=$v;
							// $flag=1;
							// break;
						// }
					// }
				// }
				// else
				// {
					// $_SESSION["msg"]="User isn't in Active Status !";
					// header("Location:logout.php");
				// }
				// break;
			// }
		// }
		// break;
	// }
// }
// if($flag==0){
	// $_SESSION["msg"]="Wrong Credential!!";
	// header("Location:logout.php");
// }
// if($flag==1){
	// header("Location:homepage.php");
// }

$con = mysqli_connect("localhost","root","","onclickexamania");
$sql = "select * from login where uname='".$_REQUEST["uname"]."'";
$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));

while($row = mysqli_fetch_assoc($rsd))
{
	$temp["uname"]=$row["uname"];
	$temp["pass"]=$row["pass"];
	$temp["type"]=$row["type"];
	$temp["status"]=$row["status"];
	$data[]=$temp;
}

if($_REQUEST["uname"]==$data[0]["uname"] && md5($_REQUEST["pass"])==$data[0]["pass"])
{
	if($data[0]["status"]=="Active")
	{
		$_SESSION["Status"]=$data[0]["status"];
		$_SESSION["user"]=$data[0]["uname"];
		$_SESSION["type"]=$data[0]["type"];
		
		setcookie("user",$data[0]["uname"],time()+50000);
		setcookie("pass",$data[0]["pass"],time()+50000);
		setcookie("status",$data[0]["status"],time()+50000);
		setcookie("type",$data[0]["type"],time()+50000);
		
		$_SESSION["firstIntro"]="Hello, ".$data[0]["uname"]." Welcome to Onclick Examania.";
		header("Location:homepage.php");
		// echo $data[0]["status"];
	}
	else
	{
		$_SESSION["msg"]="User isn't in Active Status !";
		header("Location:logout.php");
	}
}
else
{
	$_SESSION["msg"]="Wrong Credential!!";
	header("Location:logout.php");
}

?>