<!doctype html>
<html lang="en">
<!--
    title:          home page
    creator:        www.danielklineweb.com
    date:           12/22/12
    description:    site for Ability Connection Oklahoma
    
    Internet explorer compatibility methods used:
			Linear-gradients
				filter: 		progid:DXImageTransform.Microsoft.Gradient(startColorstr='#7db9e8', endColorstr='#1e5799');
			Recognize pseudo classes:
				<script src="./js/DOMAssistantCompressed-2.8.1.js"></script>
				<script src="./js/selectivizr-1.0.2/selectivizr.js"></script>
			Recognize HTML (pre IE9)
				<script src="dist/html5shiv.js"></script>
-->
<head>
	
	<title>Ability Connection Oklahoma</title>

	<meta charset="UTF-8">
	<meta name="google-translate-customization" content="efdf241eebc39bea-6d50cb4921920cda-gfad34e53d03f7849-12"></meta>
	
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/style.css">
	<!-- THIS IS NAV MENU STYLING -->
	<link rel="stylesheet" href="./css/superfish.css">

	<!--[if IE 9]>
		<link rel="stylesheet" href="./css/superfish-ie9.css">
	<![endif]-->
	
	<!--[if IE 8]>
		<link rel="stylesheet" href="./css/style-ie8.css">
		<link rel="stylesheet" href="./css/superfish-ie8.css">
	<![endif]-->

	<!--[if IE 7]>
		<link rel="stylesheet" href="./css/style-ie7.css">
		<link rel="stylesheet" href="./css/superfish-ie7.css">
	<![endif]-->
	
	<link rel="stylesheet" href="./css/superfish-vertical.css">
	<!-- END OF NAV MENU STYLING -->
	<link rel="stylesheet" href="./css/slideshow.css">
	
	<!-- allow IE 7 and 8 to recognize nth-of-type pseudo classes -->
	<!--[if gte IE 7]>
	<script src="./js/DOMAssistantCompressed-2.8.1.js"></script>
	<script src="./js/selectivizr-1.0.2/selectivizr.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="./js/html5shiv.js"></script>
	<![endif]-->

	<!-- analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXX-Y']);
		_gaq.push(['_trackPageview']);
	      
		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>

<?php

    // Identify current page */
    $page = $_SERVER['REQUEST_URI'];
    $page = str_replace('/acok-site/', '', $page);
    $page = str_replace('.php', '', $page);
        //echo $page;
        //echo "<br>";
?>

<body>
	<h1 id="accessibility"><?php echo $page; ?></h1> <!-- to be read by screen readers, accessibility -->
    <div id="wrapper">
        <header>
            <img src="./images/banner_1024x246_act2.gif" alt="background image for header">
            <a href="index.php"><img src="./images/ACOK_LOGO.png" alt="Ability Connection Logo"></a>
            <p id="former">Formerly United Cerebal Palsy</p>
            
            <!-- THIS IS SLIDESHOW CODE -->
                <div id="slideshow"></div>
            <!-- END OF SLIDESHOW CODE -->
            
            <!-- beginning of language translate API -->
		<div id="google_translate_element"></div>
		<script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement(
					{pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE},
					'google_translate_element');
			}
</script>
		<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <!-- end of translate -->
            
            <?php
                include_once('./includes/nav-menu.php');
            ?>
        </header>
