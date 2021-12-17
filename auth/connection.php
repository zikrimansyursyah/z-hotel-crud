<?php
$servername = "localhost";
$username = "root";
$password = "";
$ready = false;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully";
}
// Create DB 
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS hotel;");

// Use DB
mysqli_query($conn, "USE `hotel`;");

// Create Table Anggota
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `tb_pesanan` (
		`nama_pemesan` VARCHAR(50) NOT NULL,
		`nik` VARCHAR(20) NOT NULL,
		`jenis_kelamin` VARCHAR(20) NOT NULL,
		`tipe_kamar` VARCHAR(20) NOT NULL,
		`harga` VARCHAR(20) NOT NULL,
		`tanggal_pesan` DATE NOT NULL,
		`durasi_menginap` INT(5) NOT NULL,
		`breakfast` VARCHAR(10) NOT NULL,
		`discount` VARCHAR(5) NOT NULL,
		`total_bayar` VARCHAR(10) NOT NULL
	);");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `tb_room` (
		`tipe_kamar` VARCHAR(20) NOT NULL,
		`harga` VARCHAR(20) NOT NULL,
		`fasilitas` VARCHAR(100) NOT NULL,
		`promo` VARCHAR(100) NOT NULL,
		PRIMARY KEY (`tipe_kamar`)
	);");

mysqli_query($conn, "INSERT INTO `hotel`.`tb_room` (`tipe_kamar`, `harga`, `fasilitas`, `promo`) VALUES ('Standar', 'IDR 2,000,000', 'wifi, service 24jam', 'Disc 10% for 3 Day stay');");
mysqli_query($conn, "INSERT INTO `hotel`.`tb_room` (`tipe_kamar`, `harga`, `fasilitas`, `promo`) VALUES ('Deluxe', 'IDR 5,000,000', 'wifi, service 24jam', 'Disc 10% for 3 Day stay');");
mysqli_query($conn, "INSERT INTO `hotel`.`tb_room` (`tipe_kamar`, `harga`, `fasilitas`, `promo`) VALUES ('Executable', 'IDR 10,000,000', 'wifi, service 24jam', 'Disc 10% for 3 Day stay');");
