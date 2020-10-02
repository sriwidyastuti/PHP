<?php
$angka1=$_GET['num1'];
$angka2=$_GET['num2'];
$range=$_GET['num3']-3;

    echo "hasil : <br> ";
    echo $angka1 , $angka2;
    for ($i=0; $i<=($range); $i++){
        $hasil = $angka1 + $angka2;
        echo ", $hasil";

        $angka1=$angka2;
        $angka2=$hasil;
    }