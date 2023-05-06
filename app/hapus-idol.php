<?php
ob_start();
include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM jkt48 WHERE id_idol = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
