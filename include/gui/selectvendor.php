<?php
//error_reporting(E_ERROR | E_PARSE);
// include all nessesary files
require '../settings.php';
require_once '../logger.php';
require_once '../db.php';
db::connect(); // connect do mysql database
			echo('<option value=# selected>---</option>');
		// get some information
			$result = db::query("SELECT DISTINCT(`Main.Brand`) AS `Main.Brand` FROM `{prefix}main` ORDER BY `Main.Brand`");
			while ($brand = db::fetch($result,'ROW')) { printf('<option value=%s>%s</option>',$brand[0],$brand[0]); }
db::close();
?>
