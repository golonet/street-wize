<?php

if(isset($_REQUEST['id'])){
	$tourId = $_REQUEST['id'];
	
	require_once 'classes/tour.class.php';	
	
	$tour = Tour::getTourById($tourId);

}


?>

<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>חוכמת רחוב  -  <?php echo $tour[0]->getKeywords() ?> </title>
<meta name="description" content="<?php echo $tour[0]->getLong_text() ?>">
<meta name="keywords" content="<?php echo $tour[0]->getKeywords() ?>" />
<meta name="google-site-verification" content="D6Pn9daioFpHic7HS1OjiQVUHf6F-PvJT_z5ZwVbZN4" />
<link rel="icon" type="image/png" href="images/favicon.png" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<link href="css/style.css?v=9" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
<script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }</script>
 -->

<!--Google Fonts-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<style>
body{color:#000;}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{
background: none;
}
</style>
</head>
<body>
<!--banner start here-->
<div class="banner-1">

	  <div class="container">
  <!--header start here-->
	<?php require_once 'parts/header.php'; ?>
<!--header end here-->

</div>
</div>
<!--banner end here-->
<!--asingle-->
<div class="w3l-5">
		<div class="container">
		
		
		<?php foreach($tour as $tour): ?>
				<div class="single-left1 w3ls-5" style="direction: rtl; min-height: 700px;">
										
					<?php if(!empty($tour->getInternalPagePic2())): ?>
				   	  <div class="col-md-6 faculty_grid wow fadeInLeft animated" data-wow-delay=".5s">
				   	  	<figure class="team_member" style="text-align: center; border-radius: 7px;">
				   	  		<img src="images/tours_images/<?php echo $tour->getInternalPagePic1() ?>"  class="img-responsive" style="max-height: 372px;" alt="<?php echo $tour->getTitle() ?>">				   					   
				   	  	 </figure>
				   	  </div>
				   	  					
				   	  <div class="col-md-6 faculty_grid wow fadeInLeft animated" data-wow-delay=".5s">
				   	  	<figure class="team_member" style="text-align: center; border-radius: 7px;">
				   	  		<img src="images/tours_images/<?php echo $tour->getInternalPagePic2() ?>"  class="img-responsive" style="max-height: 372px;" alt="<?php echo $tour->getTitle() ?>">				   					   
				   	  	 </figure>
				   	  </div>
						
					<?php else : ?>
					
				   	  <div class="col-md-12 faculty_grid wow fadeInLeft animated" data-wow-delay=".5s">
				   	  	<figure class="team_member" style="border-radius: 7px;">
				   	  		<img src="images/tours_images/<?php echo $tour->getInternalPagePic1() ?>"  class="img-responsive" style="width: 100%; max-height: 450px;" alt="">				   					   
				   	  	 </figure>
				   	  </div>
						
					<?php endif; ?>
								
					<h2 style="color: #f98242;"><?php echo $tour->getTitle(); ?></h2>
		
					<p>
						<?php echo $tour->getLong_text(); ?>
						<br/><br/>
						<span>משך הסיור  שעתיים</span>
					</p>
					<a href="contact.php?ture_title=<?php echo $tour->getTitle(); ?>" class="order_now_title">להזמנת סיור לחץ כאן</a>
	
				</div>
				<?php endforeach; ?>

			
		
		</div>
	</div>
<!--about-->
<!--footer-->
	<?php require_once 'parts/footer.php'; ?>
<!--footer-->
</body>
</html>