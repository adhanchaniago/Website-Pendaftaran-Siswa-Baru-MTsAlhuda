<?php
session_start();
if(empty($_SESSION['namauser']) and empty($_SESSION['kode']))
{
	echo "<p>Anda tidak berhak mengakses halaman ini.</p>";
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Pendaftaran Siswa Baru</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   
    $('a[href=#top]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });

});

$(function() {
	$('#loading').ajaxStart(function(){
		$(this).fadeIn();
	}).ajaxStop(function(){
		$(this).fadeOut();
	});

	$('#leftPan ul li a').click(function() {
		var url = $(this).attr('href');
		$('#ambil').load(url);
		return false;
	});
});
</script>

</head>
<div id="loading" style="display:none"><img src="../images/loading.gif" /><br />...</div>
<body>
<div id="mainPan">
  <div id="leftPan">
  	<div id="leftTopPan">
		<a href="index.php"><img src="../images/logo.gif" title="Consultant" alt="Consultant"/></a> </div>
		<ul>
			<li><a href="home.php">Beranda</a></li><br>
			<li><a href="daftar-siswa.php">Daftar Calon Siswa</a></li><br>
			<li><a href="daftar-user.php">Daftar User / Pengguna</a></li><br>
		
			<li><a href="export-excell.php">Export Laporan ke Excell</a></li><br>
		
		
			<li><a href="logout.php">Keluar / Log Out</a></li><br>
		</ul>
	<div style="padding:10px;">Selamat Datang, <b><?php echo $_SESSION['namauser']; ?></b><br />Anda login sebagai : <strong><?php echo $_SESSION['username']; ?></strong></div>
  </div>
  
 
   <div id="rightPan">
  	<h1>Sistem Online Pendaftaran Siswa Baru<br /><p>MADRASAH TSANAWIYAH AL-HUDA GORONTALO</p> </h1>
	<div id="ambil"><h2>Selamat Datang di Halaman Administrator Sistem Online Pendaftaran Siswa Baru
	 MADRASAH TSANAWIYAH AL-HUDA GORONTALO</H2>
	<br><br>
	<img src="images/gifi.gif" vspace="5" hspace="5" style="padding:3px; margin:5px; border:20px solid #046f69; float:center; width:750px;" />
	<BR><BR>		
<center><h3><u><b>	Ini adalah halaman Administrator situs Pendaftaran Siswa Baru Online MTs AL-HUDA GORONTALO.</b></u></h3></center><br><br>
	<li>Untuk melihat data calon siswa baru yang terdaftar, silahkan mengisi formulir pada menu <b>"Daftar Calon Siswa"</b>.</li><br>
	<li>Untuk melihat daftar Administrator, silahkan mengklik pada menu <b>"Daftar User / Pengguna"</b>.<br><br>
	<li>Untuk menambah jumlah Administrator, silahkan mengklik pada menu <b>"Tambah Pengguna"</b>.<br><br>

	<li>Untuk melihat pesan pada kotak masuk, silahkan mengklik pada menu <b>"Hubungi Kami"</b>.<br>
	<br>
		<li>Untuk keluar dari halaman Administrator, silahkan mengklik pada menu <b>"Log Out"</b>.<br><br><br>
	</li><br>
	</ul>
	</div>
  </div>
</div>
<div class="cleaner_h60"></div>
<div class="cleaner_h50"></div>
<div id="footermainPan">
  <div id="footerPan">
   Beranda | Pendaftaran Siswa Baru | Calon Siswa Terdaftar | Calon Siswa Diterima | Tentang Kami | Grafik Pendaftaran | Hubungi Kami
  <br />
  CopyLeft Pendaftaran Siswa Baru - MADRASAH TSANAWIYAH AL-HUDA GORONTALO- 2013
  </div>
</div>
</body>
</html>
<?php
}
?>