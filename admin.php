<?php
include"koneksi.php";
$q=mysql_query("select * from tb_produk;",$c) or die (mysql_error);
echo"
	<html>
	<head><title>Admin</title></head>
	<body background='gambar/desktopadmin.png'>
	<center><table style='width:805px;' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' style='background-color:#ADFF2F;'>
	<p><img src='gambar/hadmin.png' height='100px' width='1265px'></p>
	</td>
	</tr>
	<tr>
	<td style='background-color:#ADFF2F;width:98px;vertical-align:top;'>
	<center><b>Menu</b></center><br>
	<a href='admin.php'><input type='button' value='Admin'></a><a href='chart.php'><input type='button' value='Lihat Pesanan'></a><a href='chartlama.php'><input type='button' value='Data Penjualan'></a>
	<hr><center><b>Sekarang Tgl:<u><p id='demo'></p></u></b></center>
	<script>
	var d = new Date();
	document.getElementById('demo').innerHTML = d.toDateString();
	</script>
	<td style='background-color:#ADFF2F;height:200px;width:400px;vertical-align:top;'>
		<table border='1'>
		<tr>
			<td><center>ID</center></td>
			<td><center>Produk</center></td>
			<td><center>Kategori</center></td>
			<td><center>Harga</center></td>
			<td><center>Ukuran</center></td>
			<td><center>Gambar</center></td>
			<td><center>Pilih</center></td>
		</tr>
		<form method='POST' action='tambah.php' ENCTYPE='MULTIPART/FORM-DATA'>
		<input type='hidden' name='MAX FILE SIZE' value='3000000'/>
	 <tr>
		<td><input type='text' name='id'/></td>
		<td><input type='text' name='nama'/></td>
		<td><input type='text' name='kategori'/></td>
		<td><input type='text' name='harga'/></td>
		<td><input type='text' name='ukuran'/></td>
		<td><input type='file' name='gambar'/></td>
		<td><center>
		<input type='submit' value='Tambah' /></center></td>
	 </tr>
	 </form>
";
while ($r=mysql_fetch_array($q)){
	echo"
	<form method='POST' action='ubah.php'>
	 <tr>
		<td><input type='text' value='".$r['id_produk']."' name='id'/></td>
		<td><input type='text' value='".$r['nama_produk']."' name='nama'/></td>
		<td><input type='text' value='".$r['nama_kategori']."' name='kategori'/></td>
		<td><input type='text' value='".$r['harga']."' name='harga'/></td>
		<td><input type='text' value='".$r['ukuran']."' name='ukuran'/></td>
		<td><img src='gambar/".$r['gambar']."' width='68' height='52'></td>
		<td>
		<input type='submit' value='Ubah' /> 
			<a href='hapus.php?id=".$r['id_produk']."'><input type='button' value='Hapus'></a></td>
	 </tr>
	 </form>
	";
}
echo"
	
		</table>
		</td>
		</tr>
		
		<tr>
		<td colspan='2' style='background-color:#ADFF2F;text-align:center;'>
		<font size='3'><b>Purwadi Priyambodo</b></font><a href='inde.php'><input type='button' value='Log Out'></a>
		<p><img src='gambar/fadm.png' height='98px' width='1265px'></p>
		</td>
		</tr>
		</table>
		
	</body>
	</html>
";
?>