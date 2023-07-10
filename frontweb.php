

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Perguruan Tinggi</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<!-- Homepage Only Scripts -->
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>
<!-- End Homepage Only Scripts -->
</head>
<body>
  <div class="wrapper col0">
    <div id="topbar">
      <div id="slidepanel">
        <div class="topbox">
          <h2>Portal ASTRO</h2>
          <p>Jika Anda memiliki pertanyaan atau membutuhkan informasi, silakan hubungi kami :.</p>
          
        </div>
    
        <div class="topbox">
          <h2>Silahkan isi formulir dibawah ini</h2>
          <form action="simpan-data.php" method="post">
            <fieldset>
              <legend>Kirim Kontak</legend>


              <label>Nama Lengkap:</label>
              <input type="text" name="nama_lengkap" required  />


              <label>Umur:</label>
              <input type="number" name="umur" required  />


              <label>Daerah Asal:</label>
              <input type="text" name="daerah_asal" required />

              <label >Email:</label>
              <input type="email" name="email"required >
        

              <label >Foto Profil:</label>
              <input type="file" name="profile" >


          
                
              
              <label for="pupilremember">
                <input class="checkbox" type="checkbox" checked="checked" /> Remember me
              </label>
              <p>
                 <input type="submit" name="submit" value="Simpan" />
                  &nbsp;
                 <input type="reset"  />
              </p>
            </fieldset>
          </form>
        </div>
        <div class="topbox last">
          <h2>Ket</h2>
          <form action="#" method="post">
            <fieldset>
              <legend>Keterangan</legend>
              <p><strong  >PT Astro Internasional</strong></p>
              <p>Jalan Utama No. 123, Kota Astro, Negara A</p>
              <p>Jakarta 1049</p>
              <p>Indonesia</p>
              <br>
              <p>Telepon : (021)8297 2132</p>
              <br>
              <p>Email: Asttrocrypto@gmail.com</p>
            </fieldset>
          </form>
        </div>
        <br class="clear" />
      </div>
      <div id="loginpanel">
        <ul>
          <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Hubungi Kami</a><a id="closeit" style="display: none;" href="#slidepanel">Tutup</a></li>
        </ul>
      </div>
      <br class="clear" />
    </div>
  </div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      
      <h1><a href="frontweb.php">Universitas Harmonia</a></h1>
      
    </div>
    
    <div id="topnav">
      
      <ul>
     
        <li class="active"><a href="frontweb.php">Beranda</a></li>
        <li><a href="pages/tentang.html">Tentang Kami</a></li>
        <li><a href="pages/kontak.html">Kontak</a></li>
        <li><a href="pages/visimisi.html">Visi & Misi</a></li>
        <li><a href="pages/biografi.html">Biografi</a></li>
        <li><a href="indexx.php">Admin</a></li>
        <li><a href="member/create.php">Member</a></li>

        
        
        
        

       
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div class="featured_box"><a href="#"><img src="images2/univharmonia.jpg" alt="" /></a>
      <div class="floater">
        <h2>1. Lokasi</h2>
        <p> Universitas Harmonia terletak di Kota Harmonia, sebuah kota metropolitan yang indah dan ramai di tengah-tengah negara. Kota Harmonia memiliki letak strategis yang memudahkan aksesibilitas bagi mahasiswa, staf, dan pengunjung universitas...</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images2/comlab.jpg" alt="" /></a>
      <div class="floater">
        <h2>2. Fasilitas</h2>
        <p>Universitas Harmonia memiliki fasilitas yang lengkap dan modern untuk mendukung kegiatan akademik, riset, dan pengembangan pribadi mahasiswa. Berikut adalah beberapa fasilitas yang tersedia di Universitas Harmonia.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images2/libraryharmonia.jpg" alt="" /></a>
      <div class="floater">
        <h2>3. Perpustakaan</h2>
        <p>Perpustakaan di Universitas Harmonia merupakan salah satu fasilitas yang sangat penting dan strategis dalam mendukung kegiatan belajar-mengajar, penelitian, dan pengembangan akademik. Berikut adalah informasi mengenai perpustakaan Harmonia.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images2/kerjasama.webp" alt="" /></a>
      <div class="floater">
        <h2>4. Kerjasama Nasional & Internasional</h2>
        <p>Universitas Harmonia sangat aktif dalam menjalin kerjasama internasional dengan berbagai perguruan tinggi dan lembaga pendidikan di seluruh dunia. Melalui kerjasama ini, Universitas Harmonia bertujuan</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        

          <h2>About University</h2>
          <div class="video-container">
            <video controls>
              <source src="video/contohkampus.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <p><strong><a href="#">More Video</a></strong></p>
          </div>
           <pre>
             









           </pre>

          

          <h2>Kalender Akademik</h2>
          <table summary="Summary Here" cellpadding="0" cellspacing="0">
            <thead>
              <tr>
                <th>Semester</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="light">
                <td> Semester Ganjil</td>
                <td>10 September 2023</td>
                <td>Awal Perkuliahan</td>
              </tr>
              <tr class="dark">
                <td>Semester Ganjil</td>
                <td>1 Oktober 2023</td>
                <td>Deadline Pengisian KRS</td>
              </tr>
            </tbody>
          </table>

          

    

          <br></br>
          <br></br><br><br><br>
          
         <h2></h2>
        </ul>
        <br class="clear" />
      </div>
  
    </div>
    <div class="fl_right">
      <h2>Berita Terkini</h2>
      <ul>
        <li>
          <div class="imgholder"><a href="#"><img src="images2/berita1.jpeg" alt="" /></a></div>
          <p><strong><a href="#">Universitas Harmonia Mendapatkan Penghargaan Sebagai Institusi Pendidikan Terbaik Tahun Ini</a></strong></p>
          <p>Kota Harmonia, XX Juni 2023 - Universitas Harmonia meraih penghargaan bergengsi sebagai institusi pendidikan terbaik dalam acara penghargaan nasional yang diselenggarakan oleh Kementerian Pendidikan dan Kebudayaan...</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images2/berita5.png" alt="" /></a></div>
          <p><strong><a href="#"> Universitas Harmonia Memperluas Jaringan Kerjasama Internasionalnya</a></strong></p>
          <p>Kota Harmonia, XX Agustus 2023 - Universitas Harmonia mengumumkan penandatanganan perjanjian kemitraan dengan beberapa universitas ternama di berbagai negara...</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images2/berita5.png" alt="" /></a></div>
          <p><strong><a href="#">Profesor dari Universitas Harmonia Memenangkan Penghargaan Nobel dalam Bidang Kedokteran</a></strong></p>
          <p>Kota Harmonia, XX Oktober 2023 - Profesor terkemuka dari Fakultas Kedokteran Universitas Harmonia, Prof. Dr. XYZ, dianugerahi Penghargaan Nobel dalam bidang Kedokteran ...</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images2/berita4.png" alt="" /></a></div>
          <p><strong><a href="#">Mahasiswa Universitas Harmonia Menjuarai Kompetisi Inovasi Teknologi Internasional</a></strong></p>
          <p>Kota Harmonia, XX November 2023 - Tim mahasiswa Universitas Harmonia meraih gelar juara dalam kompetisi inovasi teknologi tingkat internasional ...</p>
        </li>
        <li class="last">
          <div class="imgholder"><a href="#"><img src="images2/berita5.png" alt="" /></a></div>
          <p><strong><a href="#">Universitas Harmonia Meluncurkan Program Studi Baru untuk Menjawab Tantangan Era Digital</a></strong></p>
          <p>Universitas Harmonia Meluncurkan Program Studi Baru untuk Menjawab Tantangan Era Digital...</p>
          <center><p><strong><a href="#">Selengkapnya</a></strong></p></center>
        </li>
        


<form action="insert1.php" method="post">
          <fieldset>
            <br></br>
            <br></br>
            <h2>Pengunjung</h2>
              <table>
                  
              <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td><input type="text" name="nama"></td>
                      </tr>
              
                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email"></td>
                        </tr>
                      
  </tr>
                      
  
                      <tr>
                      <td>Komentar</td>
                      <td>:</td>
                    <td><textarea  name="komentar" ></textarea></td>
                    </tr>


  </td>
                <tr>
                  <td><button type="submit">Submit</button>
  </td>
  </tr>
  </table>
  </form>


      </ul>
    </div>
    <br class="clear" />
  </div>
</div>

<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2023  - <a href="index.html">Universitas Harmonia</a></p>
    <p class="fl_right"> <a target="_blank" href="index.html" >Facebook | Instagram | Whatsapp </a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>