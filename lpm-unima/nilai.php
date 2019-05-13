<!DOCTYPE html>
<html>
	<head>
		<title>Sertifikat</title>
		<!-- Bootstrap Core CSS -->
	<style>
		table, td, th {    
			border: 1px solid #ddd;
			text-align: left;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			padding: 8px;
		}
		
		div.tabel {
			width:700px;
			margin: auto;
		}
		div.ketua {
			margin: 70px 0 0 520px;
		}
		div.nmketua {
			margin: 70px 0 0 520px;
		}
</style>
	</head>
<body onLoad="window.print()">
	 <br><br><br><br>
	 <div class="tabel">
	 <?php
		include "cmd.php";
            $sql = "SELECT * FROM mahasiswa AS A INNER JOIN nilai AS B ON A.nim = B.nim 
					INNER JOIN kordinator AS C ON A.id_kord = C.id_kord WHERE A.nim='".$_GET['nim']."'";
			$result = mysqli_query($conn, $sql);
            
			// output data of each row
			while($row = mysqli_fetch_array($result))
			{
				$disiplin 	= $row['disiplin'];
				$kreatif 	= $row['kreatif'];
				$kerjasama 	= $row['kerjasama'];
				$komunikasi	= $row['komunikasi'];
				$kesesuaian = $row['kesesuaian'];
				$nilai		= $row['nilai'];
				$grade		= $row['grade'];
				$nama		= $row['nama_kord'];
				$nip		= $row['nip_kord'];
				$nn = $nilai / 10;
				
				$disiplinx 	= $disiplin * 2;
				$kreatifx	= $kreatif * 2;
				$kerjasamax	= $kerjasama * 2;
				$komunikasix= $komunikasi * 1;
				$kesesuaianx= $kesesuaian * 3;
				
				echo "<br><br><br>";
				echo "<center>";
				echo "<div class=\"table-responsive\">";
				echo "<table class=\"table\">";
				echo "<tr>";
					echo "<th><center>NO</center></th>";
					echo "<th><center>ASPEK PENILAIAN</center></th>";
					echo "<th><center>BOBOT</center></th>";
					echo "<th><center>NILAI</center></th>";
					echo "<th><center>B x N</center></th>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td><center>1</center></td>";
					echo "<td>DISIPLIN</td>";
					echo "<td><center>2</center></td>";
					echo "<td><center>$disiplin</center></td>";
					echo "<td><center>$disiplinx</center></td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td><center>2<center></td>";
					echo "<td>KREATIVITAS</td>";
					echo "<td><center>2</center></td>";
					echo "<td><center>$kreatif</center></td>";
					echo "<td><center>$kreatifx</center></td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td><center>3</center></td>";
					echo "<td>KERJASAMA</td>";
					echo "<td><center>2</center></td>";
					echo "<td><center>$kerjasama</center></td>";
					echo "<td><center>$kerjasamax</center></td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td><center>4</center></td>";
					echo "<td>KOMUNIKASI</td>";
					echo "<td><center>1</center></td>";
					echo "<td><center>$komunikasi</center></td>";
					echo "<td><center>$komunikasix</center></td>";
				echo "</tr>";
					
				echo "<tr>";
					echo "<td><center>5</center></td>";
					echo "<td>KESESUAIAN HASIL DENGAN <br>RENCANA KERJA</td>";
					echo "<td><center>3</center></td>";
					echo "<td><center>$kesesuaian</center></td>";
					echo "<td><center>$kesesuaianx</center></td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>&nbsp</td>";
					echo "<td><center>JUMLAH</center></td>";
					echo "<td><center>10</center></td>";
					echo "<td><center>&nbsp</center></td>";
					echo "<td><center>$nilai</center></td>";
				echo "</tr>";
				echo "</table><br>";
				
				echo "&sum;";
				echo "( B x N / 10) = ";
				echo "$nilai / 10 =  ";
				echo "<b>$nn ($grade)</b>";
				
				echo "</div>";
				echo "</center>";
				
				echo "<div class=\"ketua\"><b>Koordinator KKN,</b></div>";
				echo "<div class=\"nmketua\"><b>$nama<br>NIP. $nip</b></div>";
				
			}
	 ?>
	 </div>
</body>
</html>