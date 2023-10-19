<?php
$host = "localhost"; // Ganti dengan alamat host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = "password"; // Ganti dengan password database Anda
$database = "portofolio"; // Ganti dengan nama database yang ingin Anda akses

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Mengecek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi ke database berhasil.";

// Selanjutnya, Anda dapat menjalankan query SQL dan berinteraksi dengan database.
// Contoh:
$query = "SELECT * FROM home";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Lakukan sesuatu dengan data
        echo "id: " . $row["id"] . " - Nama: " . $row["nama"] . "<br>";
    }
} else {
    echo "Tidak ada data ditemukan.";
}

// Jangan lupa untuk menutup koneksi setelah selesai menggunakan database.
$conn->close();
?>
