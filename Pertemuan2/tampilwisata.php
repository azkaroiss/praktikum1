<?php
function crul($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = crul("http://localhost/praktikum1/Pertemuan2/getwisata.php");
$data = json_decode($send, true);

foreach($data as $d){
    echo "Nama Wisata : ".$d['id_wisata']."<br>";
    echo "Kota : ".$d['kota']."<br>";
    echo "Lokasi : ".$d['landmark']."<br>";
    echo "Harga Tiket : ".$d['tarif']."<br>";
    echo "<hr>";
}