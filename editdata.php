<?php
  include "config.php";
    $id = $_GET ['id'];
    $sql  = "SELECT * FROM penduduk_daftar WHERE id='$id'";
    $q_select = mysql_query($sql) or die(mysql_error());
    $rows= mysql_fetch_array($q_select);
?>

<ul class="breadcrumb">
    <li>
        <a href="login_admin/index.php">Home</a>
    </li>
    <li>
    	<a href="?pages=login_admin/tambahdata">Tambah</a>
    </li>
</ul>
<h2 align="center">Selamat Datang Admin</h2>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>Edit Data</b>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-9">
						<form action="?pages=editaksi" method="POST" onsubmit="return editaksi_input(this)">
							<div class="form-group">
								<label></label>
								<input type="hidden" value="<?php echo $rows['id']; ?>" class="form-control" name="id">
							</div>
							<div class="form-group">
								<label>NO KK</label>
								<input type="text" value="<?php echo $rows['nik']; ?>" class="form-control" name="no_kk">
								<label>Nik</label>
								<input type="text" value="<?php echo $rows['nik']; ?>" class="form-control" name="nik">

								<label>Nama</label>
								<input type="text" value="<?php echo $rows['nama']; ?>" class="form-control" name="nama">
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $rows['tanggal_lahir']; ?>">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" value="<?php echo $rows['alamat']; ?>">
							</div>
							<label>keterangan</label>
								<input type="text" value="<?php echo $rows['keterangan']; ?>" class="form-control" name="keterangan">
							<div>
								<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>