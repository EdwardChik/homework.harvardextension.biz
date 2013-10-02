<?php
	// sets the contestants array
	$contestants = array(
		'Edward' => 'unassigned',
		'Bob' => 'unassigned',
		'Joe' => 'unassigned',
		'Sam' => 'unassigned',
	);

	print_r($contestants);

	$winning_number = rand(1,4);
	$total_winners = '0';

	// draws numbers
	foreach ($contestants as $name => &$value) {
		// draws number for each participant
		$draw_number = rand(1,4);

		// assigns contestant status
		if ($draw_number == $winning_number) {
			$value = 'winner!';
			$total_winners++;
		} else {
			$value = 'loser.';
		}

		print $total_winners;
	}
?>