<?php

function conversionLong($unit1, $unit2, $number) {
    $a = $number;

    if ($unit1 == "km") {
        if ($unit2 == "m") {
            $a = $number * 1000;
        } elseif ($unit2 == "cm") {
            $a = $number * 100000;
        } elseif ($unit2 == "mm") {
            $a = $number * 1000000;
        } elseif ($unit2 == "nm") {
            $a = $number * pow(10, 12);
        }
    } elseif ($unit1 == "m") {
        if ($unit2 == "km") {
            $a = $number / 1000;
        } elseif ($unit2 == "cm") {
            $a = $number * 100;
        } elseif ($unit2 == "mm") {
            $a = $number * 1000;
        } elseif ($unit2 == "nm") {
            $a = $number * pow(10, 9);
        }
    } elseif ($unit1 == "cm") {
        if ($unit2 == "km") {
            $a = $number / 100000;
        } elseif ($unit2 == "m") {
            $a = $number / 100;
        } elseif ($unit2 == "mm") {
            $a = $number * 10;
        } elseif ($unit2 == "nm") {
            $a = $number * pow(10, 7);
        }
    } elseif ($unit1 == "mm") {
        if ($unit2 == "km") {
            $a = $number / 1000000;
        } elseif ($unit2 == "m") {
            $a = $number / 1000;
        } elseif ($unit2 == "cm") {
            $a = $number / 10;
        } elseif ($unit2 == "nm") {
            $a = $number * pow(10, 6);
        }
    } elseif ($unit1 == "nm") {
        if ($unit2 == "km") {
            $a = $number / pow(10, 12);
        } elseif ($unit2 == "m") {
            $a = $number / pow(10, 9);
        } elseif ($unit2 == "cm") {
            $a = $number / pow(10, 7);
        } elseif ($unit2 == "mm") {
            $a = $number / pow(10, 6);
        }
    }

    return strval($a);
}

function convertMasse($quantity, $unit1, $unit2) {
    $convertedValue = 0.0;
    
    if ($unit1 == "gramme") {
        if ($unit2 == "kilogramme") {
            $convertedValue = $quantity / 1000;
        } else if ($unit2 == "livre") {
            $convertedValue = $quantity * 0.00220462;
        } else if ($unit2 == "once") {
            $convertedValue = $quantity * 0.035274;
        } else { // unité de destination est gramme
            $convertedValue = $quantity;
        }
    } else if ($unit1 == "kilogramme") {
        if ($unit2 == "gramme") {
            $convertedValue = $quantity * 1000;
        } else if ($unit2 == "livre") {
            $convertedValue = $quantity * 2.20462;
        } else if ($unit2 == "once") {
            $convertedValue = $quantity * 35.274;
        } else { // unité de destination est kilogramme
            $convertedValue = $quantity;
        }
    } else if ($unit1 == "livre") {
        if ($unit2 == "gramme") {
            $convertedValue = $quantity / 0.00220462;
        } else if ($unit2 == "kilogramme") {
            $convertedValue = $quantity / 2.20462;
        } else if ($unit2 == "once") {
            $convertedValue = $quantity * 16;
        } else { // unité de destination est livre
            $convertedValue = $quantity;
        }
    } else if ($unit1 == "once") {
        if ($unit2 == "gramme") {
            $convertedValue = $quantity / 0.035274;
        } else if ($unit2 == "kilogramme") {
            $convertedValue = $quantity / 35.274;
        } else if ($unit2 == "livre") {
            $convertedValue = $quantity / 16;
        } else { // unité de destination est once
            $convertedValue = $quantity;
        }
    }
    return $convertedValue;
}


function convertT($unit1, $unit2, $number) {
    $d = doubleval($number);
    $res = $d;
    if ($unit1 === "Celsius") {
    
        if ($unit2 == "Kelvin") {
            $res = $d + 273.15;
        } else if ($unit2 == "Fahrenheit") {
            $res = ($d * 9/5) + 32;
        } else if ($unit2 == "Rankine") {
            $res = ($d + 273.15) * (5/9);
        }
    } else if ($unit1 == "Kelvin") {
        if ($unit2 == "Celsius") {
            $res = $d - 273.15;
        } else if ($unit2 == "Fahrenheit") {
         
            $res = ($d - 273.15) * (9/5) + 32;
        } else if ($unit2 == "Rankine") {
            $res = $d * (9/5);
        }
    } else if ($unit1 == "Fahrenheit") {
        if ($unit2 == "Kelvin") {
            $res = ($d - 32) * (5/9) + 273.15;
        } else if ($unit2 == "Celsius") {
            $res = ($d - 32) * (5/9);
        } else if ($unit2 == "Rankine") {
            $res = $d + 459.67;
        }
    } else if ($unit1 == "Rankine") {
        if ($unit2 == "Celsius") {
            $res = ($d - 459.67) * (5/9);
        } else if ($unit2 == "Fahrenheit") {
            $res = $d - 459.67;
        } else if ($unit2 == "Kelvin") {
            $res = $d * (5/9);
        }
    }
    
    $result = strval($res);
    
    return $result;
}


?>