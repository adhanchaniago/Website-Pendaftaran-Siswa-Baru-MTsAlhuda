<h2>Dafta Calon Siswa Baru Yang Lolos Seleski Berdasarkan Nilai UN</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Nama-Nama Calon Siswa Diterima dan Ditolak</legend>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>Calon Siswa</td><td>Asal Sekolah</td><td>Nilai UN</td></tr>
<?php
include('koneksi.php');
$q = mysql_query("select * from tbl_siswa order by nun DESC");
$n = 1;
while($r = mysql_fetch_array($q))
{
	if($r['nun']>55){ $warna="#c9edc1"; } else {$warna="#ff6d55";}
	echo '<tr bgcolor="'.$warna.'"><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["sekolah"].'</td><td>'.$r["nun"].'</td></tr>';
	$n++;
}
?>
</table>
</fieldset>
<fieldset>
<legend>CATATAN!</legend>
	<p>Penentuan hasil penerimaan siswa baru MTS AL-HUDA yakni berdasarkan standar nilai hasil Ujian Nasional yang ditetapkan oleh Pihak sekolah. Bagi calon siswa baru tidak memenuhi standar nilai lolos seleksi, dapat mengikuti tes seleksi masuk tertulis. Informasi tanggal dan waktu pelaksanaan ujian seleksi masuk tertulis akan diumumkan melalui website ini</p></fieldset>