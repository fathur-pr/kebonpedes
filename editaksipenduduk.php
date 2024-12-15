<?php
include "config.php"; //yang mengkoneksikan dengan database
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

if (isset($_POST['simpan'])) {
	// untuk menginputkan field-field ke database dengan menggunakan methode POST
	$id = 	$_POST['id'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$rw = $_POST['rw'];
	$kelurahan = $_POST['kelurahan'];
	$agama = $_POST['agama'];
	$status_kawin = $_POST['status_kawin'];
	$kewarganegaraan = $_POST['kewarganegaraan'];

	$update = "UPDATE data_penduduk SET 
					nik = '$nik',
					nama = '$nama',
					jenis_kelamin = '$jenis_kelamin',
					tempat_lahir = '$tempat_lahir',
					tanggal_lahir = '$tanggal_lahir',
					alamat = '$alamat',
					rw = '$rw',
					kelurahan = '$kelurahan',
					agama = '$agama',
					status_kawin = '$status_kawin',
					kewarganegaraan = '$kewarganegaraan'
				WHERE id = '$id'";
	
	$q_update = mysql_query($update)or die (mysql_error());
	if ($q_update){
		?><script language="javascript">
			alert('Data Berhasil di ubah');
			document.location.href="?pages=lihatdatapenduduk";
		  </script>
		<?php
	}
	else{
	?>
		<script language="javascript">
			alert('Data gagal di ubah');
			document.location.href="?pages=tambahpenduduk";
		</script>
	<?php
	}
}

?>
