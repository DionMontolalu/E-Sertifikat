<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Universitas Negeri Manado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="lpm-unima/images/logo.png">
  <!-- font-awesome icons -->
	<link href="lpm-unima/css/font-awesome.css" rel="stylesheet">
  <script src="lpm-unima/js/jquery-1.11.1.min.js"></script>
  <script src="lpm-unima/js/bootstrap.js"></script>
  <!-- Sweet Alert -->
<link rel="stylesheet" type="text/css" href="lpm-unima/sweetalert/dist/sweetalert.css">
<script type="text/javascript" src="lpm-unima/sweetalert/dist/sweetalert.min.js"></script>
  <script>
        $(function(){
            $(document).on('click','.edit-record',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('hasil.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #1976D2; ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:white; float: left; border-right:2px solid #bbb;"> <b>UNIMA</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li style="float: left; border-right:2px solid #bbb;"><a href="Lembaga-Pemberdayaan-Masyarakat.asp" style="color:white;"><strong><i class="fa fa-users nav_icon"> SEARCH </i> </strong><span class="sr-only">(current)</span></a></li>
        <li style="float: left; border-right:2px solid #bbb;"><a href="#" data-toggle="modal" data-target="#myModal2" style="color:white;"><strong><i class="fa fa-info-circle nav_icon"> INFO </i></strong></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"> <strong>ABOUT</strong></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><br><br><br><br>
<?php 
//        includekan fungsi paginasi
		include 'cmd.php';
        include 'pagination1.php';

        if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>""){
//        jika ada kata kunci pencarian (artinya form pencarian disubmit dan tidak kosong)
//        pakai ini
            $keyword=$_REQUEST['keyword'];
            $reload = "Lembaga-Pemberdayaan-Masyarakat.asp?pagination=true&keyword=$keyword";
            $sql =  "SELECT * FROM mahasiswa AS A INNER JOIN codebar AS B ON A.nim = B.nim WHERE B.barcode LIKE '%$keyword%' ORDER BY A.nim";
            $result = mysqli_query($conn,$sql);
        }else{
//            jika tidak ada pencarian pakai ini
            $reload = "Lembaga-Pemberdayaan-Masyarakat.asp?pagination=true";
            $sql =  "SELECT * FROM mahasiswa AS A INNER JOIN codebar AS B ON A.nim = B.nim ORDER BY A.nim";
            $result = mysqli_query($conn,$sql);
        }
        
        //pagination config start
        $rpp = 10; // jumlah record per halaman
        $page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysqli_num_rows($result);
		if($tcount==""){
			echo '<script>
					swal({
							title: "Tidak ada Data",
							text: "Data tidak terdaftar !",
							type: "warning",
						},
						function(){
							window.location.href = "Lembaga-Pemberdayaan-Masyarakat.asp";
						});
				  </script>';
		}else{
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>
<div class="container">
	<div class="row">
		
		<div class="col-md-1"></div>
		
		<div class="col-md-10">
			<center>
			<img src="unima.png" width="20%"></img><br><br>
			</center>
			<form method="post" action="index.php">
			<div class="input-group input-group-lg">
				<input type="text" name="keyword" class="form-control" placeholder="Search Barcode.." value="<?php echo $_REQUEST['keyword']; ?>" autocomplete="off">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="submit">Cari Data</button>
                    </span>
			</div>
		</form> <br><br>
		
		<table class="table table-bordered" style="border-color:#1976D2;">
                <thead>
                    <tr style="background-color:#1976D2; color:white;">
                        <th><center>No.</center></th>
                        <th><center>Nim</center></th>
						<th><center>Nama</center></th>
						<th><center>Tgl-Bln-Tahun</center></th>
                        <th><center>Fakultas</center></th>
						<th><center>Aksi</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysqli_data_seek($result,$i);
                        $data = mysqli_fetch_array($result);
						$id_mhs = $data['id_sert'];
                    ?>
                    <tr>
                        <td width="80px">
                            <center><?php echo ++$no_urut;?></center>
                        </td>
                        <td>
                            <?php echo $data['nim']; ?> 
                        </td>
						<td>
                            <?php echo $data['nama']; ?> 
                        </td>
						<td>
                            <?php echo $data['ttl']; ?> 
                        </td>
						<td>
                            <?php echo $data['fakultas']; ?> 
                        </td>
                        <td width="120px" class="text-center">
                            <a href="#" class="edit-record" data-toggle="modal" data-target="#myModal" data-id="<?php echo "$id_mhs"; ?>"> Lihat Data</a>
							
						<!-- Modal -->
						<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header" style="background-color:#2196F3;">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title"><b style="color:white;"><i class="fa fa-info-circle nav_icon"> </i> INFO</b></h4>
									</div>
									<div class="modal-body2">
										<p>
											Untuk menggunakan form pencarian ini , anda harus memasukan barcode anda yang sudah
											di generate otomatis dari tahun pelaksanaan , kode unik saat anda mendaftar , dan juga NIM anda.
											<br><br>
											Anda juga bisa melihat data anda yang sudah dimasukan oleh pegawai LPM , kalo misalnya masih ada
											kesalahan nama atau yang lainnya segera melapor ke bagian penginputan Nilai LPM untuk diperbaiki !!
										</p>
									</div>
									<div class="modal-footer" style="background-color:#2196F3;">
										<button type="button" class="btn btn-danger" data-dismiss="modal">EXIT</button>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header" style="background-color:#1976D2;">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title"><b style="color:white;">DATA MAHASISWA KKN</b></h4>
									</div>
									<div class="modal-body">
									</div>
									<div class="modal-footer" style="background-color:#1976D2;">
										<button type="button" class="btn btn-danger" data-dismiss="modal">EXIT</button>
									</div>
								</div>
							</div>
						</div>
							
                        </td>
                    </tr>
                    <?php
                        $i++; 
                        $count++;
                    }
                    ?>
                </tbody>
            </table>
		<div><?php echo paginate_one($reload, $page, $tpages); }?></div>
		
		</div>
		
		<div class="col-md-1"></div>
		       
	</div>
	
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_navbar_dropdown&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:58 GMT -->
</html>
