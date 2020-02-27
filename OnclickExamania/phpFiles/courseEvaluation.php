
<?php
session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b>";?><input type="button" onclick="window.location.replace('homepage.php')" name="bckBtn" style="border:2px dashed black; font-size:10px; background-color:white; color:red; " value="	<< Back to Home		"> <?php
}
else
{
	$_SESSION["msg"]="Suspicious login attempt.";
	header("Location:logout.php");
}

$preRating = 0;

$con = mysqli_connect("localhost","root","","onclickexamania");
$sql = "select * from courselist where coursename='".$_SESSION["cName"]."'";
$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));

while($row = mysqli_fetch_assoc($rsd))
{
	$preRating = $row["rating"];
}
//loadData();
echo "<br/>".$preRating;
echo "<br/>".$_SESSION["cName"];

$newRating = ($preRating+$_REQUEST["points"])/2 ;
echo "<br/>".$_REQUEST["points"];
echo "<br/>".$newRating;

$con = mysqli_connect("localhost","root","","onclickexamania");
$sql2 = "UPDATE courselist SET rating=".$newRating." where coursename='".$_SESSION["cName"]."'";
$sql = "select * from courselist where coursename='".$_SESSION["cName"]."'";
$rsd = mysqli_query($con,$sql2) or die(mysqli_error($con));

header("location:homepage.php");
?>
