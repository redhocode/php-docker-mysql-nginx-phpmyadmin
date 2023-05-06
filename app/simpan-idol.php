<?php
ob_start();
//include koneksi database
include('koneksi.php');

//get data dari form
$gen          = $_POST['gen'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO jkt48 (gen, nama_lengkap, alamat) VALUES ('$gen', '$nama_lengkap', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    $alert = '<div class="alert alert-danger" role="alert">Data Gagal Disimpan!</div>';
    echo $alert;
}

ob_end_flush();
?>