 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kelurahan Kebon Pedes</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="height: 100%; background-color: yellow;">
	<div id="container">
		<nav class="navbar navbar-default" style="background-color: black;">
			<div class="container">
				<div class="navbar-header">
					
				</div>
				<ul><b class="nav navbar-nav" style="background-color:">
					<li><a href="?pages=index"><span class="glyphicon glyphicon-home"></span> Home </a></li>
					<li><a href="?pages=lihatdatapenduduk"><span class="glyphicon glyphicon-edit"></span> Data Penduduk </a></li>
					<li><a href="?pages=lihatdatapindah"><span class="glyphicon glyphicon-edit"></span> Data Penduduk Pindah </a></li>
					<li><a href="?pages=lihatdatadatang"><span class="glyphicon glyphicon-edit"></span> Data Penduduk Datang </a></li>
					<li><a href="laporan.php"><span class="glyphicon glyphicon-print"></span> Laporan </a></li>
				</ul></b>
				<ul><b class="nav navbar-nav navbar-right">
					<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
				</ul></b>
			</div>
		</nav>
		<div class="container">
			<?php 
					if (isset($_GET['pages'])) {
						$page = $_GET['pages'];
					}
					else{
						$page = "index";
					}

					switch ($page){

							case 'print';
							include"print.php";
							break;

							case 'logout';
							include"logout.php";
							break;


							case 'tambahpenduduk';
							include"tambahpenduduk.php";
							break;

							case 'tambahpindah';
							include"tambahpindah.php";
							break;

							case 'tambahdatang';
							include"tambahdatang.php";
							break;

						case 'lihatdatapenduduk';
							include"lihatdatapenduduk.php";
							break;

						case 'lihatdatapindah';
							include"lihatdatapindah.php";
							break;

						case 'lihatdatadatang';
							include"lihatdatadatang.php";
							break;
							
						case 'editpenduduk';
							include"editpenduduk.php";
							break;

							case 'editaksipenduduk';
							include"editaksipenduduk.php";
							break;

							case 'editpindah';
							include"editpindah.php";
							break;

							case 'editaksipindah';
							include"editaksipindah.php";
							break;

							case 'editdatang';
							include"editdatang.php";
							break;

							case 'editaksidatang';
							include"editaksidatang.php";
							break;
							
						case 'tambahaksipenduduk';
							include"tambahaksipenduduk.php";
							break;
							
							case 'tambahaksipindah';
							include"tambahaksipindah.php";
							break;

							case 'tambahaksidatang';
							include"tambahaksidatang.php";
							break;

						case 'deletedata';
							include"deletedata.php";
							break;

							case 'deletedatapindah';
							include"deletedatapindah.php";
							break;

							case 'deletedatadatang';
							include"deletedatadatang.php";
							break;

						case 'login':
							include "login_admin/login.php" ;
							break;
						
						
						default:
							include "home.php";
							break;

					}
				 ?>
		</div>
		
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>