<?php
// 2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
//  С помощью цикла foreach найдите сумму элементов этого массива.
//  Запишите ее в переменную $result.

$array = array(1, 20, 15, 17, 24, 35);
$result = 0;
foreach($array as $key => $value) {
   $result+= $value;
}
echo $result;