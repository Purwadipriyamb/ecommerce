<?php
include"koneksi.php";
$idb = $_GET['id'];
$q = mysql_query("select * from tb_produk where id_produk like'$idb';",$c) or die(mysql_error());
echo"
<html>
<head><title>Transaksi</title>
</head>
<body background='gambar/smkbisa.gif'>
 
<center><table style='width:805px;' cellpadding='0' cellspacing='0'>
<tr>
<td colspan='2' style='background-color:#4169E1;'>
<p><pre><img src='gambar/html1.png' height='68' width='740'><img src='gambar/caculator.png' height='65' width='70'></pre></p>
<p><h2><i><marquee behavior=scroll direction=left loop=10>Mudah Beli Sepatu Keren ...</marquee></i></h2></p>
</h1>
</td>
</tr>

<tr>
<td style='background-color:#1E90FF;width:80px;vertical-align:top;'>
<center><b>Menu</b><br>
<a href='inde.php'><img src='gambar/web.png' height='18px' width='18px'><input type='button' value='Home'></input></a><br>
<a href='Merek_sepatu.php'><input type='button' value='KATALOG'></input></a><br>
</center>
<pre><center><b>Sekarang Tgl:<u><p id='demo'></p></u></b></center>
<script>
var d = new Date();
document.getElementById('demo').innerHTML = d.toDateString();
</script>
<center><b>Admin :
<img src='gambar/adminL.png' height='17px' width'17px'>Purwadi</b></center>
<center><img src='gambar/barcode.png'  height='65' width='85'>
<img src='gambar/QR.png' height='70' width='70'></center>
<center><b>Sertifikat</b>
<img src='gambar/w3schoolscertified.png' height='62px' width='100px'></center>
</pre>
</td>

<td style='background-color:#F5FFFA;height:160px;width:400px;vertical-align:top;'>
<form method='POST' action='tambahtrans.php'>
<center><font size='4'><u><b>Transaksi</b></u></font>
<table>
";
	while($r= mysql_fetch_array($q)){
	
echo"

<tr><td>Nama </td><td>: <input type='text' name='nama'></td></tr><br>
<tr><td>Jenis Kelamin </td><td>: <input type='radio' name='sex' value='L'>Pria<input type='radio' name='sex' value='P'>Wanita</td></tr><br>
<tr><td>E-mail </td><td>: <input type='email' name='email'/></td></tr><br>
<tr><td>No.Kartu Kredit </td><td>: <input type='text' min='1' max='20' name='kredit' /></td></tr><br>
<tr><td>Sepatu </td><td>: 
	<input type='text' value='".$r['nama_produk']."' name='produk'/>
</td></tr><br>
<tr><td>Harga (IDR) </td><td>: <input type='text' value='".$r['harga']."' name='harga'/></td></tr><br>
<tr>
	<td>Ukuran </td><td>: 
		<select name='ukuran'>
			<option>Small</option>
			<option>Medium</option>
			<option>Large</option>
			<option>Xtra Large</option>
		</select>
	</td>
</tr><br>
<tr><td>Pasang </td><td>: <input type='number' name='jumlah' min='1' max='5'/></td></tr><br/>
<br/>
<tr><td></td><td><button onclick='myFunction()'>BAYAR</button></td></tr><br>
<script>
function myFunction() {
    alert('Berhasil.!');
}
</script>
</table>

";
}
echo"
</form>
</center>

</td>
</tr>

<tr>
<td colspan='2' style='background-color:#4169E1;text-align:center;'>
<a href='Gmail.com'><input type='button' value='@E-mail'></input></a><font size='4'> Kami Dan Add </font><a href='facebook.com'> <img src='gambar/fb.png' height='21' width='21'></a><font size='4'> Kami</font>
<marquee behavior=alternate loop=15><h4>Copyright © BeliAjah.co.id 2015</h4></marquee>
</td>
</tr>
</table></center>

</body>
</html>
";
?>