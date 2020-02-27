<?php
session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
{
	if($_FILES['proPicLoad']['name']=="")
	{
		header("location: homepage.php");
	}
	
	$source=$_FILES['proPicLoad']['tmp_name'];
	$target="imgFiles/".$_FILES['proPicLoad']['name'];
	
	if(move_uploaded_file($source,$target))
	{
		$fileData=array();
		$file=fopen("imgFiles/picList.txt","r") or die("file error");
		while($c=fgets($file))
		{
			$ar=explode("##",$c);
			$fileData[]=$ar[0];
			$fileData[]=$ar[1];
		}
		for ($i = 0; $i < count($fileData); $i++)
		{
			if($_SESSION["user"]==$fileData[$i])
			{
				$fileData[$i+1]=$target."\r\n";
				break;
			}
		}
		
		$file=fopen('imgFiles/picList.txt','w') or die("fle open error");
		$d=0;
		$cnt=1;
		foreach($fileData as $w)
		{
			if($cnt==1)
			{
				$d=$d+fwrite($file,$w);
				$d=$d+fwrite($file,"##");
				$cnt++;
			}
			else if($cnt%2==0)
			{
				$d=$d+fwrite($file,$w);
				$cnt++;
			}
			else
			{
				// $d=$d+fwrite($file,"\r\n");
				$d=$d+fwrite($file,$w);
				$d=$d+fwrite($file,"##");
				$cnt++;
			}
		}

		$con = mysqli_connect("localhost","root","","onclickexamania");
		$sql = "UPDATE imglist SET link='".$target."' where uname='".$_SESSION["user"]."'";
		$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));
		
		echo "File uploaded:".$target;
		$_SESSION["firstIntro"]="Profile picture has been changed.";
		header("location: homepage.php");
	}
}
else
{
	$_SESSION["msg"]="Suspicious login attempt.";
	header("Location:logout.php");
}

// print_r($_FILES);

?>

<hr>
<ul>
<li>			<a href="homepage.php">Go Back Home Page</a></li>
</ul>