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
		
		#panel, #flip {
			padding: 5px;
			text-align: left;
			background-color: #FAFAFA;
			border: solid 2px #c3c3c3;
		}

		#panel {
			padding: 10px;
			display: none;
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
					<h3 class="title1">Tambah Data Mahasiswa</h3>
					<!-- Query untuk memasukan Barcode-->
					<?php
						error_reporting(0);
						include "cmd.php";
						$show = mysqli_query($conn,"SELECT * FROM mahasiswa");
							$data = mysqli_fetch_assoc($show);
								$nimmhs = $data['nim']; {
								echo "$nimmhs";
							}
					?>
					
					<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<?php
				include "cmd.php";
				error_reporting(0);
                //proses input berita
					$ketua = addslashes (strip_tags ($_POST['ketua']));
					$kord = addslashes (strip_tags ($_POST['kord']));
					$gelom = addslashes (strip_tags ($_POST['gelom']));
					$noser = addslashes (strip_tags ($_POST['noser']));
						$noser = strtoupper($noser); //untuk merubah string ke huruf besar semua
					$nama = addslashes (strip_tags ($_POST['nama']));
						$nama = strtoupper($nama);
					$nim = addslashes (strip_tags ($_POST['nim']));
                    $tempat = addslashes (strip_tags($_POST['tempat']));
						$tempat = strtoupper($tempat);
					$ttl = addslashes (strip_tags($_POST['ttl']));
						$ttl = strtoupper($ttl);
					$fakultas = addslashes (strip_tags($_POST['fakultas']));
						$fakultas = strtoupper($fakultas);
					$prodi = addslashes (strip_tags($_POST['prodi']));
						$prodi = strtoupper($prodi);
					$lokasi = addslashes (strip_tags($_POST['lokasi']));
						$lokasi = strtoupper($lokasi);
					$dri_bulan = addslashes (strip_tags($_POST['d_bulan']));
						$dri_bulan = strtoupper($dri_bulan);
					$smp_bulan = addslashes (strip_tags($_POST['s_bulan']));
						$smp_bulan = strtoupper($smp_bulan);
					$tahun = addslashes (strip_tags($_POST['tahun']));
						$tahun = strtoupper($tahun);
					
					//variabel tabel nilai
					$disiplin = $_POST['dis'];
					$kreativitas = $_POST['kre'];
					$kerjasama = $_POST['krj'];
					$komunikasi = $_POST['kom'];
					$kesesuaian = $_POST['kes'];
					
					//untuk menjumlahkan data
					$dsp 	 = $disiplin * 2;
					$krea 	 = $kreativitas * 2;
					$kerja 	 = $kerjasama * 2;
					$komu  	 = $komunikasi * 1;
					$keses   = $kesesuaian * 3;
					
					$nilai = $dsp + $krea + $kerja + $komu + $keses;
					$bagi = $nilai / 10;
					
					//kondisi untuk membuat grade nilai
					if (($bagi >= 3.60) and ($bagi <= 4.00)) {
						$grade = "A";
					}elseif (($bagi >= 3.00) and ($bagi <= 3.59)){
						$grade = "B";
					}elseif (($bagi >= 2.60) and ($bagi <= 2.99)){
						$grade = "C";
					}elseif (($bagi >= 1.00) and ($bagi <= 2.59)){
						$grade = "D";
					}else{
						$grade = "E";
					}
					
					//variabel untuk upload gambar
					$target_dir = "gambar/";
					$target_file = $target_dir . basename($_FILES["Upload"]["name"]);
					$picture   = basename($_FILES['Upload'] ['name']);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					//akhir variabel untuk upload gambar
					
				if (isset($_POST['input'])) {
					if ($uploadOk == 0) {
						echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
					}else if($nama==""){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Nama </strong> tidak boleh kosong !!
							   </div>";
						
					}else if($nim==""){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Nim </strong> tidak boleh kosong !!
							   </div>";
					}else if($lokasi==""){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Lokasi KKN </strong> tidak boleh kosong !!
							   </div>";
					}else if($tahun==""){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Tahun Pelaksanaan </strong> tidak boleh kosong !!
							   </div>";
					}else if($nim==$nimmhs){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Kesalahan Duplikasi Data</strong> NIM sudah ada , perhatikan saat menginputkan data !!
							   </div>";
					}
					else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Maaf </strong> , hanya boleh menginputkan gambar : JPG, JPEG, PNG & GIF !!
							   </div>";
							$uploadOk = 0;
					}
					else {
						if (move_uploaded_file($_FILES["Upload"]["tmp_name"], $target_file)) {
							$query = "INSERT INTO mahasiswa VALUES('','$ketua','$kord','$gelom','$noser','$nama','$nim','$tempat','$ttl','$fakultas','$prodi','$lokasi','$dri_bulan','$smp_bulan','$tahun','$picture',now())";								
								$sql = mysqli_query ($conn,$query);
									$last_id = mysqli_insert_id($conn);
									$codebar = $tahun.$last_id.$nim;
								
								$query1 = "INSERT INTO nilai VALUES ('','$nim','$disiplin','$kreativitas','$kerjasama','$komunikasi','$kesesuaian','$nilai','$grade')";
									$query2 = "INSERT INTO codebar VALUES('','$nim','$codebar')";							
								
								$sql1 = mysqli_query ($conn,$query1);
									$sql2 = mysqli_query ($conn,$query2);
								
									if (($sql)and($sql1)and($sql2)) {
										echo '<script>
												swal({
													title:"Berhasil",
													text: "Data berhasil ditambahkan!",
													type: "success",
												},
												function(){
													window.location.href = "view_data.php?";
												});
										</script>';
									}else{
										echo '<script>swal("Gagal!", "Ada kesalahan pemasukan data!", "warning")</script>';
									}
						} else {
							echo "Sorry, there was an error uploading your file.";
						}
					}
						
                }
							
						
			?>
					<form action="" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-7">
							<img src="images/documentation.png" alt="" width="70px" height="70px">
						</div>
						<div class="col-md-5">
							<label>Pilih Ketua</label>
								<select name="ketua" class="form-control">
									<?php
                                    include "cmd.php";
                                        $query = "SELECT id_ketua, nama_ket FROM ketua ORDER BY id_ketua";
                                    $sql = mysqli_query ($conn,$query);
                                        while ($hasil = mysqli_fetch_array($sql)) {
                                            echo "<option value='$hasil[id_ketua]'>$hasil[nama_ket]</option>";
                                        }
                                ?>
								</select>
						</div>
					</div>
				
						<div class="form-three widget-shadow">
							 
								<div class="form-group"> 
									<label>Nomor Sertifikat</label> 
									<input type="text" name="noser" class="form-control" placeholder="Nomor Sertifikat">
								</div>
								
								<div class="form-group"> 
									<label>Nama</label> 
									<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" autocomplete="off"> 
								</div>
								<div class="form-group"> 
									<label>Nim</label> 
									<input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa" autocomplete="off"> 
								</div>
								<div class="container-fluid">
									<div class="col-md-3">
									<label>Tempat Tanggal Lahir</label>
										<input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir" autocomplete="off">
									</div>
									<div class="col-md-5"><br>
										<div class='input-group date' id='datepicker'>
											<input type='text' name="ttl" class="form-control" placeholder="Tanggal Bulan Tahun Lahir" />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div> 
								</div><br>
								<div class="form-group">
									<label>Fakultas</label>
									<select name="fakultas" class="form-control">
										<option>TEKNIK</option>
										<option>BAHASA DAN SENI</option>
										<option>EKONOMI</option>
										<option>MATEMATIKA DAN ILMU PENGETAHUAN ALAM</option>
										<option>ILMU KEOLAHRAGAAN</option>
										<option>ILMU SOSIAL</option>
										<option>ILMU PENDIDIKAN</option>
									</select>
								</div>
								<div class="form-group">
									<label>Jurusan/Program Studi</label>
										<input type="text" name="prodi" class="form-control" placeholder="Program Studi/Jurusan" autocomplete="off"> 
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Lokasi KKN</label> 
									<input type="text" name="lokasi" class="form-control" placeholder="Lokasi KKN" autocomplete="off"> 
								</div>
								<div class="container-fluid">
									<div class="col-md-3">
									<label for="exampleInputEmail1">Waktu Pelaksanaan</label>
										<select name="d_bulan" class="form-control">
										<option><i>Dari Bulan</i></option>
											<option>JANUARI</option>
											<option>FEBRUARI</option>
											<option>MARET</option>
											<option>APRIL</option>
											<option>MEI</option>
											<option>JUNI</option>
											<option>JULI</option>
											<option>AGUSTUS</option>
											<option>SEPTEMBER</option>
											<option>OKTOBER</option>
											<option>NOVEMBER</option>
											<option>DESEMBER</option>
										</select>
									</div>
									<div class="col-md-1"><br><b><i>s/d</i></b></div>
									<div class="col-md-3"><br>
										<select name="s_bulan" class="form-control">
										<option><i>Sampai Bulan</i></option>
											<option>JANUARI</option>
											<option>FEBRUARI</option>
											<option>MARET</option>
											<option>APRIL</option>
											<option>MEI</option>
											<option>JUNI</option>
											<option>JULI</option>
											<option>AGUSTUS</option>
											<option>SEPTEMBER</option>
											<option>OKTOBER</option>
											<option>NOVEMBER</option>
											<option>DESEMBER</option>
										</select> 
									</div>
									<div class="col-md-3"><br>
										<select name="tahun" class="form-control">
											<?php
												$a = date("Y");
													echo "<option>Tahun</option>";
												for($i=2000; $i<=$a; $i++){
													echo "<option>$i</option>";
												}
											?>
										</select> 
									</div>
								</div><br>
								<div class="container-fluid">
									<div class="col-md-5">
										<label>Gelombang KKN</label>
											<select name="gelom" class="form-control">
											<?php
												include "cmd.php";
													$query = "SELECT id_gel, gelombang FROM gelombang ORDER BY id_gel";
													$sql = mysqli_query ($conn,$query);
												while ($hasil = mysqli_fetch_array($sql)) {
													echo "<option value='$hasil[id_gel]'>$hasil[gelombang]</option>";
												}
											?>
											</select>
									</div>
									<div class="col-md-1"></div>
									<div class="col-md-6">
										<label>Pilih Koordinator</label>
											<select name="kord" class="form-control">
											<?php
												include "cmd.php";
													$query = "SELECT id_kord, nama_kord FROM kordinator ORDER BY id_kord";
													$sql = mysqli_query ($conn,$query);
												while ($hasil = mysqli_fetch_array($sql)) {
													echo "<option value='$hasil[id_kord]'>$hasil[nama_kord]</option>";
												}
											?>
											</select>
									</div>
								</div>
								<br>
								
								<div class="form-group"> <label for="exampleInputFile">Upload Foto</label> 
									<input type="file" name="Upload" id="Upload">
								</div><br>
								<!-- Jquery Slide-->
								<div id="flip"> <b class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></b> <b>Aspek Penilaian :</b> Click !</div>
									<div id="panel">
										<div class="row">
											<div class="col-md-3"><b>1. DISIPLIN </b> <i>(bobot 2)</i></div>
											<div class="col-md-7">
												<input type="text" name="dis" class="form-control" placeholder="Disiplin" autocomplete="off">
											<br>
											</div>
											
											<div class="col-md-3"><b>2. KREATIVITAS </b> <i>(bobot 2)</i></div>
											<div class="col-md-7">
												<input type="text" name="kre" class="form-control" placeholder="Kreativitas" autocomplete="off">
											<br>
											</div>
											
											<div class="col-md-3"><b>3. KERJASAMA </b> <i>(bobot 2)</i></div>
											<div class="col-md-7">
												<input type="text" name="krj" class="form-control" placeholder="Kerjasama" autocomplete="off">
											<br>
											</div>
											
											<div class="col-md-3"><b>4. KOMUNIKASI </b> <i>(bobot 1)</i></div>
											<div class="col-md-7">
												<input type="text" name="kom" class="form-control" placeholder="Komunikasi" autocomplete="off">
											<br>
											</div>
											
											<div class="col-md-3"><b>5. KESESUAIAN HASIL DENGAN RENCANA KERJA </b> <i>(bobot 3)</i></div>
											<div class="col-md-7">
												<input type="text" name="kes" class="form-control" placeholder="Kesesuaian Hasil Dengan Rencana Kerja" autocomplete="off">
											<br>
											</div>
										</div>
									</div><!-- End Jquery Slide-->
								<br>
									<button type="submit" name="input" class="btn btn-default pull-right"><h4 style="color:white;"><span class="fa fa fa-floppy-o" aria-hidden="true"></span> Simpan</h4></button><br> 
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
	<script> 
		$(document).ready(function(){
			$("#flip").click(function(){
				$("#panel").slideToggle("slow");
			});
		});
	</script>
</body>
</html>