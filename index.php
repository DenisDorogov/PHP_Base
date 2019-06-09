<?php
$a =   5; 
$b =   '05';
$time = getdate();
$x = 7;
$y = 8;

var_dump ( $a ==  $b ); // Почему true?
echo '<br>Нет сравнения типов, всё привелось к integer.<br>';

var_dump (( int ) '012345' ); // Почему 12345? 
echo '<br>Строку привели к целому числу.<br>';  

var_dump (( float ) 123.0   ===   ( int ) 123.0 );  // Почему false? 
echo '<br>Типы данных различны<br>'; 

var_dump (( int ) 0   ===   ( int ) 'hello, world' );// Почему true?
echo '<br>Строка при смене типа, преобразуется в "0"<br>'; 

echo "<h1>Текущее время равно: $time[hours] часов $time[minutes] минут $time[seconds] секунд</h1>";

echo "Сначала переменная 1 = $x, а переменная 2 = $y<br>";
//$x = $x - $y;
//$y = $y + $x;
//$x = $y - $x;
$y = ($x += $y -= $x) - $y;
echo "Теперь переменная 1 = $x, а переменная 2 = $y";


?>