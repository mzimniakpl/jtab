<?php
//error_reporting(E_ERROR | E_PARSE);
// include all nessesary files
require '../settings.php';
require_once '../logger.php';
require_once '../db.php';
db::connect(); // connect do mysql database
			echo $_GET['search'];
db::close();
?>