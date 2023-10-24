<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = $_POST["nama"];
    $telepon = $_POST["telepon"];
    $perangkat = $_POST["perangkat"];
    $masalah = $_POST["masalah"];
    $biaya = $_POST["biaya"];

    // Menyimpan data ke dalam file teks (data.txt)
    $data = "Nama Pelanggan: $nama\nNomor Telepon: $telepon\nJenis Perangkat: $perangkat\nDeskripsi Masalah: $masalah\nEstimasi Biaya: Rp $biaya\n\n";
    file_put_contents("data.txt", $data, FILE_APPEND);

    // Memberikan respons ke pengguna
    echo "Nota servis telah disimpan. Terima kasih!";
} else {
    // Menangani akses ilegal ke file
    echo "Akses tidak sah!";
}
?>
