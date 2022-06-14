<?php

// Task 1

$A = 7;
$B = 12;
$C = 20;

if ($A > $B && $A > $C) {
    echo "$A";
} 
elseif ($B > $A && $B > $C) {
    echo "$B";
}
elseif ($C > $A && $C > $B) {
    echo ($C);
}
else {
    echo "KAPEC TY VIDAL";
}

echo "<br/>";
echo "<br/>";

// Task 2

$num1 = 5;
$num2 = 10;
$num3 = 15;

if ($num1 > $num2 && $num1 < $num3) {
    echo "$num1";
}

elseif ($num2 > $num1 && $num2 < $num3) {
    echo "$num2";
}

elseif ($num3 > $num1 && $num3 < $num2) {
    echo "$num3";
}

elseif ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
    echo "OSHIBKA";
}

else {
    echo "prikol";
} 
echo "<br/>";
echo "<br/>";

// Task 3 

$plos = rand (0, 360);
echo "$plos";
echo "<br/>";
if ($plos >= 0 && $plos < 90) {
    echo "1-ая четверть";
}
elseif ($plos >= 90 && $plos < 180) {
    echo "2-ая четверть";
}
elseif ($plos >= 180 && $plos < 270) {
    echo "3-ая четверть";
}
elseif ($plos >= 270 && $plos < 360) {
    echo "4-ая четверть";
}
else {
    echo "a gde eto ty";
}