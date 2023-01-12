<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_program = $_POST['id_program'];
$nama_program = $_POST['nama_program'];
$id_identitas = $_POST['id_identitas'];
$aktiv = $_POST['aktiv'];

$insert_data = mysqli_query($koneksi, "INSERT INTO program
(id_program,nama_program,id_identitas,aktiv)
values ('$id_program','$nama_program','$id_identitas','$aktiv')");
if ($insert_data) {
 header('location:data_program.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_program.php?pesan=Data Gagal Di simpan');
}