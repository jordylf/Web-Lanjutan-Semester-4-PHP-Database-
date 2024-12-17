<?php
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "lab";
    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }
    function tampil_data($search = "")
    {
        if ($search != "") {
            $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang WHERE nama_barang LIKE '%$search%'");
        } else {
            $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang");
        }
        $hasil = [];
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tambah_data($nama_barang, $stok, $harga_beli, $harga_jual)
    {
        mysqli_query($this->koneksi, "INSERT INTO tb_barang VALUES ('', '$nama_barang', '$stok', '$harga_beli', '$harga_jual')");
    }
    function get_by_id($id_barang)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id_barang'");
        return $query->fetch_array();
    }
    function update_data($nama_barang, $stok, $harga_beli, $harga_jual, $id_barang)
    {
        $query = mysqli_query($this->koneksi, "UPDATE tb_barang SET nama_barang='$nama_barang', stok='$stok', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id_barang='$id_barang'");
    }
    function delete_data($id_barang)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tb_barang WHERE id_barang='$id_barang'");
    }
}
?>