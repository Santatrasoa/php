<?php
    session_start();
?>

<?php
    include("../function.php");
    
    $unit1 = $_POST["unit1"];
    $unit2 = $_POST["unit2"];
    $number = $_POST["number"];

    $result = convertT($unit1, $unit2, $number);
    $_SESSION["resultT"] = $result;
    $_SESSION["unitT2"] = $unit2;

    header('location: /conversion/php/temperature.php');
?>
