<script type="text/javascript">
	$(document).ready(function() {
		$(".delbutton").click(function(){
		 var element = $(this);
		 var del_id = element.attr("id");
		 var info = 'id=' + del_id;
		 if(confirm("Anda yakin akan menghapus?"))
		 {
			 $.ajax({
			 type: "POST",
			 url : "hapuspetugas.php",
			 data: info,
			 success: function(){
			 }
			 });	
		 $(this).parents(".content").animate({ opacity: "hide" }, "slow");
 			}
		 return false;
		 });
	})
	</script>
<link href="../thickbox.css" rel="stylesheet" type="text/css" />
<script src="../js/thickbox.js" type="text/javascript"></script>
<h2>Daftar Petugas / User Pendaftaran Online</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Daftar Nama-Nama Petugas / User Pendaftaran Online</legend>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>Nama Pengguna</td><td>Username</td><td>Status</td><td colspan="2"></tr>
<?php
include('../koneksi.php');
$q = mysql_query("select * from tbl_user");
$n = 1;
while($r = mysql_fetch_array($q))
{
	echo '<tr class="content"><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["username"].'</td><td>Administrator
';
	$n++;
}
?>
</table>
</fieldset>
	