<?php
include('koneksi.php');
$db = new database();
$search = isset($_GET['search']) ? $_GET['search'] : "";
$data_barang = $db->tampil_data($search);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi OOP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mt-4 ">CRUD DATA BARANG / Jordy Lian Ferdinand</h2>
                    </div>
                    <div class="card-body">
                        <!-- Form Pencarian -->
                        <form method="GET" action="" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Cari Nama Barang" value="<?php echo $search; ?>">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </div>
                        </form>
                        <!-- Tombol Tambah -->
                        <a href="tambah_data.php" class="btn btn-success mb-3">+ TAMBAH DATA BARANG</a>
                        <!-- Tabel Data Barang -->
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Barang</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Harga Beli</th>
                                    <th scope="col">Harga Jual</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (empty($data_barang)) {
                                    echo "<tr><td colspan='6'>Tidak ada data ditemukan</td></tr>";
                                } else {
                                    $no = 1;
                                    foreach ($data_barang as $row) {
                                ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row['nama_barang']; ?></td>
                                            <td><?php echo $row['stok']; ?></td>
                                            <td><?php echo $row['harga_beli']; ?></td>
                                            <td><?php echo $row['harga_jual']; ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $row['id_barang']; ?>" class="btn btn-info btn-sm">Update</a>
                                                <a href="proses_barang.php?action=delete&id=<?php echo $row['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
