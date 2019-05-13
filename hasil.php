<link rel="stylesheet" href="css/bootstrap.min.css">
<?php 
include 'cmd.php';
	$id_sert = $_POST['id'];
	$show = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id_sert='$id_sert'");
		$data = mysqli_fetch_assoc($show);{
		$nama 		= $data['nama'];
		$nim 		= $data['nim'];
		$tempat		= $data['tempat_lahir'];
		$ttl		= $data['ttl'];
		$fakultas	= $data['fakultas'];
		$prodi		= $data['prodi'];
		$lokasi		= $data['lokasi_kkn'];
		$d_bulan	= $data['dr_bln'];
		$s_bulan	= $data['sm_bln'];
		$tahun		= $data['thn_kkn'];
		$picture	= $data['picture'];
	
	echo "<center>";
	echo "<table>";
	echo "	<tr>";
	echo "		<td align=\"left\">NAMA </td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>:</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td align=\"left\"><b>$nama</b></td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<th colspan=\"8\" rowspan=\"7\">
					<a href=\"#\" class=\"thumbnail\">
						<img src=lpm-unima/gambar/$picture width=120px height=200px>
					</a>
				</th>";
	
				
	echo "	</tr>";
	echo "	<tr>";
	echo "		<td align=\"left\">NIM </td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>:</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td align=\"left\">$nim</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	
	echo "	</tr>";
	
	echo "	<tr>";
	echo "		<td align=\"left\">TEMPAT, TANGGAL LAHIR </td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>:</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td align=\"left\">$tempat, $ttl</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "	</tr>";
	
	echo "	<tr>";
	echo "		<td align=\"left\">FAKULTAS </td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>:</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td align=\"left\">$fakultas</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "	</tr>";
	
	echo "	<tr>";
	echo "		<td align=\"left\">JURUSAN/PROG.STUDI </td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>:</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td align=\"left\">$prodi</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "	</tr>";
	
	echo "	<tr>";
	echo "		<td align=\"left\">LOKASI KKN </td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>:</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td align=\"left\">$lokasi</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "	</tr>";
	
	echo "	<tr>";
	echo "		<td align=\"left\">WAKTU PELAKSANAAN </td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>:</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td align=\"left\">".$d_bulan. "-" .$s_bulan. " ".$tahun."</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "		<td>&nbsp</td>";
	echo "	</tr>";
	
	echo "	</table>";
	echo "</center>";
	}
?>
