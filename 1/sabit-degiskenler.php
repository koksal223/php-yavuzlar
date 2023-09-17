<?php

    /*
        Sabit Değişkenler;
            define() fonksiyonu ile tanımlanır
            Türkçe karakterler içerebilir
            Sayı ile başlayamaz
            Harf ya da _ işareti ile başlar
            Büyük-küçük harfe duyarlıdır
        Veri türlerinde;
            Object hariç tüm veri türlerini kapsar.
    */

    $salih = "salih koksal";
    //echo $salih;

    define("salih", "salih koksal");
    //define("salih", "salih koksal2");
    
    echo salih;

?>