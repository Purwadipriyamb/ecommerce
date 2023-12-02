<?php
include"koneksi.php";
$q = mysql_query("select * from tb_produk;",$c) or die(mysql_error());
echo"
<html>
<head><title>Merek Sepatu</title>
</head>
<body background='gambar/b.gif'>
 
<center><table style='width:805px;' cellpadding='0' cellspacing='0'>
<tr>
<td colspan='2' style='background-color:#4169E1;'>
<p><img src='gambar/html1.png' height='68' width='804'></p>
<p><h2><i><marquee behavior=scroll direction=left loop=15>Mudah Beli Sepatu Keren ...</marquee></i></h2></p>
</h1>
</td>
</tr>

<tr>
<td style='background-color:#1E90FF;width:90px;vertical-align:top;'>
<center><b>Menu</b><br>
<a href='inde.php'><img src='gambar/web.png' height='18px' width='18px'><input type='button' value='Home'></input></a><br>
<a href='Merek_sepatu.php'><input type='button' value='KATALOG'></input></a><br>
</center>
<pre>
<center><b>Sekarang Tgl:<u><p id='demo'></p></u></b></center>
<script>
var d = new Date();
document.getElementById('demo').innerHTML = d.toDateString();
</script>
<center><b>Admin :
<img src='gambar/adminL.png' height='17px' width'17px'>Purwadi</b></center>
<marquee behavior='alternate' direction='up' scrollamount='5' scrolldelay='10'>
Anggota :
 Nuryanto
 Awliya
 Rafika
 Listiana
 Afifah
</marquee>
<center><b>Pengiriman :</b>

<img src='gambar/jne.jpg' height='80px' width='115px'>

<img src='gambar/dhl.jpg' height='90px' width='115px'>





<center><b>Power By :</b></center>
<img src='gambar/html5.png' height='115px' width='90px'></center>









<center><b>Sertifikat</b>
<img src='gambar/w3schoolscertified.png' height='62px' width='100px'></center>
</pre>
</td>

<td style='background-color:#F5FFFA;height:200px;width:400px;vertical-align:top;'>
<p><marquee behavior=alternate loop=15><h3><b>Produk</b></h3></marquee></p>
";
while($r=mysql_fetch_array($q)){
echo"

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 2px;
    text-align: left;    
}
</style>
<table style='width:294px'>
	<tr>
    <th rowspan='4'> <img src='gambar/".$r['gambar']."' height='90px' width='115px'></th><td>    ".$r['nama_produk']."</td></tr>
    <tr>
	<td>              ".$r['nama_kategori']."</td>
	</tr>
    <tr>
    <td>              ".$r['ukuran']."</td>
	</tr>
    <tr>
    <td>              IDR ".$r['harga']." ,00-,    <a href='Transaksi.php?id=".$r['id_produk']."'><input type='button' value='Beli'></a></td>
	</tr>
</table>
";
}
echo"

</td>
</tr>


<tr>
<td colspan='2' style='background-color:#4169E1;text-align:center;'>
<a href='Gmail.com'><input type='button' value='@E-mail'></input></a><font size='4'> Kami Dan Add </font><a href='facebook.com'> <img src='gambar/fb.png' height='21' width='21'></a><font size='4'> Kami</font>
<marquee behavior=alternate loop=18><h4>Copyright © BeliAjah.co.id 2015</h4></marquee>
</td>
</tr>
</table></center>
 
</body>

</html>
";
?>