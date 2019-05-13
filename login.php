<?php  
  session_start();//session starts here  
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

<link href="lpm-unima/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="lpm-unima/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="lpm-unima/css/font-awesome.css" rel="stylesheet"> 
<link rel="icon" type="image/png" href="lpm-unima/images/logo.png"> 
<!-- //font-awesome icons -->
<!-- Sweet Alert -->
<link rel="stylesheet" type="text/css" href="lpm-unima/sweetalert/dist/sweetalert.css">
<script type="text/javascript" src="lpm-unima/sweetalert/dist/sweetalert.min.js"></script>

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="main-page login-page ">
				
				<div class="widget-shadow">
					<?php
						include "cmd.php";
						error_reporting(0);
						//script anti sql injection
						function anti_injection($data){
							$filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
							return $filter;
						}
						
						if(isset($_POST['login']))  {
							$user=anti_injection($_POST['Username']);  
							$pwd=anti_injection($_POST['Password']); 
							
							if(empty($_POST['Username'])){
								echo '<script>swal("Kesalahan!", "Username salah , coba lagi!", "warning")</script>';
							}
							elseif(empty($_POST['Password'])){
								echo '<script>swal("Kesalahan!", "Password salah , coba lagi!", "warning")</script>';
							}
							else{
									$check_user="SELECT * FROM user WHERE username='$user'AND password='$pwd'";  
									$run=mysqli_query($conn,$check_user); 
									$data = mysqli_fetch_array($run);
									
									if(mysqli_num_rows($run)) {  
										echo "<script>window.open('lpm-unima/home.php','_self')</script>";       
											$_SESSION['username']=$user;
									}  
									else {  
										echo "<script>swal(\"Kesalahan!\", \"Username atau Password salah , coba lagi!\", \"warning\")</script>";  
									}  
								}
						}
						?>
					<div class="login-top">
						<img src="lpm-unima/images/unima.png" width="70px" height="70px"></img>
						<h4>Welcome to UNIMA AdminPanel ! </h4>
					</div>
					<div class="login-body">
						<form action="" method="post">
							<input type="text" class="user" name="Username" placeholder="Username" required="" autocomplete="off">
							<input type="password" name="Password" class="lock" placeholder="Password" required="" autocomplete="off">
							<input type="submit" name="login" value="Sign In"><br><br>
						</form>
					</div>
				</div>
			</div><br><br><br><br><br><br><br><br><br>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 Universitas Negeri Manado | <i>Develope by MOSC Team</i></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>