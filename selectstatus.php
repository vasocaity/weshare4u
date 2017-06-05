<!DOCTYPE html>
<?php 
include "includes/connect.php";
session_start();

?>
<html>
<head>
<title>WeShare4U | เลือกสถานะ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="layout/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="layout/css/hover-min.css" rel="stylesheet">
<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<style>
	img { width: 100%; }
  table, th, td {
    border: 0px;
}
</style>
</head>
<body>
<?php
  include 'menu.php';
?>
<br>
<div class="row">
  <div class="col-md-6"  id="img"><a href="recipient/DonateItem.php" name="ineedhelp"><img src="images/I need help.jpg" id="needhelp"></a></div>
  <div class="col-md-6"  id="img2"><a href="dornor/AddItem.php" name="icanhelp"><img src="images/I can help.jpg" id="icanhelp"></a></div>
</div>
<script type="text/javascript">
$( "#needhelp" ).click(function() {
  	<?php
	$_SESSION["ViewStatus"] = "ineedhelp";
	$_COOKIE["ViewStatus"] = "ineedhelp";
	?>
});
$( "#icanhelp" ).click(function() {
	<?php
	$_SESSION["ViewStatus"] = "icanhelp";
	$_COOKIE["ViewStatus"] = "icanhelp";
	?>
});

</script>
<br><br>
<?php
  include 'dornor/footer.php'
?>
<!-- Scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="layout/scripts/jquery-latest.min.js"><\/script>\
<script src="layout/scripts/jquery-ui.min.js"><\/script>')</script>
<script>jQuery(document).ready(function($){ $('img').removeAttr('width height'); });</script>
<script src="layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="layout/scripts/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="layout/js/bootstrap.min.js"></script>
</body>
</html>
