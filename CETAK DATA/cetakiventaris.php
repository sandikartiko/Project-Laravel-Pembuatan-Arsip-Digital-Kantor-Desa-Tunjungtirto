
<?php 
	include "../koneksi.php";
	?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA INVENTARIS</title>
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
		<h2>DATA LAPORAN SURAT INVENTARIS</h2>
	</center>
		<table border="1" style="width: 90%">
		<tr>
                  <th>No</th> 
                  <th>Nama Barang</th>
                  <th>Tanggal Pembelian</th>
                  <th>Kondisi Barang</th>
                  <th>Sumber Dana</th>
                  <th>Keterangan</th>
                  <th>File Document</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($kon,"SELECT * FROM inventarisbarang");
		while($data = mysqli_fetch_array($sql)){
		?>
			<tr>
			<tr>
        <td><?php echo $no++?></td>
                <td><?php echo $data['Nama_Barang'] ?></td>
                <td><?php echo $data['Tanggal_Pembelian'] ?></td>
                <td><?php echo $data['Kondisi_Barang'] ?></td>
                <td><?php echo $data['Sumber_Dana'] ?></td>
                <td><?php echo $data['Keterangan'] ?></td>
                <td><a href="../TAMPIL PDF/tampilpdfinventaris.php?id=<?=$data['id']?>"><?php echo $data['File_Document']?></a>
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