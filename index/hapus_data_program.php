u<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_program = $_GET['id_program'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM program where
id_program=$id_program");
if ($hapus_data) {
 header('location:data_program.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_program.php?pesan=Data Gagal Di hapus');
}