<?php

	$file=fopen("accounts.txt","r") or die("file error");
	$data=array();
	$dar=array();
	
	if(isset($_REQUEST['Student']))
	{
		while($c=fgets($file))
		{
			$ar=explode("-",$c);
			if($ar[10]=="Student")
			{
				$dar["fname"]=$ar[0];
				$dar["lname"]=$ar[1];
				$dar["uname"]=$ar[2];
				$dar["phn"]=$ar[3];
				$dar["mail"]=$ar[4];
				$dar["pass"]=$ar[5];
				$dar["gender"]=$ar[6];
				$dar["year"]=$ar[7];
				$dar["month"]=$ar[8];
				$dar["day"]=$ar[9];
				$dar["type"]=$ar[10];
				$dar["cap"]=$ar[11];
				$dar["mark"]=$ar[12];
				$dar["status"]=$ar[13];
				$data[]=$dar;
			}
		}
		// $sql = "select * from login where type='Student'";
		// $jsonData = loadDB($sql);
		$jsonData = json_encode($data);
		echo $jsonData;
		
		// echo $jsonData;
		// foreach($data as $v)
		// {
			// echo $v."<br/>";
		// }
	}
	else if(isset($_REQUEST["Teacher"]))
	{
		while($c=fgets($file))
		{
			$ar=explode("-",$c);
			if($ar[10]=="Teacher")
			{
				$dar["fname"]=$ar[0];
				$dar["lname"]=$ar[1];
				$dar["uname"]=$ar[2];
				$dar["phn"]=$ar[3];
				$dar["mail"]=$ar[4];
				$dar["pass"]=$ar[5];
				$dar["gender"]=$ar[6];
				$dar["year"]=$ar[7];
				$dar["month"]=$ar[8];
				$dar["day"]=$ar[9];
				$dar["type"]=$ar[10];
				$dar["cap"]=$ar[11];
				$dar["mark"]=$ar[12];
				$dar["status"]=$ar[13];
				$data[]=$dar;
			}
		}
		echo json_encode($data);
		// foreach($data as $v)
		// {
			// echo $v."<br/>";
		// }
	}
	else
	{
		echo "Invalid";
	}

?>