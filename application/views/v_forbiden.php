<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JDIH Inspektorat | Error Page</title>
	<meta name="description" content="Travel Error Page is 404 Error Page. Travel Error Page Build on simple and easily to customize structure. Travel Error Page concept is on sweet animation car which unable to find their destination and that’s why it travel continuously. Same like unable to find page and reached at error page.">
	<meta name="keywords" content="travel error page, error page, 404, 404 page, 404 error, nc, ncodeart, art, animation">
	<meta name="author" content="NCodeArt">

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
	<!-- EXTERNAL STYLESHEETS -->
	<link href="http://www.ncodeart.com/themeforest/travel-error-page/nc/version-3/css/font-awesome-4.2.0/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- ANIMATION -->
	<link href="http://www.ncodeart.com/themeforest/travel-error-page/nc/version-3/css/animation.css" rel="stylesheet" type="text/css" />
	<!-- MAIN STYLESHEETS -->
	<link rel="stylesheet" href="http://www.ncodeart.com/themeforest/travel-error-page/nc/version-3/css/main.css">
	<!-- Favicons -->
	<link rel="icon" href="images/nc-fav.ico">
</head>
<body>
	<!-- ANIMATION -->
	<div class="fix-wrp">
		<div class="animate-wrp">
			<div class="sky">
				<div class="car-wheels"></div>
				<div class="car">
					<div class="msg"><b><span>Oops!</span>May be I am on wrong way.</b></div>
				</div>
				<div class="car-wheels c1"></div>
				<div class="car1 c1"></div>
				<div class="cloud"></div>
				<div class="cloud2"></div>
				<div class="cloud1"></div>
				<div class="grass1"></div>
				<div class="grass"></div>
				<div class="grass2"></div>
				<div class="mountain"></div>
				<div class="mountain1"></div>
				<div class="tree"></div>
				<div class="tree-front"></div>
				<div class="road"></div>
				<div class="road-front"></div>
			</div>	
		</div>
	</div>
	<!--/animate-wrp -->

	<!-- MAIN WRAPPER -->
	<div class="main-wrapper">
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- BALLOON SHIP -->
			<div class="balloon-ship">
				<div class="message-wrp">
					<strong class="t1">OOPS!</strong>
					<strong class="t2">ERROR 404</strong>
					<strong class="t3">PAGE NOT FOUND</strong>
				</div>
				<img src="http://www.ncodeart.com/themeforest/travel-error-page/nc/version-3/images/balloon-ship.png" alt="balloon-ship" />
			</div>
			<!--/balloon ship -->

			<div class="message">
				<p class="t1">We couldn't find what you were looking for.<br>You could try some use full links below.</p>
			</div>

			<!--/nav-wrapper -->

		</div>
		<!--/container -->
	</div>
	<!--/main-wrapper -->
	
	<!-- COMMON SCRIPT -->
	<script src="http://www.ncodeart.com/themeforest/travel-error-page/nc/version-3/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="http://www.ncodeart.com/themeforest/travel-error-page/nc/version-3/js/jquery.arctext.js"></script>
	<script>
		function mainWindow(){
			$(".main-wrapper").css({
				width: $('html').width(),
				height: $('html').height() > $(window).height() ? $('html').height() : $(window).height()  
			});
		}
		function animateWindow(){
			$(".animate-wrp").css({
				width: $(window).width(),
				height: $('.main-wrapper').height()
			});
		}
		$(document).ready(function() {
			mainWindow();
			animateWindow();
		});
		$(window).resize(function(event) {
			mainWindow();
			animateWindow();
		});
		$(document).ready(function() {
			var $t3	= $('.message-wrp .t3').hide();
			$t3.show().arctext({radius: 1900, dir: -1});
		});
	</script>
</body>
</html>