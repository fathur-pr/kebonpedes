
<?php
include "config.php";
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
if(isset($_POST['simpan'])){
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

$insert ="insert into data_pindah values('', '$nik','$nama','$jenis_kelamin','$alamat_asal','$alamat_tujuan','$rw','$kabupaten_kota','$alasan_pindah','$jenis_kepindahan')";
$delete = "delete from data_penduduk where nik = '$nik'";
	/*var_dump($query);die();
	if($query){
		?>
		<script language="javascript">
		alert('Data berhasil disimpan');
		document.location.href="?pages=lihatdata";
		</script>
		<?php

}else{
	?>
	<script language="javascript">
	alert('Simpan data GAGAL!');
	document.location.href="?pages=tambahdata";
	</script>
	<?php
}
}*/
	$insertv= mysql_query($insert) or die (mysql_error());
	$deletev= mysql_query($delete) or die (mysql_error());
	if ($insertv AND $deletev){
		?> <script type="text/javascript" language="javascript">
			alert('Data telah disimpan');
			document.location.href="index1.php?pages=lihatdatapindah";
		</script>
	<?php
	} else{
		?> <script type="text/javascript" lang="javascript">
			alert('Data gagal disimpan');
			document.location.href="index1.php?pages=tambahpindah";
		</script>
	<?php
	}
}
?>
