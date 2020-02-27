<!doctype html>
<head>
<title>
Register Form
</title>
<link rel="shortcut icon" href="imgFiles/oeIcon.png">
</head>

<body background="imgFiles/absBackground.jpg" style="background-size:100%;">
<?php
session_start();
?>
<center>
<img src="/OnclickExamania/imgFiles/upbanner.png" alt="banner cover" />
</center>
<?php
if(isset($_SESSION["type"]) && $_SESSION["type"]=="Admin")
{
	echo "<b><center>"."Teacher Registration Form"."</b><br/><br/>"; ?><input type="button" onclick="window.location.replace('homepage.php')" style="border-radius: 10px; background-color: green;" value="Back to Homepage" name="backHome"></center><br/>
<?php
}
else
{ ?>
	<img src="/OnclickExamania/imgFiles/banner.png" alt="Banner" align="right" />
	<a href="logout.php"> ~ Go Back Login Page</a>
<?php	
}

if(isset($_SESSION["reg_msg"])){
	echo "<p style='color:red'>"."	".$_SESSION["reg_msg"]."</p>";
	unset($_SESSION["reg_msg"]);
}
?>

<script type="text/javascript">



function valfunc(elName)
{
	var flag=true;
	
	if(elName=="fname" || elName=="all")
	{
		var firstname = regi.fname.value;
	
		if(firstname.length==0)
		{
			flag=false;
			document.getElementById("fntext").innerHTML="Required Field !";
			document.regi.fname.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else if(firstname.indexOf("0")>0 || firstname.indexOf("1")>0 || firstname.indexOf("2")>0 || firstname.indexOf("3")>0 || firstname.indexOf("4")>0 || firstname.indexOf("5")>0 || firstname.indexOf("6")>0 || firstname.indexOf("7")>0 || firstname.indexOf("8")>0 || firstname.indexOf("9")>0 || firstname.indexOf("-")>0 || firstname.indexOf(",")>0 || firstname.indexOf("*")>0 || firstname.indexOf("&")>0 || firstname.indexOf("$")>0 || firstname.indexOf("#")>0)
		{
			flag=false;
			document.getElementById("fntext").innerHTML="Cann't Use Numbers and signs (- , # $ & *)";
			document.regi.fname.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			// flag=true;
			document.getElementById("fntext").innerHTML="";
			document.regi.fname.style="background-color:rgb(192, 255, 184)";
		}
	}
	else if(elName=="lname" || elName=="all")
	{
		var lastname = regi.lname.value;
	
		if(lastname.length==0)
		{
			flag=false;
			document.getElementById("lntext").innerHTML="Required Field !";
			document.regi.lname.style="border:2px solid red; background-color:rgb(255,255,255)";
		}
		else if(lastname.indexOf("0")>0 || lastname.indexOf("1")>0 || lastname.indexOf("2")>0 || lastname.indexOf("3")>0 || lastname.indexOf("4")>0 || lastname.indexOf("5")>0 || lastname.indexOf("6")>0 || lastname.indexOf("7")>0 || lastname.indexOf("8")>0 || lastname.indexOf("9")>0 || lastname.indexOf("-")>0 || lastname.indexOf(",")>0 || lastname.indexOf("*")>0 || lastname.indexOf("&")>0 || lastname.indexOf("$")>0 || lastname.indexOf("#")>0)
		{
			flag=false;
			document.getElementById("lntext").innerHTML="Cann't Use Numbers and signs (- , # $ & *)";
			document.regi.lname.style="border:2px solid red; background-color:rgb(255,255,255)";
		}
		else
		{
			// flag=true;
			document.getElementById("lntext").innerHTML="";
			document.regi.lname.style="background-color:rgb(192, 255, 184)";
		}
	}
	else if(elName=="uname" || elName=="all")
	{
		var eleValue = regi.uname.value;
	
		if(eleValue.length==0)
		{
			flag=false;
			document.getElementById("untext").innerHTML="Required Field !";
			document.regi.uname.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else if(eleValue.length<5)
		{
			flag=false;
			document.getElementById("untext").innerHTML="Username Must Contain 5 Characters";
			document.regi.uname.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else if(eleValue.indexOf("-")>0 || eleValue.indexOf(",")>0 || eleValue.indexOf("*")>0 || eleValue.indexOf("&")>0 || eleValue.indexOf("$")>0 || eleValue.indexOf("#")>0)
		{
			flag=false;
			document.getElementById("untext").innerHTML="Cann't Use signs (- , # $ & *)";
			document.regi.uname.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			document.getElementById("untext").innerHTML="";
			document.regi.uname.style="background-color:rgb(192, 255, 184)";
			//alert("fetchData.php?uname="+eleValue);
			
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() 
			{		
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				{	
					document.getElementById("untext").innerHTML=xmlhttp.responseText;
					if(xmlhttp.responseText=="Username already taken")
					{
						flag=false;
						document.regi.uname.style="border:2px solid red; background-color:rgb(255, 130, 140)";
					}
					// else{flag=true;}
					//document.getElementById("spinner").style.visibility="hidden";
				}
			};
			var url = "fetchData.php?uname="+eleValue;
			xmlhttp.open("GET",url,true);
			xmlhttp.send();
		}
	}
	else if(elName=="phn" || elName=="all")
	{
		var eleValue = regi.phn.value;
		if(eleValue.indexOf("0")<0 || eleValue.length!=11 || isNaN(eleValue))
		{
			flag=false;
			document.getElementById("phntext").innerHTML="Format : 01XXXXXXXXX";
			document.regi.phn.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			// flag=true;
			document.getElementById("phntext").innerHTML="";
			document.regi.phn.style="background-color:rgb(192, 255, 184)";
			
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() 
			{		
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				{	
					document.getElementById("phntext").innerHTML=xmlhttp.responseText;
					if(xmlhttp.responseText=="Phone Number already taken")
					{
						flag=false;
						document.regi.phn.style="border:2px solid red; background-color:rgb(255, 130, 140)";
					}
					// else{flag=true;}
					//document.getElementById("spinner").style.visibility="hidden";
				}
			};
			var url = "fetchData.php?phn="+eleValue;
			xmlhttp.open("GET",url,true);
			xmlhttp.send();
		}
	}
	else if(elName=="mail" || elName=="all")
	{
		var eleValue = regi.mail.value;
		if(eleValue.indexOf("@")<0 || eleValue.indexOf(".")<0)
		{
			flag=false;
			document.getElementById("mailtext").innerHTML="Format : example@example.com";
			document.regi.mail.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			// flag=true;			
			document.getElementById("mailtext").innerHTML="";
			document.regi.mail.style="background-color:rgb(192, 255, 184)";
			
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() 
			{		
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				{	
					document.getElementById("mailtext").innerHTML=xmlhttp.responseText;
					if(xmlhttp.responseText=="Mail Address already taken")
					{
						flag=false;
						document.regi.mail.style="border:2px solid red; background-color:rgb(255, 130, 140)";
					}
					// else{flag=true;}
					//document.getElementById("spinner").style.visibility="hidden";
				}
			};
			var url = "fetchData.php?mail="+eleValue;
			xmlhttp.open("GET",url,true);
			xmlhttp.send();
		}
	}
	else if(elName=="p1" || elName=="all")
	{
		var eleValue = regi.pass1.value;
		if(eleValue.length<8)
		{
			flag=false;
			document.getElementById("p1text").innerHTML="Password must be 8 Characters Long.";
			document.regi.pass1.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			// flag=true;
			document.getElementById("p1text").innerHTML="";
			document.regi.pass1.style="background-color:rgb(192, 255, 184)";
		}
	}
	else if(elName=="p2" || elName=="all")
	{
		var eleValue1 = regi.pass1.value;
		var eleValue2 = regi.pass2.value;
		if(eleValue1!=eleValue2)
		{
			flag=false;
			document.getElementById("p2text").innerHTML="Password Not Matched!";
			document.regi.pass2.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			// flag=true;
			document.getElementById("p2text").innerHTML="";
			document.regi.pass2.style="background-color:rgb(192, 255, 184)";
		}
	}
	else if(elName=="bdate" || elName=="all")
	{
		var eleValue = regi.bdate.value;
		if(eleValue==0)
		{
			flag=false;
			document.getElementById("p2text").innerHTML="Insert A Valid Date!";
			document.regi.pass2.style="border:2px solid red; background-color:rgb(255, 130, 140)";
		}
		else
		{
			// flag=true;
			document.getElementById("p2text").innerHTML="";
			document.regi.pass2.style="background-color:rgb(192, 255, 184)";
		}
	}
	return flag;
}
function clrfunc()
{
	document.getElementById("fntext").innerHTML="";
	document.getElementById("lntext").innerHTML="";
	document.getElementById("untext").innerHTML="";
	document.getElementById("phntext").innerHTML="";
	document.getElementById("mailtext").innerHTML="";
	document.getElementById("p1text").innerHTML="";
	document.getElementById("p2text").innerHTML="";
	document.getElementById("daytext").innerHTML="";
	document.regi.fnm.style="background-color:rgb(255,255,255)";
	document.regi.lname.style="background-color:rgb(255,255,255)";
	document.regi.uname.style="background-color:rgb(255,255,255)";
	document.regi.phn.style="background-color:rgb(255,255,255)";
	document.regi.mail.style="background-color:rgb(255,255,255)";
	document.regi.pass1.style="background-color:rgb(255,255,255)";
	document.regi.pass2.style="background-color:rgb(255,255,255)";
	document.regi.bdate.style="background-color:rgb(255,255,255)";
}
</script>


<form action="registration_check.php" name="regi" method="post">
<pre style="font-family:calibri">
	First Name :         <input type="text" onkeyup="valfunc('fname')" onclick="clrfunc()" name="fname" id="fnm">						Last Name :  <input type="text" onkeyup="valfunc('lname')" onclick="clrfunc()" name="lname"><br/>				      <span id="fntext" style="color:red;font-size:10px"></span>															<span id="lntext" style="color:red;font-size:10px"></span>
	User Name :        <input type="text" onkeyup="valfunc('uname')" onclick="clrfunc()" value="" name="uname">   <span id="untext" style="color:red; font-size:10px;"></span><br/><span id="untext2" style="color:red; font-size:10px;"></span>
	Phone :                 <input type="tel" onkeyup="valfunc('phn')" onclick="clrfunc()" value="" name="phn" pattern="[0]{1}[1]{1}[0-9]{9}" required>	          				Email :           <input type="email" value="" onkeyup="valfunc('mail')" onclick="clrfunc()" name="mail"><br/>						<span id="phntext" style="color:red;font-size:10px"></span>													<span id="mailtext" style="color:red;font-size:10px"></span></br><hr/><br/>
	Password :           <input type="password" onkeyup="valfunc('p1')" onclick="clrfunc()" value="" name="pass1">				  Confirm Password :   <input type="password" onkeyup="valfunc('p2')" onclick="clrfunc()" value="" name="pass2">
					<span id="p1text" style="color:red;font-size:10px"></span>															<span id="p2text" style="color:red;font-size:10px"></span>
</pre>
<hr/>
<pre style="font-family:calibri">
	Gender :           <input type="radio" name="gender" value="male" checked> Male
			          <input type="radio" name="gender" value="female"> Female									Date Of Birth:       <input type="date" name="bdate" onkeyup="valfunc('bday')" onclick="clrfunc()" max="2002-12-31">
			          <input type="radio" name="gender" value="other"> Other							<span id="daytext" style="color:red;font-size:10px"></span>
<!--	Date Of Birth:       <select name="date">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select> <select name="month">
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select> <select name="year">
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
</select>-->
								<input type="submit" onclick="return valfunc('all')" value="Register For Free" style="height:30px; width:300px; background-color:rgb(93, 237, 85);"/>
</form>
</pre>
</body>
</html>