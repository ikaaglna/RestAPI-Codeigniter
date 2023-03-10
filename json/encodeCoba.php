<?php
// $mahasiswa = [
//     [
//         "nama" => "Siska Angelina",
//         "NIM" => 672020123,
//         "email" => "siska.nim@gmail.com"
//     ],
//     [
//         "nama" => "Siski Angelini",
//         "NIM" => 682020123,
//         "email" => "siski.nim@gmail.com"
//     ]
    
// ];

$dbh = new PDO('mysql:host=localhost;dbname=db_hospital','root','');
$db = $dbh->prepare('SELECT * FROM categories');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

//var_dump($mahasiswa);

$data = json_encode($mahasiswa);
echo $data;

?>