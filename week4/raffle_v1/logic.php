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

	// draws number for each participant
	foreach ($contestants as $name => &$value) {
		$draw_number = rand(1,4);

		if ($draw_number == $winning_number) {
			$value = 'winner!';
			$total_winners++;
		} else {
			$value = 'loser.';
		}

		print $total_winners;
	}
?>