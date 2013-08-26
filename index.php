<!DOCTYPE html>

<?php 
// include all nessesary files
require 'include/settings.php';
require_once 'include/logger.php';
require_once 'include/db.php';
 
db::connect(); // connect do mysql database
?>
 

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	    <!-- META -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>JTab</title>
        <meta name="description" content="">
		<meta name="author" content="Michał Zimniak">
		<meta name="generator" content="notepad++">
        <meta name="viewport" content="width=device-width">
        <!-- TODO: Place favicon.ico and apple-touch-icon.png in the root directory -->
	
		<!-- CSS -->
		<link rel="stylesheet" href="css/style_all.css">
	    <!-- JAVASCRIPT -->
        <script type="text/javascript" src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>		
		<script type="text/javascript" src="js/vendor/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.core.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.widget.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.mouse.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.sortable.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.tabs.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.accordion.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.position.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.menu.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.autocomplete.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.ui.button.min.js"></script>
		<script type="text/javascript" src="js/fancybox/jquery.easing-1.3.pack.js"></script>
		<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.0.pack.js"></script>
		<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
		<script type="text/javascript" src="js/excoloslider/jquery.excoloSlider.min.js"></script>
	
		<!-- JQUERY -->
		<script type="text/javascript">
		$(document).ready(function() {
			var jQueryTabs1Opts =
					{
						show: false,
						event: 'click',
						collapsible: false
					};
			$("#jQueryTabs1").tabs(jQueryTabs1Opts);
				var jQueryAccordion1Opts =
					{
						event: 'click',
						animate: 'linear',
						header: 'h3',
						heightStyle: 'fill'
					};
			$("#jQueryAccordion1_id").accordion(jQueryAccordion1Opts);
			var AutoComplete1Opts =
					{
						source: "include/gui/autosearch.php",
						delay: 5,
						minLength: 0,
						mustMatch: true
					};
			$("#AutoComplete1").autocomplete(AutoComplete1Opts);
			$("#jQueryButton1").button();
			$("#pslider").excoloSlider({
                prevButtonImage: "templates/images/prev.png",
                nextButtonImage: "templates/images/next.png",
                pagerImage: "templates/images/pagericon.png",
				interval: 5000, // = 5 seconds
				playReverse: false
            });
			$("select#Model_Select").attr("disabled","disabled");
			$("select#Vendor_Select").change(function(){
				$("select#Model_Select").html("<option>wait...</option>");
				var id = $("select#Vendor_Select option:selected").attr('value');
				$.get("include/gui/selectmodel.php", {ch:id}, function(data){
					$("select#Model_Select").removeAttr("disabled");
					$("select#Model_Select").html(data);
				});
			});
			$("#go-form").submit(function(e){
				e.preventDefault();
				var dataString1 = $("select#Vendor_Select option:selected").attr('value');
				var dataString2 = $("select#Model_Select option:selected").attr('value');				
				$.get("include/gui/go.php", {ven: dataString1, model: dataString2}, function(data){
					$("#jquerytabs1-page-0").empty();
					$("#jquerytabs1-page-0").html(data); 
				});         		
			});
			$("#search-form").submit(function(e){
				e.preventDefault();
				var dataString1 = $("#AutoComplete1").val();				
				$.get("include/gui/search.php", {search: dataString1}, function(data){
					$("#jquerytabs1-page-0").empty();
					$("#jquerytabs1-page-0").html(data); 
				});         		
			});	
		});	
 
		</script>
	</head>
	
<!-- BODY -->
	
