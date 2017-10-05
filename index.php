<?php 
include_once('tools.php');
include_once('post.php');
include_once('mailer.php');
include_once('page.php');


$result = catchPost();
page_renderer($result);
?>