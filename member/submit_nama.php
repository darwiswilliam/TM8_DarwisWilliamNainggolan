<?php
// Menghubungkan ke database
$host = 'localhost'; // Ganti dengan host database Anda
$username = 'root'; // Ganti dengan nama pengguna database Anda
$password = ''; // Ganti dengan kata sandi database Anda
$database = 'sistem_harmonia'; // Ganti dengan nama database Anda

$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Memeriksa apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $nim = $_POST['nim'];

    // Menggunakan prepared statement untuk mencegah serangan SQL Injection
    $stmt = $conn->prepare("INSERT INTO member_matkul (nama_lengkap, nim) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama_lengkap, $nim);

    // Menjalankan prepared statement untuk menyimpan data ke database
    if ($stmt->execute()) {
        echo "Data login berhasil disimpan ke database.";
        header("location: ./input_matkul.php");
	
    } else {
        echo "Terjadi kesalahan dalam penyimpanan data.";
    }

    $stmt->close();
}

$conn->close();
?>
