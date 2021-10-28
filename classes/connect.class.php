<?php
class Connect {

	public static function connectToDB() {
	
		if($_SERVER['HTTP_HOST']=='localhost'){
			// on my computer
			$con = mysqli_connect("localhost","root","");
			if (!$con)  die('Could not connect: ');
			$success = mysqli_select_db($con,"navit_proj");
			mysqli_query($con,"SET NAMES utf8;");
			if (!$success) die('Could not select DB:');
	
		}else{
			// on 013 barak server
			$con = mysqli_connect("localhost","golonetc_meram","Aa123456");
			if (!$con)  die('Could not connect: ');
			$success = mysqli_select_db($con,"golonetc_navit");
			mysqli_query($con,"SET NAMES utf8;");
			if (!$success) die('Could not select DB:');
		}
		return $con;
	
	}
}

/*
ns3.secured.co.il 
ns4.secured.co.il 
 * */
?>