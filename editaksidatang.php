<?php
include "config.php"; //yang mengkoneksikan dengan database
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

if (isset($_POST['simpan'])) {
	// untuk menginputkan field-field ke database dengan menggunakan methode POST
$id     = $_POST['id'];
$nik     = $_POST['nik'];
$no_surat_ket_pindah     = $_POST['no_surat_ket_pindah'];
$nama     = $_POST['nama'];
$jenis_kelamin   = $_POST['jenis_kelamin'];
$alamat_asal   = $_POST['alamat_asal'];
$tanggal_kepindahan   = $_POST['tanggal_kepindahan'];
$alamat_tujuan   = $_POST['alamat_tujuan'];
$rw	= $_POST['rw'];
$kelurahan	= $_POST['kelurahan'];
$jenis_kepindahan   = $_POST['jenis_kepindahan'];

	
	$update = "UPDATE data_datang SET 
					nik = '$nik',
					no_surat_ket_pindah = '$no_surat_ket_pindah',
					nama = '$nama',
					jenis_kelamin = '$jenis_kelamin',
					alamat_asal = '$alamat_asal',
					tanggal_kepindahan = '$tanggal_kepindahan',
					alamat_tujuan ='$alamat_tujuan',
					rw ='$rw',
					kelurahan ='$kelurahan',
					jenis_kepindahan = '$jenis_kepindahan'
				WHERE id = '$id'";
	
	$q_update = mysql_query($update)or die (mysql_error());
	if ($q_update){
		?><script language="javascript">
			alert('Data Berhasil di ubah');
			document.location.href="?pages=lihatdatadatang";
		  </script>
		<?php
	}
	else{
	?>
		<script language="javascript">
			alert('Data gagal di ubah');
			document.location.href="?pages=tambahdatadatang";
		</script>
	<?php
	}
}

?>
