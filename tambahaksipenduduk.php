
<?php
include "config.php";
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
if(isset($_POST['simpan'])){
$id     = $_POST['id'];
$nik     = $_POST['nik'];
$nama     = $_POST['nama'];
$jenis_kelamin     = $_POST['jenis_kelamin'];
$tempat_lahir     = $_POST['tempat_lahir'];
$tanggal_lahir     = $_POST['tanggal_lahir'];
$alamat     = $_POST['alamat'];
$rw   = $_POST['rw'];
$kelurahan     = $_POST['kelurahan'];
$agama     = $_POST['agama'];
$status_kawin     = $_POST['status_kawin'];
$kewarganegaraan     = $_POST['kewarganegaraan'];

$insert ="insert into data_penduduk values('', '$nik','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$rw','$kelurahan','$agama','$status_kawin','$kewarganegaraan')";
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
	if ($insertv){
		?> <script type="text/javascript" language="javascript">
			alert('Data telah disimpan');
			document.location.href="index1.php?pages=lihatdatapenduduk";
		</script>
	<?php
	} else{
		?> <script type="text/javascript" lang="javascript">
			alert('Data gagal disimpan');
			document.location.href="index1.php?pages=tambahpenduduk";
		</script>
	<?php
	}
}
?>
