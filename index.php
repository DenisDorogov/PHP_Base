<?php
// 1 задание
    while ($i<=100) {
    if ($i % 3 == 0)  echo $i . ", " ;
    $i++;
};
echo "<br/><br/>";

// 2 задание
$i = 0;
$c = 10;
do {
    if ($i !== 0) {
        if ($i % 2 == 0) echo "$i - чётное число.<br/>";
        else echo "$i - нечётное число.<br/>";
    } else {echo "$i - ноль.<br/>";};
    $i++;
} while ($i <= $c);

echo "<br/><br/>";

// 3 задание

$region['Челябинская'] = [
    1 => 'Челябинск',
    2 => 'Магнитогорск',
    3 => 'Миасс',
];
$region['Татарстан'] = [
    1 => 'Казань',
    2 => 'Набережные Челны',
    3 => 'Альметьевск',
];
$region['Саратовская'] = [
    1 => 'Саратов',
    2 => 'Балаково',
    3 => 'Маркс',
];
foreach ($region as $name => $value) {
    echo "$name: ";
    foreach ($value as $sity) echo "$sity, ";
    echo "<br/>";
};

// 4 задание
echo '<br>4 задание<br><br>';
$translit = [
  'а' => 'a',
  'б' => 'b',
  'в' => 'v',
  'г' => 'g',
  'д' => 'd',
  'е' => 'e',
  'ё' => 'yo',
  'ж' => 'j',
  'з' => 'z',
  'и' => 'i',
  'й' => 'i',
  'к' => 'k',
  'л' => 'l',
  'м' => 'm',
  'н' => 'n',
  'о' => 'o',
  'п' => 'p',
  'р' => 'r',
  'с' => 's',
  'т' => 't',
  'у' => 'u',
  'ф' => 'f',
  'х' => 'h',
  'ц' => 'c',
  'ч' => 'ch',
  'ш' => 'sh',
  'щ' => "sh'",
  'ъ' => '\'',
  'ы' => 'x',
  'ь' => 'x',
  'э' => 'x',
  'ю' => 'yu',
  'я' => 'ya'
];
//var_dump($translit);
$enterString = 'Съешь ещё этих французских булок';
echo "$enterString<br>";
//$chartest = 'д';
//echo $translit[$chartest];
function transLitString($string) {
  $stringLength = strlen($string);
//  $charArray = str_split($string);
  $resultStr = '';
  $i = 0;
  while($i < $stringLength) {
//    echo 'Начало итерации';
    $char = mb_substr($string, $i, 1);
//    echo $char;               
    if ($char == " ") {
      $resultStr .= "_";
      $i++;
    } else {
//        echo $char;
      $resultStr .= $translit[$char];
      $i++;
    }
  }
  echo $resultStr;
//  var_dump($char);
};

transLitString($enterString);

//5 задание ----------------------------------
echo '<br><br>5 задание<br><br>';

$enterString5 = 'File name is correct';
echo "$enterString5<br>";
function changeSpaces($string){
  $stringLength = strlen($string);
  for ($i=0; $i<$stringLength; $i++) {
    if ($string[$i] == ' ') {
      $string[$i] = '_';
    }
  }
  return $string;
};
echo changeSpaces($enterString5);

//6 задание ----------------------------------
//сделал в файле index6.php
?>