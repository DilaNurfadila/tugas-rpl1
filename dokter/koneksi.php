<?php 
	$host = "localhost";;
	$user = "root";
	$pass = "";
	$db = "r2uh2";
	$konek = mysqli_connect($host,$user,$pass);
	if($konek){
		$coba = mysqli_select_db($konek,$db);
		if($coba){
			echo"";
		}else{
			echo mysql_error();
		}
	}

 ?>