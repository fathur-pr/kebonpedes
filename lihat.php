<ul class="breadcrumb">
	<li>
		<a href="index.php"></a>
	</li>
	<li>
		<a href="?pages=lihatdata">Lihat Data</a>
	</li>
</ul>
<h2 align="center">Selamat Datang Diaplikasi Buku tamu</h2>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<h4>Daftar Tamu Hadir</h4>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>No KK KK</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>Tanggal Lahir</th>
							<th>alamat</th>
							<th>keterangan</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							include "config.php";
							$select = "SELECT * FROM penduduk_daftar";
							$q_select = mysql_query($select) or die (mysql_error());
							$row = mysql_num_rows($q_select);
							$no = 1;

							while ($rows= mysql_fetch_array($q_select)){
								$id     = $rows['id'];
								$no_kk     = $rows['no_kk'];
								$nik     = $rows['nik'];
								$nama   = $rows['nama'];
								$tanggal_lahir	= $rows['tanggal_lahir'];
								$alamat  = $rows['alamat'];
								$keterangan  = $rows['keterangan'];

								echo "<tr>";
								echo "<td align=center>$no</td>
								<td>$no_kk</td>
								<td>$nik</td>
										<td>$nama</td>
										<td>$tanggal_lahir</td>
										<td>$alamat</td>
										<td>$keterangan</td>
										<td>
											
										<a href='?pages=deletedata&id=$id' onclick='return konfirmasi()'
										class='center btn btn-gradient btn-danger'>
										Delete</a>
										<a href='?pages=editdata&id=$id' target='_blank'
										class='center btn btn-gradient btn-info'>
										Edit</a>
										<a href='?pages=print&id=$id' target='_blank'
										class='center btn btn-gradient btn-yellow'>
										Print</a>
										</td>";



									
									echo "</tr>";

										$no++;
									}
									?>
					</tbody>
					
					<tr></tr>
				</table>
			</div>
		</div>
	</div>
</div>