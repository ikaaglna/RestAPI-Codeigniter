<?php

$data = file_get_contents('coba.json');
$mahasiswa = json_decode($data, true); //true agar menjadi array

var_dump($mahasiswa);
echo $mahasiswa[0]["pembimbing"]["pembimbing1"]
?>