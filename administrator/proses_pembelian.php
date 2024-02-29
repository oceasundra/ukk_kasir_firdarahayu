<?php
include "../koneksi.php";

$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];
$TanggalPenjualan = $_POST['TanggalPenjualan'];

if (empty($PelangganID) ||empty($NamaPelanggan) || empty($NomorTelepon) || empty($Alamat) || empty($TanggalPenjualan)) {
    echo "<script>alert('Field tidak boleh kosong'); window.location.href='pembelian.php';</script>";
} else {
    mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('$PelangganID', '$NamaPelanggan', '$Alamat', '$NomorTelepon')");
    mysqli_query($koneksi, "INSERT INTO penjualan VALUES('', '$TanggalPenjualan', '', '$PelangganID')");

    header("location:pembelian.php?pesan=simpan");
}
