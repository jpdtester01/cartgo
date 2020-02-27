<!doctype html>
<head>
<title>
Registered Accounts
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

<div style="width: 25%; float:left; height:200px; border: 1px dashed black; margin:30px 0px 0px 100px; font-family:verdana; font-size:12px" align="center">
	</br><a href="homepage.php" style="font-family:Comic Sans MS; color:red;">Back to Homepage</a>

	<?php
	if($_SESSION["type"]=="Admin")
	{
		echo "</br>"."</br>"."</br>"."Select an Account to Delete : "."</br>"."</br>";
		?>
		<form action="show_accounts.php" method="post">
		<select name="accName"  style="width:200px;">
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
		$sql = "select * from login";
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
		</br></br><input type="submit" value="Delete Account" name="submit" style="color:green;">
		</form>
		<?php

		if(isset($_SESSION["qAns"]))
		{
			if($_POST["accName"]=="")
			{
				echo "No Account Has Been Selected.";
				unset($_SESSION["qAns"]);
				header("location:show_accounts.php");
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
					if($_POST["accName"]==$userData[$i])
					{
						$userData[$i-2]="N/A";
						$userData[$i-1]="N/A";
						$userData[$i]  ="N/A";
						$userData[$i+1]="N/A";
						$userData[$i+2]="N/A";
						$userData[$i+3]="N/A";
						$userData[$i+4]="N/A";
						$userData[$i+5]="N/A";
						$userData[$i+6]="N/A";
						$userData[$i+7]="N/A";
						$userData[$i+8]="N/A";
				 		$userData[$i+9]="N/A";
						$userData[$i+10]="N/A";
						$userData[$i+11]="N/A\r\n";
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
				$sql = "delete from login where uname='".$_POST["accName"]."'";
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

<div style="width: 60%; float:right; height:700px; margin:0px 0px 0px 0px; font-family:verdana; font-size:12px" align="left">
<script type="text/javascript">

function showAccounts(typeName)
{
	// alert(typeName);
	//str=document.getElementById('mytext').value;
	// document.getElementById("spinner").style.visibility= "visible";
	
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
			resp=JSON.parse(xmlhttp.responseText);
			msg = "<br/>";
			//alert(JSON.parse(xmlhttp.responseText));
			for(i=0;i<resp.length;i++)
			{
				c = i+1;
				msg = msg + c + " . " + resp[i].uname+ " ( contact : " +resp[i].phn +" ) "+ " email : " + resp[i].mail +"<br/>";
			}
			
		
			document.getElementById("txtHint").innerHTML = msg;
			// document.getElementById("spinner").style.visibility= "hidden";
		
		}
	};
	var url="";
	
	if(typeName.length==0)
	{
		url="jsonLoad.php?Student=1";
	}
	else if(typeName=="Student")
	{
		// alert("I am here");
		url="jsonData.php?Student=1";
	}
	else if(typeName=="Teacher")
	{
		url="jsonData.php?Teacher=1";
	}
	
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	
}
</script>
<input type="button" onclick="showAccounts('Student')" style="border-radius: 10px; background-color: green;" value="Show Students" name="showStudents"> <input type="button" onclick="showAccounts('Teacher')" style="border-radius: 10px; background-color: green;" value="Show Teachers" name="showTeachers"><br/><br/>
<b>Registered Accounts : </b></br>
<span style="align:left" id="txtHint"></span>
</br>



<!--
<table >
<tr bgcolor="#9ca0ff">
	<th>First Name</th>
	<th>Last Name</th>
	<th>User Name</th>
	<th>Contact Number</th>
	<th>Email</th>
	<th>Birthdate</th>
	<th>Status</th>
	</tr>
// <?php
// if($_SESSION["type"]=="Admin")
// {
	// foreach($data as $v){ ?>
	<tr bgcolor="#9ca0ff">
	<td><?php //echo $v["fname"]; ?></td>
	<td><?php //echo $v["lname"]; ?></td>
	<td><?php //echo $v["uname"]; ?></td>
	<td><?php //echo $v["phn"]; ?></td>
	<td><?php //echo $v["mail"]; ?></td>
	<td> <?php //echo " ".$v["day"]."-".$v["month"]."-".$v["year"]." "; ?> </td>
	<td><?php //echo $v["status"]; ?></td>
	</tr>
	
<?php
		//}
//}
?>
</table>
-->
</div>

</body>
</html>