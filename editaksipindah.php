<?php
include "config.php"; //yang mengkoneksikan dengan database
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

if (isset($_POST['simpan'])) {
	// untuk menginputkan field-field ke database dengan menggunakan methode POST
$id     = $_POST['id'];
$nik     = $_POST['nik'];
$nama     = $_POST['nama'];
$jenis_kelamin    = $_POST['jenis_kelamin'];
$alamat_asal     = $_POST['alamat_asal'];
$alamat_tujuan     = $_POST['alamat_tujuan'];
$rw     = $_POST['rw'];
$kabupaten_kota     = $_POST['kabupaten_kota'];
$alasan_pindah     = $_POST['alasan_pindah'];
$jenis_kepindahan     = $_POST['jenis_kepindahan'];
	
	$update = "UPDATE data_pindah SET 
					nik = '$nik',
					nama = '$nama',
					jenis_kelamin = '$jenis_kelamin',
					alamat_asal = '$alamat_asal',
					alamat_tujuan = '$alamat_tujuan',
					rw = '$rw',
					kabupaten_kota = '$kabupaten_kota',
					alasan_pindah = '$alasan_pindah',
					jenis_kepindahan = '$jenis_kepindahan'
				WHERE id = '$id'";
	
	$q_update = mysql_query($update)or die (mysql_error());
	if ($q_update){
		?><script language="javascript">
			alert('Data Berhasil di ubah');
			document.location.href="?pages=lihatdatapindah";
		  </script>
		<?php
	}
	else{
	?>
		<script language="javascript">
			alert('Data gagal di ubah');
			document.location.href="?pages=tambahdatapindah";
		</script>
	<?php
	}
}

?>
