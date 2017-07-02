<style>
a{
text-decoration:none;
}
</style>
<div id="rightPan">
<h2>Laporan Data Calon Siswa Baru</h2>
<div class="cleaner_h10"></div>


<a href="export-data.php"><div style="background-color:#B3D577; padding:7px; border:1px solid #666666; text-align:center; color:#000; font-weight:bold;">Unduh  Laporan Data Calon Siswa Terdaftar</div></a>


<fieldset>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>Calon Siswa</td><td>Alamat</td><td>NUN</td><td>Tanggal Lahir</td></tr>
<?php
include('../koneksi.php');
$q = mysql_query("select * from tbl_siswa order by nun DESC");
$n = 1;
while($r = mysql_fetch_array($q))
{
	if($r['nun']>70){ $warna="#eee59c"; } else {$warna="#eee59c";}
	echo '<tr bgcolor="'.$warna.'" class="content"><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["sekolah"].'</td><td>'.$r["nun"].'</td>
	<td>'.$r["tgl_lahir"].'</td> 
	</tr>';
	$n++;
}
?>
</table>
</fieldset>



<a href="export-datalulus.php"><div style="background-color:#B3D577; padding:7px; border:1px solid #666666; text-align:center; color:#000; font-weight:bold;">Unduh Laporan Data Calon Siswa Diterima</div></a>




<fieldset>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>Calon Siswa</td><td>Alamat</td><td>NUN</td><td>Tanggal Lahir</td></tr>
<?php
include('../koneksi.php');
$q = mysql_query("select * from tbl_siswa where nun>70 order by nun DESC");
$n = 1;
while($r = mysql_fetch_array($q))
{
	if($r['nun']>70){ $warna="#B3D577"; } else {$warna="#eee59c";}
	echo '<tr bgcolor="'.$warna.'" class="content"><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["sekolah"].'</td><td>'.$r["nun"].'</td>
	<td>'.$r["tgl_lahir"].'</td> 
	</tr>';
	$n++;
}
?>
</table>
</fieldset>
</div>
	