<!doctype html>
<head>
<title>
Notes
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
</head>

<body background="imgFiles/absBackground.jpg" style="background-size:100%;">
<?php
session_start();
if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b> "; ?><input type="button" onclick="window.location.replace('homepage.php')" name="bckBtn" style="border:2px dashed black; font-size:10px; background-color:white; color:red; " value="	<< Back to Home		"> <?php
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
<div>
<pre><div style="width: 70%; float:right; height:600px; background:rgb(202, 204, 204); margin:10px; font-family:verdana; font-size:12px">
<?php
if(isset($_SESSION["note_msg"]))
{
?>
	<p style='color:red'><?php echo "	".$_SESSION["note_msg"]; ?></p>
<?php
	unset($_SESSION["note_msg"]);
}
?>
	<form action="makeNotes.php" method="post">
	Notes name :</br>
	<input type="text" name="nameGround" style="width:400px;"/>   
	
	Note Body:</br>
	<textarea rows="60" cols="200" name="noteGround" style="width:800px; height:200px;"></textarea></br></br>
	<input type="submit" value="Save Note" name="saveButton" style="width:100px;"/>	</br></br>
	</form>
</pre>
</div>


<pre>
<div style="width: 25%; float:left; height:600px; background:rgb(186, 186, 186); margin:10px; font-family:verdana; font-size:12px">
  Your Notes :
<?php

$tmpList = scandir("noteFiles/",0);
$fileList=array();
$finalList=array();

for($i=0; $i<count($tmpList)-2; $i++)
{
	$fileList[$i]=$tmpList[$i+2];
	// echo $fileList[$i]."</br>";
}

// echo "....................";

for($i=0; $i<count($fileList); $i++)
{
	$ar=explode("--",$fileList[$i]);
	if($_SESSION["user"]==$ar[0])
	{
		// echo $ar[0]."</br>";
		$finalList[]=$ar[1];
		// echo $finalList[$i]."</br>";
	}
}


?>
<ul style="display: block;list-style-type: square;">
<?php
for($i=0; $i<count($finalList); $i++)
{
?>
	<li> <a href="show_notes.php?fname=<?php echo $finalList[$i]; ?>"><?php echo $finalList[$i]; ?></a></li>
<?php	
}
?>
</ul>
</div>
</pre>

</div>
</body>
</html>