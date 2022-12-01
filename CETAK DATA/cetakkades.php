

<?php 
	include "../koneksi.php";
	?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA PERATURAN KADES</title>
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
		<h2>DATA LAPORAN SURAT PERDES</h2>
	</center>
		<table border="1" style="width: 90%">
		<tr>
        <th>No</th>
                  <th>Jenis Perdes</th>
                  <th>No dan Tanggal Ditetapkan</th>
                  <th>Tentang</th>
                  <th>Uraian</th>
                  <th>Tanggal Kesepakatan Perdes</th>
                  <th>No dan Tanggal Dilaporkan</th>
                  <th>No dan Tanggal Diundangkan Lembaran Desa</th>
                  <th>No dan Tanggal Diundangkan Berita Desa</th>
                  <th>Keterangan</th>
                  <th>File Document</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($kon,"SELECT * FROM perkades");
		while($data = mysqli_fetch_array($sql)){
		?>
			<tr>
        <td><?php echo $no++?></td>
        
                <td><?php echo $data['jenisperkades'] ?></td>
                <td><?php echo $data['tglditetapkan'] ?></td>
                <td><?php echo $data['tentang'] ?></td>
                <td><?php echo $data['uraian'] ?></td>
                <td><?php echo $data['tanggalkesepakatan'] ?></td>
                <td><?php echo $data['tgllapor'] ?></td>
                <td><?php echo $data['tgllembardesa'] ?></td>
                <td><?php echo $data['tglberitadesa'] ?></td>
                <td><?php echo $data['keterangan'] ?></td>
                <td><a href="../TAMPIL PDF/tampilpdfkades.php?id=<?=$data['id']?>"><?php echo $data['file_document']?></a>
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