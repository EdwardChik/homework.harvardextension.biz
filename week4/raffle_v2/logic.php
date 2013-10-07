<?php
	$winning_number = rand(1,5);
	$total_winners = 0;

	$drawings = array(
		0 => 'first drawing',
		1 => 'second drawing',
		2 => 'third drawing',
		3 => 'fourth drawing',
		4 => 'fifth drawing',
	);

	print_r($drawings);

	echo "<br><br>Draw numbers: <br>";

	$i = 0;

	// draws numbers
	foreach ($drawings as $key => &$value) {
		// draws number for each participant
		$draw_number = rand(1,5);

		echo "The number drawn is ".$draw_number."<br>";
		$i++;
		echo "I is now ".$i."<br>";

		// assigns contestant status
		if ($draw_number == $winning_number) {
			$value = 'winner!';

			/* $to			= $key;
			$subject	= 'You Won the Raffle!';
			$message	= 'Congratulations, you have won the raffle! Further instructions to claim it will be forthcoming shortly.';
			$headers	= 'From: raffle@harvardextension.biz' . "\r\n" .
			    			'Reply-To: raffle@harvardextension.biz' . "\r\n" .
			    			'X-Mailer: PHP/' . phpversion();

			// e-mail the raffle winner
			mail($to, $subject, $message, $headers);*/

			// increments total winner count if contestant has won
			$total_winners++;

			print $total_winners;
		} else {
			$value = 'loser.';
		}
	}

	$results = array_combine($_POST, $drawings);

	echo "<br /><br />Results: ";

	print_r($results);
?>