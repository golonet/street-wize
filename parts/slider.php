<?php

?>

 	<div class="banner-main">

	  <section class="slider">
           <div class="flexslider">
             <ul class="slides">
			   <li>
				   <img src="images/logo_new.png" class="img-responsive slider_ng" alt="" style="border-radius: 15px; width: 100%;">
				   <?php if (strpos($_SERVER['REQUEST_URI'],'tours.php')==false): ?>
				   <h3>סיורים בת"א</h3>
				  
						<p> בכל פינה חבויה או גלויה בתל אביב מסתתר סיפור נוסטלגי, אשר מחכה שיפיחו בו חיים. אתם מוזמנים לצאת איתנו לאחד מסיורי החוויה בתל אביב, לטעום מן האווירה של פעם והיום, להגיע למקומות מוכרים ומוכרים פחות, לצלול פנימה לסיפורים ולהתרגש יחדיו. הסיורים בתל אביב הם לכל גיל ואירוע.</p>
				   <?php endif; ?>
			   </li>
			   <li>
			    	<img src="images/slider_2.png" class="img-responsive slider_ng" style="border-radius: 15px; width: 100%;" alt="">
					<?php if (strpos($_SERVER['REQUEST_URI'],'tours.php')==false): ?>
				   <h3>סדנאות outdoor</h3>
				   
					<p>אנחנו מזמינים אתכם לצאת מהשגרה מבלי לצאת מהעיר בסדנאות המשלבות למידה לצד חוויה מעשית וגיבוש.
					פעילות Outdoor אינטראקטיבית הכוללת עבודת צוות, משחקי חשיבה ואתגר, מתוך הניסיון שההנאה תוביל להנעה, למידה והטמעה.</p>
					<?php endif; ?>
			   </li>
			  
			   
			   <li>

				   <img src="images/slider_3.png" class="img-responsive slider_ng" style="border-radius: 15px; width: 100%; " alt="">
				   <?php if (strpos($_SERVER['REQUEST_URI'],'tours.php')==false): ?>
				   <h3>סדנאות לפיתוח אישי וארגוני</h3>
				
					<p> בואו לטפח את המשאב האנושי דרך סדנאות למיומנויות רכות.
					הסדנאות מותאמות לצורכי הארגון ופונות לעובדים, למנהלים, למורים ולמדריכים וכוללות הקניית ידע, חוויה מעשירה, דינאמיקה קבוצתית ומתן כלים יישומים, איתם ניתן לצאת לשטח.</p>
					<?php endif; ?>
			   </li>
			   
				   
         	 </ul>
       	    </div>
      </section>
	
	</div>
	
	<!--FlexSlider-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(function(){
     // SyntaxHighlighter.all();
    });
    $(window).load(function(){ 
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });

      var url = window.location;
   // Will only work if string in href matches with location
       $('ul.nav a[href="' + url + '"]').parent().addClass('active');

   // Will also work for relative and absolute hrefs
       $('ul.nav a').filter(function () {
           return this.href == url;
       }).parent().addClass('active').parent().parent().addClass('active');
      
    });
  </script>