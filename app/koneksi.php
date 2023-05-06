<?php

//deklasrasi variabel
$db_host = "db";
$db_user = "root";
$db_pass = "root";
$db_name = "db_php";    

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($connection) {
    $alert = '<div class="alert alert-success" role="alert">Terkoneksi Database</div>';
    echo $alert;
} else {
    // $alert = '<div class="alert alert-danger" role="alert"></div>';
    // // mysqli_connect_error();
    // echo $alert;
}

?>

