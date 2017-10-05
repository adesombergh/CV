<?php 

if (!empty($_POST))
{
	$status = dealWithPost();
}
render_site($status);

function dealWithPost()
{
	if (isset($_POST['action'])&& $_POST['action']==="sendmail" ) {
		if (mailCheck()) {
			$sent = sendmail($_POST['nom'],$_POST['email'],$_POST['msg']);
			if ($sent) {
				$status['success'] = true;
				$status['message'] = "Mail envoyé avec succès!";
			} else {
				$status['success'] = false;
				$status['message'] = "Oops, y'a un problème inconnu pour envoyer ce mail";
			}
		} else {
			$status['success'] = false;
			$status['message'] = "<strong>Oops,</strong> il faut corriger quelque chose";
		}
		return $status;
	}
}

function mailCheck()
{
	if (!empty($_POST['msg'])&&!empty($_POST['email'])&&!empty($_POST['nom'])) {
		return true;
	} else {
		return false;
	}
}



function sendmail($name,$email,$msg)
{
	$headers = 'From: mailer@my.cv' . "\r\n" .
	'Reply-To: '.$email . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	return mail("aldebaran.desombergh@gmail.com", $name. " Sent you a Mail From CV-Site", $msg, $headers);
}


function render_site($status)
{
	include_once('page.php');
};


function dd($var)
{
	dump($var);
	die();
};

function dump($var)
{
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
};
 ?>
