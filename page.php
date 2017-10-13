<?php 
function page_renderer($status){
?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Desombergh.be</title>
		<link rel="icon" href="assets/images/favicon.ico">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,800|Open+Sans:300,400,700|Bungee:400" rel="stylesheet">
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
				<?php include_once('sections/5hobbies.php'); ?>
				<?php include_once('sections/6contact.php'); ?>
				<?php include_once('sections/7final.php'); ?>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<script src="assets/js/Pie.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="assets/js/jquery.fullPage.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<!--<script type="text/javascript" src="assets/js/pies.js"></script>-->
	</body>
</html>
<?php 
}
?>