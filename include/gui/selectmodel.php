<?php
//error_reporting(E_ERROR | E_PARSE);
// include all nessesary files

require '../settings.php';
require_once '../logger.php';
require_once '../db.php';
require_once '../templater.php';

db::connect(); // connect do mysql database
			echo('<option value=# selected>---</option>');
			$result = db::query("SELECT `Main.Model` FROM `{prefix}main` WHERE `Main.Brand` = '".$_GET['ch']."' ORDER BY `Main.Model`");
			while ($model = db::fetch($result,'ROW')) { printf('<option value="%s">%s</option>',$model[0],$model[0]); }
db::close();
?>
