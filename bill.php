<html>
<?php
include "db_connect.php"; 
if (isset($_POST['submit2'])) {
$nama        = $_POST['name'];
$email        = $_POST['email'];
$alamat           = $_POST['alamat'];
$notelepon  = $_POST['notelp'];
$barang=$_POST['barang'];

$query="INSERT INTO keranjang values nama='$nama',email='$email',alamat='$alamat',notelp='$notelepon',nama_barang='$barang'";
mysqli_query($koneksi, $query);
}
?>