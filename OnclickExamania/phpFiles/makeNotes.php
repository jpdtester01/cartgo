<?php

session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b>";
}
else
{
	$_SESSION["msg"]="Suspicious login attempt.";
	header("Location:logout.php");
}

if ($_REQUEST["nameGround"]=="")
{
	$_SESSION["note_msg"]="Notes Cann't Be Saved Without a Name !!!";
	header("location: notes.php");
}
else
{
	$files=fopen("noteFiles/".$_SESSION["user"]."--".$_REQUEST["nameGround"].".txt","w") or die("Files Couldn't get Created");
	fwrite($files,$_REQUEST["noteGround"]);
	$_SESSION["note_msg"]="Notes Has Been Saved !!! Check From The List assigned on the Left";
	header("location: notes.php");
}

?>