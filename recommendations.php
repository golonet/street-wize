<?php 

require_once 'classes/recommendations.class.php';

$recommendations  = Recommendations::getRecommendations();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>המלצות</title>

<meta name="description" content="ממליצים כותבים על סיורים בתל-אביב">
<meta name="keywords" content="סיורים בתל אביב,סיור בתל אביב,סיור ביפו,טיולים בתל אביב,טיול בתל אביב,סיורים בת`א,סיור גרפיטי,סדנאות ODT,סדנאות גיבוש,סדנאות לעובדים,סדנאות מנהלים,סדנת outdoor,סדנת אאוטדור,סדנאות לאירגונים,סדנאות גיבוש עובדים">
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
<!--about-->
<div class="about w3l-2">
	<div class="container" style="padding-bottom: 10px;"> 
	
	<img alt="לוגו חוכמת רחוב" src="images/web new.png" class="headerLogo" />
	<br/>
	<br/>
	<br/>
		<div class="abt-top w3ls-2" style="direction: rtl;">
				<h3 style="font-size: 35px;font-weight: bold;text-align: center;color: #f98648;">
				ממליצים כותבים על הסיורים שלנו
				</h3>
				<br>
				<?php $number=0; ?>
				<?php foreach ($recommendations as $recommend): ?>
				

				<div class="recommendations_box">
			
					<p>
						<span style="font-size: 18px; font-weight: bold; color: #f98242;">מאת : </span>
						<span style="font-size: 18px; font-weight: bold; color: #f98242;"><?php echo $recommend->getTitle(); ?></span>
						
						
						<div style="width: 100%; padding-top: 10px;">
							<img src="images/quote_mark2.png" style=" width:26px; clear:both;"  />
							<?php echo $recommend->getText(); ?>
							<img src="images/quote_mark.png" style="width:26px; clear:both;" />
						</div>

					</p>					
				</div>								
				<br />				
				<?php endforeach; ?>					
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--about-->
<!--footer-->
	<?php require_once 'parts/footer.php'; ?>
<!--footer-->
</body>
</html>