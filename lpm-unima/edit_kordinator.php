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
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="icon" type="image/png" href="images/logo.png"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
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
<!-- Sweet Alert -->
<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
<script type="text/javascript" src="sweetalert/dist/sweetalert.min.js"></script>
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
					<h3 class="title1">Tambah Data Ketua</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
					<?php
						error_reporting(0);
						include "cmd.php";
						$id = $_GET['id_kord'];
						$show = mysqli_query($conn,"SELECT * FROM kordinator WHERE id_kord='$id'");
							if(mysqli_num_rows($show) == 0){
								echo '<script>window.history.back()</script>';
							}else{
								$data = mysqli_fetch_assoc($show);
							}
					?>
						<?php
							include "cmd.php";
                        //proses input data
                        if (isset($_POST['input'])) {
                            $nama = addslashes (strip_tags ($_POST['nama']));
                            $nip = addslashes (strip_tags ($_POST['nip']));
        
                            if($nama==""){
                                echo '<script>swal("Kesalahan!", "Form Nama tidak boleh kosong!", "warning")</script>';
                            }elseif ($nip=="") {
                                echo '<script>swal("Kesalahan!", "Form Nip tidak boleh kosong!", "warning")</script>';
                            }
                            else {
                                    //insert ke tabel
                                    $query = "UPDATE kordinator SET nama_kord='$nama',nip_kord='$nip' WHERE id_kord='$id'";
		
                                    $sql = mysqli_query ($conn,$query);
                                
                                    if ($sql){
                                        echo '<script>
												swal({
													title: "Berhasil",
													text: "Data berhasil diperbaharui!",
													type: "success",
													},
												function(){
													window.location.href = "view_kordinator.php";
												});
											  </script>';
									}elseif (!$sql){
                                        echo '<script>swal("Kesalahan!", "Terjadi Kesalahan pada pengisian data , coba lagi!", "warning")</script>';
                                    }
                            }
                        }
						?>
						<div class="form-three widget-shadow">
							<form action="" method="post" name="input"> 
							<input type="hidden" name="id" value="<?php echo $id_kord; ?>">
								<div class="form-group"> 
									<label>Nama Koordinator</label> 
									<input type="text" name="nama" class="form-control" value="<?php echo $data['nama_kord']; ?>" placeholder="Nama Lengkap"> 
								</div> 
								<div class="form-group"> 
									<label>NIP Koordinator</label> 
									<input type="text" name="nip" class="form-control" value="<?php echo $data['nip_kord']; ?>" placeholder="Nomor Induk Pegawai"> 
								</div> 							
									<button type="submit" name="input" class="btn btn-default pull-right">
										<span class="fa fa fa-floppy-o" aria-hidden="true"></span> 
										Update Data
									</button><br> 
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
</body>
</html>