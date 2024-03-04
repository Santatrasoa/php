<?php

	$file = fopen(".lineModify.mit","w");
	if($file)	fwrite($file, "");
	fclose($file);

	$file = fopen(".modify.mit","w");
	if($file)	fwrite($file, "");
	fclose($file);

	$file = fopen(".removeLine.mit","w");
	if($file)	fwrite($file, "");
	fclose($file);
	
?>
<!DOCTYPE html>
<html lang="en">
	<HEAD>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">
	</HEAD>

	<BODY>
		<form method="GET" action="table.php" class="form">
			<label>Enter the value of a : </label>
			<input type="number" name="valueOfA" required>
			<label>Enter the value of b : </label>
			<input type="number" name="valueOfB" required>
			<input type="submit" value="Resolve">
		</form>
	</BODY>

</html>
