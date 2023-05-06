<?php
ob_start();
//include koneksi database
include('koneksi.php');

//get data dari form
$id_idol     = $_POST['id_idol'];
$gen         = $_POST['gen'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE jkt48 SET gen = '$gen', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_idol = '$id_idol'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    // redirect ke halaman index.php 
    header("location: index.php");
   mysqli_connect_error();
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
