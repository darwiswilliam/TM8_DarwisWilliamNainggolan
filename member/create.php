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
          <form action="./submit_nama.php" method="POST">
            <table cellpadding="8" class="w-100">
              
              <tr>
                <td>Nama Lengkap </td>
                <td><input class="form-control" required  type="text" name="nama_lengkap"></td>
              </tr>

              <tr>
                <td>NIM </td>
                <td><input class="form-control" type="text" name="nim"></td>
              </tr>
              
             
                </td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
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