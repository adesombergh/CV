<?php 
function page_renderer($status){
?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#317EFB"/>
		<title>Aldebaran Desombergh - Web Developer</title>
		<link rel="icon" href="assets/images/favicon.ico">
		<!-- Bootstrap CSS -->
<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,800|Open+Sans:300,400,700|Bungee:400" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.fullPage.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div id="site">
			<?php include_once('header.php'); ?>
			<div id="sections">
				<?php include_once('sections/1intro.php'); ?>
				<?php include_once('sections/2resume.php'); ?>
				<?php include_once('sections/3formation.php'); ?>
				<?php include_once('sections/4skills.php'); ?>
				<?php include_once('sections/5portfolio.php'); ?>
				<?php include_once('sections/6hobbies.php'); ?>
				<?php include_once('sections/7contact.php'); ?>
				<?php include_once('sections/8final.php'); ?>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="assets/js/Pie.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="assets/js/jquery.fullPage.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
	</body>
</html>
<?php 
}
?>