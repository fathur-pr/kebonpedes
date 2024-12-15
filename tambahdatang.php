<h2 align="center">Tambah Data Datang Penduduk Kelurahan Kebon Pedes</h2>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		<div class="panel-heading">
			<b>Tambah Data</b>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-9">
					<form action="tambahaksidatang.php" method="POST"
					onsubmit="return tambah_input(this)">
						
						

						<div class="form-group">
							<label>NIK</label>
							<input type="text" class="form-control" name="nik">
						</div>

						<div class="form-group">
							<label>No. Surat Ket Pindah</label>
							<input type="text" class="form-control" name="no_surat_ket_pindah">
						</div>
						
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama">
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
							<input type="text" class="form-control" name="alamat_asal">
						</div>

						<div class="form-group">
							<label>Tanggal Kepindahan</label>
							<input type="date" class="form-control" name="tanggal_kepindahan">
						</div>

						<div class="form-group">
							<label>Alamat Tujuan</label>
							<input type="text" class="form-control" name="alamat_tujuan">
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
						<label class="control-label">Kelurahan  :  </label>
						<select name="kelurahan"	 class="form-control">
			    	    <option value="Kebon Pedes">Kebon Pedes</option>
			    		</div>
			    		</select>

						

										
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



					<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" class="form-control" name="tempat_lahir">
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" name="tanggal_lahir">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control" name="alamat">
						</div>

						<div class="form-group">
       				<label class="control-label">Agama : </label>
       				<select name="agama"	 class="form-control">
			        <option value="">---Pilih---</option>
        			<option value="Islam">Islam </option>
        			<option value="Protestan">Protestan </option>
        			<option value="Katolik">Katolik</option>
        			<option value="Hindu">Hindu</option>
        			<option value="Budha">Budha</option>
        			<option value="Konghuchu">Konghuchu</option>
        			<option value="Lain-Lain">Lain-Lain</option>
        			</select>
					</div>

					

				      <div class="form-group">
       				<label class="control-label"> Status Kawin : </label>
       				<select name="status_kawin" class="form-control">
			        <option value="">---Pilih---</option>
        			<option value="Kawin"> Kawin </option>
        			<option value="Belum Kawin"> Belum Kawin </option>
        			<option value="Cerai Mati"> Cerai Mati </option>
        			</select>
					</div>

					<div class="form-group">
       				<label class="control-label"> Kewarganegaraan : </label>
       				<select name="kewarganegaraan" class="form-control">
			        <option value="">---Pilih---</option>
        			<option value="WNI"> WNI </option>
        			<option value="WNA"> WNA </option>
					</select>
					</div>

						<div>
							<input type="submit" name="simpan" class="btn btn-primary"
							value="Simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>