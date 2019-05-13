<!DOCTYPE html>
<html>
	<head>
		<title>Sertifikat</title>
	<style>
		div.barcode {
			margin: 30px 490px 0 0;
		}
		div.foto {
			margin: -110px 0 0 0;
		}
		div.tondano {
			margin: -125px 0 0 300px;
		}
		div.blnthn {
			margin: -18px 0 0 550px;
		}
		div.ketua {
			margin: 50px 0 0 500px;
		}
		div.nip {
			margin: 2px 0 0 417px;
		}
		div.kk {
			margin: 0 0 0 284px;
		}
	</style>
	</head>
<body onLoad="window.print()">
	 <br><br><br><br>
	 
	 <?php
		include "cmd.php";
		include "bar128.php";
            $sql = "SELECT * FROM mahasiswa AS A INNER JOIN ketua AS B ON A.id_ketua = B.id_ketua
					INNER JOIN gelombang AS C ON A.id_gel = C.id_gel WHERE A.id_sert='".$_GET['id_sert']."'";
			$result = mysqli_query($conn, $sql);
            
			// output data of each row
			while($row = mysqli_fetch_array($result))
			{
				$tahun = $row['thn_kkn'];
				$id = $row['id_sert'];
				$nim = $row['nim'];
				$smp_bln = $row['sm_bln'];
				$ketua = $row['nama_ket'];
				$nip = $row['nip_ket'];
				$gelombang = $row['gelombang'];
				
				$barco = $tahun.$id.$nim;
				
				echo "<center>";
				echo "<h5>NO : ".$row['nom_sert']."</h5>";
				echo "</center>";
				echo "<center>";
				echo "<table >";
				
				echo "<tr>";
					echo "<td>NAMA </td>";
					echo "<td>&nbsp</td>";
					echo "<td>&nbsp</td>";
					echo "<td>:</td>";
					echo "<td><b>".$row['nama']."</b></td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>NIM </td>";
					echo "<td>&nbsp</td>";
					echo "<td>&nbsp</td>";
					echo "<td>:</td>";
					echo "<td>".$row['nim']."</td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>TEMPAT, TANGGAL LAHIR </td>";
					echo "<td>&nbsp</td>";
					echo "<td>&nbsp</td>";
					echo "<td>:</td>";
					echo "<td>".$row['tempat_lahir'].", ".$row['ttl']."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>FAKULTAS </td>";
					echo "<td>&nbsp</td>";
					echo "<td>&nbsp</td>";
					echo "<td>:</td>";
					echo "<td>".$row['fakultas']."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>JURUSAN/PROG.STUDI </td>";
					echo "<td>&nbsp</td>";
					echo "<td>&nbsp</td>";
					echo "<td>:</td>";
					echo "<td>".$row['prodi']."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>LOKASI KKN </td>";
					echo "<td>&nbsp</td>";
					echo "<td>&nbsp</td>";
					echo "<td>:</td>";
					echo "<td>".$row['lokasi_kkn']."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>WAKTU PELAKSANAAN </td>";
					echo "<td>&nbsp</td>";
					echo "<td>&nbsp</td>";
					echo "<td>:</td>";
					echo "<td>".$row['dr_bln']." - ".$row['sm_bln']." ".$row['thn_kkn']."</td>";
				echo "</tr>";
				echo "</table><br><br>";
				echo "SEBAGAI BUKTI TELAH MENGIKUTI KEGIATAN KULIAH KERJA NYATA (KKN) $gelombang TAHUN $tahun <br>
						YANG DISELENGGARAKAN OLEH LEMBAGA PENGABDIAN KEPADA MASYARAKAT";
				echo "</center><br><br>";
				echo "<center>";
					
					echo "<div class=\"barcode\"><img alt=\"testing\" src=\"barcode.php?text=$barco&print=true\"/></div>";
					echo "<div class=\"foto\">
							<img src=gambar/$row[picture] width=125px height=150px>
							</div>";
					echo "<div class=\"tondano\">TONDANO,   </div>";
					echo "<div class=\"blnthn\">".$row['sm_bln']." ".$row['thn_kkn']."</div>";
					echo "<div class=\"kk\"><b>KETUA,</b></div>";
					echo "<div class=\"ketua\"><b>$ketua</b></div>";
					echo "<div class=\"nip\"><b>NIP. $nip</b></div>";
					echo "</tr>";
				echo "</center>";
			}
	 ?>
</body>
</html>