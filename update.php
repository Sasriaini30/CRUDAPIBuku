<?php
include '../koneksi.php';

//Data Di Post
if ($_POST){
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $abstrak = $_POST['abstrak'];
    $isbn = $_POST['isbn'];
    
    //Data Di Update
    $stmt = $connection->prepare("UPDATE `buku` SET `judul`='$judul',`pengarang`='$pengarang',`jumlah`='$jumlah',`tanggal`='$tanggal',`abstrak`='$abstrak' WHERE `isbn` = $isbn");
    $stmt->execute();
    //Diberikan Response
    $response['message'] = "Data Berhasil Di Update";
    $response['data'] = [
        
        'judul' => $judul,
        'pengarang' => $pengarang,
        'jumlah' => $jumlah,
        'tanggal' => $tanggal,
        'abstrak' => $abstrak,
        'isbn' => $isbn
    ];
    //Data Dijadikan Dalam Bentuk JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);
    //Ouput json
    echo $json;

} else {
    $response['message'] = "Data Gagal Di Update";

    //Data Dijadikan Dalam Bentuk JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);
    //Output json
    echo $json;
}