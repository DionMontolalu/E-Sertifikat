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
		
		input {
			width:95%;
			border:solid 1px #9E9E9E;
			padding:6px 5px;
		}
		input:hover {border:solid 2px #9E9E9E}
		.label2{  display:table}
		.button {text-align:center;
			background:#9E9E9E;
			color:#ffffff; 
			padding:5px; 
			border:0px; 
			width:100px; 
			cursor:pointer; 
			border: solid 3px #eeeeee;
		}
		.button:hover{border: solid 3px #9E9E9E;}
		.edit{float:left; text-align:center;font-size:14px; color:#fff; font-family:Arial, Helvetica, sans-serif; background:#0066FF; padding:4px; display:block}
				
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
					<h3 class="title1">Update Data Mahasiswa</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<?php
					error_reporting(0);
					include "cmd.php";
					$id_sert = $_GET['id_sert'];
					$show = mysqli_query($conn,"SELECT * FROM mahasiswa AS A INNER JOIN ketua AS B ON A.id_ketua = B.id_ketua  
												INNER JOIN nilai AS C  ON A.nim = C.nim 
												INNER JOIN codebar AS D ON A.nim = D.nim WHERE A.id_sert='$id_sert'");
						if(mysqli_num_rows($show) == 0){
							echo '<script>window.history.back()</script>';
						}else{
							$row = mysqli_fetch_array($show);
							$id_nilai = $row['id_nilai'];
							$id_code  = $row['id_code'];
							$gambar = $row['picture'];
							
						}
				?>
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
					
				if (isset($_POST['input'])) {
					if($nama==""){
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
					}				
					else {
						IF($_FILES['gambar']['name']!=''){
						$file='gambar/'.$row['picture'];
						@unlink($file);
						$tmp_name = $_FILES["gambar"]["tmp_name"];
						$namefile = $_FILES["gambar"]["name"];
						$ext = end(explode(".", $namefile));
						$image_name=time().".".$ext;
						$fileUpload = move_uploaded_file($tmp_name,"gambar/".$image_name);
						}else{
							$image_name=$row['picture'];
					}	
												
						$query = "UPDATE mahasiswa SET id_ketua='$ketua',id_kord='$kord',id_gel='$gelom', nom_sert='$noser', nama='$nama', nim='$nim',tempat_lahir='$tempat',
									ttl='$ttl', fakultas='$fakultas', prodi='$prodi', lokasi_kkn='$lokasi', dr_bln='$dri_bulan', sm_bln='$smp_bulan', thn_kkn='$tahun', picture='$image_name' WHERE id_sert='$id_sert'";
						$update  = mysqli_query ($conn,$query);
						
						$query1 = "UPDATE nilai SET nim='$nim',disiplin='$disiplin',kreatif='$kreativitas',kerjasama='$kerjasama',komunikasi='$komunikasi',kesesuaian='$kesesuaian',nilai='$nilai',grade='$grade' WHERE id_nilai='$id_nilai'";	
						$update1 = mysqli_query ($conn,$query1);
						
						$codebar = $tahun.$id_sert.$nim;
						$query2 = "UPDATE codebar SET nim='$nim',barcode='$codebar' WHERE id_code='$id_code'";		
						$update2 = mysqli_query ($conn,$query2);		
								
							if (($update)and($update1)and($update2)) {
								echo '<script>
										swal({
											title: "Berhasil !",
											text: "Data berhasil di update!",
											type: "success",
										},
											function(){
												window.location.href = "view_data.php";
										});
								</script>';
							}else{
								echo '<script>swal("Gagal!", "Ada kesalahan pengantian data!", "warning")</script>';
							}
					}
						
                }
							
						
			?>
					<form action="" method="post" enctype="multipart/form-data">	
						<div class="row">
						<div class="col-md-4">
							<img src="images/documentation.png" alt="" width="70px" height="70px">
						</div>
						<div class="col-md-4">
							<img id="gmbr" name="gambar" class="img-thumbnail" src="gambar/<?php echo $gambar; ?>" width="90px" height="130px">
							<span>
								<div id="sembunyi" style="display: none;">
									<br>
									<input name="gambar" type="file" id="gambar" accept="image/*" style="width:90%">
								</div>
							</span>
							<span>
								<a id="tampil" href="javascript:toggle();" rel="nofollow">Ganti Foto</a>
							</span>
						</div>
						<div class="col-md-4">
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
									<label>Nomor ID Unique</label> 
									<input type="text" name="id_sert" class="form-control"  value="<?php echo $row['id_sert']; ?>" readonly>
									<input type="hidden" name="id_nilai" value="<?php echo $id_nilai; ?>">									
								</div>
								<div class="form-group"> 
									<label>Nomor Sertifikat</label> 
									<input type="text" name="noser" class="form-control" value="<?php echo $row['nom_sert']; ?>" placeholder="Nomor Sertifikat">
								</div>
								<div class="form-group"> 
									<label>Nama</label> 
									<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" placeholder="Nama Lengkap"> 
								</div>
								<div class="form-group"> 
									<label>Nim</label> 
									<input type="text" name="nim" class="form-control" value="<?php echo $row['nim']; ?>" placeholder="Nomor Induk Mahasiswa"> 
								</div>
								<div class="container-fluid">
									<div class="col-md-3">
									<label>Tempat Tanggal Lahir</label>
										<input type="text" name="tempat" class="form-control" value="<?php echo $row['tempat_lahir']; ?>" placeholder="Tempat Lahir">
									</div>
									<div class="col-md-5"><br>
										<div class='input-group date' id='datepicker'>
											<input type='text' name="ttl" class="form-control" value="<?php echo $row['ttl']; ?>" placeholder="Tanggal Bulan Tahun Lahir"/>
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div> 
								</div><br>
								<div class="form-group">
									<label>Fakultas</label>
									<select name="fakultas" class="form-control">
										<option value="TEKNIK" <?php if($row['fakultas'] == 'TEKNIK'){ echo 'selected'; } ?>>TEKNIK</option>
										<option value="BAHASA DAN SENI" <?php if($row['fakultas'] == 'BAHASA DAN SENI'){ echo 'selected'; } ?>>BAHASA DAN SENI</option>
										<option value="EKONOMI" <?php if($row['fakultas'] == 'EKONOMI'){ echo 'selected'; } ?>>EKONOMI</option>
										<option value="MATEMATIKA DAN ILMU PENGETAHUAN ALAM" <?php if($row['fakultas'] == 'MATEMATIKA DAN ILMU PENGETAHUAN ALAM'){ echo 'selected'; } ?>>MATEMATIKA DAN ILMU PENGETAHUAN ALAM</option>
										<option value="ILMU KEOLAHRAGAAN" <?php if($row['fakultas'] == 'ILMU KEOLAHRAGAAN'){ echo 'selected'; } ?>>ILMU KEOLAHRAGAAN</option>
										<option value="ILMU SOSIAL" <?php if($row['fakultas'] == 'ILMU SOSIAL'){ echo 'selected'; } ?>>ILMU SOSIAL</option>
										<option value="ILMU PENDIDIKAN" <?php if($row['fakultas'] == 'ILMU PENDIDIKAN'){ echo 'selected'; } ?>>ILMU PENDIDIKAN</option>
									</select>
								</div>
								<div class="form-group">
									<label>Jurusan/Program Studi</label>
									<input type="text" name="prodi" class="form-control" value="<?php echo $row['prodi']; ?>" placeholder="Program Study">
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Lokasi KKN</label> 
									<input type="text" name="lokasi" class="form-control" value="<?php echo $row['lokasi_kkn']; ?>" placeholder="Lokasi KKN"> 
								</div>
								<div class="container-fluid">
									<div class="col-md-3">
									<label for="exampleInputEmail1">Waktu Pelaksanaan</label>
										<select name="d_bulan" class="form-control">
											<option value="JANUARI" <?php if($row['dr_bln'] == 'JANUARI'){ echo 'selected'; } ?>>JANUARI</option>
											<option value="FEBRUARI" <?php if($row['dr_bln'] == 'FEBRUARI'){ echo 'selected'; } ?>>FEBRUARI</option>
											<option value="MARET" <?php if($row['dr_bln'] == 'MARET'){ echo 'selected'; } ?>>MARET</option>
											<option value="APRIL" <?php if($row['dr_bln'] == 'APRIL'){ echo 'selected'; } ?>>APRIL</option>
											<option value="MEI" <?php if($row['dr_bln'] == 'MEI'){ echo 'selected'; } ?>>MEI</option>
											<option value="JUNI" <?php if($row['dr_bln'] == 'JUNI'){ echo 'selected'; } ?>>JUNI</option>
											<option value="JULI" <?php if($row['dr_bln'] == 'JULI'){ echo 'selected'; } ?>>JULI</option>
											<option value="AGUSTUS" <?php if($row['dr_bln'] == 'AGUSTUS'){ echo 'selected'; } ?>>AGUSTUS</option>
											<option value="SEPTEMBER" <?php if($row['dr_bln'] == 'SEPTEMBER'){ echo 'selected'; } ?>>SEPTEMBER</option>
											<option value="OKTOBER" <?php if($row['dr_bln'] == 'OKTOBER'){ echo 'selected'; } ?>>OKTOBER</option>
											<option value="NOVEMBER" <?php if($row['dr_bln'] == 'NOVEMBER'){ echo 'selected'; } ?>>NOVEMBER</option>
											<option value="DESEMBER" <?php if($row['dr_bln'] == 'DESEMBER'){ echo 'selected'; } ?>>DESEMBER</option>
										</select>
										
									</div>
									<div class="col-md-1"><br><b><i>s/d</i></b></div>
									<div class="col-md-3"><br>
										<select name="s_bulan" class="form-control">
											<option value="JANUARI" <?php if($row['sm_bln'] == 'JANUARI'){ echo 'selected'; } ?>>JANUARI</option>
											<option value="FEBRUARI" <?php if($row['sm_bln'] == 'FEBRUARI'){ echo 'selected'; } ?>>FEBRUARI</option>
											<option value="MARET" <?php if($row['sm_bln'] == 'MARET'){ echo 'selected'; } ?>>MARET</option>
											<option value="APRIL" <?php if($row['sm_bln'] == 'APRIL'){ echo 'selected'; } ?>>APRIL</option>
											<option value="MEI" <?php if($row['sm_bln'] == 'MEI'){ echo 'selected'; } ?>>MEI</option>
											<option value="JUNI" <?php if($row['sm_bln'] == 'JUNI'){ echo 'selected'; } ?>>JUNI</option>
											<option value="JULI" <?php if($row['sm_bln'] == 'JULI'){ echo 'selected'; } ?>>JULI</option>
											<option value="AGUSTUS" <?php if($row['sm_bln'] == 'AGUSTUS'){ echo 'selected'; } ?>>AGUSTUS</option>
											<option value="SEPTEMBER" <?php if($row['sm_bln'] == 'SEPTEMBER'){ echo 'selected'; } ?>>SEPTEMBER</option>
											<option value="OKTOBER" <?php if($row['sm_bln'] == 'OKTOBER'){ echo 'selected'; } ?>>OKTOBER</option>
											<option value="NOVEMBER" <?php if($row['sm_bln'] == 'NOVEMBER'){ echo 'selected'; } ?>>NOVEMBER</option>
											<option value="DESEMBER" <?php if($row['sm_bln'] == 'DESEMBER'){ echo 'selected'; } ?>>DESEMBER</option>
										</select>
									</div>
									<div class="col-md-3"><br>
										<input type="text" name="tahun" class="form-control" value="<?php echo $row['thn_kkn']; ?>" placeholder="Tahun Pelaksanaan">
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
								<!-- Jquery Slide-->
								<div id="flip"> <b class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></b> <b>Aspek Penilaian :</b> Click !</div>
									<div id="panel">
										<div class="row">
											<div class="col-md-3"><b>1. DISIPLIN </b> <i>(bobot 2)</i></div>
											<div class="col-md-7">
												<input type="text" name="dis" class="form-control" value="<?php echo $row['disiplin']; ?>" placeholder="Disiplin" autocomplete="off">
											<br>
											</div>
											
											<div class="col-md-3"><b>2. KREATIVITAS </b> <i>(bobot 2)</i></div>
											<div class="col-md-7">
												<input type="text" name="kre" class="form-control" value="<?php echo $row['kreatif']; ?>" placeholder="Kreativitas" autocomplete="off">
											<br>
											</div>
											
											<div class="col-md-3"><b>3. KERJASAMA </b> <i>(bobot 2)</i></div>
											<div class="col-md-7">
												<input type="text" name="krj" class="form-control" value="<?php echo $row['kerjasama']; ?>" placeholder="Kerjasama" autocomplete="off">
											<br>
											</div>
											
											<div class="col-md-3"><b>4. KOMUNIKASI </b> <i>(bobot 1)</i></div>
											<div class="col-md-7">
												<input type="text" name="kom" class="form-control" value="<?php echo $row['komunikasi']; ?>" placeholder="Komunikasi" autocomplete="off">
											<br>
											</div>
											
											<div class="col-md-3"><b>5. KESESUAIAN HASIL DENGAN RENCANA KERJA </b> <i>(bobot 3)</i></div>
											<div class="col-md-7">
												<input type="text" name="kes" class="form-control" value="<?php echo $row['kesesuaian']; ?>" placeholder="Kesesuaian Hasil Dengan Rencana Kerja" autocomplete="off">
											<br>
											</div>
										</div>
									</div><!-- End Jquery Slide-->
									<br>
									
									<button type="reset" class="btn btn-sm btn-danger" onclick="self.history.back()">
										<h4 style="color:#FAFAFA"><span class="fa fa-times"></span> Cancel</h4>
									</button>
									
									<button type="submit" name="input" class="btn btn-info pull-right">
										<h4 style="color:#FAFAFA"><span class="fa fa-floppy-o" aria-hidden="true"></span> Update</h4>
									</button>
									
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
		<script language="javascript">
			function toggle() {
				var ele = document.getElementById("sembunyi");
				var gmbr = document.getElementById("gmbr");
				var text = document.getElementById("tampil");
				
				if(ele.style.display == "block") {
					ele.style.display = "none";
					gmbr.style.display = "block";
					text.innerHTML = "Ganti Foto";
				}else {
					ele.style.display = "block";
					gmbr.style.display = "none";
					text.innerHTML = "Batal";
				}
			}
		</script>
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