<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience. If you are not able to install new browser, Please inform your system administrator.</p>
        <![endif]-->


 <!-- MAIN CONTAINER -->		
 <div id="container">
		
 <!-- SERACH BAR -->		

	<div id="search-container">
		<div id="wb_Shape2" style="position:absolute;left:200px;top:15px;width:850px;height:43px;z-index:17;">
			<img src="templates/images/img0002.png" id="Shape2" alt="" style="border-width:0;width:850px;height:43px;">
		</div>
		
		<form id="go-form">
		<!-- SELECT DISTINCT(Main.Brand) AS Main.Brand FROM jtab.main ORDER BY Main.Brand DESC; -->
		<select size="1" id="Vendor_Select" style="position:absolute;left:214px;top:21px;width:96px;height:28px;z-index:18;">
			<option value="#">---</option>
		<?php
		// get some information
			$result = db::query("SELECT DISTINCT(`Main.Brand`) AS `Main.Brand` FROM `{prefix}main` ORDER BY `Main.Brand`");
			while ($brand = db::fetch($result,'ROW')) { printf('<option value=%s>%s</option>',$brand[0],$brand[0]); }
		?>
		</select>
			<select size="1" id="Model_Select" style="position:absolute;left:322px;top:21px;width:96px;height:28px;z-index:21;">
				<!-- <option value="---">---</option> -->
			</select>
		
		<button id="AdvancedButton1" type="submit" name="" value="" style="position:absolute;left:426px;top:21px;width:100px;height:28px;z-index:22;">
			<div style="text-align:center"><span style="color:#000000;font-family:Arial;font-size:13px">Go</span></div>
		</button>
		</form>
		<form id="search-form">
		<input type="text" id="AutoComplete1" style="position:absolute;left:791px;top:21px;width:98px;height:26px;line-height:26px;z-index:19;" name="AutoComplete1" value="">
		<input type="submit" id="jQueryButton1" name="" value="Search" style="position:absolute;left:905px;top:21px;width:100px;height:28px;z-index:20;">	
		</form>
		
	</div>
 

	<!-- TABS -->
		<div id="jQueryTabs1" style="position:absolute;left:200px;top:75px;width:840px;height:1150px;z-index:15;">
			<ul>
				<li><a href="#jquerytabs1-page-0"><span>General</span></a></li>
				<li><a href="#jquerytabs1-page-1"><span>Service</span></a></li>
			</ul>
			
			<div style="height:1110px;overflow:auto;padding:0;" id="jquerytabs1-page-0">
			
		<!-- HEADER with Vendor, model and PN information -->
			
				<div id="header" style="position: relative; left:20px;top:20px;width:125px;height:100px;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Brand</span><br/>
					<span style="color:#000000;font-family:Arial;font-size:13px;">Model</span><br/>
					<span style="color:#000000;font-family:Arial;font-size:13px;">Part Number</span><br/>
				</div>
		
		<!-- PICTURE SLIDER -->
		
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

	<!--
	<div id="wb_Brand.Label" style="position:absolute;left:86px;top:78px;width:125px;height:16px;z-index:6;text-align:left;">
		<span style="color:#000000;font-family:Arial;font-size:13px;">Brand</span></div>
	<div id="wb_Text1" style="position:absolute;left:384px;top:78px;width:125px;height:16px;z-index:7;text-align:left;">
		<span style="color:#000000;font-family:Arial;font-size:13px;">Model</span></div>
	<div id="wb_Text2" style="position:absolute;left:671px;top:78px;width:125px;height:16px;z-index:9;text-align:left;">
		<span style="color:#000000;font-family:Arial;font-size:13px;">Part Number</span></div>	
	-->

		<!-- ACCOREON -->

		<div id="jQueryAccordion1" style="position:absolute;left:35px;top:620px;width:760px;height:504px;z-index:8;">
		<div id="jQueryAccordion1_id" style="position:absolute;width:760px;height:504px">

			<h3>Specification</h3>
				<div>
					<table style="position:absolute;left:27px;top:17px;width:701px;height:275px;z-index:0;" id="Table1">
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:344px;height:24px;">&nbsp;</td>
							<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">&nbsp;</td>
						</tr>
					</table>
				</div>
			<h3>Display</h3>
<div>
<table style="position:absolute;left:27px;top:20px;width:701px;height:106px;z-index:1;" id="Table2">
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:348px;height:30px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:30px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:348px;height:30px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:30px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:348px;height:32px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:32px;">&nbsp;</td>
</tr>
</table>
</div>
<h3>Sensors</h3>
<div>
<table style="position:absolute;left:27px;top:23px;width:705px;height:110px;z-index:2;" id="Table3">
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
</table>
</div>
<h3>Multimedia</h3>
<div>
<table style="position:absolute;left:27px;top:23px;width:677px;height:109px;z-index:3;" id="Table4">
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:326px;height:22px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:326px;height:22px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:326px;height:22px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:326px;height:26px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:26px;">&nbsp;</td>
</tr>
</table>
</div>
<h3>Connections</h3>
<div>
<table style="position:absolute;left:27px;top:23px;width:705px;height:110px;z-index:4;" id="Table5">
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:343px;height:18px;">&nbsp;</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:18px;">&nbsp;</td>
</tr>
</table>
</div>
</div>
</div>





</div>
<div style="height:1110px;overflow:auto;padding:0;" id="jquerytabs1-page-1">
</div>
</div>

<!-- FOOTER -->

<div id="wb_Shape1" class="ui-corner-all" style="position:absolute;left:200px;top:1261px;width:850px;height:38px;z-index:16;border-width:1" >
 <img src="templates/images/img0001.png" id="Shape1" alt="" style="border-width:0;width:850px;height:38px;"> 
</div>
<div id="wb_Text3" style="position:absolute;left:948px;top:1272px;width:85px;height:16px;z-index:23;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">(C) Jabil 2013</span></div>
</div>

<!-- END OF BODY-->
</body>
</html>
<?
db::close();
?>