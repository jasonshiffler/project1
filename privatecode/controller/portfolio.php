<?php
/*********************
 * portfolio.php
 *
 *
 * Portfolio controller
 *********************/

require_once('../model/model.php');
require_once('../includes/helper.php');

if (isset($_SESSION['userid']))
{
	// get the list of holdings for user
	$userid = (int)$_SESSION['userid'];
	$holdings = get_user_shares($userid);
	
	render('portfolio', array('holdings' => $holdings));
}
else
{
	render('login');
}
?>
