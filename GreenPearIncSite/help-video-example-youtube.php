<!DOCTYPE html>
<html class="background-100-e">

<!-- Mirrored from skrollex.x40.ru/theme-suzi/help-video-example-youtube.php by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 06 Aug 2017 18:53:04 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Skrollex</title>
<meta name="description" content="Onepage Parallax Site"/>
<meta name="keywords" content="onepage, parallax"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="bower_components/animate.css/animate.min.css"/>
<link rel="stylesheet" href="bower_components/minicolors/jquery.minicolors.css"/>
<link rel="stylesheet" href="bower_components/slick.js/slick/slick.css"/>
<link rel="stylesheet" href="bower_components/slick.js/slick/slick-theme.css"/>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap-custom.min.css"/>
<link rel="stylesheet" href="lib/linecons/style.css"/>
<link rel="stylesheet" href="styles/style.min.css"/>
<link rel="stylesheet" href="theme-custom.css"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png"/>
</head>
<body class="example-page background-100-b">
<div class="gate colors-g background-solid">
<ul class="loader">
<li class="background-highlight-g"></li>
<li class="background-highlight-g"></li>
<li class="background-highlight-g"></li>
</ul>
</div>


<div class="youtube-bg" data-video="2zLQI4Dfi_w" data-mute="yes" data-volume="50" data-alternative="images/placeholders/1920x1200img4.jpg"></div>
<section id="sec1">
<div class="view">
<div class="content colors-c background-20 full-size">
<h3>Section 1 View</h3>
</div>
</div>
<div class="view">
<img alt class="bg" src="images/placeholders/1920x1200img1.jpg"/>
<img alt class="bg" src="images/placeholders/1920x1200img2.jpg"/>
<div class="content colors-f">
<h3>Section 1 View</h3>
</div>
</div>
</section>
<section id="sec2">
<div class="view">
<div class="content colors-d">
<h3>Section 2 View</h3>
</div>
</div>
<div class="view">
<img alt class="bg" src="images/placeholders/1920x1200img3.jpg"/>
<img alt class="bg" src="images/placeholders/1920x1200img4.jpg"/>
<div class="content colors-e">
<h3>Section 2 View</h3>
</div>
</div>
<div class="view">
<div class="content colors-c">
<h3>Section 2 View</h3>
</div>
</div>
</section>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="lib/tween/tween.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/modernizr/modernizr.js"></script>
<script src="lib/SmoothScroll-1.2.1/SmoothScroll.js"></script>
<script src="bower_components/jquery-cookie/jquery.cookie.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>
<script src="bower_components/minicolors/jquery.minicolors.min.js"></script>
<script src="bower_components/slick.js/slick/slick.min.js"></script>
<script src="bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
<script src="bower_components/textillate/assets/jquery.lettering.js"></script>
<script src="bower_components/textillate/assets/jquery.fittext.js"></script>
<script src="bower_components/textillate/jquery.textillate.js"></script>
<script src="lib/prism/prism.js"></script>
<script>
		(function()
		{
			var disableMobileAnimations = true;
			var isWin = navigator.appVersion.indexOf("Win") !== -1;
			if (isWin) $('html').addClass('win');
			var ua = navigator.userAgent.toLowerCase();
			var isChrome = ua.indexOf('chrome') > -1;
			if (isChrome) $('html').addClass('chrome');
			var isAndroidBrowser4_3minus = ((ua.indexOf('mozilla/5.0') > -1 && ua.indexOf('android ') > -1 && ua.indexOf('applewebkit') > -1) && !(ua.indexOf('chrome') > -1));
			if (isAndroidBrowser4_3minus) $('html').addClass('android-browser-4_3minus');
			var isSafari = !isChrome && ua.indexOf('safari') !== -1;
			if (isSafari) $('html').addClass('safari');
			var isMobile = Modernizr.touch;
			if (isMobile)
			{
				$('html').addClass('mobile');
				if (disableMobileAnimations) $('html').addClass('poor-browser');
			}
			else
			{
				$('html').addClass('non-mobile');
			}
			if (isWin && isSafari)
			{
				$('html').addClass('flat-animation');
			}
		})();
		</script>
<script src="scripts/script-bundle.js"></script>
<script>
		if (Function('/*@cc_on return document.documentMode===9@*/')())
		{
			$('html').addClass('ie9');
		}
		if (Function('/*@cc_on return document.documentMode===10@*/')())
		{
			$('html').addClass('ie10');
		}
		if (!!navigator.userAgent.match(/Trident.*rv\:11\./))
		{
			$('html').addClass('ie11');
		}
		</script>
</body>

<!-- Mirrored from skrollex.x40.ru/theme-suzi/help-video-example-youtube.php by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 06 Aug 2017 18:53:04 GMT -->
</html>