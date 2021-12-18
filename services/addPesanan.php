<?php
// menambahkan include koneksi untuk memastikan terkoneksi dengan database
include '../auth/connection.php';

// mendefinisikan variabel untuk kebutuhan insert data
$nama_pemesan = $_POST['nama_pemesan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nik = $_POST['nik'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga = $_POST['harga'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$durasi_menginap = $_POST['durasi_menginap'];
$breakfast = $_POST['breakfast'];

// melakukan validasi terhadap isi dari input breakfast
if ($breakfast != 'on') {
  $breakfast = 'no';
} else if ($breakfast == 'on') {
  $breakfast = 'yes';
}

//
$total_bayar = $_POST['total_bayar'];
$discount = $durasi_menginap >= 3 ? '10%' : 'Tidak_Ada_Discount';

//melakukan insert data 
mysqli_query($conn, "INSERT INTO `hotel`.`tb_pesanan` (`nama_pemesan`, `nik`, `jenis_kelamin`, `tipe_kamar`, `harga`, `tanggal_pesan`, `durasi_menginap`, `breakfast`, `discount`, `total_bayar`) VALUES ('$nama_pemesan', '$nik', '$jenis_kelamin', '$tipe_kamar', '$harga', '$tanggal_pesan', '$durasi_menginap', '$breakfast', '$discount', '$total_bayar');");
header("location:../index.php#pesan-kamar");
