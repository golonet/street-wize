<?php

?>

<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-grids" style="direction: rtl;">
				<div class="col-md-1 footer-grid">
				
				</div>
				<div class="col-md-4 footer-grid">
					<h3>קישורים</h3>
					
					<div style="width: 50%; float: right;">
						<a style="color: #FFF;" href="index.php">ראשי</a><br/>
						<a style="color: #FFF;"href="about.php">אודות</a><br/>
						<a style="color: #FFF;"href="tours.php">סיורים</a><br/>
						<a style="color: #FFF;"href="workshops.php">סדנאות</a>
					</div>
					<div style="width: 50%; float: right;">
						<a style="color: #FFF;" href="coaching.php">אימון אישי</a><br/>
						<a style="color: #FFF;" href="galery.php">גלרייה</a><br/>
						<a style="color: #FFF;" href="recommendations.php">המלצות</a><br/>
						<a style="color: #FFF;" href="contact.php">צור קשר</a>
					</div>

						
					
				</div>
				<div class="col-md-4 footer-grid">
					<h3>רשתות חברתיות</h3>
					<ul class="social-icons1">
						<li><a href="https://www.facebook.com/streetwise.co.il?fref=ts"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>צור קשר</h3>
					
					<div class="footer-grid-address">
						<p><a style="color: #fff;" href="tel:050-2977779"> נייד : 050-2977779</a></p>

						<p style="color: #fff;">אימייל : <a class="email-link" href="mailto:navit.inbar@gmail.com">navit.inbar@gmail.com</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copy-right">
				<p style="color: #FFF"> חוכמת רחוב . כל הזכויות שמורות © 2009 | נבנה ע"י  
				<a style="color: #fff;" target="_blank" class="footerLogo" href="https://www.golonet.co.il/">Golonet.co.il <img style="position: relative; top: -1px; width: 18px;" src="images/footerLogo.png" alt="Golonet.co.il"></a>
					
				</p>
			</div>
		</div>
	</div>
<!--footer-->

<script type="text/javascript">
$(document).ready(function () {
    var url = window.location;
// Will only work if string in href matches with location
    $('ul.nav a[href="' + url + '"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
    $('ul.nav a').filter(function () {
        return this.href == url;
    }).parent().addClass('active').parent().parent().addClass('active');
});
</script>


<script src="https://golonet.co.il/assets/js/ngMaster_Accessibility.js?curClientKey=65468485&lang=HE"></script>

