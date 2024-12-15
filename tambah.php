<ul class="breadcrumb">
	<li>
		<a href="index.php">Home</a>
	</li>
	<li>
		<a href="?pages=tambahdata">Tambah</a>
	</li>
</ul>
<h2 align="center">Selamat Datang Pelayanan Umum online</h2>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		<div class="panel-heading">
			<b>Tambah Data</b>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-9">
					<form action="tambahaksi.php" method="POST"
					onsubmit="return tambah_input(this)">
						<div class="form-group">
							<label>No kk</label>
							<input type="text" class="form-control" name="no_kk">
						</div>

						
						<div class="form-group">
							<label>nik</label>
							<input type="text" class="form-control" name="nik">
						</div>
						
						<div class="form-group">
							<label>nama</label>
							<input type="text" class="form-control" name="nama">
						</div>
						
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" name="tanggal_lahir">
						</div>
						
							<div class="form-group">
							<label>alamat</label>
							<input type="text" class="form-control" name="alamat">
						</div>
						

						<div>
							<input type="submit" name="simpan" class="btn btn-primary"
							value="Lanjut">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- 
<?php
include "config.php";
error_reporting(0);
if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tanggal_lahir = $_POST['tanggallahir'];

	$query = mysql_query("insert into mahasiswa values('', '$nama', '$email', '$tanggal_lahir')");
	var_dump($query);die();
	if($query){
		?>
		<script language="javascript">
		alert('Data berhasil disimpa');
		document.location.href="?pages=soal";
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
}
?> -->