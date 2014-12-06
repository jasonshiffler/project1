<?php
/********************
 * logout.php
 *
 * Logout controller
 ********************/

require_once('../includes/helper.php');

unset($_SESSION['userid']);
session_destroy();

render('login');
?>
