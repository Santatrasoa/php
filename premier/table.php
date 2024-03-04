<?php
	$tab = [[]];
	$a = $_GET["valueOfA"];
	$b = $_GET["valueOfB"];
	
	$remove = $_GET["i"];
	$changeA = $_GET["valueA"];
	$changeB = $_GET["valueB"];
	$line    = $_GET["line"];

	if ($a == NULL || $b == NULL)
	{
		$file = file_get_contents(".value.mit");
		$f = explode(" ", $file);
		$a = $f[0];
		$b = $f[1];
	}
	else{
		$file = fopen(".value.mit", "w");
		if($file){
			fwrite($file, $a." ".$b);
		}
		else echo "Erreur";
		fclose($file);
	}

	$file = fopen(".lineModify.mit", "a");
	if ($file)
	{
		fwrite($file, $line." ".$changeA." ".$changeB."\n");
	}

	fclose($file);

	$file = fopen(".lineModify.mit", "r");
	if($file){
		while (($line = fgets($file)) !== false) {
			$elements = explode(" ", $line);
			$tab[] = $elements;
		  }
	}
	else echo "Erreur";
	fclose($file);

	include ('index.php');

	echo "<table>
		<th>A</th>
		<th>B</th>
		<th>ANSWER</th>
		<th>ACTION</th>";


	$file = fopen(".removeLine.mit","a");
	if($file)	fwrite($file, $remove."\n");
	fclose($file);
	
	$lineRemove = file(".removeLine.mit");
	for ($i = 1; $i <= $b; $i++)
	{
		$l = $i;
		$class = ($i%2==0) ? "paire" : "impaire";
		$c;
		$k;
		$flags = false;
		$flags1 = false;

		foreach($lineRemove as $elmt)
		{
			if ($i == $elmt)	$flags = true;
		}
		
		for ($j = 0; $j < count($tab); $j++)
		{
			if ($tab[$j][0] == $i)
			{
				$k = $tab[$j][1];
				$l = $tab[$j][2];
				$flags1 = true;
			}
		}	

		if($flags)
			continue;
		if ($flags1)
		{
			$c = $k*$l;
			echo "<tr class=$class>";
			echo "<td>$k</td>
			<td>$l</td>
			<td>$c</td>
			<td>
				<form action='modify.php' method='get'>
					<input type='hidden' name='lineToModify' value=$l>
					<button type=\"submit\" class='paire'>modify</button>
				</form>
				<a href='table.php?i=$l'>delete</a>
			</td>
			</tr>";	
		}
		else{
			$c = $a*$l;
			echo "<tr class=$class>";
			echo "<td>$a</td>
				<td>$l</td>
				<td>$c</td>
				<td>
					<form action='modify.php' method='get'>
						<input type='hidden' name='lineToModify' value=$l>
						<button type=\"submit\" class='paire'>modify</button>
					</form>
					<a href='table.php?i=$l'>delete</a>
				</td>
				</tr>";	
		}
	}
	
	echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body></body>
</html>
