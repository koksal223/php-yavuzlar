<?php

define('UYE', [
    'ad' => 'Salih',
    'soyad' => 'Koksal',
    'meslek' => 'Ogrenci',
    'yas' => 24,
    'sporlar' => [
        'masa tenisi',
        'bisiklet sürmek'
    ]
]);
//print_r(UYE);
echo UYE['sporlar'][1];