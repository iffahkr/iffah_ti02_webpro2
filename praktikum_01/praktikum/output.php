<?php

$title = $_POST["title"];
$tahun = $_POST["tahun"];
$genre = $_POST["genre"];
$rating = $_POST["rating"];

if ($tahun < 2019){
    $status = "Game Lama";
} else {
    $status = "Game Baru";
}

echo "Judul : ".$title. "<br>";
echo "Tahun Rilis : ".$tahun. "<br>";
echo "Genre : ".$genre. "<br>";
echo "Rating : ".$rating. "<br>";
echo "Status : ".$status;
?>