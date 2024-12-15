<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kelurahan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="height: 100%; background-color: transparent;">
	<div id="container">
		<nav class="navbar navbar-default" style="background-color: skyblue;">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"></a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="login_admin/index.php" >tambah user</a></li>
					
					<li><a href="?pages=lihatdata">Lihat Data</a></li> 
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="?pages=logout"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
				</ul>
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
							include"login_admin/print.php";
							break;

							case 'jawab';
							include"soal/jawab.php";
							break;


						case 'tambah';
							include"tambah.php";
							break;

						case 'lihatdata';
							include"lihat.php";
							break;
							
						case 'editdata';
							include"editdata.php";
							break;
							
						case 'tambahaksi';
							include"tambahaksi.php";
							break;
							
						case 'deletedata';
							include"deletedata.php";
							break;

						case 'login':
							include "login_admin/login.php" ;
							break;
						case 'logout':
							include "login_admin/logout.php" ;
							break;
						
						default:
							include "home.php";
							break;

					}
				 ?>
		</div>
	<!-- <nav class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: skyblue">
			<div class="container">
				<p class="col-md-10 col-sm-10 col-xs-12 copyright" style="padding-top: 15px;">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012 - 2014</p>

	        <p class="col-md-2 col-sm-2 col-xs-12 powered-by" style="padding-top: 15px;">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
			</div>
		</nav> -->	
		
	</div>
	
		<!-- <footer class="row" style="position: relative;">
	        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012 - 2014</p>

	        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    	</footer> -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>