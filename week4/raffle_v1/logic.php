<?php
	// sets the contestants array
	$contestants = array(
		'Edward' => '';
		'Bob' => '';
		'Joe' => '';
		'Sam' => '';
	)

	int $winning_number = rand(1,4);
	int $total_winners = '0';

	echo $total_winners;

	foreach($contestants as $key => $value) {
		$draw_number = rand(1,4);

		if $draw_number == $winning_number {
			$value = 'winner!';
			$total_winners++;
		} else {
			$value = 'loser.';
		}
	}
?>