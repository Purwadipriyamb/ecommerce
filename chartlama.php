<?php
include"koneksi.php";
$q=mysql_query("select * from tb_transaksi where status='lama';",$c) or die (mysql_error());
echo"
<html>
<head><title>Data Penjualan</title></head>
<body background='gambar/desktopadmin.png'>
	<center><table style='width:620px;' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' style='background-color:#ADFF2F;'>
	<p><img src='gambar/hadmin.png' height='65px' width='860px'></p>
	</td>
	</tr>
	<tr>
	<td style='background-color:#ADFF2F;width:10px;vertical-align:top;'>
	<center><b>Menu</b></center><br>
	<a href='admin.php'><input type='button' value='Admin'></a><a href='chart.php'><input type='button' value='Lihat Pesanan'></a><a href='chartlama.php'><input type='button' value='Data Penjualan'></a>
	<hr><center><b>Sekarang Tgl:<u><p id='demo'></p></u></b></center>
	<script>
	var d = new Date();
	document.getElementById('demo').innerHTML = d.toDateString();
	</script>
	
	<td style='background-color:#ADFF2F;height:210px;width:500px;vertical-align:top;'>
	<table border='1'>
	<tr>
	<td>ID</td>
	<td>Tgl Transaksi</td>
	<td>Jumlah</td>
	<td>Pembeli</td>
	<td>JK</td>
	<td>Email</td>
	<td>Kredit</td>
	<td>Ukuran</td>
	<td>Total</td>
	<td>Status</td>
	</tr>
";
while ($r=mysql_fetch_array($q)){
echo"
<tr>
	<td>".$r['id_transaksi']."</td>
	<td>".$r['tgl_transaksi']."</td>
	<td>".$r['jumlah']."</td>
	<td>".$r['pembeli']."</td>
	<td>".$r['jk']."</td>
	<td>".$r['email']."</td>
	<td>".$r['kredit']."</td>
	<td>".$r['ukuran']."</td>
	<td>".$r['total']."</td>
	<td>Fix</td>
	</tr>
";
}
echo"
</table>
</td>
		</tr>
		
		<tr>
		<td colspan='2' style='background-color:#ADFF2F;text-align:center;'>
		<font size='3'><b>Purwadi Priyambodo</b></font><a href='inde.php'><input type='button' value='Log Out'></a>
		<p><img src='gambar/fadm.png' height='65px' width='860px'></p>
		</td>
		</tr>
		</table>

</body>
</html>
";
?>