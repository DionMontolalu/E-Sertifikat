<?php  
session_start();  
  
if(!$_SESSION['username']) {    
 header("Location: http://localhost/sertifikat/Admin.asp");//redirect to login page to secure the welcome page without login access.  
}   
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>AdminPanel UNIMA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="UNIMA, Universitas Negeri Manado, Lembaga Pemberdayaan Masyarakat" />
<meta name="author" content="Manguni Open Source Community" />
<script type="text/javascript">
	var s5_taf_parent = window.location;
		function popup_nilai(nim){
			window.open("nilai.php?nim="+nim,"page","toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes")
	}
	function popup_print(id_sert){
			window.open("sertifikat.php?id_sert="+id_sert,"page","toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes")
	}
</script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="icon" type="image/png" href="images/logo.png"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<link href="datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<link rel="stylesheet" href="bootstrap-datetimepicker.min.css" />
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- Sweet Alert -->
<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
<script type="text/javascript" src="sweetalert/dist/sweetalert.min.js"></script>

<style>
		.peringatan {
			padding: 20px;
			background-color: #E53935;
			color: white;
			margin-bottom: 15px;
		}

		/* The close button */
		.closebtn {
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size: 22px;
			line-height: 20px;
			cursor: pointer;
		}

		.closebtn:hover {
			color: black;
		}
		div.barcode {
			margin: -90px 520px 0 0;
		}
	</style>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="home.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-user nav_icon"></i>Ketua Master<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="add_ketua.php">Tambah Data</a>
								</li>
								<li>
									<a href="view_ketua.php">Lihat Data</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-users nav_icon"></i>Koordinator Master<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="add_kordinator.php">Tambah Data</a>
								</li>
								<li>
									<a href="view_kordinator.php">Lihat Data</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-check-square-o nav_icon"></i>Mahasiswa<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="add_data.php">Tambah Data</a>
								</li>
								<li>
									<a href="view_data.php">Lihat Data</a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>
					</ul>
					
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<h1>UNIMA</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/employee.png" alt="" width="50px" height="50px"> </span> 
									<div class="user-name">
										<p>Admin</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Data Mahasiswa</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<?php
					error_reporting(0);
					include "cmd.php";
					$id_sert = $_GET['id_sert'];
					$show = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id_sert='$id_sert'");
						if(mysqli_num_rows($show) == 0){
							echo '<script>window.history.back()</script>';
						}else{
							$row = mysqli_fetch_array($show);
							$tahun 	= $row['thn_kkn'];
							$id		= $row['id_sert'];
							$nim	= $row['nim'];
							
							$barcode = $tahun.$id.$nim;
						}
				?>
						<div class="form-three widget-shadow">
							<form action="" method="post" enctype="multipart/form-data"> 
								<div class="form-group"> 
									<label>Nomor ID Unique</label> 
									<input type="text" name="id_sert" class="form-control"  value="<?php echo $row['id_sert']; ?>" readonly>
								</div>
								<div class="form-group"> 
									<label>Nomor Sertifikat</label> 
									<input type="text" name="noser" class="form-control" value="<?php echo $row['nom_sert']; ?>" placeholder="Nomor Sertifikat" readonly>
								</div>
								<div class="form-group"> 
									<label>Nama</label> 
									<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" placeholder="Nama Lengkap" readonly> 
								</div>
								<div class="form-group"> 
									<label>Nim</label> 
									<input type="text" name="nim" class="form-control" value="<?php echo $row['nim']; ?>" placeholder="Nomor Induk Mahasiswa" readonly> 
								</div>
								<div class="container-fluid">
									<div class="col-md-3">
									<label>Tempat Tanggal Lahir</label>
										<input type="text" name="tempat" class="form-control" value="<?php echo $row['tempat_lahir']; ?>" placeholder="Tempat Lahir" readonly>
									</div>
									<div class="col-md-5"><br>
										<div class='input-group date' id='datepicker'>
											<input type='text' name="ttl" class="form-control" value="<?php echo $row['ttl']; ?>" placeholder="Tanggal Bulan Tahun Lahir" readonly/>
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div> 
								</div><br>
								<div class="form-group">
									<label>Fakultas</label>
									<input type="text" name="fakultas" class="form-control" value="<?php echo $row['fakultas']; ?>" placeholder="Fakultas" readonly>
									</select>
								</div>
								<div class="form-group">
									<label>Jurusan/Program Studi</label>
									<input type="text" name="prodi" class="form-control" value="<?php echo $row['prodi']; ?>" placeholder="Program Study" readonly>
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Lokasi KKN</label> 
									<input type="lokasi" class="form-control" value="<?php echo $row['lokasi_kkn']; ?>" placeholder="Lokasi KKN" readonly> 
								</div>
								<div class="container-fluid">
									<div class="col-md-3">
									<label for="exampleInputEmail1">Waktu Pelaksanaan</label>
										<input type="d_bulan" class="form-control" value="<?php echo $row['dr_bln']; ?>" placeholder="Bulan Masuk" readonly>
									</div>
									<div class="col-md-1"><br><b><i>s/d</i></b></div>
									<div class="col-md-3"><br>
										<input type="s_bulan" class="form-control" value="<?php echo $row['sm_bln']; ?>" placeholder="Bulan Selesai" readonly>
									</div>
									<div class="col-md-3"><br>
										<input type="tahun" class="form-control" value="<?php echo $row['thn_kkn']; ?>" placeholder="Tahun Pelaksanaan" readonly>
									</div>
								</div><br>
								<center>
								<div class="form-group"> <label for="exampleInputFile">Foto Mahasiswa</label><br> 
									<?php echo "<img src=gambar/$row[picture] width=100px height=120px>"; ?>									
								</div> 
								<div class="barcode">
									<?php
										echo "<img alt=\"testing\" src=\"barcode.php?text=$barcode&print=true\"/>";
									?>
								</div>
								</center><br><br>
									
									<?php 
										echo "<a href=edit_mahasiswa.php?id_sert=$row[id_sert] class=\"btn btn-default\"> 
												<h4 style=\"color:#673AB7;\"><span class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></span> Edit Data</h4> 
											  </a>"; 
									?>
									<?php 
										echo "<a href=# onClick=\"popup_print($row[id_sert])\" class=\"btn btn-success pull-right\"> 
												<h4 style=\"color:white;\"><span class=\"fa fa-print\" aria-hidden=\"true\"></span> Cetak Data</h4> 
											  </a>"; 
									?>
									
									<?php 
										echo "<a href=# onClick=\"popup_nilai($row[nim])\" class=\"btn btn-info pull-right\"> 
												<h4 style=\"color:white;\"><span class=\"fa fa-print\" aria-hidden=\"true\"></span> Cetak Nilai</h4> 
											  </a>"; 
									?>
									
									<br> 
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 Universitas Negeri Manado | <i>Develope by MOSC Team</i></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<script src="datetimepicker/moment.js"></script>
	<script src="datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
		$(function () {
			$('#datepicker').datetimepicker({
				format: 'DD MMMM YYYY',
			});
		});
	</script>
</body>
</html>