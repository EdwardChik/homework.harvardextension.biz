<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edward Chik's Homework for CSCI E-15, Week 4 (Part 2)</title>	

	<!-- includes logic to retrieve raffle results -->
	<?php 
		if ($_POST) {
			require_once('logic.php');
		}
	?>
	
	<!-- embedded styles, currently unused -->
	<style type='text/css'>
	</style>
</head>

<body>
	<!-- link to source code for raffle v2 -->
	<p>To view the source code for this page on Github, <a href="https://github.com/EdwardChik/homework.harvardextension.biz/tree/master/week4/raffle_v2" target="_blank">click here</a>.</p>


	<?php
		if ($_POST) {
			include('results_form.php');
		} else {
			include('new_form.php');
		}
	?>

	<!-- displays raffle results -->
	<?php
		if ($_POST) {
			if ($results) {
				echo "<br>Results: ";

				print_r($results);

				echo "<br><br>";

				foreach($results as $key => $value) {
				echo $key." is a ".$value."<br />";
				}			
			}
			
			// if there are no winners
			if ($total_winners == 0) {
				echo "<p>Unfortunately, there were no winners this round. :(</p>";
			}

			// if there are multiple winners
			if ($total_winners >= 2) {
				echo "<p>With ".$total_winners." total winners, this round is a tie.</p>";
			}
		}
	?>
</body>
</html>