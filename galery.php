<?php 

require_once 'classes/galery.class.php';

$galeryPics  = Galery::getGaleryPics();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>חוכמת רחוב  - גלריה</title>

<meta name="description" content="תמונות מסיורים בתל אביב ,סדנאות אאוטדור סדנאות גיבוש עובדים">
<meta name="keywords" content="סיורים בתל אביב,סיור בתל אביב,סיור ביפו,טיולים בתל אביב,טיול בתל אביב,סיורים בת`א,סיור גרפיטי,סדנאות ODT,סדנאות גיבוש,סדנאות לעובדים,סדנאות מנהלים,סדנת outdoor,סדנת אאוטדור,סדנאות לאירגונים,סדנאות גיבוש עובדים">
<meta name="google-site-verification" content="D6Pn9daioFpHic7HS1OjiQVUHf6F-PvJT_z5ZwVbZN4" />

<link rel="icon" type="image/png" href="http://example.com/image.png" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<link href="css/style.css?v=9" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<link rel="stylesheet" href="css/swipebox.css">
<!-- Custom Theme files -->
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
<!--banner start here -->
<div class="banner-1">
	  <div class="container">
  <!--header start here-->
	<?php require_once 'parts/header.php'; ?>
  <!--header end here-->

</div>
</div>
<!--banner end here-->
<!--gallery-starts--> 
<div class="facilities w3l-1">
	<div class="container">
			
			<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
			</script>
				 
				 <img alt="לוגו חוכמת רחוב" src="images/web new.png" class="headerLogo" />
				
				<?php foreach($galeryPics as $galeryPic): ?>
				
				<div class="view view-seventh">
                    <a href="images/tours_images/<?php echo $galeryPic->getImgPath(); ?>" class="b-link-stripe b-animate-go  swipebox"  title="<?php echo $galeryPic->getImgTitle(); ?>"><img src="images/tours_images/<?php echo $galeryPic->getImgPath(); ?>" alt="<?php echo $galeryPic->getImgTitle(); ?>" class="img-responsive">
	                    <div class="mask">
	                       <h4><?php echo $galeryPic->getImgTitle(); ?></h4>
	                    </div>
                    </a>
                </div>
                
                <?php endforeach; ?>
                
               
                
				<div class="clearfix"></div>
	</div>
</div>
<!--gallery-ends--> 

<!--footer-->
	<?php require_once 'parts/footer.php'; ?>
<!--footer-->
</body>
</html>