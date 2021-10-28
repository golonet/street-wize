<?php


	//Detect special conditions devices
	$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
	$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
	$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
	$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
	
	//do something with this information
	if( $iPod || $iPhone ){
	    ?>
	 	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	   <?php 
	}else if($iPad){
	   ?>
	 	  <meta id="viewport" name="viewport" width="initial-scale=0.9, maximum-scale=1, minimum-scale=1, user-scalable=no">
	   <?php 
	}else if($Android){
	    ?>
	 	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	   <?php 
	}else if($webOS){
	    ?>
	 	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	   <?php 
	}

?>
	 
	
	
	<meta name="google-site-verification" content="D6Pn9daioFpHic7HS1OjiQVUHf6F-PvJT_z5ZwVbZN4" />

	
	<!-- <link href="images/feet-32-239662.png" rel="shortcut icon" type="image/vnd.microsoft.icon"> -->
	<link rel="icon"   type="image/png"  href="images/favicont.png?v=6" />
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />	
	<link rel="stylesheet" href="css/fontello.css"  type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Bellefair&display=swap" rel="stylesheet">	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100&display=swap" rel="stylesheet">
		
	<link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css" />

	<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>

	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/datepicker-he.js"></script>
	
	
	<script type="text/javascript" src="js/jquery.slides.js"></script>

	<style type="text/css">
		

		.ui-datepicker-trigger {
		    position: relative;
		    top: 10px;
		    width: 25px;
		}
		
	   /* Prevents slides from flashing */
	    #slides {
	      display:none;
	    }
	</style>

  	  
  	  
  	  