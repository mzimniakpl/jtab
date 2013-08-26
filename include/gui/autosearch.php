<?php
//error_reporting(E_ERROR | E_PARSE);
// include all nessesary files
require '../settings.php';
require_once '../logger.php';
require_once '../db.php';
db::connect(); // connect do mysql database
			$return_arr = array();
			$result = db::query("SELECT DISTINCT(`Main.Part Number`) AS `Main.Part Number` FROM `{prefix}main` ORDER BY `Main.Part Number`");
			while ($brand = db::fetch($result,'ROW')) { $return_arr[] = $brand[0]; }
			echo json_encode($return_arr);
db::close();
?>
