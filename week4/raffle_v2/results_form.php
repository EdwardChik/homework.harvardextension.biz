<form method='POST' action='index.php'>
	Enter the names of 5 contestants:<br />
	<input type='text' name='contestant1' value='<?=$_POST['contestant1']?>'><br />
	<input type='text' name='contestant2' value='<?=$_POST['contestant2']?>'><br />
	<input type='text' name='contestant3' value='<?=$_POST['contestant3']?>'><br />
	<input type='text' name='contestant4' value='<?=$_POST['contestant4']?>'><br />
	<input type='text' name='contestant5' value='<?=$_POST['contestant5']?>'><br />
	<input type='submit' value='Pick a winner!'><br />
</form>

<p>The winning number is <?=$winning_number?>! Refresh the page to play again.</p>