<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: School Education
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Universitas Harmonia </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>
</head>

<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>Kontak | Kampus</h2>
        <p>informasi kontak.</p>
        
      </div>
      </div>
      </div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="../frontweb.php">Universitas Harmonia</a></h1>
      
    </div>
    <div id="topnav">
      <ul>
        <li><a href="../frontweb.php">Beranda</a></li>
        <li ><a href="tentang.html">Tentang Kami</a></li>
        <li><a href="kontak.html">Kontak</a></li>
        <li><a href="visimisi.html">Visi & Misi</a></li>
        <li><a href="biografi.html">Biografi</a></li>
        
        
        
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  

  
        
        <form method="post" action="proses_pemilihan_matkul.php">
            <div class="form-group">
                <p><label for="kode_matkul">Kode Mata Kuliah:</label>
                <select name="kode_matkul" id="kode_matkul">
                    <?php
                    // Koneksi ke database
                    $host = 'localhost';
                    $username = 'root';
                    $password = '';
                    $database = 'stmik_ids';

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
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Pilih">
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </form>
    
  </div>

<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->

<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2023  - <a href="index.html">Universitas Harmonia</a></p>
    <p class="fl_right"> <a target="_blank" href="kontak.html" >Facebook | Instagram | Whatsapp </a></p>
    <br class="clear" />
  </div>
</div>

</body>
</html>