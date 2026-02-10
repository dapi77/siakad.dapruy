<?php 
// mengkoneksikan aolikasi dengan database
$koneksi = mysqli_connect("localhost", "root", "","akademik");

// cek keneksi
if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>