<?php

// Task 1

$arr = ['1', '2', '-1', '4', '-7'];
$positive = [];
foreach($arr as $value) {
    if ($value > 0)
    $positive[] = $value;
}
echo "<pre>";
print_r($positive);
echo "<pre>";

// Task 2

echo "<br>";
$nums = array(3, 6, 9, 13, 16, 19, 23, 26, 29);
foreach($nums as $key => $v) {
    if ($v >  array_sum($nums)/count($nums))
    echo "$key ";
}

// Task 3

echo "<br>";
$all = [1, 2, -1, 4, -7, 3];
$big = [];
for ($i = 0; $i < count($all); $i++) {
    for ($j = 1; $j < count($all); $j++) {
        if ($all[$j] > $all[$i])
        $big[] = $all[$j];
    }
}
echo "<pre>";
print_r($big);
echo "<pre>";

// Task 4

echo "<br>";
$elem = array('1', '2', '1', '4', '3', '3');
if(count(array_unique($elem))<count($elem)) {
 echo "Есть повторяшки: <br>";
}
else {
 echo "нет повторов <br>";
}
print_r(array_count_values($elem));

// Task 5

echo "<br>";
$Same = array(1, 2, 1, 4, 3, 3, 3, 1);
$result = array_unique($Same);
echo "<pre>";
print_r($result);
echo "<pre>";

// Task 6

echo "<br>";
$families = [["Tom", "Alice"], ["Bob", "Kate"], 5, 'sobaka'];
var_dump(count($families, COUNT_RECURSIVE));

// Task 7

echo "<br>";
for ($i = 1; $i <= 10; $i++ ){ 
    echo '  '; 
    for ($j = 1; $j <= 10; $j++ ){ 
    echo $i * $j, " "; 
    if(($i < 10) && ($i >= 5) && ($j===1)){ 
    echo ' '; 
    } 
    if(($i < 5) && ($j===1)){ 
    echo ' '; 
    }if(($i === 4) && ($j===2)){ 
    echo ' '; 
    } 
    if(($i === 3) && ($j>=2) && ($j<=3)){ 
    echo ' '; 
    } 
    if(($i === 2) && ($j>=2) && ($j<=4)){ 
    echo ' '; 
    } 
    if(($i === 1) && ($j>=2) && ($j<=9)){ 
    echo ' '; 
    } 
    } 
    echo "<br>"; 
    }
