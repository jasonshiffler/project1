<?php
/*********************
 * index.php
 *
 *
 * Dispatcher for MVC
 *********************/

session_start();

if (isset($_GET["page"]))
	$page = $_GET["page"];
else
	$page = "home";

$path = __DIR__ . '/privatecode/controller/' . $page . '.php';
if (file_exists($path))
       {
        require($path);
       }
else
      {
       echo 'file does not exist';
      }
?>
