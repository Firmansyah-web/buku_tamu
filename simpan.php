<?php
include("koneksi.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$website = $_POST['website'];
$pesan = $_POST['pesan'];
$sql="insert into dataku(nama,email,website,pesan,tanggal) values ('$nama','$email','$website','$pesan')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location:buku-tamu.php');
?>