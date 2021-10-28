<?php
$whitelist = array(
		'127.0.0.1',
		'::1'
);


if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
	
	if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
		$location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		//header('HTTP/1.1 301 Moved Permanently');
		header('Location: ' . $location);
		exit;
	}
	
}
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46438169-1', 'auto');
  ga('send', 'pageview');

</script>
 <div class="header">
		 

				<nav class="navbar navbar-default" style="background: none ! important;">
				<div class="logo wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="images/logo_2.png" />
					<!-- <h1>
						
						<span class="logolink">חוכמת רחוב</span>
					</h1> -->
				</div>				
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">ראשי</a></li>
							<li><a href="about.php">אודות</a></li>
							<li><a href="tours.php">סיורים</a></li>
							<li><a href="workshops.php">סדנאות</a></li>
							<li><a href="coaching.php">אימון אישי</a></li>
							<li><a href="galery.php">גלריה</a></li>
							<li><a href="recommendations.php">המלצות</a></li>
							<li><a href="contact.php">צור קשר</a></li>
						</ul>
					</div>
					<!--/.navbar-collapse-->
				</nav>

				<div class="clearfix"> </div>

	</div>
	
	