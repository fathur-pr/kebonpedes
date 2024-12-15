<?php
include "config.php"; //yang mengkoneksikan dengan database
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

if (isset($_POST['simpan'])) {
	// untuk menginputkan field-field ke database dengan menggunakan methode POST
	$id = 	$_POST['id'];
	$no_kk = $_POST['no_kk'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];

	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$keterangan = $_POST['keterangan'];
	$update = "UPDATE penduduk_daftar SET
					no_kk = '$no_kk',
					nik = '$nik', 
					nama = '$nama',
					
					tanggal_lahir = '$tanggal_lahir',
					alamat = '$alamat',
					keterangan = '$keterangan',
				WHERE id = '$id'";
	
	$q_update = mysql_query($update)or die (mysql_error());
	if ($q_update){
		?><script language="javascript">
			alert('Data Berhasil di ubah');
			document.location.href="?pages=login_admin/lihatdata";
		  </script>
		<?php
	}
	else{
	?>
		<script language="javascript">
			alert('Data gagal di ubah');
			document.location.href="?pages=tambahdata";
		</script>
	<?php
	}
}

?>
