<?php
$a =   5; 
$b =   '05';
$time = getdate();
$variable1 = 3;
$variable2 = 6;

var_dump ( $a ==  $b ); // Почему true?
echo '<br>Нет сравнения типов, всё привелось к integer.<br>';

var_dump (( int ) '012345' ); // Почему 12345? 
echo '<br>Строку привели к целому числу.<br>';  

var_dump (( float ) 123.0   ===   ( int ) 123.0 );  // Почему false? 
echo '<br>Типы данных различны<br>'; 

var_dump (( int ) 0   ===   ( int ) 'hello, world' );// Почему true?
echo '<br>Строка при смене типа, преобразуется в "0"<br>'; 

echo "<h1>Текущее время равно: $time[hours] часов $time[minutes] минут $time[seconds] секунд</h1>";

echo "Сначала переменная 1 = $variable1, а переменная 2 = $variable2<br>";
$variable1 = ($variable1 += $variable2-$variable1);
echo "Теперь переменная 1 = $variable1, а переменная 2 = $variable2";


?>