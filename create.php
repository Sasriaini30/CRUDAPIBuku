<?php
include '../koneksi.php';

//Data Di Post
if ($_POST){
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $abstrak = $_POST['abstrak'];

    //Menginsertkan Suatu Data
    $stmt = $connection->prepare("INSERT INTO buku (isbn, judul, pengarang, jumlah, tanggal, abstrak) VALUES ('$isbn', '$judul', '$pengarang', '$jumlah', '$tanggal', '$abstrak')");
    $stmt->execute();
    //Diberikan Response
    $response['message'] = "Insert Data Berhasil";
    $response['data'] = [
        'isbn' => $isbn,
        'judul' => $judul,
        'pengarang' => $pengarang,
        'jumlah' => $jumlah,
        'tanggal' => $tanggal,
        'abstrak' => $abstrak
    ];
    //Data dijadikan dalam bentuk JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);

    //Output json
    echo $json;
} else {

    $response['message'] = "Insert Data Gagal";
    //Data dijadikan dalam bentuk JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);
    //Output json
    echo $json;
}