<link href="css/bootstrap.css" rel="stylesheet">

<script type="text/javascript" async="" src="script.js"></script>
<!--  <body>
<section class="container">
 <form name="formcari" method="post" action="search.php">
 <input type="search" class="light-table-filter" data-table="order-table" placeholder="NIK" name="search" id="search" value="">
 </form> -->

 <form action="?pages=lihatdatapenduduk&Search=data" method="POST">
 	<label>Cari :</label>
 	<input type="text" name="cari">
 	<input type="submit" value="Cari" name="Search" id="Search">
 </form>

 <!-- <?php
 if($_GET['Search']=='data'){
 	$cari = $_POST['cari'];
 	echo "<b>Hasil Pencarian : ".$cari."</b>";
 	} ?> -->
<h2 align="center">Form Data Penduduk Kelurahan Kebon Pedes</h2>
<div class="row">
	<div class="col-md-12">


		<div class="panel panel-default">
			<div class="panel-body">
				<h4>Daftar Data Penduduk</h4>

				<div class="table-toolbar"
                                                                      >
                                            <a href="?pages=tambahpenduduk" data-toggle="modal" class="config">
                                                <button class="btn green">
                                                    Tambah <i class="icon-plus"></i>
                                                </button>
                                            </a>
                                            <a href="exportpenduduk.php" >
                                                <button class="btn green">
                                                    Cetak Laporan <i class="icon-plus"></i>
                                                </button>
                                            </a>


				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>Rw</th>
							<th>Kelurahan</th>
							<th>Agama</th>
							<th>Status_Kawin</th>
							<th>Kewarganegaraan</th>
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
							  $result = mysql_query("SELECT * FROM data_penduduk");
							  $total = mysql_num_rows($result);
							  $pages = ceil($total/$halaman);            


							  //$query = mysql_query("select * from data_kematian LIMIT $mulai, $halaman")or die(mysql_error);
							  $no =$mulai+1;
							if(isset($_GET['Search'])){
								$cari = $_POST['cari'];
								$data = mysql_query("select * from data_penduduk where 
									nik like '%".$cari."%' or
									nama like '%".$cari."%' or
									jenis_kelamin like '%".$cari."%' or
									tempat_lahir like '%".$cari."%' or
									tanggal_lahir like '%".$cari."%' or
									alamat like '%".$cari."%' or
									rw like '%".$cari."%' or
									kelurahan like '%".$cari."%' or
									agama like '%".$cari."%' or
									status_kawin like '%".$cari."%' or
									kewarganegaraan like '%".$cari."%' 

									LIMIT $mulai, $halaman"); 
							}
							else {
								$data = mysql_query("select * from data_penduduk LIMIT $mulai, $halaman");
							}

							// $data = "SELECT * FROM data_penduduk";
							// $q_select = mysql_query($data) or die (mysql_error());
							// $row = mysql_num_rows($q_select);
							$no = 1;

							while ($d= mysql_fetch_array($data)){ ?>
							<tr>
								<td><?php echo $no++; ?></td>
								
								<td><?php echo $d['nik'];?></td>
								<td><?php echo $d['nama'];?></td>
								<td><?php echo $d['jenis_kelamin'];?></td>
								<td><?php echo $d['tempat_lahir'];?></td>
								<td><?php echo $d['tanggal_lahir'];?></td>
								<td><?php echo $d['alamat'];?></td>
								<td><?php echo $d['rw'];?></td>
								<td><?php echo $d['kelurahan'];?></td>
								<td><?php echo $d['agama'];?></td>
								<td><?php echo $d['status_kawin'];?></td>
								<td><?php echo $d['kewarganegaraan'];?></td>
								<td>
										<a href='?pages=deletedata&id=<?php echo $d['id']; ?>' onclick='return konfirmasi()'
										class='center btn btn-gradient btn-danger'>
										Delete</a>
										<a href='?pages=editpenduduk&id=<?php echo $d['id']; ?>'
										class='center btn btn-gradient btn-info'>
										Edit</a>
										</td>
									<?php } ?>	


								<div class="">
								  <?php for ($i=1; $i<=$pages ; $i++){ ?>
								  <a href="?pages=lihatdatapenduduk&amp;halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
								 
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
										<td>$nama</td>
										<td>$tempat_lahir</td>
										<td>$tanggal_lahir</td>
										<td>$jenis_kelamin</td>
										<td>$alamat</td>
										<td>$kelurahan</td>
										<td>$agama</td>
										<td>$pendidikan</td>
										<td>$status_perkawinan</td>
										<td>$kewarganegaraan</td>
										
					</tbody>
					
					<tr></tr>
				</table>
			</div>
		</div>
	</div>
</div> -->