<?php

$nilai1 = 77;
$nilai2 = 50;
$nilai3 = 100;

function lulus($uts = 0, $uas = 0, $tugas = 0){

    if (($uts + $uas + $tugas)/3 >= 75) {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Tidak Lulus";
    }

    return $keterangan;
}

echo lulus($nilai1, $nilai2);




?>