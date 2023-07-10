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
          <form action="./view_matkul.php" method="POST">
            <table cellpadding="8" class="w-100">
              
              <tr>
                <td>Kode Matakuliah </td>
                <td><select name="kode_matkul" id="kode_matkul" class="form-control">
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
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['kode_matkul'] . "'>" . $row['nama_matkul'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>Tidak ada mata kuliah yang tersedia</option>";
                    }

                    mysqli_close($conn);
                    ?>
              </select></td>
                
              </tr>

                </td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Cari">
                  </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../member/_bottom.php';
?>