<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion longueur</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <ul>
    <li><a class="active" href="/conversion/index.html">Home</a></li>	
        <li class="notHidden">
			<div class="dropdown">
				<button class="dropbtn">Conversion</button>
				<div class="dropdown-content">
					<a style="text-align: left;" href="/conversion/php/temperature.php">temperature</a>
					<a style="text-align: left;" href="/conversion/php/poid.php">Poid</a>
					<a style="text-align: left;" href="/conversion/php/longueur.php">longueur</a>
				</div>
			</div>
		</li>
		<li><a href="/conversion/detail.html">A propos</a></li>
    </ul>
    <br>
    <br>
    <br>

    <h1>Conversion de longueur</h1>
    <form style="margin-top: 50px;" action="/conversion/conversion/convertLong.php" method="post">
    <input type="number" name="number" id="" required>
		<select name="unit1">
            <option>km</option>
			<option>m</option>
			<option>cm</option>
            <option>mm</option>
			<option>nm</option>
		</select>
		<label for="unit2"> convertir en </label>
		<select name="unit2">
            <option>km</option>
			<option>m</option>
			<option>cm</option>
            <option>mm</option>
			<option>nm</option>
		</select>
		<input type="submit" value="Convertir" id="">
    </form>
    <br><br>
    <br><br>
    <?php
    session_unset();
    include("convertLong.php");
    if (isset($_SESSION['resultL']) && isset($_SESSION['unitL2'])) {
        echo "<div>
            <h1 style=\"margin-top: 50Px;font-size: 2em;\">Response = " . $_SESSION['resultL'] . " " . $_SESSION['unitL2'].
            "</h1></div>";
    }

    ?>
</body>

</html>
