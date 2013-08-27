<?php
// Stop if try to run script with wrong parameters
if(!isset($_GET['search'])) {die('Something goes really wrong.'); }

//error_reporting(E_ERROR | E_PARSE);
// include all nessesary files
require '../settings.php';
require_once '../logger.php';
require_once '../db.php';
db::connect(); // connect do mysql database

	$result = db::query("SELECT * FROM `{prefix}main` WHERE `Main.Part Number` = '".$_GET['search']."'");
	while ($inf = db::fetch($result,'ROW')) { 
				
				#Header information
				
				$Main_Brand=$inf[0];
				$Main_Model=$inf[1];
				$Main_PartNumber=$inf[2];
				
				#Pictures
				
				$Main_Pictures=$inf[3];
				
				# Rest $information are just a specs		
	}

	
	
?>

		<!-- HEADER with Vendor, model and PN information -->
			
				<div id="header" style="position: relative; left:20px;top:20px;width:225px;height:100px;">
					<span class="container-main">Brand: <b><?php echo $Main_Brand; ?></b></span><br/>
					<span class="container-main">Model: <b><?php echo $Main_Model; ?></b></span><br/>
					<span class="container-main">Part Number: <b><?php echo $Main_PartNumber; ?></b></span><br/>
				</div>
		
		<!-- PICTURE SLIDER -->
		
		<div id="pslider" class="slider" style="position: relative;left:160px;top:5px;width:480px;height:380px;">
		
		<?php
		# Zamienic ;)
		
		$root = $_SERVER['DOCUMENT_ROOT'];
		$dir=$root.$picpath."data/images/".$Main_Brand."/".$Main_Model;
		$dir1="data/images/".$Main_Brand."/".$Main_Model."/";
		
		//echo $dir;
		
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					if ($file!=".." and $file!=".") echo "<img src='".$dir1.$file."' />";
				}
			closedir($dh);
			}
		}
		
		
		?>
		
		</div>		
		
<!--		
            <div id="pslider" class="slider" style="position: relative;left:160px;top:5px;width:480px;height:380px;">
				<img src="templates/images/image1.jpg" data-plugin-slide-caption="This is a <b>caption</b> in slide 1. <a href='http://fursik.deviantart.com/' target='_blank' title='Link to the photographer of the photos used in examples'>Photo by Fursik</a>" />
				<img src="templates/images/image2.jpg" />
				<img src="templates/images/image3.jpg" />
				<div style="background-color: #ff7500" data-plugin-slide-caption="This is the caption of a <b>DIV</b> slide."><b>A DIV slide</b><img style="width:60%;border:1px solid #fff;background-color: #fff;float:right;margin: 10px;padding: 10px;" src="templates/images/image4.jpg" /></div>
				<img src="templates/images/image5.jpg" />
				<img src="templates/images/image6.jpg" />
				<img src="templates/images/image7.jpg" />
				<img src="templates/images/image8.jpg" />
			</div>
-->
	<!--
	<div id="wb_Brand.Label" style="position:absolute;left:86px;top:78px;width:125px;height:16px;z-index:6;text-align:left;">
		<span style="color:#000000;font-family:Arial;font-size:13px;">Brand</span></div>
	<div id="wb_Text1" style="position:absolute;left:384px;top:78px;width:125px;height:16px;z-index:7;text-align:left;">
		<span style="color:#000000;font-family:Arial;font-size:13px;">Model</span></div>
	<div id="wb_Text2" style="position:absolute;left:671px;top:78px;width:125px;height:16px;z-index:9;text-align:left;">
		<span style="color:#000000;font-family:Arial;font-size:13px;">Part Number</span></div>	
	-->

		<!-- ACCOREON -->

		<div id="jQueryAccordion1" style="position:relative;left:35px;top:25px;width:760px;height:624px;z-index:8;">
		<div id="jQueryAccordion1_id" style="position:absolute;width:760px;height:624px">

<?php
			$result = db::query("SELECT DISTINCT(`Group`) AS `Group` FROM `{prefix}main.conf` ORDER BY `Group`");
			while ($spec_groups = db::fetch($result,'ROW')) { 
			
			printf('<h3>%s</h3><div><table style="position:absolute;left:27px;top:17px;width:701px;z-index:0;">',$spec_groups[0]); 
			
				$result1 = db::query("SELECT DISTINCT(`Name`) AS `Name` FROM `{prefix}main.conf` WHERE `Group` = '".$spec_groups[0]."' ORDER BY `Name`");
				while ($spec_name = db::fetch($result1,'ROW')) { 
			
						$result2 = db::query("SELECT `".$spec_groups[0].".".$spec_name[0]."` FROM `{prefix}main` WHERE `Main.Part Number` = '".$_GET['search']."'");
						while ($spec_r = db::fetch($result2,'ROW')) { $spec = $spec_r[0]; }
			
					printf('<tr><td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">%s</td><td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">%s<td>',$spec_name[0],$spec); }
					
			printf('</table></div>');
			}
?>		
</div>


<?php			
db::close();
?>