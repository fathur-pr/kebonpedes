<link href="css/bootstrap.css" rel="stylesheet">

<script type="text/javascript" async="" src="script.js"></script>
<!--  <body>
<section class="container">
 <form name="formcari" method="post" action="search.php">
 <input type="search" class="light-table-filter" data-table="order-table" placeholder="NIK" name="search" id="search" value="">
 </form> -->

 <form action="?pages=lihatdatadatang&Search=data" method="POST">
 	<label>Cari :</label>
 	<input type="text" name="cari">
 	<input type="submit" value="Cari" name="Search" id="Search">
 </form>

 <!-- <?php
 if($_GET['Search']=='data'){
 	$cari = $_POST['cari'];
 	echo "<b>Hasil Pencarian : ".$cari."</b>";
 	} ?> -->
<h2 align="center">Form Data Penduduk Datang Kelurahan Kebon Pedes</h2>
<div class="row">
	<div class="col-md-12">



		<div class="panel panel-default">
			<div class="panel-body">
				<h4>Daftar Data Datang Penduduk</h4>

<div class="table-toolbar"
                                                                      >
                                            <a href="?pages=tambahdatang" data-toggle="modal" class="config">
                                                <button class="btn green">
                                                    Tambah <i class="icon-plus"></i>
                                                </button>
                                            </a>
                                             <a href="exportdatang.php" >
                                                <button class="btn green">
                                                    Cetak Laporan <i class="icon-plus"></i>
                                                </button>
                                            </a>

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>NIK</th>
							<th>No. Surat Ket Pindah</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Alamat Asal</th>
							<th>Tanggal Kepindahan</th>
							<th>Alamat Tujuan</th>
							<th>Rw</th>
							<th>Kelurahan</th>
							<th>Jenis Kepindahan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include "config.php";
							  $halaman = 5; // data per halaman

							  // sekarang halaman ke berapa
							  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1; 
							  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
							  
							  // mencari jumlah halaman
							  $result = mysql_query("SELECT * FROM data_datang");
							  $total = mysql_num_rows($result);
							  $pages = ceil($total/$halaman);            


							  //$query = mysql_query("select * from data_kematian LIMIT $mulai, $halaman")or die(mysql_error);
							  $no =$mulai+1;
							if(isset($_GET['Search'])){
								$cari = $_POST['cari'];
								$data = mysql_query("select * from data_datang where 
									nik like '%".$cari."%' or
									no_surat_ket_pindah like '%".$cari."%' or
									nama like '%".$cari."%' or
									jenis_kelamin like '%".$cari."%' or
									alamat_asal like '%".$cari."%' or
									tanggal_kepindahan like '%".$cari."%' or
									alamat_tujuan like '%".$cari."%' or
									rw like '%".$cari."%' or
									kelurahan like '%".$cari."%' or
									jenis_kepindahan like '%".$cari."%'

									LIMIT $mulai, $halaman"); 
							}
							else {
								$data = mysql_query("select * from data_datang LIMIT $mulai, $halaman");
							}

							// $data = "SELECT * FROM data_penduduk";
							// $q_select = mysql_query($data) or die (mysql_error());
							// $row = mysql_num_rows($q_select);
							$no = 1;

							while ($d= mysql_fetch_array($data)){ ?>
							<tr>
								<td><?php echo $no++; ?></td>
								
								<td><?php echo $d['nik'];?></td>
								<td><?php echo $d['no_surat_ket_pindah'];?></td>
								<td><?php echo $d['nama'];?></td>
								<td><?php echo $d['jenis_kelamin'];?></td>
								<td><?php echo $d['alamat_asal'];?></td>
								<td><?php echo $d['tanggal_kepindahan'];?></td>
								<td><?php echo $d['alamat_tujuan'];?></td>
								<td><?php echo $d['rw'];?></td>
								<td><?php echo $d['kelurahan'];?></td>
								<td><?php echo $d['jenis_kepindahan'];?></td>
								<td>
										<a href='?pages=deletedatadatang&id=<?php echo $d['id']; ?>' onclick='return konfirmasi()'
										class='center btn btn-gradient btn-danger'>
										Delete</a>
										<a href='?pages=editdatang&id=<?php echo $d['id']; ?>'
										class='center btn btn-gradient btn-info'>
										Edit</a>
										</td>

								<?php } ?>
								<div class="">
								  <?php for ($i=1; $i<=$pages ; $i++){ ?>
								  <a href="?pages=lihatdatadatang&amp;halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
								 
								  <?php } ?>
								</div>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="row" style="position: relative;">
	        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; Muhamad Fathurohman 2018</p>
    	</footer>	
								<!-- echo "<tr>";
								echo "<td align=center>$no</td>
							
								<td>$nik</td>
										<td>$no_surat_ket_pindah</td>
										<td>$nama</td>
										<td>$alamat_asal</td>
										<td>$tanggal_kepindahan</td>
										<td>$alamat_tujuan</td>
										<td>$kecamatan</td>
										<td>$kelurahan</td>
										<td>$jenis_kepindahan</td>
										<td>$kode_pos</td>
										<td>$telp</td>
										<td>  -->