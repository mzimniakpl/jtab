<!DOCTYPE html>

<?php 
// include all nessesary files
require 'include/settings.php';
require_once 'include/logger.php';
require_once 'include/db.php';
 
//db::connect(); // connect do mysql database
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
			var AutoComplete1Opts =
					{
						source: "include/gui/autosearch.php",
						delay: 5,
						minLength: 0,
						mustMatch: true
					};
			$("#AutoComplete1").autocomplete(AutoComplete1Opts);
			$("#jQueryButton1").button();
			$("select#Model_Select").attr("disabled","disabled");
			$("select#Vendor_Select").load("include/gui/selectvendor.php");
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
				$("#pslider").fadeToggle('fast');
				$("#jquerytabs1-page-0").fadeToggle('slow');
				var dataString1 = $("select#Vendor_Select option:selected").attr('value');
				var dataString2 = $("select#Model_Select option:selected").attr('value');				
				$.get("include/gui/go.php", {ven: dataString1, model: dataString2}, function(data){
					$("#jquerytabs1-page-0").empty();
					$("#jquerytabs1-page-0").html(data);
					$("#jQueryAccordion1_id").accordion({
								event: 'click',
								animate: 'linear',
								header: 'h3',
								heightStyle: 'fill'
					});
					$("#pslider").excoloSlider({
							prevButtonImage: "templates/images/prev.png",
							nextButtonImage: "templates/images/next.png",
							pagerImage: "templates/images/pagericon.png",
							interval: 5000, // = 5 seconds
							playReverse: false
						});
				});
				$("#pslider").fadeToggle('fast');
				$("#jquerytabs1-page-0").fadeToggle('slow');
			});
			$("#search-form").submit(function(e){
				e.preventDefault();
				$("#pslider").fadeToggle('fast');
				$("#jquerytabs1-page-0").fadeToggle('slow');
				var dataString1 = $("#AutoComplete1").val();				
				$.get("include/gui/search.php", {search: dataString1}, function(data){
					$("#jquerytabs1-page-0").empty();
					$("#jquerytabs1-page-0").html(data);
						$("#jQueryAccordion1_id").accordion({
								event: 'click',
								animate: 'linear',
								header: 'h3',
								heightStyle: 'fill'
						});
						$("#pslider").excoloSlider({
							prevButtonImage: "templates/images/prev.png",
							nextButtonImage: "templates/images/next.png",
							pagerImage: "templates/images/pagericon.png",
							interval: 5000, // = 5 seconds
							playReverse: false
						});
					});
				$("#pslider").fadeToggle('fast');
				$("#jquerytabs1-page-0").fadeToggle('slow');					
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
		</select>
			<select size="1" id="Model_Select" style="position:absolute;left:322px;top:21px;width:96px;height:28px;z-index:21;">
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
		<div id="jQueryTabs1" style="position:absolute;left:200px;top:75px;width:840px;height:1250px;z-index:15;">
			<ul>
				<li><a href="#jquerytabs1-page-0"><span>General</span></a></li>
				<li><a href="#jquerytabs1-page-1"><span>Service</span></a></li>
			</ul>
			
			<div style="height:1210px;overflow:auto;padding:0;" id="jquerytabs1-page-0">
			
<!-- Main content -->





</div>
<div style="height:1210px;overflow:auto;padding:0;" id="jquerytabs1-page-1">
</div>
</div>

<!-- FOOTER -->

<div id="wb_Shape1" class="ui-corner-all" style="position:absolute;left:200px;top:1361px;width:850px;height:38px;z-index:16;border-width:1" >
 <img src="templates/images/img0001.png" id="Shape1" alt="" style="border-width:0;width:850px;height:38px;"> 
</div>
<div id="wb_Text3" style="position:absolute;left:948px;top:1372px;width:85px;height:16px;z-index:23;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">(C) Jabil 2013</span></div>
</div>

<!-- END OF BODY-->
</body>
</html>
<?
//db::close();
?>