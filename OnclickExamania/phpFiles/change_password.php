<!doctype html>
<head>
<title>
Change Password
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
<center>
<?php
if(isset($_SESSION["cpmsg"]))
{
?>
	<p style='color:red'><?php echo $_SESSION["cpmsg"]; ?></p>
<?php
	unset($_SESSION["cpmsg"]);
}
else
{
	echo "</br>";
}

if(isset($_SESSION["qAns"]))
{
	// print_r($_POST);
	if($_POST["pass"]=="" ||$_POST["pass1"]=="" ||$_POST["pass2"]=="")
	{
		unset($_SESSION["qAns"]);
		header("location:change_password.php");
	}
	else
	{
		// echo md5($_POST["pass"])."</br>";
		// echo $_COOKIE["pass"];
		
		if(md5($_POST["pass"])==$_COOKIE["pass"])
		{
			if($_POST["pass1"]==$_POST["pass2"])
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
						$userData[$i+3]=md5($_POST["pass2"]);
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
				
				$con = mysqli_connect("localhost","root","","onclickexamania");
				$sql = "UPDATE login SET pass='".md5($_POST["pass2"])."' WHERE UNAME='".$_SESSION["user"]."'";
				$rsd = mysqli_query($con,$sql) or die (mysqli_error($con));
				
				unset($_SESSION["qAns"]);
				$_SESSION["msg"]="Password Has Been Changed. Login Again !";
				header("Location:logout.php");
				// $_SESSION["cpmsg"]="Password Has Been Changed.";
				// header("location:change_password.php");
			}
			else
			{
				echo "Password Didn't Match !!";
				// $_SESSION["cpmsg"]="Password Didn't Match !!";
				// header("location:change_password.php");
			}
		}
		else
		{
			echo "Old Password Didn't Match";
			// $_SESSION["cpmsg"]="Old Password Didn't Match";
			// header("location:change_password.php");
		}
	}
}
else
{
	$_SESSION["qAns"]="yes";
}
?>
</center>
<script>
function valfunc(elName)
{
	var flag=true;
	if(elName=="pass" || elName=="all")
	{
		var pass = passForm.pass.value;
		if(pass.length==0)
		{
			flag=false;
			document.getElementById("ptext").innerHTML="Field is Empty";
			document.passForm.pass.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			//flag=true;
			document.getElementById("ptext").innerHTML="";
			document.passForm.pass.style="background-color:rgb(192, 255, 184)";
		}
	}

	if(elName=="pass1" || elName=="all")
	{
		var pass1 = passForm.pass1.value;
		if(pass1.length==0 || pass1.length<8 || pass1.indexOf("-")>0)
		{
			flag=false;
			document.getElementById("p1text").innerHTML="Password Must Be of 8 Characteres Long and Cannt use (-) Sign";
			document.passForm.pass1.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			//flag=true;
			document.getElementById("p1text").innerHTML="";
			document.passForm.pass1.style="background-color:rgb(192, 255, 184)";
		}
	}
	if(elName=="pass2" || elName=="all")
	{
		var pass1 = passForm.pass1.value;
		var pass2 = passForm.pass2.value;
		if(pass1!=pass2)
		{
			flag=false;
			document.getElementById("p2text").innerHTML="Password Didn't Match";
			document.passForm.pass2.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			//flag=true;
			document.getElementById("p2text").innerHTML="";
			document.passForm.pass2.style="background-color:rgb(192, 255, 184)";
		}
	}
	return flag;
}
</script>

<form action="change_password.php" name="passForm" method="post">
<center>
<pre style="font-family:calibri">
<hr style="width: 500px">
Current Password :           <input type="password" onkeyup="valfunc('pass')" value="" name="pass">
					<span id="ptext" style="color:red;font-size:10px"></span>
<hr style="width: 500px">
New Password :         <input type="password" onkeyup="valfunc('pass1')" value="" name="pass1">
					<span id="p1text" style="color:red;font-size:10px"></span>
Confirm Password :   <input type="password" onkeyup="valfunc('pass2')" value="" name="pass2">
			<span id="p2text" style="color:red;font-size:10px"></span>
</br><hr style="width: 500px">
   <input type="Submit" onclick="return valfunc('all')" name="subBtn" value="Update Password" />  <input type="button" onclick="window.location.replace('homepage.php')" value="Go Back !!" /></form>
</pre>
<hr style="width: 500px">

</center>
</body>
</html>