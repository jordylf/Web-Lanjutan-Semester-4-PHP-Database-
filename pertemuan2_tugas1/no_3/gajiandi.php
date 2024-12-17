<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perhitungan Gaji Andi</title>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>

<body>
    <?php
        // Variabel angka
        $gaji_pokok = 2000000;
        $lembur_per_jam = 6000;
        $jam_lembur = 35;
        $potongan_kerja = 230000;

        // Menghitung total gaji
        $total_gaji = $gaji_pokok + ($lembur_per_jam * $jam_lembur) - $potongan_kerja;

        // Tampilkan dalam tabel
        echo "<h2>Data Gaji Andi</h2>";
        echo "<table>";
        echo "<tr><th>Keterangan</th><th>Nilai</th></tr>";
        echo "<tr><td>Gaji Pokok</td><td>Rp " . number_format($gaji_pokok, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Lembur (per jam)</td><td>Rp " . number_format($lembur_per_jam, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Jumlah Jam Lembur</td><td>$jam_lembur jam</td></tr>";
        echo "<tr><td>Potongan Kerja</td><td>Rp " . number_format($potongan_kerja, 0, ',', '.') . "</td></tr>";
        echo "<tr><td><strong>Total Gaji</strong></td><td><strong>Rp " . number_format($total_gaji, 0, ',', '.') . "</strong></td></tr>";
        echo "</table>";
    ?>
</body>
</html>
