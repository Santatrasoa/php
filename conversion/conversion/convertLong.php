<?php
    session_start();
?>

<?php
    include("../function.php");
    
    $unit1 = $_POST["unit1"];
    $unit2 = $_POST["unit2"];
    $number = $_POST["number"];

    $result = conversionLong($unit1, $unit2, $number);
    $_SESSION["resultL"] = $result;
    $_SESSION["unitL2"] = $unit2;

    header('location: /conversion/php/longueur.php');

?>