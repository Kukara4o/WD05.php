<?php

// Task 1 (Написать функцию, которая возводит число в указанную степень)

function math($num, $step){
  return pow($num, $step);
}
$num = 2;
$step = 4;
echo math($num, $step);
echo "<br>";

// Task 2 (Написать функцию, которая проверяет, являются ли все буквы в строке строчными)

function buqva($str) {
  $chr = mb_substr ($str, 0, 1);
  if ($str === strtolower($str)){
    echo "Все четко <br>";
  } else {
    echo "Все грустно <br>";
  }
  return mb_strtolower($chr) != $chr;
}

echo"<pre>";
print_r(buqva('Bara bara bara Bere bere bere'));
echo"<pre>";

// Task 3 (Написать функцию, которая генерирует массив указанной длинны со случайными значениями)

function newArr($arr, $dl){
  for ($i = 0; $i < $dl; $i++){
   array_push($arr,rand(0, 1024));
  };
  return($arr);
};

echo"<pre>";
print_r(newArr($aaa = [], 4));
echo"<pre>";
echo "<br>";

// Task 4 (ф-ция, которая по номеру дня возвращает его название)

function week($day) {
  // $day = date_default_timezone_set('UTC');

  switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
}
}
echo"<pre>";
print_r(week(1));
echo"<pre>";


// Task 5 (Написать функцию которая выводит n-ое число Фибоначчи)

function fib($i) { 
  if ($i == 0 ) return 0; 
  if ($i == 1 || $i == 2) { 
   return 1; 
  } else { 
   return fib($i - 1) + fib($i - 2); 
  } 
 } 
 echo"<pre>";
 print_r(fib(6));
 echo"<pre>";
