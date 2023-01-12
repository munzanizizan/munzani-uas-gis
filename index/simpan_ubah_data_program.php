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
$update_data = mysqli_query($koneksi, "UPDATE program set
id_program='$id_program', nama_program='$nama_program', id_identitas='$id_identitas', 
aktiv='$aktiv' where id_program=$id_program");
if ($update_data) {
 header('location:data_program.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_program.php?pesan=Data Gagal Di Ubah');
}