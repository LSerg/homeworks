<?php
/**
 * 17.Сосктавьте массив месяцев.
 *    С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
 *    Текущий месяц должен храниться в переменной $month.
 */

$months = array(
    "01" => "январь",
    "02" => "февраль",
    "03" => "март",
    "04" => "апрель",
    "05" => "май",
    "06" => "июнь",
    "07" => "июль",
    "08" => "август",
    "09" => "сентябрь",
    "10" => "октябрь",
    "11" => "ноябрь",
    "12" => "декабрь");

$month = date("m");

foreach($months as $key => $value) {
    if($key==$month) {
        echo "<b>{$value}</b><br>";
    } else {
        echo $value."<br>";
    }
}