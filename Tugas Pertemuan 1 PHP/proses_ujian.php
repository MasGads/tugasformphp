<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['nilai'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        if ($nilai > 70) {
            $hasil = "Lulus";
        } else {
            $hasil = "Remedial";
        }

        echo "<h2>Hasil Pengolahan Data Ujian</h2>";
        echo "Nama: $nama<br>";
        echo "Email: $email<br>";
        echo "Nilai Ujian: $nilai<br>";
        echo "Status: $hasil<br>";
    } else {
        echo "Data tidak lengkap. Pastikan semua form terisi!";
    }
}
