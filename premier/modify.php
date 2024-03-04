<?php
	$line = $_GET["lineToModify"];
	echo "<!DOCTYPE html>
	<html lang='en'>
		<HEAD>
			<meta charset='UTF-8'>
			<link rel='stylesheet' href='css/style.css'>
		</HEAD>

		<BODY>
			<form method='GET' action='table.php' class='form'>
				<label>Change the value of a : </label>
				<input type='number' name='valueA' required>
				<label>Change the value of b : </label>
				<input type='number' name='valueB' required>
				<input type='hidden' name='line' value=$line>
				<input type='submit' value='Resolve'>
			</form>
		</BODY>

	</html>";	
?>
