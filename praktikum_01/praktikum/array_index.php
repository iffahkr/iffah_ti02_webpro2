<?php

// array = himpunan

$ibukota = ["Jakarta", "Kuala Lumpur", "Tokyo", "Seoul", "Moscow", "Pyongyang"];

// echo $ibukota; --> error

// Menambahkan data
$ibukota[] = "Nusantara";
$ibukota[] = "Beijing";

// Mengubah data
$ibukota[3] = "Busan";
$ibukota[6] = "Roma";

// Menghapus data 
unset($ibukota[1]);

// Mencetak seluruh data
foreach($ibukota as $k) {
    echo $k." ";
}

echo "<br>"

// Mencetak satu data
// echo $ibukota[3]." ";
// echo $ibukota[1];
?>