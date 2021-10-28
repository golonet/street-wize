<?php 

require_once 'classes/tour.class.php';


$tours = Tour::getTours();

//echo $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>חוכמת רחוב  - סיורים בתל אביב</title>

<meta name="description" content="סיורים בתל אביב יפו">
<meta name="keywords" content="סיורים בתל אביב,סיור בתל אביב,סיור ביפו,טיולים בתל אביב,טיול בתל אביב,סיורים בת`א,סיור גרפיטי,סיורים בשרונה,מדריכים בתל אביב,טיול בתל אביב נווה צדק,סיור בנווה צדק,סיור טעימות,סיורים בנווה צדק,סיורים בשרונה,סיור בשוק הפשפשים,סיורים מודרכים בתל אביב">
<meta name="google-site-verification" content="D6Pn9daioFpHic7HS1OjiQVUHf6F-PvJT_z5ZwVbZN4" />

<link rel="icon" type="image/png" href="images/favicont.png" />
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
<!--products-->
<div class="services w3l-4">
	<div class="container">
	 
	 
	 <?php require_once 'parts/slider.php'; ?>
	 
<!-- 	<img alt="לוגו חוכמת רחוב" src="images/web new.png" class="headerLogo"  /> -->
	<br /><br />
		<h1 style="text-align: center;color: #f9824a;font-size: 54px;margin-top: 48px;">סיורים בתל אביב</h1>		
		<p class="phoneArea" style="width: 100%; text-align: center; padding: 10px;">
			<a class="order_title" href="tel:050-2977779" title=" נייד : 050-2977779">
			 להזמנת סיורים לחצו   <i class="fa fa-phone" aria-hidden="true" style="color: #f98242;font-size: 20px;"></i>&nbsp;    או התקשרו  :  050-2977779  </a>
		</p>
		
		<div style="color: #000; font-size: 18px; direction: rtl; margin-top: 20px;     line-height: 35px;">
		<span style="font-weight: bold; font-size: 20px;">
	בואו לגלות את תל אביב איתי ולהתאהב בה מחדש!
	</span> 
	<br>
	מגוון סיורים מיוחדים לקבוצות, לימי כיף וגיבוש בעבודה, למתנת יום הולדת מפתיעה, לאירוע אישי קצת אחרת, למחוזות הילדות, ליום נישואין, למסיבת רווקות, לחוגי מטיילים וגמלאים ולכל מי שכבר התאהב בתל אביב. הסיורים הם לקבוצות במועד המתאים לכם.
	  <br>
	
	  <br>

בכל פינה חבויה או גלויה מסתתר סיפור המחכה שיפיחו בו חיים, סודות, ריחות, טעמים, שירים וסיפורים אנושיים.<br>
	<span style="font-weight: bold; ">
	תבחרו סיור ותצאו איתי יחד לחוויה תל אביבית
	</span>
	 עם ניחוח של נוסטלגיה, ידע, סיפורים אנושיים המוצגים בהומור ורגש, צלילי עבר והווה שמשתלבים יחדיו והרבה אהבה למקצוע, שגורמת לכל סיור להיות עם הניחוח המיוחד לו.
	  <br>
	הסיורים מודרכים על ידי נוית ענבר- מורת דרך מוסמכת ומספרת סיפורים אשר ממשיכה להתרגש מהעיר בכל סיור מחדש.
		
		</div>
		<br/><br/>
		<?php foreach($tours as $tour): ?>
			<div class="col-md-4 services-grid" style="padding: 20px;">
				<a href="tour_type.php?id=<?php echo $tour->getId() ?>" class="mask">					
					<img src="images/tours_images/<?php echo $tour->getImagePath() ?>" alt="<?php echo $tour->getTitle() ?>" title="<?php echo $tour->getTitle() ?>" class="img-responsive zoom-img" alt="">
				</a>	
				<a href="tour_type.php?id=<?php echo $tour->getId() ?>" class="mask" style="min-height: 110px;" title="<?php echo "לינק לעמוד ". $tour->getTitle() ?>">							
					<h4><?php echo $tour->getTitle() ?></h4>
					<p style="text-align: right; position: relative; top: -10px; color: #000; font-size: 16px;">
						<span style="font-size: 14px;"><?php echo $tour->getKeywords(); ?></span><br />						
					</p>
				</a>
			</div>
		<?php endforeach; ?>
		

</div>
</div>
<!--products-->

<!--footer-->
	<?php require_once 'parts/footer.php'; ?>
<!--footer-->


</body>
</html>