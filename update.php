<?php

include "../config/koneksi.php";

$hari = @$_POST['hari'];
$jam_mulai = @$_POST['jam_mulai'];
$jam_berhenti = @$_POST['jam_berhenti']

$query = mysqli_query($kon, "UPDATE `alaram` SET
`hari`='". $hari."',
`jam_berhenti` = '". $jam_mulai."',
`jam_berhenti = '". $jam_berhenti."');

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