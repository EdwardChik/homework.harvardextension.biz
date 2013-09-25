<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edward Chik's Homework for CSCI E-15, Week 3</title>	

	<!-- includes logic to retrieve and format variables -->
	<?php require_once('logic.php'); ?>
	
	<!-- embedded styles that include logic to determine background color -->
	<style type='text/css'>
		body {
 			background-color:<?=$background_color?>;
 			color:<?=$font_color?>;
        }

        #bold {
        	font-weight:bold;
        }
	</style>
</head>

<body>
	<!-- displays current date, time and background color selected -->
	<p>The current date is <?=$current_date?> and the current time is <?=$current_time?>, so the background color has been set to <span id='bold'><?=$background_color_name?></span>.</p>
</body>
</html>