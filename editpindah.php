<?php
  include "config.php";
    $id = $_GET ['id'];
    $sql  = "SELECT * FROM data_pindah WHERE id='$id'";
    $q_select = mysql_query($sql) or die(mysql_error());
    $rows= mysql_fetch_array($q_select);
?>

<h2 align="center">Edit Data Pindah Penduduk Kelurahan Kebon Pedes</h2>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>Edit Data</b>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-9">
						<form action="?pages=editaksipindah" method="POST" onsubmit="return validasi_input(this)">
							<div class="form-group">
								<label></label>
								<input type="hidden" value="<?php echo $rows['id']; ?>" class="form-control" name="id">
							</div>

							<div class="form-group">
								<label>NIK</label>
								<input type="text" value="<?php echo $rows['nik']; ?>" class="form-control" name="nik">
							</div>

							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" value="<?php echo $rows['nama']; ?>">
							</div>

								<div class="form-group">
       				<label class="control-label">Jenis Kelamin : </label>
       				<select name="jenis_kelamin"	 class="form-control">
			        <option value="">---Pilih---</option>
        			<option value="Laki-Laki">Laki-Laki</option>
        			<option value="Perempuan">Perempuan</option>
					</select>
					</div>

							<div class="form-group">
								<label>Alamat Asal</label>
								<input type="text" class="form-control" name="alamat_asal" value="<?php echo $rows['alamat_asal']; ?>">
							</div>

							<div class="form-group">
       				<label class="control-label">Rw : </label>
       				<select name="rw"	 class="form-control">
			        <option value="">---Pilih---</option>
        			<option value="Rw 1">Rw 1</option>
        			<option value="Rw 2">Rw 2</option>
        			<option value="Rw 3">Rw 3</option>
        			<option value="Rw 4">Rw 4</option>
        			<option value="Rw 5">Rw 5</option>
        			<option value="Rw 6">Rw 6</option>
        			<option value="Rw 7">Rw 7</option>
        			<option value="Rw 8">Rw 8</option>
        			<option value="Rw 9">Rw 9</option>
        			<option value="Rw 10">Rw 10</option>
        			<option value="Rw 11">Rw 11</option>
        			<option value="Rw 12">Rw 12</option>
        			<option value="Rw 13">Rw 13</option>
        			</select>
					</div>

							
					<div class="form-group">
								<label>Alamat Tujuan</label>
								<input type="text" class="form-control" name="alamat_tujuan" value="<?php echo $rows['alamat_tujuan']; ?>">
							</div>

							

							<div class="form-group">
								<label>Kabupaten/Kota</label>
								<input type="text" class="form-control" name="kabupaten_kota" value="<?php echo $rows['kabupaten_kota']; ?>">
							</div>

							<div class="form-group">
       				<label class="control-label">Alasan Pindah : </label>
       				<select name="alasan_pindah" class="form-control">
			        <option value="">---Pilih---</option>
        			<option value="Pekerjaan">Pekerjaan</option>
        			<option value="Pendidikan">Pendidikan</option>
        			<option value="Keamanan">Keamanan</option>
        			<option value="Kesehatan">Kesehatan</option>
        			<option value="Perumahan">Perumahan</option>
        			<option value="Keluarga">Keluarga</option>
        			<option value="Lain-Lain">Lain-Lain</option>
        			</select>
					</div>

				      <div class="form-group">
       				<label class="control-label">Jenis Kepindahan : </label>
       				<select name="jenis_kepindahan" class="form-control">
			        <option value="">---Pilih---</option>
        			<option value="Kep. Keluarga">Kep. Keluarga</option>
        			<option value="Kep. Kel Dan Seluruh Anggota Keluarga">Kep. Kel Dan Seluruh Anggota Keluarga</option>
        			<option value="Kep. Kel Dan Sebagian Anggota Keluarga">Kep. Kel Dan Sebagian Anggota Keluarga</option>
        			<option value="Anggota Keluarga">Anggota Keluarga</option>
        			</select>
					</div>

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