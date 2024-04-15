<?php
    session_start();
?>

<?php
    include("../function.php");
    
    $unit1 = $_POST["unit1"];
    $unit2 = $_POST["unit2"];
    $number = $_POST["number"];

    $result = convertMasse($number, $unit1, $unit2);
    $_SESSION["resultM"] = $result;
    $_SESSION["unitM2"] = $unit2;

    header('location: /conversion/php/poid.php');
?>
