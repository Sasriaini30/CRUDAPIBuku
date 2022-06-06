<?php
include '../koneksi.php';

//Data Di Post
if ($_POST){
    $isbn = $_POST['isbn'];

    //Menginsertkan Suatu Data
    $stmt = $connection->prepare("DELETE FROM buku WHERE isbn = '$isbn'");
    $stmt->execute();
    //Diberikan Response
    $response['message'] = "Data Berhasil Di Hapus";

    //Data Dijadikan Dalam Bentuk JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);
    //Output json
    echo $json;

} else {
    $response['message'] = "Data Gagal Di Hapus";

    //Data Dijadikan Dalam Bentuk JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);
    //Output json
    echo $json;
}