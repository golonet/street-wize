<?php
session_start();

header('Access-Control-Allow-Origin: *');

$userMsg = NULL;

if (isset($_REQUEST['token']) && $_REQUEST['token']==$_SESSION['linir']){
	
	$name    = $_REQUEST['name'];
	$mail    = $_REQUEST['mail'];
	$phone   = $_REQUEST['phone'];
	$message = $_REQUEST['message'];
	$ture_title="אין";

	if(isset($_REQUEST['ture_title'])){
		$ture_title=$_REQUEST['ture_title'];
	}
	
	$date = date("d/m/Y");
	$time =  date("h:i:sa");
	
	$to 	     = 'streetwisetlv@gmail.com,veros1@walla.com,navit.inbar@gmail.com';
		
	
	$subject = 'חוכמת רחוב - טופס צור קשר ';
	$headers = "From: $mail" . "\r\n";
	$headers .= "Reply-To: <$mail>\r\n";	
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=utf-8";
	
			
	$replymessage = "<html>
	<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	</head>
	<body>
	<div style='width:500px;text-align:right;float:right;background-color:#38567b;color:#FFF;font-size:14px;direction:rtl;padding:5px;padding: 20px;'>
	<br />
	<div style='width:100%;clear:both;font-size: 25px;font-weight: bold;'> חוכמת רחוב : פרטי טופס צור קשר </div>
	<br />
	<table border='1' cellpadding='3' style='border: 1px solid #000;color: #000;border-collapse: collapse;background-color: #ffffff;font-size: 20px;'>
	<tr>
		<td style='padding: 5px;'>שם</td>
		<td style='padding: 5px;'>$name</td>
	</tr>
	<tr>
		<td style='padding: 5px;'>נושא</td>
		<td style='padding: 5px;'>$ture_title</td>
	</tr>
	<tr>
	<td style='padding: 5px;'>טלפון</td>
	<td style='padding: 5px;'>$phone</td>
	</tr>
	<tr>
	<td style='padding: 5px;'>מייל</td>
	<td style='padding: 5px;'>$mail</td>
	</tr>
	<tr>
	<td style='padding: 5px;'>תאריך ושעה</td>
	<td style='padding: 5px;'>$date : $time</td>
	</tr>

	<tr>
	<td style='padding: 5px;'>תוכן ההודעה</td>
	<td style='padding: 5px;'>$message</td>
	</tr>
	</table>
	<br />
	<div style='width:100%;clear:both;'></div>
	
	</div>
	</body>
	</html>
	";
	
	
	//$myfile = file_put_contents('parts/my_emails.php', $replymessage.PHP_EOL , FILE_APPEND | LOCK_EX);
	
	
	mail($to,"From : $subject",$replymessage, $headers);
	
	$userMsg ="ההודעה נשלחה בהצלחה";
}


$_SESSION['linir'] = uniqid();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>חוכמת רחוב  - צור קשר</title>

<meta name="description" content="צור קשר">
<meta name="keywords" content="סיורים בתל אביב,סיור בתל אביב,סיור ביפו,טיולים בתל אביב,טיול בתל אביב,סיורים בת`א,סיור גרפיטי,סדנאות ODT,סדנאות גיבוש,סדנאות לעובדים,סדנאות מנהלים,סדנת outdoor,סדנת אאוטדור,סדנאות לאירגונים,סדנאות גיבוש עובדים">
<meta name="google-site-verification" content="D6Pn9daioFpHic7HS1OjiQVUHf6F-PvJT_z5ZwVbZN4" />
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

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{
background: none;
}
body{color:#000;}
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
<!--contact-->
<div class="contact w3l-3">
	 <div class="container">
	 
	 <img alt="לוגו חוכמת רחוב" src="images/web new.png" class="headerLogo" />
			<div class="contact-form w3ls-3">
				<?php if (!empty($userMsg)): ?>
				<h3>- <?php echo $userMsg; ?> -</h3>
				<?php endif; ?>
				<div class="col-md-6 contact-in">
					<div class="" style="padding-bottom: 30px;font-size: 28px;color: #f9824a;"> 

					
						<div class="address-more">

							<p><a  href="tel:050-2977779" style="color:#f9824a; font-size:28px;"><i class="fa fa-phone" aria-hidden="true" style="color: #f9824a;font-size: 19px;position: relative;top: 4px;"></i> נייד : 050-2977779</a></p>
							<p><a href="mailto:streetwisetlv@gmail.com" style="color:#f9824a;">streetwisetlv@gmail.com</a></p>
							<p style="color:#f9824a;">חוכמת רחוב</p>
							<p style="color:#f9824a;">נוית ענבר</p>
						</div>						
						<div class="clearfix"> </div>
				      </div>					
					

				</div>
				<div class="col-md-6 contact-grid">
					<div class="notValidForm" style="text-align: center; font-size: 20px; color: #f70e0e;"></div>
					
					<?php if(isset($_REQUEST['ture_title'])): ?>
					<div style="text-align: right;padding: 20px; font-size: 26px; color: #f9824a;">
						הזמנת	<?php echo $_REQUEST['ture_title'] ?>
					</div>
					<?php endif; ?>
					<form id="contactUsForm" style="text-align:right;" action="contact.php" method="post" onsubmit="javascript:return contactUs();">
					
						<?php if(isset($_REQUEST['ture_title'])): ?>
							<input type="hidden" name="ture_title" value="<?php echo $_REQUEST['ture_title']; ?>">
						<?php endif; ?>					
						<input type="hidden" name="token" value="<?php echo $_SESSION['linir']; ?>">
						<p class="your-para">* שם :</p>
						<input type="text" name="name" placeholder="שם : חובה" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<p class="your-para">&nbsp; אימייל :</p>
						<input type="text" name="mail" placeholder="אימייל : חובה" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<p class="your-para">* נייד :</p>
						<input type="text" name="phone" placeholder="נייד : חובה" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">						
						<p class="your-para">&nbsp; הודעה :</p>
						<textarea name="message" placeholder="הודעה"></textarea>
						<div class="send" style="text-align: right;">
							<input type="submit" value="שלח">
						</div>
					</form>
				</div>				
				<div class="clearfix"> </div>
			</div>
							

	
	</div>
</div>
<!--contact-->

<!--footer-->
	<?php require_once 'parts/footer.php'; ?>
<!--footer-->

	<script type="text/javascript" src="js/internalScript.js"></script>
</body>
</html>