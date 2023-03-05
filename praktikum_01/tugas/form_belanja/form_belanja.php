<?php

$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

if ($produk == "TV"){
    $harga = 4200000;
} elseif ($produk == "Kulkas") {
    $harga = 3100000;
} elseif ($produk == "Mesin cuci") {
    $harga = 3800000;
}

$total_harga = $jumlah * $harga;

echo "Customer : $customer". "<br>";
echo "Pilihan Produk : $produk". "<br>";
echo "Jumlah : $jumlah". "<br>";
echo "Total Harga : $total_harga";
?>