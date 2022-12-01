<?php 
	include "../koneksi.php";
	?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA SURAT KEPUTUSAN</title>
	<style type="text/css">
		body {font-family: arial; background-color: #ccc;}
		.rangkaisurat  {width: 980px; margin: 0 auto; background-color: #fff; height: 500px; padding: 20px;}
		table {border-bottom: 5px solid #000; padding: 2px;}
		.tengah {text-align: center; line-height: 5px;}

	</style>
</head>
<body>
	<div class="rangkaisurat">
		<table widht ="100%">
			<tr>
				<td><img src="../hh.jpg" width="126px"></td>
				<td class="tengah">
					<h2>PEMERINTAHAN KABUPATEN MALANG KECAMATAN SINGOSARI</h2>
					<br>
					<h1>DESA TUNJUNGTIRTO</h1>
					<br>
					<h4>sekretariat : Jl. Kantor Desa No. 5 Bunut, Tunjungtirto Tlp.405785 </h4>
				</td>
			</tr>
			<br>
		</table>
		<center>
		<h2>DATA LAPORAN SURAT KEPUTUSAN</h2>
	</center>
		<table border="1" style="width: 90%">
		<tr>
                 <th>No</th>
                  <th>Tgl Keputusan</th>
                  <th>Tentang</th>
                  <th>Uraian</th>
                  <th>Tanggal Laporan</th>
                  <th>Keterangan</th>
                  <th>File Document</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($kon,"SELECT * FROM suratkeputusan");
		while($data = mysqli_fetch_array($sql)){
		?>
			<tr>
        <td><?php echo $no++?></td>
                <td><?php echo $data['Tgl_Keputusan'] ?></td>
                <td><?php echo $data['Tentang'] ?></td>
                <td><?php echo $data['Uraian'] ?></td>
                <td><?php echo $data['Tgl_Laporan'] ?></td>
                <td><?php echo $data['Keterangan'] ?></td>
                 <td><a href="../TAMPIL PDF/tampilpdfkeputusan.php?id=<?=$data['id']?>"><?php echo $data['File_Document']?></a>
                </td>
		</tr>
		<?php 
		}
		?>
	</table>
	</div>
 
	<script>
		window.print();
	</script>
 
</body>
</html>