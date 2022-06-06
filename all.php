<?php

include "../koneksi.php";
/**
 * @var $connection PDO
 */

//Query
 $query = "SELECT * FROM buku";
    $stmt = $connection->query($query);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
//Menjalankan Query
    $result = $stmt->fetchAll();
//Tampilan Output Dalam Bentuk JSON
header('Content-Type: application/json');
echo json_encode($result);
?>