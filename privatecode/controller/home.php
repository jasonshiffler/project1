<?php
/*******************

 * Default controller
 *********************/

$path = __DIR__ . '/../includes/helper.php'; 


require_once($path);
if (isset($_SESSION['userid']))
	render('home');
else
	render('login');
?>
