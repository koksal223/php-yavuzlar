<?php

/*
    strlen()
    strstr()
    strpos()
    ucwords() ucfirst() strtolower() strtoupper()
    trim() ltrim() rtrim()
    substr()
    str_replace()
    str_repeat()
*/

$str = 'Salih Koksal';

//echo strlen($str);
//echo strlen('SalihKoksal');
//echo strpos('Salih Koksal', 'n');
//$str = strtoupper($str);
//echo strtolower($str);

$str2 = "-Salih-Koksal-";
//echo rtrim($str2, '-');
//echo substr($str, 0, -4);

$str3 = 'Salih Koksal, Ali Koksal';

$str3 = str_replace(
    ["Salih","Koksal","Ali"],
    ["ahmet", "talipoğlu", "hakan"],
    $str3
);

for ($i = 1; $i <= 10; $i++){
    $repeatCount = ($i <= 5 ? $i : (10 - $i));
    echo str_repeat('-*0', $repeatCount) . '<br>';
}