<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 09.02.2016
 * Time: 18:47
 */

/*
 * 7.Дан массив с элементами 2, 5, 9, 15, 0, 4.
 * С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10.
 */

$arr = array(2, 5, 9, 15, 0, 4);

foreach($arr as $val) {
    if($val>3 && $val<10) {
        echo "<pre>";
        print_r($val);
    }
}