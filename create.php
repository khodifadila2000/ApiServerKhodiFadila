<?php

include "../config/koneksi.php";

$angka_1 = @$_POST['angka_1'];
$angka_2 = @$_POST['angka_2'];
$simbol = @$_POST['simbol'];
$hasil = @$_POST['hasil'];

$data = [];

$query = mysqli_query($kon, "INSERT INTO  `kalkulator`
  ( `angka_1`,`angka_2`,`simbol`
    `hasil`)
   VALUES
   ('". $angka_1 ."','". $angka_2 ."','". $simbol ."',
    '". $hasil ."')");

    if($query){
       $status = true;
       $pesan = "request success";
       $data[]= $query;
    }else{
        $status = false;
        $pesan = "request failed";
    }

    $json = [
       "status" => $status,
       "pesan" => $pesan,
       "data" => $data,
    ];

    header("Content-Type: application/json");
    echo json_encode($json);

    ?>