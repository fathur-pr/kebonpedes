
<?php
include "config.php";
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
if(isset($_POST['simpan'])){
	$no_kk = $_POST['no_kk'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];

	$insert ="insert into penduduk_daftar values('', '$no_kk', '$nik', '$nama','$tanggal_lahir','$alamat','')";
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
			alert('berhasil');
			document.location.href="index.php?pages=lihatdata"
		</script>
	<?php
	} else{
		?> <script type="text/javascript" lang="javascript">
			alert('Data gagal disimpan');
			document.location.href="index.php?pages=tambahdata";
		</script>
	<?php
	}
}
?>
