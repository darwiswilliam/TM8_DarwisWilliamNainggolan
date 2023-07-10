<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sistem_harmonia';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil daftar mata kuliah dari database
$query = "SELECT * FROM matakuliah";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<form method='post' action='proses_pemilihan_matkul.php'>";
    echo "<select name='kode_matkul'>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row['kode_matkul'] . "'>" . $row['nama_matkul'] . "</option>";
    }

    echo "</select>";
    echo "<input type='submit' value='Pilih'>";
    echo "</form>";
} else {
    echo "Tidak ada mata kuliah yang tersedia.";
}

mysqli_close($conn);
?>
