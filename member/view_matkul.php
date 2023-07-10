<?php
require_once '../member/top_member.php';



?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Member</h1>
    <img src="../images2/logo_harmonia3.png" alt="logo" width="350">
    <a href="../frontweb.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form >
            <table cellpadding="8" class="w-100">
              
            <?php
        // Memeriksa apakah ada data yang dikirimkan melalui formulir
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Menerima kode mata kuliah yang dipilih dari formulir
            $kode_matkul = $_POST['kode_matkul'];

            // Koneksi ke database
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'sistem_harmonia';

            $conn = mysqli_connect($host, $username, $password, $database);
            if (!$conn) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }

            // Mengambil informasi mata kuliah yang dipilih dari database
            $query = "SELECT * FROM matakuliah WHERE kode_matkul = '$kode_matkul'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $nama_matkul = $row['nama_matkul'];
                $sks = $row['sks'];

                // Menampilkan hasil pemilihan mata kuliah
                echo "<h2>Hasil Pemilihan Mata Kuliah</h2>";
                echo "<p><strong>Kode Mata Kuliah:</strong> " . $kode_matkul . "</p>";
                echo "<p><strong>Nama Mata Kuliah:</strong> " . $nama_matkul . "</p>";
                echo "<p><strong>SKS:</strong> " . $sks . "</p>";
            } else {
                echo "<h2>Error</h2>";
                echo "<p>Mata kuliah tidak ditemukan.</p>";
            }

            mysqli_close($conn);
        }
        ?>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../member/_bottom.php';
?>