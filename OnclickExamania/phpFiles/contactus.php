<!doctype html>
<head>
<title>
Contact Us
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
<?php
	global $data;
	$data=array();
	$xml=simplexml_load_file("contactus.xml") or die("Error: Cannot create object");
	
	foreach($xml->user as $st)
	{
		$ar=array();
		
		$ar["name"]=(string)$st->name;
		$ar["email"]=(string)$st->email;
		$ar["phone"]=(string)$st->phone;
		$ar["address"]=(string)$st->address;
		$ar["address2"]=(string)$st->address2;
		$data[]=$ar;
	}
?>
<center>
	<h1> <?php echo $data[0]["name"];?> </h1>
	<hr width="50%">
	<p> <?php echo $data[0]["email"];?> </p>
	<p> <?php echo $data[0]["phone"];?> </p>
	<p> <?php echo $data[0]["address"];?> </p>
	<p> <?php echo $data[0]["address2"];?> </p>
</center>