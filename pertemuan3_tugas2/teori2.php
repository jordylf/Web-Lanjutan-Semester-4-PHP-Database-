<?php
    // Menggunakan If Statement
    $nilai = 75;

    if ($nilai >= 70) {
        echo "Nilai Anda: $nilai. (Anda lulus.) <br>";
    } else {
        echo "Nilai Anda: $nilai. (Anda tidak lulus.) <br>";
    }
?>

<?php
    // Menggunakan Switch Case
$nilai = "B";

switch ($nilai) {
    case "A":
        echo "Nilai Anda: $nilai. (Sangat baik!)";
        break;
    case "B":
        echo "Nilai Anda: $nilai. (Baik.)";
        break;
    case "C":
        echo "Nilai Anda: $nilai. (Cukup.)";
        break;
    default:
        echo "Nilai Anda: $nilai. (Belum ada penilaian.)";
}
?>