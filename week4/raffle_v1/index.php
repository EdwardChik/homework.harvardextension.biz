<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edward Chik's Homework for CSCI E-15, Week 4 (Part 1)</title>	

	<!-- includes logic to retrieve raffle results -->
	<?php require_once('logic.php'); ?>
	
	<!-- embedded styles that include logic to determine ??? -->
	<style type='text/css'>
	</style>
</head>

<body>
	<!-- link to source code for raffle v1 -->
	<p>To view the source code for this page on Github, <a href="" target="_blank">click here</a>.</p>

	<p>Refresh the page to play again!</p>

	<p>The winning number is <?=$winning_number?>!</p>

	<!-- displays raffle results -->
	<?php
		foreach($contestants as $key => $value) {
			echo $key." is a ".$value."!<br />";
		}

		// if there are no winners
		if $total_winners == 0 {
			echo "Unfortunately, there were no winners this round. :(";
		}

		// if there are multiple winners
		if $total_winners >= 2 {
			echo "With multiple winners, this round is a tie.";			
		}
	?>
</body>
</html>