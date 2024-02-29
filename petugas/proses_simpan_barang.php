<?php 
include "../koneksi.php";

$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];


if (empty($NamaProduk) || empty($Harga) || empty($Stok)) {
    echo "<script>alert('Field tidak boleh kosong'); window.location.href='data_barang.php';</script>";
} else {
    mysqli_query($koneksi,"INSERT INTO produk VALUES('', '$NamaProduk', '$Harga', '$Stok')");
    header("location:data_barang.php?pesan=simpan");
}
?>