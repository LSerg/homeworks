<?php
/*
 * 12. Дано число $n = 1000.
 * Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится?
 * Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла),
 * и запишите его в переменную $num.
 */
$n = 1000;
$num = 1;

while ($n / 2) {
    $n = $n / 2;
    if($n>=50){
        echo $num++.". ";
        echo "{$n}<br>";
    }
}