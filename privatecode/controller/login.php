<?php
/*******************
 * login.php
 *
 *
 * Login controller
 *******************/

$path=__DIR__;

require_once($path.'/../model/model.php');
require_once($path.'/../includes/helper.php');

if (isset($_POST['email']) &&
	isset($_POST['password']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$pwdhash = hash("SHA1", $password);
	
	$userid = login_user($email, $password);
	if ($userid > 0)
	{
		$_SESSION['userid'] = $userid;
		render('home');
	}
	else
	{
		render('pwdhash',array('pwdhash' => $pwdhash));
	}
}
else
{

echo 'hello';
//	render('login');
}
?>
