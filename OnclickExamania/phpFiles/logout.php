<?php
session_start();
// $_SESSION["Status"]="";
unset($_SESSION["Status"]);
unset($_SESSION["user"]);
unset($_SESSION["type"]);
unset($_SESSION["qAns"]);
unset($_SESSION["fileupload"]);
unset($_SESSION["note_msg"]);
unset($_SESSION["firstIntro"]);

foreach($_COOKIE as $k=>$v){
	setcookie($k,"",time()-20);
}

header("Location:/OnclickExamania/login.php");
?>