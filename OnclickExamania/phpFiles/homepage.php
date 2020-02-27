<!DOCTYPE html>
<html lang="en">
<head>
<title>Homepage</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("imgFiles/absBackground.jpg");
  background-size: 100%;
}

/* Style the header */
header {
  padding: 10px;
  text-align: center;
  font-size: 15px;
  color: black;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav 
{
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  padding: 15px;
}
/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  padding: 60px;
}

/* Style the footer */
footer {
  background-color: #6981F7;
  margin-top:6%;
  padding: 0px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>
<?php
session_start();

if(isset($_SESSION["Status"]) && $_SESSION["Status"]=="Active")
{
	echo "Welcome <b>".$_SESSION["user"]."</b>, you are : <b>".$_SESSION["type"]."</b>";
	$_SESSION["fileupload"]="yes";
	unset($_SESSION["qAns"]);
}
else if(!isset($_COOKIE["user"]))
{
	header("Location:logout.php");
}
else
{
	$_SESSION["msg"]="Suspicious login attempt.";
	header("Location:logout.php");
}
?>

<div style="width: 55%; float:left; height:200px; margin:0px 80px 20px 100px">
<center>
<img src="/OnclickExamania/imgFiles/upbanner.png" alt="banner cover" />
</center>
</div>

<div style="width: 12%; float:right; height:200px; margin:0px 80px 10px 0px">
</br></br>
<?php
// $file = fopen("imgFiles/picList.txt","r") or die("File Open Error");
// $proPicURL="";

// while($c=fgets($file))
// {
	// $data=explode("##",$c);
	// if($_SESSION["user"]==$data[0])
	// {
		// $proPicURL=$data[1];
	// }
// }

$con = mysqli_connect("localhost","root","","onclickexamania");
$sql = "select * from imglist where uname='".$_SESSION["user"]."'";
$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));

while($row = mysqli_fetch_assoc($rsd))
{
	$proPicURL=$row["link"];
}

?>
<center>
<img src="<?php echo $proPicURL; ?>" width="150px" height="150px" alt="Profile Picture" />
</center>
</div>

<header>
<head>

</head>
<script type="text/javascript">
function goto()
{
	var edpr = document.getElementById("edpr");
	var selectedValue = edpr.options[edpr.selectedIndex].value;
	
	if(selectedValue=="changeinfo")
	{
		// alert("goto edit profile selected");
		<?php //header("location:edit_profile.php");?>	
		window.location.replace("edit_profile.php");
	}
	else if(selectedValue=="changepass")
	{
		// alert("goto edit profile selected");
		<?php //header("location:edit_profile.php");?>
		window.location.replace("change_password.php");	
	}
}
</script>
<body>
<?php
if($_SESSION["type"]=="Student")
{
?>
  <table style="width:100%; border-style:dashed;">
	<tr style="color:black">
	 <th> <a href="lesson.php?cname=Introduction to C&fname=">lessons</a> </th>
	 <th> <a href="exercise.php" >Exercise</a> </th>
	 <th> <a href="exam.php" >Exam</a> </th>
	 <th> <a href="notes.php" >Notes</a> </th>
	 <th> <a href="check_result.php">Result</a> </th>
	 <th> <a href="cap.html" >Grading Policy</a> </th>
	 <th>
	 <select id="edpr" onchange="goto()">
	 <option value=""> My Profile </option>
	 <option value="changeinfo">👨 Update Information </option>
	 <option value="changepass">👨 Change Password </option>
	 </select>
	 </th>
	 <th> <a href="contactus.php" > Contact Us </a> </th>
	 <th>| <a href="logout.php" style="color:red"> Logout</a> |</th>
	</tr>
  </table>
<?php
}
if($_SESSION["type"]=="Teacher")
{
?>
<table style="width:100%; border-style:dashed;">
	<tr>
	 <th> <a href="make_question.php">Assigning Question</a> </th>
	 <th> <a href="make_lesson.php" >Assigning Lesson</a> </th>
	 <th> <a href="notes.php" >Notes</a> </th>
	 <th> <a href="check_result.php" >Check Student Results</a> </th>
	 <th> <a href="cap.html">Grading Policy</a> </th>
	 <th>
	 <select id="edpr" onchange="goto()">
	 <option value=""> </option>
	 <option value="changeinfo">👨 Update Information </option>
	 <option value="changepass">👨 Change Password </option>
	 </select>
	 </th>
	 <th> <a href="contactus.php" > Contact Us </a> </th>
	 <th>| <a href="logout.php" style="color:red"> Logout</a> |</th>
	</tr>
  </table>
<?php
}
if($_SESSION["type"]=="Admin")
{
?>
<table style="width:100%; border-style:dashed;">
	<tr>
	 <th> <a href="show_accounts.php" >Show Accounts</a> </th>
	 <th> <a href="notes.php" >Notes</a> </th>
	 <th> <a href="check_result.php" >Check Student Results</a> </th>
	 <th> <a href="cap.html" >Grading Policy</a> </th>
	 <th> <a href="registration.php" >Assign Teacher</a> </th>
	 <th>
	 <select id="edpr" onchange="goto()">
	 <option value="" > </option>
	 <option value="changeinfo" >👨 Update Information </option>
	 <option value="changepass" >👨 Change Password </option>
	 </select>
	 </th>
	 <th> <a href="contactus.php" > Contact Us </a> </th>
	 <th>| <a href="logout.php" style="color:red"> Logout</a> |</th>
	</tr>
  </table>
<?php
}
?>
</body>
</header>

<section>
  <nav>
 <p style="color:red;">Learn more</p>
    <ul>
      <li><p><a href="https://www.w3schools.com/">Visit W3school</a></p></li>
      <li><p><a href="https://www.tutorialspoint.com/">Visit Tutorials point</a></p></li>
      <li><p><a href="https://www.geeksforgeeks.org/">Visit Geeksforgeeks</a></p></li>
    </ul>
  </nav>
  
 <article>
  <head>
  <style>
table {
  font-family: arial, sans-serif;
  border: 1px #000066;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px #000066;
  text-align: left;
  padding: 6px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  </style>
  </head>
<table style="width:100%">
  <tr>
    <th> Course name </th>
    <th> Duration </th>
    <th> Rating </th>
  </tr>
<?php  
	$con = mysqli_connect("localhost","root","","onclickexamania");
	$sql = "select * from courselist";
	$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));

	while($row = mysqli_fetch_assoc($rsd))
	{
		$data[]=$row["coursename"];
		$data[]=$row["duration"];
		$data[]=$row["rating"];
	}
	
	for($i=0; $i<count($data); $i=$i+3)
	{
		echo "<tr>";
		echo "<td>". $data[$i] . "</td>";
		echo "<td>". $data[$i+1] . "</td>";
		echo "<td>". $data[$i+2] . "</td>";
		echo "</tr>";
	}
?>  
  
  </table>
  </article>
</section>
<?php
if(isset($_SESSION["firstIntro"]))
{
	?>
	
	<!--<script> alert("Hello, ".concat('<?php //echo $_SESSION["user"];?>',' Welcome to Onclick Examania')); </script>-->
	<script> alert(" <?php echo $_SESSION['firstIntro']; ?> "); </script>
	
	<?php
	unset($_SESSION["firstIntro"]);
}
?>
<footer>
  <div>
   <p><i>&copy; 2019, Online Examania. All rights reserved.</i></p>
</div>
</footer>

</body>
</html>
