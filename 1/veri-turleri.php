<?php

    /*
        Veri Türleri (Data Types)
            String "salih koksal" 'salih koksal'
            Integer 500, 200
            Float (Double) 5.5, 7.2
            Boolean (true, false)
            Array (dizi)
            Object (Nesne)
            NULL
        gettype()
    */

    $string = "salih koksal";
    $int = 500;
    $float = 5.5;
    $bool = false;
    $array = array();
    $object = new stdClass;
    $null = NULL;
    echo gettype($null);

?>