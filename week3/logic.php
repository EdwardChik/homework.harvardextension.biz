<?php
	// sets the default time zone to Toronto, since I live there
	date_default_timezone_set('America/Toronto');

	// assigns the default timezone to a variable
	$default_timezone = date_default_timezone_get();

	// logic to check the default timezone and then display if it does or does not match the current user
	if (strcmp($default_timezone, ini_get('date.timezone'))) {
		echo 'You are currently in the same timezone as Toronto (-5:00 GMT)!';
	} else {
		echo 'You are currently in a different timezone than Toronto (-5:00 GMT).';
	}

	// assigns the current date to a variable
	$current_date = date('l, F dS, Y');

	// assigns the current time to a variable
	$current_time = date('g:i:s A');

	// sets the background color, depending on the current time
	if (date('G') >= 6 && date('G') <= 20) {
		$background_color = '#78C7C7';
		$background_color_name = 'light blue';
		$font_color = '#000000';
	} else {
		$background_color = '#000000';
		$background_color_name = 'black';
		$font_color = '#FFFFFF';
	}
?>