<?php
function sum($x, $y) {return $x + $y;}
function dif($x, $y) {return $x - $y;}
function mult($x, $y) {return $x * $y;}
function div($x, $y) {
  if ($y >= 0) {
    return $x / $y;
  } else echo 'Делить на "0" нельзя';
}
function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case 'плюс' : 
      return sum($arg1, $arg2);
      break;
    case 'вычесть' : 
      return dif($arg1, $arg2);
      break;
    case 'умножить' : 
      return mult($arg1, $arg2);
      break;
    case 'разделить' : 
      return div($arg1, $arg2);
      break;
  }
}

$a = mt_rand(-1000; 1000);
$b = mt_rand(-1000; 1000);
echo "Задание 1: A = $a, B = $b "
if ($a >= 0 and $b >= 0) {
  echo "Разность равна " . div($a, $b) . PHP_EOL;
} elseif ($a < 0 and $b < 0) {
  echo "Произведение равно " . mult($a, $b) . PHP_EOL;
} else echo "Сумма равна " . sum($a, $b) . PHP_EOL;

$a = mt_rand(0; 15);
echo "Задание 2: ";
switch ($a) {
  case 0 : echo $a++ . ", ";
  case 1 : echo $a++ . ", ";
  case 2 : echo $a++ . ", ";
  case 3 : echo $a++ . ", ";
  case 4 : echo $a++ . ", ";
  case 5 : echo $a++ . ", ";
  case 6 : echo $a++ . ", ";
  case 7 : echo $a++ . ", ";
  case 8 : echo $a++ . ", ";
  case 9 : echo $a++ . ", ";
  case 10 : echo $a++ . ", ";
  case 11 : echo $a++ . ", ";
  case 12 : echo $a++ . ", ";
  case 13 : echo $a++ . ", ";
  case 14 : echo $a++ . ", ";
  case 15 : echo "15";
}

//Пятое задание делал в первом уроке
function power($val, $pow) {
  if ($pow != 1) return $val * power($val, $pow - 1)
};
echo writeTime();
function writeTime() {
  $today = getdate();
  $h = today['hours'];
  $m = today['minutes'];
  $s = today['seconds'];
  echo "Текущее время: "$h . named('h', $h) . $m . named('m', $m) . $s . named('s', $s) . ;
}
function named($type, $val) {
  switch ($type) {
    case 'h' : 
      if ($val % 10 > 4 || $val > 10 and $val < 21)  return ' часов ';
      elseif ($val % 10 = 1) return ' час ';
      else return ' часа ';
      break;
    case 'm' : 
      if ($val % 10 > 4 || $val > 10 and $val < 21)  return ' минут ';
      elseif ($val % 10 = 1) return ' минута ';
      else return ' минуты ';
      break;
    case 's' : 
      if ($val % 10 > 4 || $val > 10 and $val < 21)  return ' секунд ';
      elseif ($val % 10 = 1) return ' секунда ';
      else return ' секунды ';
      break;
  }
}






print 'Hello world';
?>