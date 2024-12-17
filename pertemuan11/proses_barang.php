<?php
include('koneksi.php');
$koneksi = new database();
$action = $_GET['action'];
if ($action == "add") {
    $koneksi->tambah_data($_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='index.php';</script>";
} elseif ($action == "update") {
    $koneksi->update_data(
        $_POST['nama_barang'],
        $_POST['stok'],
        $_POST['harga_beli'],
        $_POST['harga_jual'],
        $_POST['id_barang']
    );
    echo "<script>alert('Data berhasil diupdate!'); window.location.href='index.php';</script>";
} elseif ($action == "delete") {
    $id_barang = $_GET['id'];
    $koneksi->delete_data($id_barang);
    echo "<script>alert('Data berhasil dihapus!'); window.location.href='index.php';</script>";
}
